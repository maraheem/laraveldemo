@extends('layouts.default')
@section('title','Create New Project')
@section('content')    
    <div class="row">        
        <div class="offset-sm-2 col-sm-8">        
            <h1>Create New Project</h1>
            @if($errors->any())
                <div class="alert alert-danger" role="alert">
                    @foreach($errors->all() as $error)
                        <span>{{$error}}</span><br/>
                    @endforeach
                </div>
            @endif
            <form method="post" action="/projects">
                {{ csrf_field() }}
                <div class="form-group">
                    <label for="title">Project Title</label>                        
                    <input type="text" class="form-control" name="title" id="title" placeholder="Title">
                </div>
                <div class="form-group">
                    <label for="description">Project Description</label>
                    <textarea class="form-control" name="description" id="description" rows="3" placeholder="Description"></textarea>
                </div>
                <div class="form-group">                        
                    <button type="submit" class="btn btn-primary btn-sm">Create</button>                        
                </div>
            </form>
        </div>
    </div>
@endsection