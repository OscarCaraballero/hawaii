<div>
    <iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3519.5573847787227!2d-15.420064000000007!3d28.099041000000007!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0xc409514173e77eb%3A0xbda0edfa5e221aaa!2sUniversidad+de+Las+Palmas+de+Gran+Canaria+-+ULPGC!5e0!3m2!1ses!2ses!4v1429612461436" width="100%" height="400" frameborder="0" style="border:0"></iframe>
</div>
<br>
<div class="col-md-6">
    <form action="ContatoEmail" method="Post">
        <div class="panel panel-default">
            <div class="panel-heading">
                <h3 class="panel-title">Contáctenos</h3>
            </div>
            <div class="panel-body">
                <form role="form">
                    <div class="form-group">
                        <label for="Nombre">Nombre</label>
                        <input type="text" class="form-control" id="nombre" name="nombre" required="" placeholder="Escriba su nombre">
                    </div>

                    <div class="form-group">
                        <label for="email">Email</label>
                        <input type="email" class="form-control" id="email" name="email" required="" placeholder="Introduce tu email">
                    </div>

                    <label for="objeto">Objeto del mensaje</label>
                    <select class="form-control" id="objeto" name="obejeto">
                        <option>Duda general</option>
                        <option>Contrato servicios adicionales</option>
                        <option>Sugerencia o queja</option>
                    </select> <br>
                    <label for="cuerpo">Mensaje</label>
                    <textarea id="cuerpo" class="form-control" name="mensaje" required="" rows="5"></textarea>

                    <!-- <a class="btn btn-warning" style="margin:0 37% 4px" type="button" href="Contacto">Enviar</a>-->
                    <a data-toggle="modal" href="#enviado" style="margin:8px 37% 0" class="btn btn-warning btn-large">Enviar</a>
                    <div id="enviado" class="modal fade">
                        <div class="modal-dialog">
                            <div class="modal-content">
                                <!--<div class="modal-header">
                                        <h3>Mensaje enviado</h3>
                                </div>-->
                                <div class="modal-body">
                                    <h4>Su mensaje ha sido enviado correctamente</h4>
                                    <p>Contestaremos lo antes posible</p>                
                                </div>
                                <div class="modal-footer">
                                    <button type="submit">OK</button>
                                </div>
                            </div></div></div>
            </div>
        </div>
    </form>
</div>
<!-- EJEMPLO DE ENVIO DE CORREO. NO ME SALE POR EL CONTROLADOR
<?php
if (!isset($_POST['email'])) {
    ?>
                      <form action="ccleon9@gmail.com" method="post">
                        <label>
                          Nombre:
                          <input name="nombre" type="text" />
                        </label>
                        <label>
                          Teléfono:
                          <input name="telefono" type="text" />
                        </label>
                        <label>
                          Email:
                          <input name="email" type="text" />
                        </label>
                        <label>
                          Mensaje:
                          <textarea name="mensaje" rows="6" cols="50"></textarea>
                        </label>
                        <input type="reset" value="Borrar" />
                        <input type="submit" value="Enviar" />
                      </form>
    <?php
} else {
    $mensaje = "Mensaje del formulario de contacto de nnatali.com";
    $mensaje.= "\nNombre: " . $_POST['nombre'];
    $mensaje.= "\nEmail: " . $_POST['email'];
    $mensaje.= "\nTelefono: " . $_POST['telefono'];
    $mensaje.= "\nMensaje: \n" . $_POST['mensaje'];
    $destino = "ccleon9@gmail.com";
    $remitente = $_POST['email'];
    $asunto = "Mensaje enviado por: " . $_POST['nombre'];
    mail($destino, $asunto, $mensaje, "FROM: $remitente");
    ?>
                      <p><strong>Mensaje enviado.</strong></p>
    <?php
}
?>-->

<div class="col-md-6">
    <h3>Recepción</h3><hr>
    <span class="glyphicon glyphicon-globe"></span>  <b> Dirección:</b> 1234 Street Name, City Name, España <br><br>
    <span class="glyphicon glyphicon-earphone"></span> <b>Teléfonos:</b> (+34) 928123455 / (+34) 612345673 <br><br>
    <span class="glyphicon glyphicon-envelope"></span> <b>Email:</b> hawaiiapartamentos@gmail.com <br>
    <br><br>
</div>

<div class="col-md-6">
    <h3>Horario de atención al público</h3><hr>
    <p><b>Lunes-Viernes:</b> 9:00-13:00 || 15:00-19:00<p>
    <p><b>Sábados y Domingos:</b> 9:00-13:00</p>
</div>