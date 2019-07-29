<?php
include_once('home.php');
?>

<div class="container-fluid mt-5">
  <div class="card mx-auto" style="width: 50%;">
    <div class="card-body">
      <form class="login-form" method="POST" action="./login.php">
        <div class="avatar"><i class="fas fa-user fa-4x"></i></div>
        <div class="form-group">
          <label for="email">Correo Electronico</label>
          <input type="email" class="form-control" id="email" name="email" aria-describedby="emailHelp" placeholder="Introduzca su dirección de correo">
        </div>
        <div class="form-group">
          <label for="password">Contraseña</label>
          <input type="password" class="form-control" id="password" placeholder="Contraseña" name="password">
        </div>
        <button type="submit" class="btn btn-primary">Ingresar</button>
        <p class="mt-4">No tiene una cuenta aún? Registrese como<button type="button" class="btn btn-link" data-toggle="modal" data-target="#publicador">
            Publicador
          </button>o<button type="button" class="btn btn-link" data-toggle="modal" data-target="#usuario">
            Usuario
          </button></p>


        <!-- Primer PopUp modal -->

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

                <button type="button" class="btn btn-primary" onclick="window.location.href='./formularioPublicador.php'">Aceptar</button>
              </div>
            </div>
          </div>
        </div>

        <!-- Este es el segundo PopUp -->

        <div class="modal fade" id="usuario" tabindex="-1" role="dialog" aria-labelledby="exampleModalCenterTitle" aria-hidden="true">
          <div class="modal-dialog modal-dialog-centered" role="document">
            <div class="modal-content">
              <div class="modal-header">
                <h5 class="modal-title" id="exampleModalCenterTitle">Políticas y Condiciones Usuario Lector</h5>
                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                  <span aria-hidden="true">&times;</span>
                </button>
              </div>
              <div class="modal-body">
                <p class="text-justify">Al registrarse como usuario lector tendrá la posibilidad de leer información de interés publicada por otros usuarios y realizar comentarios a estas publicaciones.
                  Así mismo aceptas las condiciones de servicio y el tratamiento de datos personales conferido en la Ley de Protección de Datos Personales 1581 de 2012. Con ello te comprometes a portar información veraz, citar las fuentes que utilice, ser respetuoso con el resto de usuarios y a no publicar información de carácter personal que pueda infringir los derechos de otros usuarios. El incumplimiento de estas normas implica que puedas ser desvinculado de este blog.
                  Los datos serán tratados con el fin de ofrecer en nuestros servicios contenido más útil y personalizado, realizar análisis, mediciones de funcionamiento, mejorar la seguridad protegiéndote de usos inadecuados y fraudes.
                  Recuerda que este blog es un servicio gratuito para comunicarse, manifestarse y expresarse libremente. Con el contribuimos a que haya más información disponible que promueva el intercambio saludable de opiniones y que permita que las personas conozcan las últimas tecnologías y opiniones de vanguardia.
                  Siempre puedes modificar los ajustes más adelante o revocar tu consentimiento en el futuro entrando en tu perfil de cuenta.
                  Para realizar publicaciones tan sólo es necesario registrarse como usuario publicador en el formulario habilitado para dicho efecto. Cualquier persona podrá acceder y leer las publicaciones. </p>
                <div class="modal-footer">

                  <button type="button" class="btn btn-primary" onclick="window.location.href='./formularioUsuario.php'">Aceptar</button>
                </div>
              </div>
            </div>
          </div>
      </form>

    </div>

  </div>


</div>