<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\RrlcCarouselImage;
use App\Traits\UploadTrait;
use Illuminate\Support\Facades\File;

class RrlcCarouselController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */

    public function __construct()
    {
        $this->middleware('auth');
    }

    public function index()
    {
        $carousel = RrlcCarouselImage::all();
        return view('rrlc.homepage.carousel.index')->with('carousels', $carousel);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('rrlc.homepage.carousel.create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $this->validate($request, [
            'title'    => 'required',
            'image'    => 'required|image|mimes:jpeg,png,jpg,gif,svg|max:10000000',
        ]);

        $carousel = NEW RrlcCarouselImage;
        $carousel->title = $request->input('title');

        $image = $request->file('image');
        $name = str_slug($request->input('image')).''.time();
        $folder = '/images/carousel/';
        $filePath = $folder . $name. '.' . $image->getClientOriginalExtension();
        request()->image->move(public_path('images/carousel'), $filePath);
        $carousel->image = $filePath;

        $carousel->save();
        
        return redirect()->action('RrlcCarouselController@index')->with('success', 'Image Created');
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $carousel = RrlcCarouselImage::find($id);
        return view('rrlc.homepage.carousel.edit')->with('carousel', $carousel);
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
        $this->validate($request, [
            'title'    => 'required',
        ]);
        
        $carousel = RrlcCarouselImage::find($id);

        if ($request->hasFile('image')) 
        {
            $image_up = $request->input('image');
            $image_path = '/images/carousel/'.$carousel->image;
            if($carousel->image  != $image_up) 
            {
                unlink(public_path() . $carousel->image);
            }
            $dir = '/images/carousel/';
            $image = $request->file('image');
            $name = str_slug($request->input('image')).''.time();
            $filePath = $dir . $name. '.' . $image->getClientOriginalExtension();
            request()->image->move(public_path('images/carousel'), $filePath);
            $carousel->image = $filePath;
        } 
        $carousel->title = $request->input('title');

        $carousel->save();

        return redirect()->action('RrlcCarouselController@index')->with('success', 'Gallery Updated!');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $carousel = RrlcCarouselImage::find($id);

        unlink(public_path() . $carousel->image);
        $carousel->delete();    
        return redirect()->action('RrlcCarouselController@index')->with('error','Gallery Removed');
    }
}
