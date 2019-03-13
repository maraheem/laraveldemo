<?php

namespace App\Http\Controllers;
use App\Project;
use Illuminate\Http\Request;

class ProjectController extends Controller
{
    public function index(){
        //$projects = \App\Project::all();
        //return view('projects');
        $projects = Project::all();
        return view('projects',compact('projects'));        
    }
    public function create(){        
        return view('projectscreate');
    }
    public function store(){
        $project = new Project();
        $project->title = request('title');
        $project->description = request('description');
        $project->save();
        return redirect("/");
    }
    //public function show($id){        
        //$project = Project::find($id);
        //return view('showproject',compact('project'));  
    //}
    public function show($id){        
        //$project = Project::find($id);
        //return view('showproject',compact('project'));  
    }
    public function edit($id){
        $project = Project::find($id);
        return view('editproject',compact('project'));
    }
    public function update($id){
        $project = Project::find($id);
        $project->title = request('title');
        $project->description = request('description');
        $project->save();
        return redirect("/");
    }
    public function destroy($id){
        $project = Project::find($id)->delete();
        return redirect("/");
    }

}
