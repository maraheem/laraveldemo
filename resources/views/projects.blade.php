@extends('layouts.default')
@section('title','View Projects')
@section('content')    
    <div class="row">
        <div class="offset-sm-1 col-sm-10">
            <h1>View Projects</h1>
            <div class="row m-0 bg-info text-white">
                <div class="col-3 border border-right-0 py-2">Project Title</div>
                <div class="col border border-right-0 py-2">Project Description</div>
                <div class="col-3 border py-2"></div>
            </div>
            @foreach($projects as $project)
                <div class="row m-0 strpd">
                    <div class="col-3 border border-top-0 border-right-0 py-2">{{$project->title}}</div>
                    <div class="col border border-top-0 border-right-0 py-2">{{$project->description}}</div>
                    <div class="col-3 border border-top-0 py-2">
                        <a href="/projects/{{$project->id}}" class="btn btn-link btn-sm">View</a> | 
                        <a href="/projects/{{$project->id}}/edit" class="btn btn-link btn-sm">Edit</a> |                     
                        <span style="display:inline-block">
                            <form method="post" action="/projects/{{$project->id}}">
                                {{ csrf_field() }} {{ method_field('DELETE')}}
                                <button type="submit" class="btn btn-link btn-sm">Delete</button>                        
                            </form>
                        </span>
                    </div>
                </div>  
            @endforeach            
        </div>
    </div>      
@endsection  