<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Gig;
use App\Category;
use App\Slider;
use App\Link;

class PageController extends Controller
{

   
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */

    public function home(){
        
        $category= Category::all();
        // $category = Category::find(3);
        $slide= Slider::all();
        $gigs = Gig::orderBy('created_at','desc')->paginate(8);
        $link= Link::all();

        return view('home',['gigs'=>$gigs, 'slide'=>$slide, 'link'=>$link, 'categories'=>$category,]);
    } 

    public function search_gig(Request $request)
    {
        $search = $request->input('search');
        $category= Category::with('gigs')->get(); 
        // $category = Category::find();

        $slide= Slider::all();
        $gigs = Gig::orderBy('created_at','desc')->with('category')->search($search)->paginate(8);
        $link= Link::all();

        return view('search',['gigs'=>$gigs, 'slide'=>$slide, 'link'=>$link, 'categories'=>$category,]);
    }

   

    public function category(Category $category){
       
        $slide= Slider::all();
        $link= Link::all(); 
        $categories = Category::with('gigs')->get();
        // $gigs = Gig::where('category_id', $id)->paginate(8);

        // \DB::enableQuerylog();
        // $gigs = Category::find($id)->gigs()->paginate(8);
        $gigs = $category->gigs()->latest()->paginate(8);

        return view('home', compact('slide', 'link', 'categories', 'gigs', 'search'));
        //  dd(\DB::getQueryLog());                                                                                                                          

    } 

    public function gig_details($id, Category $category){
        $link= Link::all();
        $categories = Category::with('gigs')->get();
        $gig= Gig::find($id);
        // $gigs = $category->gigs()->get();
        $gigs = Gig::where('category_id', $gig->category_id)->get();
                                                                                               
        return view('gig-details',['gig'=>$gig, 'gigs'=>$gigs, 'link'=>$link, 'categories'=>$categories]);
  

    }
    public function order_gig($id,$package){

        $link= Link::all();
        $gig= Gig::find($id);
                                                                                               
        return view('order',['gig'=>$gig, 'link'=>$link,'package'=>$package]);
    }


   



}
