<?php
/**
 * Created by Justin McCombs.
 * Date: 3/1/18
 * Time: 5:40 PM
 */

namespace GigHighway\Http\Controllers\Api;


use GigHighway\Vendor;

class VideosApiController
{

    /**
     * Store a video
     */
    public function store() {
        $vendor = Vendor::find(request('vendor_id'));
        $video = $vendor->videos()->create([
            'title' => (request('title')) ?: '',
            'caption' => (request('caption')) ?: '',
            'is_admin_reviewed' => false,
            'url' => request()->get('url')
        ]);

        $vendor = Vendor::where('id', '=', $vendor->id)->with((new VendorsApiController())->withArray)->first();

        return response()->json(['vendor' => $vendor]);
    }

}