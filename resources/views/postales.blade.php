<!DOCTYPE html>
<html>
 
 <head>
  <title>Codigos Postales</title>
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.1.0/jquery.min.js"></script>
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.6/css/bootstrap.min.css" />
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>
  <style type="text/css">
  
   .box{
    width:600px;
    margin:0 auto;
    border:1px solid #ccc;
   }
  </style>
 </head>
 <body>
  <br />
 <div class="container box">
   @csrf
      <h3 align="center">CODIGOS POSTALES</h3><br />
      <div class="form-group">
        <select name="country" id="cp" class="form-control input-lg dynamic" data-dependent="cp">
        <option value="">Codigo Postal</option>
        @foreach($list as $postale)
        <option value="{{ $postale->codigo}}">{{ $postale->codigo }}</option>
        @endforeach
        </select>
      </div>
      <br />
      <div class="form-group">
        <select name="state" id="localidad" class="form-control input-lg dynamic" data-dependent="localidad">
        <option value="">Localidad</option>
        </select>
      </div>
      <br />
      <div class="form-group">
        <select name="city" id="estado" class="form-control input-lg">
        <option value="">Estado</option>
        </select>
      </div>
      
      <br />
      <br />
  </div>
 </body>
</html>

<script>

$(document).ready(function(){

$('.dynamic').change(function(){
 if($(this).val() != '')
      {
        var select = $(this).attr("id");
        var value = $(this).val();
        var dependent = $(this).data('dependent');
        var _token = $('input[name="_token"]').val();
        $.ajax({
          url:"{{ route('consultas.fetch') }}",
          method:"POST",
          data:{select:select, value:value, _token:_token, dependent:dependent},
          success:function(result)
          {
          $('#'+dependent).html(result);
          }

        })
        }
      });
          
      $('#cp').change(function(){
      $('#localidad').val('');
      $('#estado').val('');
      });
      
      $('#localidad').change(function(){
      $('#estado').val('');
  });
           
          
  });
  </script>
