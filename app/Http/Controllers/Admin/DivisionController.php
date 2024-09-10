<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\Admin\Division;
use App\Models\Admin\DivisionSection;
use App\Traits\PageTrait;

class DivisionController extends Controller
{
    use PageTrait;
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        //
        $posts = Division::all();
        return view('admin.divisions.posts.index',compact('posts'));
    }
    
    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        //
        $cats = DivisionSection::all();
        return view('admin.divisions.posts.create',compact('cats'));
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        //

        $file_name = $this->saveImage($request->image,'images/division');

        
        Division::create([
            'titleAr'=> request('titleAr'),
            'titleEn'=> request('titleEn'),
            'descriptionAr'=> request('descriptionAr'),
            'descriptionEn'=> request('descriptionEn'),
            'contentAr'=> request('contentAr'),
            'contentEn'=> request('contentEn'),
            'division_id'=> request('division_id'),
            'image' => $file_name
        ]);

        return redirect()->route('post.index')->with('success','تم إضافة القطاع بنجاح');


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
        $post = Division::find($id);
        $cats = DivisionSection::all();
        return view( 'admin.divisions.posts.edit',compact(['post','cats']) );
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, string $id)
    {
        //
        $post = Division::find($id);
        
        $post->titleAr = $request->titleAr;
        $post->titleEn = $request->titleEn;
        $post->descriptionAr = $request->descriptionAr;
        $post->descriptionEn = $request->descriptionEn;
        $post->contentAr = $request->contentAr;
        $post->contentEn = $request->contentEn;
        $post->division_id = $request->division_id;
        if($request->image){
            $file_name = $this->saveImage($request->image,'images/pages');
            $post->image = $file_name;
        }
        $post->save();
        return redirect()->route('post.index')->with('success','تم تعديل القطاع بنجاح');

    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
        //
    }
}
