@extends('territory.layout')
<!DOCTYPE html>
<html>
<head>
   <title>Add Territory</title>
</head>
<body>
    @section('content')
    <div class="pull-left">
        <h2>Add Zone</h2>
    </div>
    <div class="row">
        <div class="col-lg-12 margine-tb">
            <div class="pull-right">
                <a class="btn btn-success" href="{{route('territory.create')}}">Add Zone</a>
            </div>
        </div>
    
    </div>

    @if($message=Session::get('succss'))

    <div class="alert alert-success">
        <p>{{$message}}</p>
    </div>
    @endif
    
   <!-- Department Dropdown -->
   Zone : <select id='zone' name='zone'>
      <option value='0'>-- Select Zone --</option>

      <!-- Read Departments -->
      @foreach($zone['data'] as $zone)
        <option value='{{ $zone->id }}'>{{ $zone->sdes }}</option>
      @endforeach

   </select>

   <br><br>
   <!-- Department Employees Dropdown -->
   Region : <select id='region' name='region'>
     <option value='0'>-- Select Region --</option>
   </select>

   <!-- Script -->
   <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.6.0/jquery.min.js"></script>
   <script type='text/javascript'>
   $(document).ready(function(){

      // Department Change
      $('#szone').change(function(){

         // Department id
         var id = $(this).val();

         // Empty the dropdown
         $('#region').find('option').not(':first').remove();

         // AJAX request 
         $.ajax({
           url: 'getregion/'+rid,
           type: 'get',
           dataType: 'json',
           success: function(response){

             var len = 0;
             if(response['data'] != null){
                len = response['data'].length;
             }

             if(len > 0){
                // Read data and create <option >
                for(var i=0; i<len; i++){

                   var rid = response['data'][i].id;
                   var sdes = response['data'][i].name;

                   var option = "<option value='"+rid+"'>"+sdes+"</option>";

                   $("#region").append(option); 
                }
             }

           }
         });
      });
   });
   </script>
</body>
</html>
