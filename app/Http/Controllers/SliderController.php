<?php

namespace App\Http\Controllers;

use App\Slider;
use Illuminate\Http\Request;
use Illuminate\Support\Str;

class SliderController extends Controller
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

    public function index(){
        $sliders = Slider::all();
        //dd($sliders);
        return view('admin.sliderlist', compact('sliders'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create(){
        return view('admin.slideradd');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request){
        $slider = new Slider();
        $slider->fill($request->all());

        if ($file = $request->file('image')){
            $photo_name = Str::random(3).$request->file('image')->getClientOriginalName();
            $file->move('assets/images/sliders',$photo_name);
            $slider['image'] = $photo_name;
        }

         if ($file = $request->file('image2')){
            $photo_name = Str::random(3).$request->file('image2')->getClientOriginalName();
            $file->move('assets/images/sliders',$photo_name);
            $slider['image2'] = $photo_name;
        }

         if ($file = $request->file('image3')){
            $photo_name = Str::random(3).$request->file('image3')->getClientOriginalName();
            $file->move('assets/images/sliders',$photo_name);
            $slider['image3'] = $photo_name;
        }

         if ($file = $request->file('image4')){
            $photo_name = Str::random(3).$request->file('image4')->getClientOriginalName();
            $file->move('assets/images/sliders',$photo_name);
            $slider['image4'] = $photo_name;
        }
        $slider->save();
        return redirect('admin/sliders')->with('message','Slider Added Successfully.');
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id){
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id){
        $slider = Slider::findOrFail($id);
        return view('admin.slideredit',compact('slider'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id){
        $slider = Slider::findOrFail($id);
        $data = $request->all();

        if ($file = $request->file('image')){
            $photo_name = Str::random(3).$request->file('image')->getClientOriginalName();
            $file->move('assets/images/sliders',$photo_name);
            $data['image'] = $photo_name;
        }

         if ($file = $request->file('image2')){
            $photo_name = Str::random(3).$request->file('image2')->getClientOriginalName();
            $file->move('assets/images/sliders',$photo_name);
            $data['image2'] = $photo_name;
        }

         if ($file = $request->file('image3')){
            $photo_name = Str::random(3).$request->file('image3')->getClientOriginalName();
            $file->move('assets/images/sliders',$photo_name);
            $data['image3'] = $photo_name;
        }

         if ($file = $request->file('image4')){
            $photo_name = Str::random(3).$request->file('image4')->getClientOriginalName();
            $file->move('assets/images/sliders',$photo_name);
            $data['image4'] = $photo_name;
        }
        $slider->update($data);
        return redirect('admin/sliders')->with('message','Slider Updated Successfully.');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id){
        $slider = Slider::findOrFail($id);
        $slider->delete();
        return redirect('admin/sliders')->with('message','Slider Delete Successfully.');
    }
}
