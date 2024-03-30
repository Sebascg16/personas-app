<!doctype html>
<html lang="en">
  <head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <!-- Bootstrap CSS -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">

    <title>Add Country</title>
  </head>
  <body>
    <h1>Add Country</h1>
    <form method="POST" action="{{ route('paises.store') }}">
        @csrf
        <div class="mb-3">
          <label for="id" class="form-label">Code</label>
          <input type="text" class="form-control" id="id" aria-describedby="idHelp" name="id"
          disabled="disabled">
          <div id="idHelp" class="form-text">Country code</div>
        </div>
        <div class="mb-3">
          <label for="name" class="form-label">Country</label>
          <input type="text" required class="form-control" id="name" aria-describedby="nameHelp"
          name="name" placeholder="Country name.">
        </div>

        <label for= "Nacionality">Nacionality Code:</label>
        <select class="form-select" id="Nacionality" name="code" required>
            <option selected disabled value="">Choose one...</option>
            @foreach ($paises as $pais)
            <option value="{{ $pais->pais_codi }}">{{ $pais->pais_capi }}</option>
        @endforeach
        </select>
          <div class="mt-3">
            <button type="submit" class="btn btn-primary">Save</button>
            <a href="{{ route('paises.index') }}" class="btn btn-warning">Cancel</a>
        </div>
      </form>

    <!-- Optional JavaScript; choose one of the two! -->

    <!-- Option 1: Bootstrap Bundle with Popper -->
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js"
     integrity="sha384-MrcW6ZMFYlzcLA8Nl+NtUVF0sA7MsXsP1UyJoMp4YLEuNSfAP+JcXn/tWtIaxVXM" crossorigin="anonymous">
    </script>

  </body>
</html>