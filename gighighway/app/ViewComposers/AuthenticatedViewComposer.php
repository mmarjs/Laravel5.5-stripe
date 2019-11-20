<?php
/**
 * Created by Justin McCombs.
 * Date: 3/2/18
 * Time: 11:02 AM
 */

namespace GigHighway\ViewComposers;


use GigHighway\Services\CurrentVendorProfileService;
use Illuminate\View\View;

class AuthenticatedViewComposer
{
    /**
     * @var CurrentVendorProfileService
     */
    private $currentVendorProfileService;

    /**
     * AuthenticatedViewComposer constructor.
     * @param CurrentVendorProfileService $currentVendorProfileService
     */
    public function __construct(CurrentVendorProfileService $currentVendorProfileService)
    {
        $this->currentVendorProfileService = $currentVendorProfileService;
    }

    public function compose(View $view)
    {
        $vendor = $this->currentVendorProfileService->get();
        $view->with('user', auth()->user());
        $view->with('currentVendor', $vendor);
        $view->with('reviewCount', $vendor->reviews()->count());
    }

}