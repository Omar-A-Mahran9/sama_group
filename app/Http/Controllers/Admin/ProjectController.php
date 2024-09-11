<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\Admin\Project;
use App\Models\Admin\ProjectSection;
use App\Traits\PageTrait;

class ProjectController extends Controller
{
    use PageTrait;
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        //
        $itemProjects = Project::all();
        // dd($itemProjects);
        return view('admin.projects.posts.index',compact('itemProjects'));
    }
    
    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        //
        return view('admin.projects.posts.create');

    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        //

        $file_name = $this->saveImage($request->image,'images/projects');
        
        foreach( $request->images as $key => $img ){
            $file_extension = $img->getClientOriginalExtension();
            $images = time().'-'.$key.'.'.$file_extension;
            $img->move('images/projects',$images);
            $imagess[] = $images;
        }

        // Check if the new record has 'ads' set to true
        if (request('ads') == true) {
            // Update all existing records to set 'ads' to false
            Project::where('ads', true)->update(['ads' => false]);
        }
        
        Project::create([
            'titleAr'=> request('titleAr'),
            'titleEn'=> request('titleEn'),
            'descriptionAr'=> request('descriptionAr'),
            'descriptionEn'=> request('descriptionEn'),
            'contentAr'=> request('contentAr'),
            'contentEn'=> request('contentEn'),
            'ads'=> request('ads'),
            'image' => $file_name,
            'images' => implode(',',$imagess)
        ]);

        return redirect()->route('project.index')->with('success','تم إضافة المشروع بنجاح');

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
        // $cats = ProjectSection::all();
        $project = Project::find($id);
        return view('admin.projects.posts.edit',compact(['project']));
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, string $id)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
        //
    }
}