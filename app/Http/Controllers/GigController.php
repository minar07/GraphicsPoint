<?php

namespace App\Http\Controllers;
use App\Gig;
use App\Category;
use App\Link;
use Image;
use Illuminate\Support\Facades\Storage;
use Illuminate\Http\Request;

class GigController extends Controller
{

    function __construct()
    {
         $this->middleware('permission:gig-list');
         $this->middleware('permission:gig-create', ['only' => ['create','store']]);
         $this->middleware('permission:gig-edit', ['only' => ['edit','update']]);
         $this->middleware('permission:gig-delete', ['only' => ['destroy']]);
    }

    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $gigs= Gig::latest()->paginate(5);
      
        return view('gigs.index',['gigs'=>$gigs])
        ->with('i', (request()->input('page', 1) - 1) * 5);
        
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        {
            $category= Category::all();
            return view('gigs.create', ['category'=>$category]);
        }
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {


            $this-> validate($request, [
            'name' => 'required',
            'category' => 'required',
            'description' => 'required',
            'basic_price' => 'required',
            'featured_image' => 'image|required|max:1999',

        ]);

        
        if($request->hasFile('featured_image')){

            $image = $request->file('featured_image');
            $filenameWithExt = $image->getClientOriginalName();
            $filename = pathinfo($filenameWithExt, PATHINFO_FILENAME);
            $extension = $request->file('featured_image')->getClientOriginalExtension();
            $imageNameToStore = $filename.'_'.time().'.'.$extension;
            $image_resize = Image::make($image->getRealPath());              
            $image_resize->resize(800, 400);
            $image_resize->save(public_path('images/cover_images/' .$imageNameToStore));
            $image_resize = Image::make($image->getRealPath());              
            $image_resize->resize(80, 60);
            $image_resize->save(public_path('images/nav_images/' .$imageNameToStore));
            //$path = $request->file('featured_image')->storeAs('public/slider_images', $fileNameToStore);
        }

        else{
            $imageNameToStore = 'noimage.png';
        }

        if($request->hasFile('gig_image_one')){
            $image = $request->file('gig_image_one');
            $filenameWithExt = $image->getClientOriginalName();
            $filename = pathinfo($filenameWithExt, PATHINFO_FILENAME);
            $extension = $request->file('gig_image_one')->getClientOriginalExtension();
            $imageNameToStore1 = $filename.'_'.time().'.'.$extension;
            $image_resize = Image::make($image->getRealPath());              
            $image_resize->resize(800, 400);
            $image_resize->save(public_path('images/gig_slider_images/' .$imageNameToStore1));
            $image_resize = Image::make($image->getRealPath());              
            $image_resize->resize(80, 60);
            $image_resize->save(public_path('images/nav_images/' .$imageNameToStore1));
            }
    
            else{
                $imageNameToStore1 = null;
            }

            if($request->hasFile('gig_image_two')){
                $image = $request->file('gig_image_two');
                $filenameWithExt = $image->getClientOriginalName();
                $filename = pathinfo($filenameWithExt, PATHINFO_FILENAME);
                $extension = $request->file('gig_image_two')->getClientOriginalExtension();
                $imageNameToStore2 = $filename.'_'.time().'.'.$extension;
                $image_resize = Image::make($image->getRealPath());              
                $image_resize->resize(800, 400);
                $image_resize->save(public_path('images/gig_slider_images/' .$imageNameToStore2));
                $image_resize = Image::make($image->getRealPath());              
                $image_resize->resize(80, 60);
                $image_resize->save(public_path('images/nav_images/' .$imageNameToStore2));
                }
        
            else{
                $imageNameToStore2 = null;
                }

            if($request->hasFile('gig_image_three')){
                $image = $request->file('gig_image_three');
                $filenameWithExt = $image->getClientOriginalName();
                $filename = pathinfo($filenameWithExt, PATHINFO_FILENAME);
                $extension = $request->file('gig_image_three')->getClientOriginalExtension();
                $imageNameToStore3 = $filename.'_'.time().'.'.$extension;
                $image_resize = Image::make($image->getRealPath());              
                $image_resize->resize(800, 400);
                $image_resize->save(public_path('images/gig_slider_images/' .$imageNameToStore3));
                $image_resize = Image::make($image->getRealPath());              
                $image_resize->resize(80, 60);
                $image_resize->save(public_path('images/nav_images/' .$imageNameToStore3));
                }
            
            else{
                $imageNameToStore3 = null;
                }

            if($request->hasFile('gig_image_four')){
                $image = $request->file('gig_image_four');
                $filenameWithExt = $image->getClientOriginalName();
                $filename = pathinfo($filenameWithExt, PATHINFO_FILENAME);
                $extension = $request->file('gig_image_four')->getClientOriginalExtension();
                $imageNameToStore4 = $filename.'_'.time().'.'.$extension;
                $image_resize = Image::make($image->getRealPath());              
                $image_resize->resize(800, 400);
                $image_resize->save(public_path('images/gig_slider_images/' .$imageNameToStore4));
                $image_resize = Image::make($image->getRealPath());              
                $image_resize->resize(80, 60);
                $image_resize->save(public_path('images/nav_images/' .$imageNameToStore4));
               }
                
            else{
               $imageNameToStore4 = null;
                }

            if($request->hasFile('gig_image_five')){
                $image = $request->file('gig_image_five');
                $filenameWithExt = $image->getClientOriginalName();
                $filename = pathinfo($filenameWithExt, PATHINFO_FILENAME);
                $extension = $request->file('gig_image_five')->getClientOriginalExtension();
                $imageNameToStore5 = $filename.'_'.time().'.'.$extension;
                $image_resize = Image::make($image->getRealPath());              
                $image_resize->resize(800, 400);
                $image_resize->save(public_path('images/gig_slider_images/' .$imageNameToStore5));
                $image_resize = Image::make($image->getRealPath());              
                $image_resize->resize(80, 60);
                $image_resize->save(public_path('images/nav_images/' .$imageNameToStore5));
                }
                    
            else{
                $imageNameToStore5 = null;
                }

            if($request->hasFile('gig_image_six')){
                $image = $request->file('gig_image_six');
                $filenameWithExt = $image->getClientOriginalName();
                $filename = pathinfo($filenameWithExt, PATHINFO_FILENAME);
                $extension = $request->file('gig_image_six')->getClientOriginalExtension();
                $imageNameToStore6 = $filename.'_'.time().'.'.$extension;
                $image_resize = Image::make($image->getRealPath());              
                $image_resize->resize(800, 400);
                $image_resize->save(public_path('images/gig_slider_images/' .$imageNameToStore6));
                $image_resize = Image::make($image->getRealPath());              
                $image_resize->resize(80, 60);
                $image_resize->save(public_path('images/nav_images/' .$imageNameToStore6));
                }
                        
            else{
                 $imageNameToStore6 = null;
                }

            if($request->hasFile('gig_image_seven')){
                $image = $request->file('gig_image_seven');
                $filenameWithExt = $image->getClientOriginalName();
                $filename = pathinfo($filenameWithExt, PATHINFO_FILENAME);
                $extension = $request->file('gig_image_seven')->getClientOriginalExtension();
                $imageNameToStore7 = $filename.'_'.time().'.'.$extension;
                $image_resize = Image::make($image->getRealPath());              
                $image_resize->resize(800, 400);
                $image_resize->save(public_path('images/gig_slider_images/' .$imageNameToStore7));
                $image_resize = Image::make($image->getRealPath());              
                $image_resize->resize(80, 60);
                $image_resize->save(public_path('images/nav_images/' .$imageNameToStore7));
                }
                            
            else{
                $imageNameToStore7 = null;
                }

        $gig = new Gig;
        $gig->user_id = auth()->user()->id;
        $gig->title = $request->input('name');
        $gig->category_id = $request->input('category');
        $gig->description = $request->input('description');
        $gig->basic_price = $request->input('basic_price');
        $gig->premium_price = $request->input('premium_price');
        $gig->unlimited_price = $request->input('unlimited_price');
        $gig->image_name = $imageNameToStore;
        $gig->image_name_1 = $imageNameToStore1;
        $gig->image_name_2 = $imageNameToStore2;
        $gig->image_name_3 = $imageNameToStore3;
        $gig->image_name_4 = $imageNameToStore4;
        $gig->image_name_5 = $imageNameToStore5;
        $gig->image_name_6 = $imageNameToStore6;
        $gig->image_name_7 = $imageNameToStore7;       
        $gig->save();

        $category= Category::all();

        return redirect()->route('gigs.index')
        ->with('success','Gig created successfully.');
       
    }

