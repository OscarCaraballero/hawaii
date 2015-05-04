<?php //var_dump($data) ?>
<form action="Reserva" method="Post">
    <div class="panel panel-default">
        <div class="panel-body">
            <div class="col-md-offset-4 col-md-3 datosContacto">
                <h3>Datos de Contacto</h3>
                <div class="input-group">
                    <label>Nombre</label>
                    <?php if (array_key_exists('1', $data)): ?>
                    <input type="text" class="form-control" name="Nombre" value="<?= $data[0]['nombre'] ?>" readonly="readonly" required="" />
                    <?php else: ?>
                    <input type="text" class="form-control" name="Nombre"  required="" />
                    <?php endif; ?>
                </div>
                <div class="input-group">
                    <label>Apellidos</label>
                    <?php if (array_key_exists('1', $data)): ?>
                    <input type="text" class="form-control" name="Apellidos" value="<?= $data[0]['apellidos'] ?>" readonly="readonly" required="" />
                    <?php else: ?>
                    <input type="text" class="form-control" name="Apellidos"  required="" />
                    <?php endif; ?>
                </div>
                <div class="input-group">
                    <label>Documento</label>
                    <?php if (array_key_exists('1', $data)): ?>
                    <input type="text" class="form-control" name="documento" value="<?= $data[0]['documento'] ?>" readonly="readonly" required="" />
                    <?php else: ?>
                    <input type="text" class="form-control" name="documento"  required="" />
                    <?php endif; ?>
                </div>
                <div class="input-group">
                    <label>Pais</label>
                    <?php if (array_key_exists('1', $data)): ?>
                    <input type="text" class="form-control" name="Pais" value="<?= $data[0]['pais'] ?>" readonly="readonly" required="" />
                    <?php else: ?>
                    <input type="text" class="form-control" name="Pais"  required="" />
                    <?php endif; ?>
                </div>
                <div class="input-group">
                    <label>Telefono</label>
                    <?php if (array_key_exists('1', $data)): ?>
                    <input type="text" class="form-control" name="Telefono" value="<?= $data[0]['telefono'] ?>" readonly="readonly" required="" />
                    <?php else: ?>
                    <input type="text" class="form-control" name="Telefono"  required="" />
                    <?php endif; ?>
                </div>
                <div class="input-group">
                    <label>Email</label>
                    <?php if (array_key_exists('1', $data)): ?>
                    <input type="text" class="form-control" name="email" value="<?= $data[2]['user'] ?>" readonly="readonly" required="" />
                    <?php else: ?>
                    <input type="text" class="form-control" name="email"  required="" />
                    <?php endif; ?>   
                </div>
                <input type="hidden" name="tipo" value="<?= $data['1']['tipo'] ?>"  />
                <input type="hidden" name="idApartamento" value="<?= $data['1']['idApartamento'] ?>"  />
                <input type="hidden" name="entrada" value="<?= $data['1']['entrada'] ?>"  />
                <input type="hidden" name="salida" value="<?= $data['1']['salida'] ?>"  />
                <input type="hidden" name="adultos" value="<?= $data['1']['adultos'] ?>"  />
                <input type="hidden" name="ninos" value="<?= $data['1']['ninos'] ?>"  />
                <div class="input-group">
                    <br>
                    <button class="btn btn-primary">Enviar</button>
                </div>
            </div>
        </div>
    </div>
</form>