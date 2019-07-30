<div class="container-fluid mt-5 mb-5">
  <div class="card mx-auto col-md-6 offset-md-3">
    <div class="card-body">
      <form class="login-form" method="POST" action="./login.php">
        <div class="avatar"><i class="fas fa-user fa-4x"></i></div>
        <div class="form-group">
          <label for="email">Correo Electrónico</label>
          <input type="email" class="form-control" id="email" name="email" aria-describedby="emailHelp" placeholder="Introduzca su dirección de correo">
        </div>
        <div class="form-group">
          <label for="password">Contraseña</label>
          <input type="password" class="form-control" id="password" placeholder="Contraseña" name="password">
        </div>
        <button type="submit" class="btn btn-primary">Ingresar</button>
        <p class="mt-4">No tiene una cuenta aún? Registrese como 
          <a href="?page=createPublisher">publicador</a>
          <span>o</span>
          <a href="?page=createUser">usuario</a>
        </p>
      </form>
    </div>
  </div>
</div>