    public function store_gigs(Request $request)
    {

    }


    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {   
        $link= Link::all();
        $categories = Category::with('gigs')->get();
        $gig= Gig::find($id);
        // $gigs = $category->gigs()->get();
        $gigs = Gig::where('category_id', $gig->category_id)->get();
        return view('gigs.show',['gig'=>$gig, 'gigs'=>$gigs, 'link'=>$link, 'categories'=>$categories]);
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {  
        $category= Category::all();
        $gig =  Gig::find($id);
        $selectedCategory = Gig::first()->category_id;

        return view('gigs.edit',['gig'=>$gig, 'category'=>$category, 'selectedCategory'=>$selectedCategory]);

    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
            $this-> validate($request, [
            'name' => 'required',
            'category' => 'required',
            'description' => 'required',
            'basic_price' => 'required',
        ]);

        
        if($request->hasFile('featured_image')){
            $image = $request->file('featured_image');
            $filenameWithExt = $image->getClientOriginalName();
            $filename = pathinfo($filenameWithExt, PATHINFO_FILENAME);
            $extension = $request->file('featured_image')->getClientOriginalExtension();
            $imageNameToStore = $filename.'_'.time().'.'.$extension;
            $image_resize = Image::make($image->getRealPath());              
            $image_resize->resize(800, 400);
            $image_resize->save(public_path('images/cover_images/' .$imageNameToStore));
            $image_resize = Image::make($image->getRealPath());              
            $image_resize->resize(80, 60);
            $image_resize->save(public_path('images/nav_images/' .$imageNameToStore));
        }

        else{
            $imageNameToStore = 'noimage.png';
        }


        if($request->hasFile('gig_image_one')){
            $image = $request->file('gig_image_one');
            $filenameWithExt = $image->getClientOriginalName();
            $filename = pathinfo($filenameWithExt, PATHINFO_FILENAME);
            $extension = $request->file('gig_image_one')->getClientOriginalExtension();
            $imageNameToStore1 = $filename.'_'.time().'.'.$extension;
            $image_resize = Image::make($image->getRealPath());              
            $image_resize->resize(800, 400);
            $image_resize->save(public_path('images/gig_slider_images/' .$imageNameToStore1));
            $image_resize = Image::make($image->getRealPath());              
            $image_resize->resize(80, 60);
            $image_resize->save(public_path('images/nav_images/' .$imageNameToStore1));
            }
    
            else{
                $imageNameToStore1 = null;
            }

            if($request->hasFile('gig_image_two')){
            $image = $request->file('gig_image_two');
            $filenameWithExt = $image->getClientOriginalName();
            $filename = pathinfo($filenameWithExt, PATHINFO_FILENAME);
            $extension = $request->file('gig_image_two')->getClientOriginalExtension();
            $imageNameToStore2 = $filename.'_'.time().'.'.$extension;
            $image_resize = Image::make($image->getRealPath());              
            $image_resize->resize(800, 400);
            $image_resize->save(public_path('images/gig_slider_images/' .$imageNameToStore2));
            $image_resize = Image::make($image->getRealPath());              
            $image_resize->resize(80, 60);
            $image_resize->save(public_path('images/nav_images/' .$imageNameToStore2));
                }
        
            else{
                $imageNameToStore2 = null;
                }

            if($request->hasFile('gig_image_three')){
                $image = $request->file('gig_image_three');
                $filenameWithExt = $image->getClientOriginalName();
                $filename = pathinfo($filenameWithExt, PATHINFO_FILENAME);
                $extension = $request->file('gig_image_three')->getClientOriginalExtension();
                $imageNameToStore3 = $filename.'_'.time().'.'.$extension;
                $image_resize = Image::make($image->getRealPath());              
                $image_resize->resize(800, 400);
                $image_resize->save(public_path('images/gig_slider_images/' .$imageNameToStore3));
                $image_resize = Image::make($image->getRealPath());              
                $image_resize->resize(80, 60);
                $image_resize->save(public_path('images/nav_images/' .$imageNameToStore3));
                }
            
            else{
                $imageNameToStore3 = null;
                }

            if($request->hasFile('gig_image_four')){
                $image = $request->file('gig_image_four');
                $filenameWithExt = $image->getClientOriginalName();
                $filename = pathinfo($filenameWithExt, PATHINFO_FILENAME);
                $extension = $request->file('gig_image_four')->getClientOriginalExtension();
                $imageNameToStore4 = $filename.'_'.time().'.'.$extension;
                $image_resize = Image::make($image->getRealPath());              
                $image_resize->resize(800, 400);
                $image_resize->save(public_path('images/gig_slider_images/' .$imageNameToStore4));
                $image_resize = Image::make($image->getRealPath());              
                $image_resize->resize(80, 60);
                $image_resize->save(public_path('images/nav_images/' .$imageNameToStore4));
               }
                
            else{
               $imageNameToStore4 = null;
                }

            if($request->hasFile('gig_image_five')){
                $image = $request->file('gig_image_five');
                $filenameWithExt = $image->getClientOriginalName();
                $filename = pathinfo($filenameWithExt, PATHINFO_FILENAME);
                $extension = $request->file('gig_image_five')->getClientOriginalExtension();
                $imageNameToStore5 = $filename.'_'.time().'.'.$extension;
                $image_resize = Image::make($image->getRealPath());              
                $image_resize->resize(800, 400);
                $image_resize->save(public_path('images/gig_slider_images/' .$imageNameToStore5));
                $image_resize = Image::make($image->getRealPath());              
                $image_resize->resize(80, 60);
                $image_resize->save(public_path('images/nav_images/' .$imageNameToStore5));
                }
                    
            else{
                $imageNameToStore5 = null;
                }

            if($request->hasFile('gig_image_six')){
                $image = $request->file('gig_image_six');
                $filenameWithExt = $image->getClientOriginalName();
                $filename = pathinfo($filenameWithExt, PATHINFO_FILENAME);
                $extension = $request->file('gig_image_six')->getClientOriginalExtension();
                $imageNameToStore6 = $filename.'_'.time().'.'.$extension;
                $image_resize = Image::make($image->getRealPath());              
                $image_resize->resize(800, 400);
                $image_resize->save(public_path('images/gig_slider_images/' .$imageNameToStore6));
                $image_resize = Image::make($image->getRealPath());              
                $image_resize->resize(80, 60);
                $image_resize->save(public_path('images/nav_images/' .$imageNameToStore6));
                }
                        
            else{
                 $imageNameToStore6 = null;
                }

            if($request->hasFile('gig_image_seven')){
                $image = $request->file('gig_image_seven');
                $filenameWithExt = $image->getClientOriginalName();
                $filename = pathinfo($filenameWithExt, PATHINFO_FILENAME);
                $extension = $request->file('gig_image_seven')->getClientOriginalExtension();
                $imageNameToStore7 = $filename.'_'.time().'.'.$extension;
                $image_resize = Image::make($image->getRealPath());              
                $image_resize->resize(800, 400);
                $image_resize->save(public_path('images/gig_slider_images/' .$imageNameToStore7));
                $image_resize = Image::make($image->getRealPath());              
                $image_resize->resize(80, 60);
                $image_resize->save(public_path('images/nav_images/' .$imageNameToStore7));
                }
                            
            else{
            $imageNameToStore7 = null;
            }
      
        $gig = Gig::find($id);

        $gig->user_id = auth()->user()->id;
        $gig->title = $request->input('name');
        $gig->category_id = $request->input('category');
        $gig->description = $request->input('description');
        $gig->basic_price = $request->input('basic_price');
        $gig->premium_price = $request->input('premium_price');
        $gig->unlimited_price = $request->input('unlimited_price');

        if($request->hasFile('featured_image')){
            $gig->image_name = $imageNameToStore; 
         }
        if($request->hasFile('gig_image_one')){
            $gig->image_name_1 = $imageNameToStore1; 
         }
         if($request->hasFile('gig_image_two')){
            $gig->image_name_2 = $imageNameToStore2; 
         }
         if($request->hasFile('gig_image_three')){
            $gig->image_name_3 = $imageNameToStore3; 
         }
         if($request->hasFile('gig_image_four')){
            $gig->image_name_4 = $imageNameToStore4; 
         }
         if($request->hasFile('gig_image_five')){
            $gig->image_name_5 = $imageNameToStore5; 
         }
         if($request->hasFile('gig_image_six')){
            $gig->image_name_6 = $imageNameToStore6; 
         }
         if($request->hasFile('gig_image_seven')){
            $gig->image_name_7 = $imageNameToStore7; 
         }
    
        $gig->save();

        return redirect()->route('gigs.index')
        ->with('success','Gig updated successfully');  
      }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $gig = Gig::find($id);

        if($gig->image_name != 'noimage.jpg'){
            Storage::delete('public/cover_images/'.$gig->image_name);

            }
        if($gig->image_name_1 != 'noimage.jpg'){
             Storage::delete('public/gig_slider_images/'.$gig->image_name_1);
            }
        if($gig->image_name_2 != 'noimage.jpg'){
            Storage::delete('public/gig_slider_images/'.$gig->image_name_2);
            }
        if($gig->image_name_3 != 'noimage.jpg'){
            Storage::delete('public/gig_slider_images/'.$gig->image_name_3);
            }
        if($gig->image_name_4 != 'noimage.jpg'){
            Storage::delete('public/gig_slider_images/'.$gig->image_name_4);
            }
        if($gig->image_name_5 != 'noimage.jpg'){
            Storage::delete('public/gig_slider_images/'.$gig->image_name_5);
            }
        if($gig->image_name_6 != 'noimage.jpg'){
            Storage::delete('public/gig_slider_images/'.$gig->image_name_6);
            }
        if($gig->image_name_7 != 'noimage.jpg'){
            Storage::delete('public/gig_slider_images/'.$gig->image_name_7);
            }

        $gig->delete();
        return redirect()->route('gigs.index')
        ->with('success','Gig deleted successfully');

    }
}
