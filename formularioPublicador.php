<?php include_once('./home.php') ?>

<div class="container mt-5">
  <div class="card mx-auto" style="width: 80%;">
    <div class="card-body">

      <h1 class="text-center">Registro</h1>
      <form method="POST" class="mt-4" id="formPub" action="">
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
          <label>Telefono</label>
          <input type="text" class="form-control" id="telefono" name="telefono" placeholder="Introduzca número de teléfono">
        </div>
        <div class="form-group">
          <label>Correo Electrónico</label>
          <input type="email" class="form-control" id="email" name="email" placeholder="Email" required>
        </div>
        <div class="form-group">
          <label>Nivel Educativo</label>
          <input type="text" class="form-control" id="nivelEducativo" name="nivelEducativo" placeholder="Introduzca su nivel Educativo" required>
        </div>
        <div class="form-group">
          <label>Institución a la que pertence</label>
          <input type="text" class="form-control" id="institucion" name="institucion" placeholder="Institución" required>
        </div>
        <div class="form-group">
          <label>Usuario</label>
          <input type="text" class="form-control" id="usuario" name="usuario" placeholder="Introduzca su usuario" required>
        </div>
        <div class="form-group">
          <label>Contraseña</label>
          <input type="password" class="form-control" id="password" name="password" placeholder="Contraseña" required>
        </div>
        <div class="form-group">
          <label>Confirmar Contraseña</label>
          <input type="password" class="form-control" id="password2" name="password2" placeholder="Confirmar Contraseña" required>
        </div>

        <button type="text" class="btn btn-primary" id="send">Registrarse</button>
      </form>
      <div id="errorMsg" class="alert alert-danger" role="alert" style="display:none;">ERROR</div>
    </div>
  </div>
</div>