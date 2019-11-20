<?php
/**
 * Created by Justin McCombs.
 * Date: 4/4/18
 * Time: 4:11 PM
 */

namespace GigHighway\Repositories;


use GigHighway\Vendor;
use Illuminate\Http\Request;

class ReviewsRepository
{

    public function createFromRequest(Request $request, Vendor $vendor)
    {
        $reviewArray = [
            'event_date' => $request->input('event_date'),
            'event_zip_code' => $request->input('event_zip_code'),
            'reviewer_display_name' => $request->input('reviewer_display_name'),
            'text' => $request->input('text'),
            'title' => $request->input('title'),
            'rating' => $request->input('rating'),
        ];

        if(!$reviewArray['event_zip_code'] && $request->has('location')) {
            $location = $request->input('location');
            $reviewArray['event_zip_code'] = $location['zip_code'];
        }


        $vendor->reviews()->create($reviewArray);
    }

}