@extends('master')
@section('content')

<div class="container">
    <form method="POST" action="{{ url('crud') }}">
        <div class="form-group row">
            {{ csrf_field() }}
            <label for="lgFormGroupInput" class="col-sm-2 col-form-label col-form-label-lg">Title</label>
            <div class="col-sm-10">
                <input type="text" name="title" id="lgFormGroupInput" class="form-group form-control-lg" placeholder="Title">
            </div>
        </div>
        <div class="form-group row">
            <label for="smFormGroupInput" class="col-sm-2 col-form-label col-form-label-sm">Post</label>
            <div class="col-sm-10">
                <textarea name="post" id="" cols="80" rows="8"></textarea>
            </div>
        </div>
        <div class="form-group row">
            <div class="col-md-2"></div>
            <input type="submit" value="" class="btn btn-primary">
        </div>
    </form>
</div>
@endsection