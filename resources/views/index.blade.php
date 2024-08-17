<!doctype html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>APP MOVIMENTO</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">
  </head>
  <body class="container">
    <h1class="text-center">Bem vindo ao Movimento</h1>

    <form action="{{ url('/salvar') }}" method="post" class="offset-4 col-md-4">
        @csrf 
        <label class="form-label">Nome</label>
        <div class="mb-3 mt-3">
        <input type="text" name="nome" class="form-control">
        
</div>
    <div class="form-group">
    <label class="form-label">Km</label>
        <input type="number" name="km" class="form-control">
</div>
<div class="form-group">
    <label class="form-label">Dia</label>
        <input type="date" name="dia" class="form-control">
</div>
        <button type="submit" class="btn btn-success">Registrar</button>
</form>


    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-YvpcrYf0tY3lHB60NNkmXc5s9fDVZLESaAA55NDzOxhy9GkcIdslK1eN7N6jIeHz" crossorigin="anonymous"></script>
  </body>
</html>