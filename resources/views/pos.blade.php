<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    {{-- <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">
     --}}
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/twitter-bootstrap/4.5.2/css/bootstrap.css">
    <link rel="stylesheet" href="https://cdn.datatables.net/1.11.5/css/dataTables.bootstrap4.min.css">

    <title>Document</title>
</head>
<body>
    <div class="card">
        <div class="card-body">

    
        <table class="table table-striped" id="postal">
            <thead>
                <tr>
                    <th>ID</th>
                    <th>CODIGO</th> 
                    <th>ASENTAMIENTO</th>
                    <th>ASENTA</th>
                    <th>MUNICIPIO</th>
                    <th>ESTADO</th>
                    <th>CIUDAD</th>
                </tr>
            </thead>

            <tbody>
                @foreach($pos as $postales)
                    <tr>
                        <td>{{$postales->Id}}</td>
                        <td>{{$postales->codigo}}</td>
                        <td>{{$postales->asentamiento}}</td>
                        <td>{{$postales->tipo_asenta}}</td>
                        <td>{{$postales->municipio}}</td>
                        <td>{{$postales->estado}}</td>
                        <td>{{$postales->ciudad}}</td>
                    </tr>
                @endforeach


            </tbody>


         </table>
</div>
</div>
<script src="https://code.jquery.com/jquery-3.5.1.js"></script>
<script src="https://cdn.datatables.net/1.11.5/js/jquery.dataTables.min.js"></script>
<script src="https://cdn.datatables.net/1.11.5/js/dataTables.bootstrap4.min.js"></script>
<script>
     $('#postal').DataTable();
</script>
</body>

</html>