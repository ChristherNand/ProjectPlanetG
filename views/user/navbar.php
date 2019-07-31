<?php
$page = (isset($_GET['page'])) ? $_GET['page'] : 'home';
if ($page === '') $page = 'home';
$session = isset($_SESSION['email']) ? $_SESSION['email'] : NULL;

?>
<nav class="navbar navbar-expand-lg navbar-dark bg-dark static-top">
    <div class="container">
        <a class="logo-image" href="?page=home">
            <img src="./images/planeta.svg" alt="logo">
        </a>
        <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarResponsive" aria-controls="navbarResponsive" aria-expanded="false" aria-label="Toggle navigation">
            <span class="navbar-toggler-icon"></span>
        </button>
        <div class="collapse navbar-collapse" id="navbarResponsive">
            <ul class="navbar-nav ml-auto">
                <li class="nav-item <?php echo $page === 'home' ? 'active' : '' ?>">
                    <a class="nav-link" href="?page=home">Inicio </a>
                </li>
                <?php if ($session === NULL) : ?>
                    <li class="nav-item <?php echo $page === 'login' ? 'active' : '' ?>">
                        <a class="nav-link" href="?page=login">Iniciar sesión</a>
                    </li>
                <?php endif; ?>
                <li class="nav-item <?php echo $page === 'about' ? 'active' : '' ?>">
                    <a class="nav-link" href="?page=about">Sobre nosotros</a>
                </li>
                <?php if ($session !== NULL) : ?>
                    <li class="nav-item">
                        <a class="nav-link" href="controllers/logout.php">Cerrar sesión</a>
                    </li>
                <?php endif; ?>
            </ul>
        </div>
    </div>
</nav>