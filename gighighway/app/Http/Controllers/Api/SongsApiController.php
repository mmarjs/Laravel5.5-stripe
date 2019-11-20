<?php
/**
 * Created by Justin McCombs.
 * Date: 3/1/18
 * Time: 6:28 PM
 */

namespace GigHighway\Http\Controllers\Api;
use GigHighway\Vendor;

class SongsApiController
{
    public function store()
    {
        $vendor = Vendor::find(request('vendor_id'));

        $song = $vendor->songs()->create([
            'title' => request('title'),
            'artist' => request('artist'),
            'caption' => request('caption') ?: '',
        ]);

        $vendor = Vendor::where('id', '=', request('vendor_id'))->with((new VendorsApiController())->withArray)->first();

        return response()->json(['vendor' => $vendor]);
    }
}