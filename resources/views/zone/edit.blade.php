@extends('zone.layout')

@section('content')

<div class="row">
    <div class="col-lg-12 margin-tb">
        <div class="pull-left">
            <h2>Edit Zone</h2>
        </div>
        <div class="pull-right">
            <a class="btn btn-primary" href="{{route('zone.index')}}">Back</a>
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

<form action="{{route('zone.update',$zone->id)}}" method="POST">
    @csrf
    @method('PUT')

    <div class="row">
        <div class="col-xs-12 col-sm-12 col-md-12">
            <div class="form-group">
                <strong>Zone Long Description:</strong>
                <input type="text" name="ldes" value="{{$zone->ldes}}" class="form-control" placeholder="long description">

            </div>
        </div>

        <div class="col-xs-12 col-sm-12 col-md-12">
            <div class="form-group">
                <strong>Short Description:</strong>
                <input type="text" name="sdes" value="{{$zone->sdes}}" class="form-control" placeholder="short description">
            </div>
        </div>
        <div class="col-xs-12 col-sm-12 col-md-12 text-center">
            <button type="submit" class="btn btn-primary">save</button>
        </div>
    </div>
</form>
@endsection