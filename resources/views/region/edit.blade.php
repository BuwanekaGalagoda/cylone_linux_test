@extends('region.layout')

@section('content')

<div class="row">
    <div class="col-lg-12 margin-tb">
        <div class="pull-left">
            <h2>Edit region</h2>
        </div>
        <div class="pull-right">
            <a class="btn btn-primary" href="{{route('region.index')}}">Back</a>
        </div>
    </div>
</div>

@if($errors->any())

<div class="alert alert-danger">
    <strong>oops</strong>There ae some problems.<br><br>

    <ul>
        @foreach($errors as $error)
        <li>{{$error}}</li>
        @endforeach
    </ul>
</div>
@endif

<form action="{{route('region.update',$region->rid)}}" method="POST">
    @csrf
    @method('PUT')

    <div class="row">
        <div class="col-xs-12 col-sm-12 col-md-12">
            <div class="form-group">
                <strong>region name:</strong>
                <input type="text" name="rname" value="{{$region->rname}}" class="form-control" placeholder="region name">

            </div>
        </div>
        <div class="col-xs-12 col-sm-12 col-md-12 text-center">
            <button type="submit" class="btn btn-primary">save</button>
        </div>
    </div>
</form>
@endsection