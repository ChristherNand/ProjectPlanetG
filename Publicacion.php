<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">
    <title>Publicación</title>
</head>
<body>
<div class="container">
  <div class="card mx-auto mt-4" style="width: 80%">
    <div class="card-body">
        <form>
            <h1>Publicación</h1>
            <div class="form-group">
              <label for="exampleInputEmail1">Titulo de la publicación</label>
              <input type="text" class="form-control" id="exampleInputEmail1" name="titulo">
              <small id="emailHelp" class="form-text text-muted">El titulo no debe ser mayor a 200 caracteres.</small><br>
            <div class="form-group">
              <label for="exampleFormControlTextarea1">Contenido de la publicación</label>
              <textarea class="form-control" id="exampleFormControlTextarea1" rows="3" name="contenidop"></textarea>
            </div>
            <div class="form-group form-check">
              <input type="checkbox" class="form-check-input" id="exampleCheck1">
              <label class="form-check-label" for="exampleCheck1">Aceptar terminos y condicionoes</label>
            </div>
            <button type="submit" class="btn btn-primary">Publicar</button>
          </form>
    </div>
  </div>
</div>    
<script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js" integrity="sha384-UO2eT0CpHqdSJQ6hJty5KVphtPhzWj9WO1clHTMGa3JDZwrnQq4sF86dIHNDz0W1" crossorigin="anonymous"></script>
<script src="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js" integrity="sha384-JjSmVgyd0p3pXB1rRibZUAYoIIy6OrQ6VrjIEaFf/nJGzIxFDsf4x0xIM+B07jRM" crossorigin="anonymous"></script>   
</body>
</html>