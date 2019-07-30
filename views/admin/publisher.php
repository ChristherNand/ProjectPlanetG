<?php 
// session_start();
// error_reporting(0);
// if ($_SESSION["email"] == null || $_SESSION["email"] == "") {
//   echo "Debes iniciar sesión";
//   die();
// }
?>
<div class="row">
    <div class="col-md-12 text-center">
        <h2>Noticias</h2>
        <hr>
        <div class="form-group col-md-12 text-justify">
            <h1 class="mt-4">Titulo de la noticia</h1>
            <p class="lead">
                Autor
                <a href="#">John Jaramillo</a>
            </p>
            <hr>
            <p>Posted on January 1, 2019 at 12:00 PM</p>
            <hr>
            <img class="img-fluid rounded" src="http://placehold.it/900x300" alt="">
            <hr>
            <p class="lead">Aqui estará el contenido de la noticia</p>
            <hr>
            <div class="card my-4">
                <h5 class="card-header">Deja un comentario:</h5>
                <div class="card-body">
                    <form>
                        <div class="form-group">
                            <textarea class="form-control" rows="3"></textarea>
                        </div>
                        <button type="submit" class="btn btn-primary">Submit</button>
                    </form>
                </div>
            </div>
            <div class="media mb-4">
                <img class="d-flex mr-3 rounded-circle" src="http://placehold.it/50x50" alt="">
                <div class="media-body">
                    <h5 class="mt-0">Usuario que realiza el comentario</h5>
                    <p>Comentario de la publicación</p>
                </div>
            </div>
        </div>
    </div>
</div>