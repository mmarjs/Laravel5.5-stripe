<?php
/**
 * Created by Justin McCombs.
 * Date: 4/4/18
 * Time: 4:48 PM
 */

namespace GigHighway\Http\Controllers\Api;


use GigHighway\Http\Controllers\Controller;
use GigHighway\Repositories\QuoteRequestsRepository;
use GigHighway\Services\CurrentVendorProfileService;

class QuotesApiController extends Controller
{
    /**
     * @var QuoteRequestsRepository
     */
    private $quoteRequestsRepository;
    /**
     * @var CurrentVendorProfileService
     */
    private $profileService;

    /**
     * QuotesApiController constructor.
     * @param QuoteRequestsRepository $quoteRequestsRepository
     * @param CurrentVendorProfileService $profileService
     */
    public function __construct(QuoteRequestsRepository $quoteRequestsRepository, CurrentVendorProfileService $profileService)
    {
        $this->quoteRequestsRepository = $quoteRequestsRepository;
        $this->profileService = $profileService;
    }

    public function store()
    {
        $this->quoteRequestsRepository->createFromRequest(request(), auth()->user());

        return response()->json(['request' => request()->all()]);
    }

    public function updateStatus($quoteRequestId)
    {
        $currentVendor = $this->profileService->get();
        if(!$currentVendor) {
            return response()->json(['success' => false, 'message' => 'You must have a current vendor selected']);
        }

        $qr = $currentVendor->quoteRequests()->where('quote_requests.id', '=', $quoteRequestId)->first();
        if(!$qr) {
            return response()->json(['success' => false, 'message' => 'Could not find a quote request with the id of ' . $quoteRequestId]);
        }

        $qr->update(['status' => request('status_id')]);

        return response()->json(['success' => true]);
    }

}