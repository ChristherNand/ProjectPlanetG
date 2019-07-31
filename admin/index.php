<?php
session_start();
error_reporting(0);
if ($_SESSION["email"] == null || $_SESSION["email"] == "") {
    echo "Debes iniciar sesión";
    die();
}
?>
<?php $conexion = new PDO("mysql:host=localhost;dbname=planetgeek", 'root', ''); ?>
<!DOCTYPE html>
<html lang="es">

<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Admin</title>
    <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.9.0/css/all.css" integrity="sha384-i1LQnF23gykqWXg6jxC2ZbCbUMxyw5gLZY6UiUS98LYV5unm8GWmfkIS6jqJfb4E" crossorigin="anonymous">
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">
    <script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js" integrity="sha384-UO2eT0CpHqdSJQ6hJty5KVphtPhzWj9WO1clHTMGa3JDZwrnQq4sF86dIHNDz0W1" crossorigin="anonymous"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js" integrity="sha384-JjSmVgyd0p3pXB1rRibZUAYoIIy6OrQ6VrjIEaFf/nJGzIxFDsf4x0xIM+B07jRM" crossorigin="anonymous"></script>
    <script src="../js/adminSpace.js"></script>
    <link rel="stylesheet" href="../css/adminSpaceStyles.css">
    <script src="../js/jquery-3.4.1.js"></script>
</head>

<body>
    <?php $page = $_GET['page']; ?>
    <?php if (!$page || $page === '') $page = 'home'; ?>
    <div class="page-wrapper chiller-theme toggled">
        <section class="page-content">
            <div class="container-fluid">
                <?php include_once('../views/admin/' . $page . '.php'); ?>
            </div>
        </section>
        <!--<a id="show-sidebar" class="btn btn-sm btn-dark" href="#">
                <i class="fas fa-bars"></i>
            </a>-->
        <nav id="sidebar" class="sidebar-wrapper">
            <div class="sidebar-content">
                <div class="sidebar-brand">
                    <a href="#">Publisher</a>
                    <!--<div id="close-sidebar">
                            <i class="fas fa-times"></i>
                        </div>-->
                </div>
                <div class="sidebar-header">
                    <div class="user-pic">
                        <img class="img-responsive img-rounded" src="https://raw.githubusercontent.com/azouaoui-med/pro-sidebar-template/gh-pages/src/img/user.jpg" alt="User picture">
                    </div>
                    <div class="user-info">
                        <span class="user-name">Christian
                            <strong>Hernandez</strong>
                        </span>
                        <span class="user-role">Publisher</span>
                        <span class="user-status">
                            <i class="fa fa-circle"></i>
                            <span>Online</span>
                        </span>
                    </div>
                </div>
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
                </div>
                <div class="sidebar-search">
                    <div>
                        <a href="../controllers/logout.php">
                            <span>Salir</span>
                            <i class="fa fa-power-off"></i>
                        </a>
                    </div>
                </div>
                <?php if ($page === 'admin') : ?>
                    <div class="sidebar-menu">
                        <ul>
                            <li class="header-menu">
                                <span>Panel - Admin</span>
                            </li>
                            <li class="sidebar-dropdown">
                                <a href="#">
                                    <i class="fa fa-tachometer-alt"></i>
                                    <span>Usuarios registrados</span>
                                </a>
                                <div class="sidebar-submenu">
                                    <table>
                                        <thead>
                                            <tr style="color:white;">
                                                <th>Id</th>
                                                <th>Nombre</th>
                                                <th>Apellido</th>
                                                <th>Correo</th>
                                                <th>Usuario</th>
                                                <th>eliminar</th>
                                            </tr>
                                        </thead>
                                        <tbody>
                                            <?php include_once("../controllers/dataBaseConfig.php");
                                            $query = $conexion->query("SELECT user_id,primerNombre, primerApellido, email, usuario FROM usuarios;");
                                            $users = $query->fetchAll(PDO::FETCH_OBJ);
                                            ?>
                                            <?php foreach ($users as $user) : ?>
                                                <tr style="color:white; background:green">
                                                    <td><?php echo $user->idUsuario ?></td>
                                                    <td><?php echo $user->primerNombre ?></td>
                                                    <td><?php echo $user->primerApellido ?></td>
                                                    <td><?php echo $user->email ?></td>
                                                    <td><?php echo $user->usuario ?></td>
                                                </tr>
                                            <?php endforeach; ?>
                                        </tbody>
                                    </table>
                                </div>
                            </li>
                        </ul>
                    </div>
                <?php else : ?>
                    <div class="sidebar-menu">
                        <ul>
                            <li class="header-menu">
                                <span>Panel - Publisher</span>
                            </li>
                            <li class="sidebar-dropdown">
                                <a href="#">
                                    <i class="fa fa-tachometer-alt"></i>
                                    <span>Posts</span>

                                </a>
                                <div class="sidebar-submenu">
                                    <table>
                                        <thead>
                                            <tr style="color:white;">
                                                <th>Titulo</th>
                                            </tr>
                                        </thead>
                                        <tbody>
                                            <?php $query = $conexion->query("SELECT * FROM comentarios;");
                                            $users = $query->fetchAll(PDO::FETCH_OBJ); ?>
                                            <?php foreach ($users as $user) : ?>
                                                <tr>
                                                    <td><a href="?page=publisher&post=<?php echo $user->idComentario; ?>"><?php echo $user->titulo ?></a></td>
                                                </tr>
                                            <?php endforeach; ?>
                                        </tbody>
                                    </table>
                                </div>

                            </li>
                        </ul>
                    </div>
                <?php endif; ?>
            </div>
        </nav>
    </div>
</body>

</html>