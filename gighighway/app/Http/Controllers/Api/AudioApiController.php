<?php
/**
 * Created by Justin McCombs.
 * Date: 3/1/18
 * Time: 5:55 PM
 */

namespace GigHighway\Http\Controllers\Api;
use GigHighway\Vendor;

class AudioApiController extends BaseApiController
{

    public function store()
    {
        $vendor = Vendor::find(request('vendor_id'));

        $audioFile = $vendor->audios()->create([
            'is_admin_reviewed' => 0,
            'title' => request('title'),
        ]);

        $audioFile->file = request()->file('file');

        $audioFile->save();

        $vendor = Vendor::where('id', '=', request('vendor_id'))->with((new VendorsApiController())->withArray)->first();

        return response()->json(['vendor' => $vendor]);
    }

}