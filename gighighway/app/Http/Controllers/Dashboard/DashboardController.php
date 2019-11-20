<?php
/**
 * Created by Justin McCombs.
 * Date: 3/2/18
 * Time: 10:41 AM
 */

namespace GigHighway\Http\Controllers\Dashboard;


use GigHighway\Http\Controllers\Controller;
use GigHighway\Services\CurrentVendorProfileService;
use GigHighway\Vendor;

class DashboardController extends Controller
{

    public function index()
    {
        return view('dashboard.index');
    }

    public function switchProfiles(CurrentVendorProfileService $profileService, $id)
    {
        $vendor = auth()->user()->vendors()->where('vendors.id', '=', $id)->first();

        if(!$vendor) {
            return redirect()->back()->with('message', ['danger', 'You do not have access to that vendor profile.']);
        }

        $profileService->set($id);

        return redirect()->route('dashboard');

    }

}