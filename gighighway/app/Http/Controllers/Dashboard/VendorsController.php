<?php
/**
 * Created by Justin McCombs.
 * Date: 2/22/18
 * Time: 5:25 PM
 */

namespace GigHighway\Http\Controllers\Dashboard;


use GigHighway\Http\Controllers\Controller;
use GigHighway\Services\BillingService;

class VendorsController extends Controller
{
    /**
     * @var BillingService
     */
    private $billingService;

    /**
     * VendorsController constructor.
     * @param BillingService $billingService
     */
    public function __construct(BillingService $billingService)
    {
        $this->billingService = $billingService;
    }

    public function create()
    {	
        $type = auth()->user()->type;
	if($type=='Vendor'){

		$user = auth()->user();

        return view('dashboard.vendors.create', compact('user'));
	}else{
		 return redirect('/member');
	}
        
    }
	

    public function edit($vendorId)
    {
        $user = auth()->user();

        $plans = $this->billingService->getPlans();

        return view('dashboard.vendors.edit', compact('user', 'vendorId', 'plans'));
    }

    public function billing($vendorId)
    {
        $user = auth()->user();

        $plans = $this->billingService->getPlans();

        return view('dashboard.vendors.billing', compact('user', 'vendorId', 'plans'));
    }

}