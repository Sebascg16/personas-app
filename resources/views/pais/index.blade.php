<!doctype html>
<html lang="en">
  <head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <!-- Bootstrap CSS -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">

    <title>Listado de Paises</title>
  </head>
  <body>
    <div class="container">
    <h1>Listado de Paises</h1>
    <a href="{{ route('paises.index') }}" class="btn btn-success"> Add</a>
    <table class="table">
        <thead>
          <tr>
           
            <th scope="col">Country</th>
            <th scope="col">Capital Country</th>
            <th scope="col">Actions</th>
          </tr>
        </thead>
        <tbody>
            @foreach ($paises as $pais)
          <tr>
            <th scope="row">{{ $pais->pais_nomb }}</th>
            <td>{{ $pais->pais_capi}}</td>
            <td><span>Actions</span></td>
          </tr>
        @endforeach



        </tbody>
      </table>


    <!-- Optional JavaScript; choose one of the two! -->

    <!-- Option 1: Bootstrap Bundle with Popper -->
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-MrcW6ZMFYlzcLA8Nl+NtUVF0sA7MsXsP1UyJoMp4YLEuNSfAP+JcXn/tWtIaxVXM" crossorigin="anonymous"></script>

    </body>
</html>