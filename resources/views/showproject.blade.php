@extends('layouts.default')
@section('title','Show Project')
@section('content')    
    <div class="row">
        <div class="offset-sm-1 col-sm-10">
            <h1>{{$project->title}}</h1>
            <div class="row m-0 bg-info text-white">
                <div class="col-3 border border-right-0 py-2">Project Title</div>
                <div class="col border border-right-0 py-2">Project Description</div>
                <div class="col-3 border py-2"></div>
            </div>  
            <div class="row m-0 strpd">
                <div class="col-3 border border-top-0 border-right-0 py-2">{{$project->title}}</div>
                <div class="col border border-top-0 border-right-0 py-2">{{$project->description}}</div>
                <div class="col-3 border border-top-0 py-2">
                    <a href="/projects/{{$project->id}}/edit" class="btn btn-link btn-sm">Edit</a> | 
                    <a href="/projects/" class="btn btn-link btn-sm">Back</a>                
                </div>
            </div>   
        </div>
    </div>      
@endsection  