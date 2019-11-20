<?php
/**
 * Created by Justin McCombs.
 * Date: 4/4/18
 * Time: 4:08 PM
 */

namespace GigHighway\Http\Controllers\Api;


use GigHighway\Http\Controllers\Controller;
use GigHighway\Repositories\ReviewsRepository;
use GigHighway\Vendor;

class VendorReviewsApiController extends Controller
{
    /**
     * @var ReviewsRepository
     */
    private $reviewsRepository;

    /**
     * VendorReviewsApiController constructor.
     * @param ReviewsRepository $reviewsRepository
     */
    public function __construct(ReviewsRepository $reviewsRepository)
    {
        $this->reviewsRepository = $reviewsRepository;
    }

    public function store($vendorId)
    {
        $this->validate(request(), []);

        $vendor = Vendor::findOrFail($vendorId);

        $review = $this->reviewsRepository->createFromRequest(request(), $vendor);

        return response()->json(['success' => true, 'review' => $review]);
    }

}