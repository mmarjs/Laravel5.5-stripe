<?php
/**
 * Created by Justin McCombs.
 * Date: 2/26/18
 * Time: 3:28 PM
 */

namespace GigHighway\Repositories;


use GigHighway\Services\BillingService;
use GigHighway\User;
use GigHighway\Vendor;
use Illuminate\Http\Request;

class VendorRepository
{
    /**
     * @var BillingService
     */
    private $billingService;

    /**
     * VendorRepository constructor.
     * @param BillingService $billingService
     */
    public function __construct(BillingService $billingService)
    {
        $this->billingService = $billingService;
    }

    public function createFromRequest(User $user, Request $request)
    {
        $vendor = new Vendor;

        // Minimum requred to create a vendor
        $vendor->name = $request->get('name');
        $vendor->description = $request->get('description');
        $vendor->description_brief = $request->get('description_brief');
        $vendor->website = $request->get('website');
        $vendor->phone = $request->get('phone');
		//$vendor->type = $request->get('type');
        $vendor->featured = false;
        $vendor->has_liability_insurance = 0;

        foreach(['facebook', 'googleplus', 'instagram', 'pinterest', 'twitter', 'vimeo', 'youtube'] as $sm) {
            $key = 'sml_'.$sm;
            $vendor->$key = $request->get($key);
        }

        $vendor->save();

        $user->vendors()->attach($vendor->id);

        $vendor = $this->updateFromRequest($vendor, $request);

        return $vendor;
    }

    public function updateFromRequest(Vendor $vendor, Request $request)
    {
        // Update Data
        $locationData = $request['location'];
        $vendor->name = $request->get('name');
        $vendor->description = $request->get('description');
        $vendor->description_brief = $request->get('description_brief');
        $vendor->location_zip_code = $locationData['zip_code'];
        $vendor->website = $request->get('website');
        $vendor->phone = $request->get('phone');
        $vendor->show_phone_number = $request->get('show_phone_number');

        foreach(['facebook', 'googleplus', 'instagram', 'pinterest', 'twitter', 'vimeo', 'youtube'] as $sm) {
            $key = 'sml_'.$sm;
            $vendor->$key = $request->get($key);
        }

        // Service Details
        $vendor->what_to_expect = $request->get('what_to_expect');
        $vendor->technical_information = $request->get('technical_information');
        $vendor->setup_requirements = $request->get('setup_requirements');
        $vendor->has_liability_insurance = $request->get('has_liability_insurance') ?: 0;
        $vendor->estimated_event_duration = $request->get('estimated_event_duration');
        $vendor->estimated_event_duration_time_measurement = $request->get('estimated_event_duration_time_measurement');
        $vendor->travel_distance_in_miles = $request->get('travel_distance_in_miles');
        $vendor->pay_range_min = $request->get('pay_range_min');
        $vendor->pay_range_max = $request->get('pay_range_max');
        $vendor->languages = $request->get('languages');

        $this->updateCategories($vendor, $request);

        $this->updateReviews($vendor, $request);

        $this->updateSubscription($vendor, $request);

        $vendor->save();

        return $vendor;
    }

    protected function updateSubscription(Vendor $vendor, Request $request)
    {
        if($request->has('newSubscription') && !empty($request->has('newSubscription'))) {
            $subscription = $request->get('newSubscription');
            if(empty($subscription['token'])) return;
            $planId = $subscription['plan_id'];
            $token = $subscription['token']['id'];
            $this->billingService->subscribe($vendor, $planId, $token);
        }
    }

    protected function updateReviews(Vendor $vendor, Request $request)
    {
        $reviews = $request->get('reviews');
        if(!$reviews) return;
        foreach($reviews as $reviewData) {
            if(!empty($reviewData['location']['zip_code'])) {
                $reviewData['event_zip_code'] = $reviewData['location']['zip_code'];
            }
            unset($reviewData['location']);
            if(!empty($reviewData['id'])) {
                $review = $vendor->reviews()->where('reviews.id', '=', $reviewData['id'])->update($reviewData);
                unset($reviewData['id']);
            }else {
                $review = $vendor->reviews()->create($reviewData);
            }
        }
    }

    protected function updateCategories(Vendor $vendor, Request $request)
    {
        $primaryCategory = $request->get('primary_category');
        $vendor->update(['primary_category_id' => $primaryCategory['id']]);

        $categories = $request->get('categories');
        \DB::table('vendor_categories')->where('vendor_id', '=', $vendor->id)->delete();
        foreach($categories as $cat) {
            $vendor->categories()->attach($cat['id']);
        }
    }

}