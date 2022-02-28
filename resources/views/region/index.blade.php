@extends('region.layout')

@section('content')
<div class="pull-left">
    <h2>Add region</h2>
</div>
<div class="row">
    <div class="col-lg-12 margine-tb">
        <div class="pull-right">
            <a class="btn btn-success" href="{{route('region.create')}}">Add region</a>
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
        <th>Reigon Name</th>
        <th width="280px">Action</th>
    </tr>
    @foreach($region as $region)
    
    <tr>
        {{-- <td>{{++$i}}</td> --}}
        <td>{{$region->rname}}</td>
        <td>
            <form action="{{route('region.destroy',$region->rid)}}" method="POST">
                <a class="btn btn-info" href="{{route('region.show',$region->rid)}}">View</a>
                <a class="btn btn-primary" href="{{route('region.edit',$region->rid)}}">Edit</a>

                @csrf

                @method('DELETE')

                <button type="submit" class="btn btn-danger">Delete</button>

            </form>
        </td>
    </tr>

    @endforeach
</table>