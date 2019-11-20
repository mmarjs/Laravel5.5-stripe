<?php

namespace GigHighway\Http\Controllers;

use Illuminate\Http\Request;
use GigHighway\Vendor;

class VendorController extends Controller
{

    public function index($id){

    }

    public function show($slug){
        $vendor = Vendor::where('slug', '=', $slug)
            ->with('reviews')
            ->first();

        $user = auth()->user() ?: 0;
        if($user) $user->load('favorites');
        //echo 'this is vendor '.$vendors->name;
        $breadcrumbs = "breadcrumb stuff";

        $vendor->pageViews()->create([
            'ip' => request()->server->get('REMOTE_ADDR')
        ]);
//        dd($vendors->reviews);
        return view('profile.profile', compact('user', 'breadcrumbs', 'vendor'));
    }
}
