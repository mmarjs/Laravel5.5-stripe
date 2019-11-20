<?php
/**
 * Created by Justin McCombs.
 * Date: 2/26/18
 * Time: 3:21 PM
 */

namespace GigHighway\Http\Controllers\Api;

use Carbon\Carbon;
use GigHighway\Repositories\VendorRepository;
use GigHighway\Services\BillingService;
use GigHighway\Vendor;
use Illuminate\Http\Request;

class VendorsApiController extends BaseApiController
{

    public $withArray = [
        'location',
        'primaryCategory',
        'categories',
        'reviews.location',
        'songs',
        'audios',
        'videos',
        'images',
        'profileImage',
        'subscription'
    ];

    public function store(Request $request, VendorRepository $repository)
    {
        $user = auth()->user();

        $savedVendor = $repository->createFromRequest($user, $request);

        $vendor = Vendor::where('id', '=', $savedVendor->id)->with($this->withArray)->first();

        return response()->json([
            'vendor' => $vendor,
            'request' => $request
        ]);
    }

    public function show(BillingService $billingService, $id)
    {
        $vendor = Vendor::where('vendors.id', '=', $id)
            ->with($this->withArray)
            ->first();

        $subscriptionInformation = null;

        if($vendor->subscription) {
            $sub = $billingService->getPlan($vendor->subscription->stripe_id);
            $vendor->subscription->status = $billingService->getSubscriptionStatus($vendor->subscription->stripe_id);

            if ($vendor->subscription->status != 'cancelled'){
                $vendor->subscription->ends_at = Carbon::createFromTimestamp($sub->current_period_end);
            }

            if($sub) {

                $subscriptionInformation = [

                ];
            }
        }

        return response()->json([
            'subscriptionInformation' => $subscriptionInformation,
            'vendor' => $vendor,
        ]);
    }

    public function update(Request $request, VendorRepository $repository, BillingService $billingService, $id)
    {
        $vendor = Vendor::find($id);

        $savedVendor = $repository->updateFromRequest($vendor, $request);

        $vendor = Vendor::where('id', '=', $savedVendor->id)->with($this->withArray)->first();

        $subscriptionInformation = null;

        if($vendor->subscription) {
            $sub = $billingService->getPlan($vendor->subscription->stripe_id);
            $vendor->subscription->status = $billingService->getSubscriptionStatus($vendor->subscription->stripe_id);

            if ($vendor->subscription->status != 'cancelled'){
                $vendor->subscription->ends_at = Carbon::createFromTimestamp($sub->current_period_end);
            }

            if($sub) {
                $subscriptionInformation = [

                ];
            }
        }

        return response()->json([
            'vendor' => $vendor,
            'request' => $request,
            'subscriptionInformation' => $subscriptionInformation
        ]);
    }

    public function favorite($vendorId)
    {
        $user = auth()->user();

        if ( ! $user ) {
            return response()->json(['success' => false, 'message' => 'You must be logged in to add a favorite.']);
        }elseif($user->type=='Vendor'){
			return response()->json(['success' => false, 'message' => 'Only vistor/user can add Favorite vendor.']);
		}else{
			if(!$user->favorites()->where('vendors.id', '=', $vendorId)->count()) {
			$user->favorites()->attach($vendorId);
			}
		}

       /*  if(!$user->favorites()->where('vendors.id', '=', $vendorId)->count()) {
            $user->favorites()->attach($vendorId);
        } */

        return response()->json(['success' => true, 'favorites' => $user->favorites()->get()]);
    }
public function unfavorite($vendorId)
    {
        $user = auth()->user();

        if ( ! $user ) {
            return response()->json(['success' => false, 'message' => 'You must be logged in to add a favorite.']);
        }else{
			if($user->favorites()->where('vendors.id', '=', $vendorId)->count()) {
			$user->favorites()->detach($vendorId);
			}
		}

       /*  if(!$user->favorites()->where('vendors.id', '=', $vendorId)->count()) {
            $user->favorites()->attach($vendorId);
        } */

        return response()->json(['success' => true, 'favorites' => $user->favorites()->get()]);
    }
	
	
    public function changePlan($vendorId, Request $request, BillingService $billingService)
    {
        $user = auth()->user();

        if ( ! $user ) {
            return response()->json(['success' => false, 'message' => 'You must be logged in to change your plan.']);
        }

        $vendor = Vendor::find($vendorId);

        $billingService->changePlan($vendor, $request->get('new_plan'));

        // re-pull vendor to get updates
        $vendor = Vendor::find($vendorId);

        return response()->json([
            'vendor' => $vendor,
            'request' => $request
        ]);
    }

    public function updatePaymentMethod($vendorId, Request $request, BillingService $billingService)
    {
        $user = auth()->user();

        if ( ! $user ) {
            return response()->json(['success' => false, 'message' => 'You must be logged in to change your payment method.']);
        }

//echo '<pre>'; print_r($request->get('new_token')); echo '</pre>'; exit;

        $vendor = Vendor::find($vendorId);

        $billingService->updatePaymentMethod($vendor, $request->get('new_token'));

        // re-pull vendor to get updates
        $vendor = Vendor::find($vendorId);

        return response()->json([
            'vendor' => $vendor,
            'user' => $vendor->users()->first(),
            'request' => $request
        ]);
    }

    public function cancelSubscription($vendorId, BillingService $billingService)
    {
        $user = auth()->user();

        if ( ! $user ) {
            return response()->json(['success' => false, 'message' => 'You must be logged in to change your plan.']);
        }

        $vendor = Vendor::find($vendorId);

        $billingService->cancelSubscription($vendor);

        // re-pull vendor to get updates
        $vendor = Vendor::find($vendorId);
        $vendor->subscription->status = $billingService->getSubscriptionStatus($vendor->subscription->stripe_id);

        // get subscription end date and format for display

        if($vendor->subscription->onGracePeriod()){
            //return Carbon::now()->lt(Carbon::instance($endsAt));
            $endDate = $vendor->subscription->ends_at->format('l, F jS, Y');
        }else{
            $endDate = 'Today';
        }

//echo '<pre>'; print_r($vendor->subscription->ends_at); echo '</pre>'; exit;

        return response()->json([
            'vendor' => $vendor,
            'end_date' => $endDate
        ]);

    }

    public function resumeSubscription($vendorId, BillingService $billingService)
    {
        $user = auth()->user();

        if ( ! $user ) {
            return response()->json(['success' => false, 'message' => 'You must be logged in to change your plan.']);
        }

        $vendor = Vendor::find($vendorId);

        $billingService->resumeSubscription($vendor);

        // re-pull vendor to get updates
        $vendor = Vendor::find($vendorId);
        $vendor->subscription->status = $billingService->getSubscriptionStatus($vendor->subscription->stripe_id);


        return response()->json([
            'vendor' => $vendor
        ]);
    }

}