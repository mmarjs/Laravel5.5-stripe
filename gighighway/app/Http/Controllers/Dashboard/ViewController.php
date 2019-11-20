<?php
/**
 * Created by Justin McCombs.
 * Date: 5/25/18
 * Time: 3:54 PM
 */

namespace GigHighway\Http\Controllers\Dashboard;


use GigHighway\Services\CurrentVendorProfileService;

class ViewController
{
    /**
     * @var CurrentVendorProfileService
     */
    private $currentVendorProfileService;

    /**
     * ViewController constructor.
     * @param CurrentVendorProfileService $currentVendorProfileService
     */
    public function __construct(CurrentVendorProfileService $currentVendorProfileService)
    {
        $this->currentVendorProfileService = $currentVendorProfileService;
    }

    public function index()
    {
        $vendor = $this->currentVendorProfileService->get();

        $vendor->load('pageViews');

        return view('dashboard.views.index', compact('vendor'));
    }

}