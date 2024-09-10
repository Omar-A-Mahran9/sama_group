<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\Admin\Slider;
use App\Traits\PageTrait;

class SliderController extends Controller
{
    use PageTrait;
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        //
        $sliders = Slider::all();
        return view('admin.slider.index',compact('sliders'));
    }
    
    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        //
        return view('admin.slider.create');
    }
    
    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        //
        $file_name = $this->saveImage($request->image,'images/sliders');
        
        Slider::create([
            'titleAr'=> request('titleAr'),
            'titleEn'=> request('titleEn'),
            'contentAr'=> request('contentAr'),
            'contentEn'=> request('contentEn'),
            'image' => $file_name,
        ]);
        
        return redirect()->route('slider.index')->with('success','تم إضافة السلايدر بنجاح');
        
    }
    
    /**
     * Display the specified resource.
     */
    public function show(string $id)
    {
        //
    }
    
    /**
     * Show the form for editing the specified resource.
     */
    public function edit(string $id)
    {
        //
        $slider = Slider::find($id);
        return view('admin.slider.edit',compact('slider'));
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, string $id)
    {
        //
        //
        $slider = Slider::find($id);
        
        $slider->titleAr = $request->titleAr;
        $slider->titleEn = $request->titleEn;
        $slider->contentAr = $request->contentAr;
        $slider->contentEn = $request->contentEn;
        if($request->image){
            $file_name = $this->saveImage($request->image,'images/sliders');
            $slider->image = $file_name;
        }
        $slider->save();
        return redirect()->route('slider.index')->with('success','تم إضافة السلايدر بنجاح');
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
        //
    }
}
