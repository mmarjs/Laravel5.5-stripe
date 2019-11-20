<?php
/**
 * Created by Justin McCombs.
 * Date: 3/1/18
 * Time: 4:19 PM
 */

namespace GigHighway\Http\Controllers\Api;


use GigHighway\Image;
use GigHighway\Vendor;

class ImagesApiController extends BaseApiController
{

    public function store()
    {
        $vendor = Vendor::find(request()->get('vendor_id'));
        $image = $vendor->images()->create();
        $image->file = request()->file('file');
        $image->save();
        if(request()->get('type') == 'profile') {
            $vendor->update(['image_main_id' => $image->id]);
        }

        $vendor = Vendor::where('id', '=', request()->get('vendor_id'))->with((new VendorsApiController)->withArray)->first();

        return response()->json(['vendor' => $vendor]);
    }

    public function destroy($id)
    {
        $image = Image::find($id);

        // Remove from any profiles if set
        Vendor::where('image_main_id', '=', $image->id)->update(['image_main_id' => null]);
        $vendor = Vendor::where('id', '=', $image->vendor_id)->with((new VendorsApiController)->withArray)->first();
        $image->delete();

        return response()->json(['vendor' => $vendor]);
    }

}