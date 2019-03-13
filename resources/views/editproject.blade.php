@extends('layouts.default')
@section('title','Edit Project')
@section('content')    
    <div class="row">
        <div class="offset-sm-1 col-sm-10">
            <div class="container">
                <h1>Edit Project</h1>
                <form method="post" action="/projects/{{$project->id}}">
                    {{csrf_field()}}
                    {{method_field('PATCH')}}
                    <div class="form-group">
                        <label for="title">Project Title</label>                        
                        <input type="text" class="form-control" name="title" id="title" placeholder="Title" required value="{{$project->title}}">
                    </div>
                    <div class="form-group">
                      <label for="description">Project Description</label>
                      <textarea class="form-control" name="description" id="description" rows="3" placeholder="Description" required>{{$project->description}}</textarea>
                    </div>
                    <div class="form-group">                                                                        
                        <a href="/projects/{{$project->id}}" class="btn btn-info btn-sm">Back</a> 
                        <button type="submit" class="btn btn-primary  btn-sm">Update</button>
                    </div>
                </form>
            </div>
        </div>
    </div>
@endsection