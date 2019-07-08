<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Gig;
use App\Category;
use App\Slider;
use App\Link;


class HomeController extends Controller
{
    /**
     * Create a new controller instance.
     *
     * @return void
     */
    public function __construct()
    {
        $this->middleware('auth');
    }

    /**
     * Show the application dashboard.
     *
     * @return \Illuminate\Http\Response
     */
    public function index(Request $request)
    {
        $link= Link::all();
        $slide= Slider::all();

        $search = $request->input('search');
        $category= Category::with('gigs')->get(); 
        $gigs = Gig::orderBy('created_at','desc')->with('category')->search($search)->paginate(8);

        return view('home',['gigs'=>$gigs, 'slide'=>$slide, 'link'=>$link, 'categories'=>$category,]);
    }

   
}
