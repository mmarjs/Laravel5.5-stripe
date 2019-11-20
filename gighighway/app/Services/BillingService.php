<?php
/**
 * Created by Justin McCombs.
 * Date: 4/27/18
 * Time: 11:10 AM
 */

namespace GigHighway\Services;


use GigHighway\User;
use GigHighway\Vendor;
use Illuminate\Database\Eloquent\Collection;
use Stripe\Stripe;
use Stripe\Subscription;

class BillingService
{

    /**
     * @var Collection
     */
    protected $plans;

    public function __construct()
    {
        $this->plans = new Collection([
            'pro_monthly' => [
                'name' => 'Professional (Monthly)',
                'id' => env('PLAN_PRO_MONTHLY'),
                'price' => '$19.99',
                'short_desc' => 'For those who want more leads and more gigs',
                'upsell' => ''
            ],
            'pro_yearly' => [
                'name' => 'Professional (Yearly)',
                'id' => env('PLAN_PRO_YEARLY'),
                'price' => '$149',
                'short_desc' => 'For those who want more leads and more gigs',
                'upsell' => 'Save $90'
            ],
            'enterprise_monthly' => [
                'name' => 'Enterprise (Monthly)',
                'id' => env('PLAN_ENTERPRISE_MONTHLY'),
                'price' => '$29.98',
                'short_desc' => 'For those who want the most leads, most gigs, and greatest exposure.',
                'upsell' => ''
            ],
            'enterprise_yearly' => [
                'name' => 'Enterprise (Yearly)',
                'id' => env('PLAN_ENTERPRISE_YEARLY'),
                'price' => '$199',
                'short_desc' => 'For those who want the most leads, most gigs, and greatest exposure.',
                'upsell' => 'SAVE $160'
            ],
        ]);
    }

    /**
     * @return Collection
     */
    public function getPlans()
    {
        return $this->plans;
    }

    public function subscribe(Vendor $vendor, $planId, $token)
    {
        /** @var User $user */
        $user = $vendor->users()->first();
        $subscription = $user->newSubscription('vendor', $planId)->create($token);
        $vendor->update(['subscription_id' => $subscription->id]);
        return true;
    }

    public function getPlan($subscriptionId)
    {
        Stripe::setApiKey(config('services.stripe.secret'));
        return Subscription::retrieve($subscriptionId);
    }

    public function changePlan(Vendor $vendor, $newPlan)
    {
        $user = $vendor->users()->first();
        $user->subscription('vendor')->swap($newPlan);
    }

    public function updatePaymentMethod(Vendor $vendor, $newToken)
    {
        $user = $vendor->users()->first();
        $user->updateCard($newToken['id']);
    }

    public function cancelSubscription(Vendor $vendor)
    {
        $user = $vendor->users()->first();
        $user->subscription('vendor')->cancel();
    }

    public function resumeSubscription(Vendor $vendor)
    {
        $user = $vendor->users()->first();
        $user->subscription('vendor')->resume();
    }

    public function getSubscriptionStatus($subscriptionId)
    {
        Stripe::setApiKey(config('services.stripe.secret'));
        $sub = Subscription::retrieve($subscriptionId);

        $status = $sub->status;
        if ($sub->cancel_at_period_end){
            $status = 'cancelled';
        }

        return $status;
    }
}