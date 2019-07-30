<?php $page = $_GET['page'];?>
<?php $page === '' ? 'home' : $page; ?>
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
                <li class="nav-item <?php echo $page === 'home' ? 'active' : ''?>">
                    <a class="nav-link" href="?page=home">Inicio </a>
                </li>
                <li class="nav-item <?php echo $page === 'login' ? 'active' : ''?>">
                    <a class="nav-link" href="?page=login">Iniciar sesión</a>
                </li>
                <li class="nav-item <?php echo $page === 'about' ? 'active' : ''?>">
                    <a class="nav-link" href="?page=about">Sobre nosotros</a>
                </li>
            </ul>
        </div>
    </div>
</nav>