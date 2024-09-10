<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Models\Admin\DivisionSection;
use Illuminate\Http\Request;
use App\Traits\PageTrait;

class DivisionSectionController extends Controller
{
    use PageTrait;

    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        //
        $cats = DivisionSection::all();
        return view('admin.divisions.index',compact('cats'));
    }
    
    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        //
        return view('admin.divisions.create');
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        //
        $file_name = $this->saveImage($request->image,'images/division');

        DivisionSection::create([
            'titleAr'=> request('titleAr'),
            'titleEn'=> request('titleEn'),
            'descriptionAr'=> request('descriptionAr'),
            'descriptionEn'=> request('descriptionEn'),
            'image' => $file_name
        ]);

        return redirect()->route('category.index')->with('success','تم إضافة القسم بنجاح');


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
        $cat = DivisionSection::find($id);
        return view('admin.divisions.edit',compact('cat'));
        
        
    }
    
    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, string $id)
    {

        $cat = DivisionSection::find($id);
        $cat->titleAr = $request->titleAr;
        $cat->titleEn = $request->titleEn;
        $cat->descriptionAr = $request->descriptionAr;
        $cat->descriptionEn = $request->descriptionEn;
        if($request->image){
            $file_name = $this->saveImage($request->image,'images/division');
            $cat->image = $file_name;
        }
        $cat->save( );
        return redirect()->route('category.index')->with('success','تم تعديل القسم بنجاح');
        
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
        //
    }
}
