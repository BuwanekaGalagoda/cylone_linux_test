@extends('zone.layout')

@section('content')
<div class="pull-left">
    <h2>Add Zone</h2>
</div>
<div class="row">
    <div class="col-lg-12 margine-tb">
        <div class="pull-right">
            <a class="btn btn-success" href="{{route('zone.create')}}">Add Zone</a>
        </div>
    </div>

</div>

@if($message=Session::get('succss'))

<div class="alert alert-success">
    <p>{{$message}}</p>
</div>
@endif

<table class="table table-bordered">
    <tr>
        <th>Zone Long Description</th>
        <th>Short Description</th>
        <th width="280px">Action</th>
    </tr>
    @foreach($zone as $zone)
    
    <tr>
        {{-- <td>{{++$i}}</td> --}}
        <td>{{$zone->ldes}}</td>
        <td>{{$zone->sdes}}</td>
        <td>
            <form action="{{route('zone.destroy',$zone->id)}}" method="POST">
                <a class="btn btn-info" href="{{route('zone.show',$zone->id)}}">View</a>
                <a class="btn btn-primary" href="{{route('zone.edit',$zone->id)}}">Edit</a>

                @csrf

                @method('DELETE')

                <button type="submit" class="btn btn-danger">Delete</button>

            </form>
        </td>
    </tr>

    @endforeach
</table>