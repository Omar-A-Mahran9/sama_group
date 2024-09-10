<?php

namespace App\Http\Controllers\admin;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\Admin\Page;
use App\Traits\PageTrait;


class PageController extends Controller
{
    use PageTrait;
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        //
        $pages= Page::all();
        return view('admin.pages.index',[
            'pages' => $pages
        ]);
    }
    
    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        //
        return view('admin.pages.create');
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        //

        $file_name = $this->saveImage($request->image,'images/pages');
        
        Page::create([
            'titleAr'   => $request->titleAr,
            'titleEn'   => $request->titleEn,
            'descriptionAr' => $request->descriptionAr,
            'descriptionEn' => $request->descriptionEn,
            'contentAr' => $request->contentAr,
            'contentEn' => $request->contentEn,
            'image'     => $file_name
        ]);
        return redirect()->route('pages.index')->with('success','تم إضافة الصفحة بنجاح');
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
        $page = Page::find($id);
        return view('admin.pages.edit',compact('page'));
    }
    
    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, string $id)
    {
        //
        $page = Page::find($id);
        
        $page->titleAr = $request->titleAr;
        $page->titleEn = $request->titleEn;
        $page->descriptionAr = $request->descriptionAr;
        $page->descriptionEn = $request->descriptionEn;
        $page->contentAr = $request->contentAr;
        $page->contentEn = $request->contentEn;
        if($request->image){
            $file_name = $this->saveImage($request->image,'images/pages');
            $page->image = $file_name;
        }
        $page->save();
        return redirect()->route('pages.index')->with('success','تم تعديل الصفحة بنجاح');
    }
    
    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
        //
        $page = Page::find($id);
        $page->delete();
        return redirect()->route('pages')->with('success','تم حذف الصفحة بنجاح');

    }


}