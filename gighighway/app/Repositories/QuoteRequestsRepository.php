<?php
/**
 * Created by Justin McCombs.
 * Date: 4/4/18
 * Time: 4:53 PM
 */

namespace GigHighway\Repositories;


use GigHighway\Category;
use GigHighway\Mail\SendQuoteRequestToVendor;
use GigHighway\QuoteRequest;
use GigHighway\User;
use Illuminate\Http\Request;

class QuoteRequestsRepository
{

    public function createFromRequest(Request $request, User $user)
    {

        $quoteArray = [
            'user_id' => $user->id,
            'vendor_id' => $request->input('vendor_id'),
            'duration' => $request->input('duration'),
            'duration_measurement' => $request->input('duration_measurement'),
            'estimated_guest_count' => $request->input('estimated_guest_count'),
            'event_additional_details' => $request->input('event_additional_details'),
            'event_date' => $request->input('event_date'),
            'event_duration' => $request->input('event_duration'),
            'event_duration_type' => $request->input('event_duration_type'),
            'event_estimated_end_time' => $request->input('event_estimated_end_time'),
            'event_estimated_start_time' => $request->input('event_estimated_start_time'),
            'event_type' => $request->input('event_type'),
            'event_location' => $request->input('event_location'),
            'first_name' => $request->input('first_name'),
            'is_event_date_flexible' => $request->input('is_event_date_flexible'),
            'last_name' => $request->input('last_name'),
            'phone_number' => $request->input('phone_number'),
            'request_similar_quote' => $request->input('request_similar_quote'),
        ];

        if($quoteArray['is_event_date_flexible'] == 'false') $quoteArray['is_event_date_flexible'] = 0;
        if($quoteArray['is_event_date_flexible'] == 'true') $quoteArray['is_event_date_flexible'] = 1;

        $quoteRequest = QuoteRequest::create($quoteArray);

        if($quoteRequest->vendor->email) {
            $email = $quoteRequest->vendor->email;
        }else {
            $email = $quoteRequest->vendor
                ->users->first()->email;
        }
        \Mail::to($email)->send(new SendQuoteRequestToVendor($quoteRequest));
    }

}