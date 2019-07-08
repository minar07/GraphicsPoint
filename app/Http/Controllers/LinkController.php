<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Link;

class LinkController extends Controller
{

    
    function __construct()
    {
         $this->middleware('permission:link-list');
         $this->middleware('permission:link-create', ['only' => ['create','store']]);
         $this->middleware('permission:link-edit', ['except' => ['edit','update']]);
    }
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $links= Link::latest()->paginate(5);
      
        return view('links.index',['links'=>$links])
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
            return view('links.create');
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
            'website' => 'required',
            'url' => 'required',
            ]);

            $link = new Link;
            $link->website = $request->input('website');
            $link->link_url = $request->input('url');
            $link->save();
    
            return redirect()->route('links.index')
            ->with('success','link created successfully.');
            
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        $link= Link::find($id);
		return view('links.show',['link'=>$link]);
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $link =  LInk::find($id);
        return view('links.edit')->with('link', $link);
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
            'website' => 'required',
            ]);

            $link = Link::find($id);
            $link->website = $request->input('website');
            if($request->input('url')){
                $link->link_url = $request->input('url');
            }   
            else{
                $link->link_url = "https://";
                }
            $link->save();
    
            return redirect()->route('links.index')
        ->with('success','Link updated successfully'); 
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $link = Link::find($id);
        $link->delete();
        return redirect()->route('links.index')
        ->with('success','Link deleted successfully');
    }
}
