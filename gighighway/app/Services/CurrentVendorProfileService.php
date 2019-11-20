<?php
/**
 * Created by Justin McCombs.
 * Date: 3/2/18
 * Time: 11:06 AM
 */

namespace GigHighway\Services;


use GigHighway\Vendor;

class CurrentVendorProfileService
{

    /**
     * Updates the current vendor ID and returns the new vendor
     * @param $vendorId
     */
    public function set($vendorId)
    {
        if(!auth()->user()) return;
        $vendor = auth()->user()->vendors()->where('vendors.id', '=', $vendorId)->first();
        auth()->user()->update(['current_vendor_id' => $vendorId]);
        return $vendor;
    }

    /**
     * Returns the currently active vendor for the logged in user
     *
     * @return null|Vendor
     */
    public function get()
    {
        $user = auth()->user();
        if(!$user) return null;

        if($user->current_vendor_id) {
            return $user->vendors()->where('vendors.id', '=', $user->current_vendor_id)->first();
        }

        $vendor = $user->vendors()->first();
        if($vendor) {
            $user->update(['current_vendor_id' => $vendor->id]);
            return $vendor;
        }else {
            return null;
        }

    }

}