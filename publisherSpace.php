<?php
// session_start();
// error_reporting(0);
// if ($_SESSION["email"] == null || $_SESSION["email"] == "") {
//   echo "Debes iniciar sesión";
//   die();
// }
?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Sidebar template</title>
    <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.9.0/css/all.css" integrity="sha384-i1LQnF23gykqWXg6jxC2ZbCbUMxyw5gLZY6UiUS98LYV5unm8GWmfkIS6jqJfb4E" crossorigin="anonymous">
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">
    <script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js" integrity="sha384-UO2eT0CpHqdSJQ6hJty5KVphtPhzWj9WO1clHTMGa3JDZwrnQq4sF86dIHNDz0W1" crossorigin="anonymous"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js" integrity="sha384-JjSmVgyd0p3pXB1rRibZUAYoIIy6OrQ6VrjIEaFf/nJGzIxFDsf4x0xIM+B07jRM" crossorigin="anonymous"></script>
    <script src="./js/adminSpace.js"></script>
    <link rel="stylesheet" href="./css/adminSpaceStyles.css">
    <script src="./js/jquery-3.4.1.js"></script>
</head>

<body>
    <div class="page-wrapper chiller-theme toggled">
        <a id="show-sidebar" class="btn btn-sm btn-dark" href="#">
            <i class="fas fa-bars"></i>
        </a>
        <nav id="sidebar" class="sidebar-wrapper">
            <div class="sidebar-content">
                <div class="sidebar-brand">
                    <a href="#">Administrator</a>
                    <div id="close-sidebar">
                        <i class="fas fa-times"></i>
                    </div>
                </div>

                <div class="sidebar-header">
                    <div class="user-pic">
                        <img class="img-responsive img-rounded" src="https://raw.githubusercontent.com/azouaoui-med/pro-sidebar-template/gh-pages/src/img/user.jpg" alt="User picture">
                    </div>
                    <div class="user-info">
                        <span class="user-name">John
                            <strong>Jaramillo</strong>
                        </span>
                        <span class="user-role">Publicadoe</span>
                        <span class="user-status">
                            <i class="fa fa-circle"></i>
                            <span>Online</span>
                        </span>
                    </div>
                </div>

                <!-- sidebar-header  -->
                <div class="sidebar-search">
                    <div>
                        <div class="input-group">
                            <input type="text" class="form-control search-menu" placeholder="Search...">
                            <div class="input-group-append">
                                <span class="input-group-text">
                                    <i class="fa fa-search" aria-hidden="true"></i>
                                </span>
                            </div>
                        </div>
                    </div>
                    <div>
                        <a href="logout.php"><span>Salir</span>
                            <i class="fa fa-power-off"></i>
                        </a>
                    </div>

                </div>
                <!-- sidebar-search  -->
                <div class="sidebar-menu">
                    <ul>
                        <li class="header-menu">
                            <span>Panel</span>
                        </li>
                        <li class="sidebar-dropdown">
                            <a href="#">
                                <i class="fa fa-tachometer-alt"></i>
                                <span>Publicaciones Realizadas</span>

                            </a>
                            <div class="sidebar-submenu">
                                <table>
                                    <thead>
                                        <tr style="color:white;">
                                            <th>Titulo</th>
                                        </tr>
                                    </thead>
                                    <tbody style="color:white">

                                        <tr>
                                            <th>Titulo publicacion</th>
                                        </tr>
                                        <tr>
                                            <th>Titulo publicacion</th>
                                        </tr>
                                    </tbody>
                                </table>
                            </div>
                        </li>
                    </ul>

                </div>
            </div>
        </nav>
        <!-- sidebar-wrapper  -->
        <main class="page-content">

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




        </main>
    </div>

</body>

</html>