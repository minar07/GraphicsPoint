<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Gig;
use App\Slider;
use Image; 
use Illuminate\Support\Facades\Storage;

class SliderController extends Controller
{
    function __construct()
    {
         $this->middleware('permission:slider-list');
         $this->middleware('permission:slider-create', ['only' => ['create','store']]);
         $this->middleware('permission:slider-edit', ['only' => ['edit','update']]);
         $this->middleware('permission:slider-delete', ['only' => ['destroy']]);
    }
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {  
        $slide = Slider::orderBy('created_at','asc')->paginate(5);
         return view('sliders.index',['slide' => $slide])
         ->with('i', (request()->input('page', 1) - 1) * 5);;
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        {
            return view('sliders.create');
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
            'title' => 'required',
            'description' => 'required',
           // 'slide_name' => 'required'
        ]);

       
        if($request->hasFile('slide_name')){
         
            $image = $request->file('slide_name');
            $filenameWithExt = $image->getClientOriginalName();
            $filename = pathinfo($filenameWithExt, PATHINFO_FILENAME);
            $extension = $request->file('slide_name')->getClientOriginalExtension();
            $fileNameToStore = $filename.'_'.time().'.'.$extension;
            $image_resize = Image::make($image->getRealPath());              
            $image_resize->resize(1200, 480);
            $image_resize->save(public_path('images/Slider_Images/' .$fileNameToStore));
            $path = $request->file('slide_name')->storeAs('public/slider_images', $fileNameToStore);
        }
        else{
            $fileNameToStore = 'noimage.jpg';
        }
       
        $slide = new Slider;
        $slide->title = $request->input('title');
        $slide->description = $request->input('description');
        $slide->image_name = $fileNameToStore;
        $slide->save();

        return redirect()->route('sliders.index')
        ->with('success','Slide created successfully.');

    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {

        $slide =  Slider::find($id)->first();
        return view('sliders.show')->with('slide', $slide);
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $slide =  Slider::find($id);
        return view('sliders.edit')->with('slide', $slide);
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
        
        if($request->hasFile('slide_name')){
         
            $image = $request->file('slide_name');
            $filenameWithExt = $image->getClientOriginalName();
            $filename = pathinfo($filenameWithExt, PATHINFO_FILENAME);
            $extension = $request->file('slide_name')->getClientOriginalExtension();
            $fileNameToStore = $filename.'_'.time().'.'.$extension;
            $image_resize = Image::make($image->getRealPath());              
            $image_resize->resize(1200, 480);
            $image_resize->save(public_path('images/Slider_Images/' .$fileNameToStore));
            // $path = $request->file('slide_name')->storeAs('public/slider_images', $fileNameToStore);
        }
        else{
            $fileNameToStore = 'noimage.jpg';
        }
        
        
            $sl = Slider::find($id);
            $sl->title = $request->input('title');
            $sl->description = $request->input('description');
         
         if($request->hasFile('slide_name')){
            $sl->image_name = $fileNameToStore;
         }
            $sl->save();
    
         return redirect()->route('sliders.index')
        ->with('success','Slider updated successfully');  
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $slide = Slider::find($id);

        if($slide->image_name != 'noimage.jpg'){
            // Storage::delete('public/slider_images/'.$slide->image_name);
            // Storage::delete('images/Slider_Images/'.$slide->image_name);
            $files = $slide->pluck('image_name')->toArray();
            Storage::delete($files);
        }

            $slide->delete();
            return redirect()->route('sliders.index')
            ->with('success','Slider deleted successfully');
    }
}
