<div class="container mt-5 mb-5 create-publisher-form">
  <div class="card mx-auto col-md-10 offset-md-1">
    <div class="card-body">
      <h1 class="text-center">Registro - Publicador</h1>
      <form method="POST" class="mt-4" id="formPub" action="./controllers/createUser.php">
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
          <input type="text" class="form-control" id="telefono" name="phone" placeholder="Introduzca número de teléfono">
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
        <div class="form-group">
          <label>Tipo de Usuario</label>
          <select class="form-control" name="userTypeId">
            <option value="2" selected>Publisher</option>
          </select>
        </div>

        <div class="form-check terms-and-conditions">
          <input class="form-check-input" type="checkbox" value="publicador" name="publicador">
          <label class="form-check-label" data-toggle="modal" data-target="#publicador">
            Aceptar <a href="#" class="btn-link">términos y condiciones</a>
          </label>
        </div>
        <hr />
        <button type="text" class="btn btn-primary" id="send">Registrarse</button>
        <a href="?page=login" class="btn btn-link">Cancelar</a>
      </form>
      <div id="errorMsg" class="alert alert-danger" role="alert" style="display:none;">ERROR</div>
    </div>
  </div>
</div>
<div class="modal fade" id="publicador" tabindex="-1" role="dialog" aria-labelledby="exampleModalCenterTitle" aria-hidden="true">
  <div class="modal-dialog modal-dialog-centered" role="document">
    <div class="modal-content">
      <div class="modal-header">
        <h5 class="modal-title" id="exampleModalCenterTitle">Políticas y Condiciones Usuario Publicador</h5>
        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
          <span aria-hidden="true">&times;</span>
        </button>
      </div>
      <div class="modal-body">
        <p class="text-justify">
          Al registrarse como usuario publicador tendrá la posibilidad de publicar información, leer información de interés publicada por otros usuarios y realizar comentarios de otras publicaciones.
          Así mismo aceptas las condiciones de servicio y el tratamiento de datos personales conferido en la Ley de Protección de Datos Personales 1581 de 2012. Comprometiéndote a portar información veraz, citar las fuentes que utilice, ser respetuoso con el resto de usuarios y a no publicar información de carácter personal que pueda infringir los derechos de otros usuarios. El incumplimiento de estas normas implica que puedas ser desvinculado de este blog.
          Los datos serán tratados con el fin de ofrecer en nuestros servicios contenido más útil y personalizado, realizar análisis, mediciones de funcionamiento, mejorar la seguridad protegiéndote de usos inadecuados y fraudes.
          Recuerda que este blog es un servicio gratuito para comunicarse, manifestarse y expresarse libremente. Con el contribuimos a que haya más información disponible que promueva el intercambio saludable de opiniones y que permita que las personas conozcan las últimas tecnologías y opiniones de vanguardia.
          Siempre puedes modificar los ajustes más adelante o revocar tu consentimiento en el futuro entrando en tu perfil de cuenta.
          Para realizar publicaciones tan sólo es necesario registrarse como usuario publicador en el formulario habilitado para dicho efecto. Cualquier persona podrá acceder y leer las publicaciones.
        </p>
      </div>
      <div class="modal-footer">
        <button type="button" class="btn btn-primary" data-dismiss="modal" aria-label="Close">Aceptar</button>
      </div>
    </div>
  </div>
</div>