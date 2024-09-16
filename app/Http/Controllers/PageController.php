<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Admin\Page;
use App\Models\Admin\DivisionSection;
use App\Models\Admin\Division;
use App\Models\Admin\Project;

class PageController extends Controller
{
    //

    public function about() {
        $page = Page::where('id',1)->get();
        return view('web.about',compact('page'));
    }
    //

    public function projects() {
        $projects = Project::get();
        $page = Page::get();

        return view('web.projects',compact('projects','page'));
    }

    public function projectSingle($id) {
        $project = Project::where('id',$id)->get();
        return view('web.single-project',compact('project'));
    }

    //

    public function militaryDivisions() {
        $page = Division::where('id',11)->get();
        return view('web.military-divisions',compact('page'));
    }

    public function civilDivisions() {
        $section = DivisionSection::where('id',1)->get();
        $sections = Division::where('division_id',1)->get();
        return view('web.civil-divisions',compact(['sections','section']));
    }
    
    public function medicalDivisions() {
        $page = Division::where('id',10)->get();
        return view('web.medical-divisions',compact('page'));
    }
    
    public function division($id) {
        $page = Division::where('id',$id)->get();
        $sections = Division::where('division_id',1)->get();
        return view('web.single-division',compact(['page','sections']));
    }
    
    
}