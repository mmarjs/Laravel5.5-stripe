<?php

namespace GigHighway\Http\Controllers;

use GigHighway\Mail\ContactUs;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use GigHighway\Vendor;
use GigHighway\testimonials;

class PageController extends Controller
{
    public $user;
    public function __construct(){
        //$this->user = Auth::user();

    }
    public function index(){
        $vendors = Vendor::where('featured',true)
            ->select('vendors.*')
            ->averageRating()->reviewCount()
            ->with('reviews', 'images', 'location', 'primaryCategory')->get();

        $testimonials = testimonials::all();
//        dd($testimonials);
        return view('home.index')->with('vendors',$vendors)->with('testimonials',$testimonials);
    }

    public function help()
    {
        return view('general.help-center');
    }
    public function signin(){
        return view('general.signin');
    }
    public function register(){
        return view ('general.register');
    }
    public function forgotPassword(){
        return view ('general.forgot-password');
    }
    public function pricing(){
        return view ('general.pricing');
    }
    public function request_quote(){
        return view ('general.request_quote');
    }
    public function signup(){
		//$roles=\GigHighway\Role::OrderBy('name')->pluck('name','id');
        return view ('auth.register');
    }
	/* free members */
	    public function freesignup(){
        return view ('auth.freeregister');
    }
	public function freesignin(){
        return view('general.freesignin');
    }
    public function aboutUs()
    {
        return view('general.about');
    }
    public function privacyPolicy()
    {
        return view('general.privacy_policy');
    }
    public function termsOfUse()
    {
        return view('general.terms-conditions');
    }
    public function contactUs()
    {
        return view('general.contact-us');
    }
    public function postContactUs()
    {
        \Mail::to(env('ADMIN_EMAIL', 'jtmccombs@gmail.com'))
            ->send(new ContactUs(request()));
        return redirect()->back()->with('message', ['success', 'Mail Sent Successfully']);
    }
}
