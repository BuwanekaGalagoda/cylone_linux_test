<!DOCTYPE html>
<html>
<head>
   <title>Add Territory</title>
</head>
<body>
    
   <!-- zone Dropdown -->
   Zone : <select id='zone' name='zone'>
      <option value='0'>-- Select Zone --</option>

      <!-- Read zones -->
      {{-- @foreach($zone['data'] as $zone)
        <option value='{{ $zone->id }}'>{{ $zone->sdes }}</option>
      @endforeach --}}

   </select>

   <br><br>
   <!-- regions Dropdown -->
   Region : <select id='region' name='region'>
     <option value='0'>-- Select Region --</option>
   </select>

   <!-- Script -->
   <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.6.0/jquery.min.js"></script>
   <script type='text/javascript'>
   $(document).ready(function(){

      // zone Change
      $('#zone').change(function(){

         // zone id
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
