<?php

namespace GigHighway\Http\Controllers;
use DB;
use Illuminate\Http\Request;
use GigHighway\Vendor;

class VisitorController extends Controller
{

    public function index(){
  $user = auth()->user() ?: 0;
   
  if( $user->quoteRequests()){
	  
	 $openRequests = $user->quoteRequests()->get();
  }else{
	   $openRequests =DB::table('quote_requests')
	   ->join('vendors','quote_requests.vendor_id', '=', 'vendors.id')->get();
  }
          //$closedRequests = $user->quoteRequests()->closed()->get();
     $breadcrumbs = "breadcrumb stuff";
        return view('profile.memberprofile', compact('user', 'breadcrumbs','openRequests'));
    }
}
