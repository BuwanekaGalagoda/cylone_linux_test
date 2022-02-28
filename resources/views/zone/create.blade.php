@extends('zone.layout')

@section('content')

<div class="row">
    <div class="col-lg-12 margin-tb">
        <div class="pull-left">
            <h2>Add New Zone</h2>
        </div>
        <div class="pull-right">
            <a class="btn btn-primary" href="{{route('zone.index')}}">Back</a>
        </div>
    </div>
</div>

@if ($errors->any())

<div class="alert alert-danger">
    <strong>oops!</strong>There are some problems.<br><br>

    <ul>
        @foreach ($errors->all() as $error)
        <li>{{$error}}</li>            

        @endforeach
    </ul>
</div>
    
@endif

<form action="{{route('zone.store')}}" method="POST">
    @csrf

    <div class="row">
        <div class="col-xs-12 col-sm-12 col-md-12">
            <div class="form-group">
                <strong>Zone Long Description</strong>
                <input type="text" name="ldes" class="form-control" placeholder="Long Description">
            </div>
        </div>

        <div class="col-xs-12 col-sm-12 col-md-12">
            <div class="form-group">
                <strong>Short Description</strong>
                <input type="text" name="sdes" class="form-control" placeholder="Short Description">
            </div>
        </div>

        <div class="col-xs-12 col-sm-12 col-md-12 text-center">
            <button type="submit" class="btn btn-primary">Save</button>
        </div>

        </div>
</form>

@endsection