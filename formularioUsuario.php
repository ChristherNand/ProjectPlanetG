<?php include_once('./home.php') ?>



<div class="container mt-5">
  <div class="card mx-auto" style="width: 80%;">
    <div class="card-body">
      <h1 class="text-center">Registro</h1>
      <form class="mt-4" method="POST" id="formPub">
        <div class="form-group">
          <label>Primer Nombre</label>
          <input type="text" class="form-control" id="primerNombre" name="primerNombre" placeholder="Introduzca primer nombre" required>
        </div>
        <div class="form-group">
          <label>Segundo Nombre</label>
          <input type="text" class="form-control" id="segundoNombre" name="segundoNombre" placeholder="Introduzca segundo nombre">
        </div>
        <div class="form-group">
          <label>Primer Apellido</label>
          <input type="text" class="form-control" id="primerApellido" name="primerApellido" placeholder="Introduzca primer apellido" required>
        </div>
        <div class="form-group">
          <label>Segundo Apellido</label>
          <input type="text" class="form-control" id="segundoApellido" name="segundoApellido" placeholder="Introduzca segundo apellido">
        </div>
        <div class="form-group">
          <label>Correo Electrónico</label>
          <input type="email" class="form-control" id="email" name="email" placeholder="Email" required>
        </div>
        <div class="form-group">
          <label>Contraseña</label>
          <input type="password" class="form-control" id="password" name="password" placeholder="Contraseña" required>
        </div>
        <div class="form-group">
          <label>Confirmar Contraseña</label>
          <input type="password" class="form-control" id="password2" name="password2" placeholder="Confirmar Contraseña" required>
        </div>
        <button type="submit" class="btn btn-primary">Registrarse</button>
      </form>
      <div id="errorMsg" class="alert alert-danger" role="alert" style="display:none;">ERROR</div>
    </div>
  </div>
</div>