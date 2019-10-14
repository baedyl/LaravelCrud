@extends('master')
@section('content')
<div class="container">
    <form method="POST" action="{{ action('CRUDController@update', $id) }}">
        <div class="form-group row">
            {{ csrf_field() }}
            <input type="hidden" name="_method" value="PATCH">
            <label for="lgFormGroupInput" class="col-sm-2 col-form-label col-form-label-lg">Title</label>
            <div class="col-sm-10">
                <input type="text" name="title" id="lgFormGroupInput" class="form-group form-control-lg" placeholder="Title" value="{{$crud->title}}">
            </div>
        </div>
        <div class="form-group row">
            <label for="smFormGroupInput" class="col-sm-2 col-form-label col-form-label-sm">Post</label>
            <div class="col-sm-10">
                <textarea name="post" id="" cols="80" rows="8">{{$crud->post}}</textarea>
            </div>
        </div>
        <div class="form-group row">
            <div class="col-md-2"></div>
            <button type="submit" class="btn btn-primary">Update</button>
        </div>
    </form>
</div>
@endsection