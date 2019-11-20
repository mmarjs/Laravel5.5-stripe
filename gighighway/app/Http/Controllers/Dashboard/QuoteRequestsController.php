<?php
/**
 * Created by Justin McCombs.
 * Date: 4/4/18
 * Time: 5:23 PM
 */

namespace GigHighway\Http\Controllers\Dashboard;


use GigHighway\Http\Controllers\Controller;
use GigHighway\Services\CurrentVendorProfileService;

class QuoteRequestsController extends Controller
{
    /**
     * @var CurrentVendorProfileService
     */
    private $profileService;

    /**
     * QuoteRequestsController constructor.
     * @param CurrentVendorProfileService $profileService
     */
    public function __construct(CurrentVendorProfileService $profileService)
    {
        $this->profileService = $profileService;
    }

    public function index()
    {
        $currentVendor = $this->profileService->get();

        $openRequests = $currentVendor->quoteRequests()->open()->get();
        $closedRequests = $currentVendor->quoteRequests()->closed()->get();

        return view('dashboard.quote-requests.index', compact('currentVendor', 'openRequests', 'closedRequests'));
    }

    public function show($id)
    {
        $user = auth()->user();

        $currentVendor = $this->profileService->get();

        $quoteRequest = $currentVendor->quoteRequests()->where('quote_requests.id', '=', $id)->first();

        if ( !$quoteRequest ) {
            return redirect()->back()->with('error', 'Cannot find a quote request for this id.');
        }

        return view('dashboard.quote-requests.show',  compact('user', 'quoteRequest'));
    }

}