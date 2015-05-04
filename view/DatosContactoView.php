<?php //var_dump($data) ?>
<form action="Reserva" method="Post">
    <div class="panel panel-default">
        <div class="panel-body">
            <div class="col-md-offset-4 col-md-3 datosContacto">
                <h3>Datos de Contacto</h3>
                <div class="input-group">
                    <label>Nombre</label>
                    <?php if (array_key_exists('1', $data)): ?>
                        <input type="text" class="form-control" name="Nombre" value="<?= $data[1][0]['nombre'] ?>" readonly="readonly" required="" />
                    <?php else: ?>
                        <input type="text" class="form-control" name="Nombre"  required="" />
                    <?php endif; ?>
                </div>
                <div class="input-group">
                    <label>Apellidos</label>
                    <?php if (array_key_exists('1', $data)): ?>
                        <input type="text" class="form-control" name="Apellidos" value="<?= $data[1][0]['apellidos'] ?>" readonly="readonly" required="" />
                    <?php else: ?>
                        <input type="text" class="form-control" name="Apellidos"  required="" />
                    <?php endif; ?>
                </div>
                <div class="input-group">
                    <label>Documento</label>
                    <?php if (array_key_exists('1', $data)): ?>
                        <input type="text" class="form-control" name="documento" value="<?= $data[1][0]['documento'] ?>" readonly="readonly" required="" />
                    <?php else: ?>
                        <input type="text" class="form-control" name="documento"  required="" />
                    <?php endif; ?>
                </div>
                <div class="input-group">
                    <label>Pais</label>
                    <?php if (array_key_exists('1', $data)): ?>
                        <input type="text" class="form-control" name="Pais" value="<?= $data[1][0]['pais'] ?>" readonly="readonly" required="" />
                    <?php else: ?>
                        <input type="text" class="form-control" name="Pais"  required="" />
                    <?php endif; ?>
                </div>
                <div class="input-group">
                    <label>Telefono</label>
                    <?php if (array_key_exists('1', $data)): ?>
                        <input type="text" class="form-control" name="Telefono" value="<?= $data[1][0]['telefono'] ?>" readonly="readonly" required="" />
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
                <?php if (array_key_exists('1', $data)): ?>
                    <input type="hidden" name="tipo" value="<?= $data['0']['tipo'] ?>"  />
                <?php else: ?>
                    <input type="hidden" name="tipo" value="<?= $data['tipo'] ?>"  />
                <?php endif; ?>
                <?php if (array_key_exists('1', $data)): ?>
                    <input type="hidden" name="idApartamento" value="<?= $data['0']['idApartamento'] ?>"  />
                <?php else: ?>
                    <input type="hidden" name="idApartamento" value="<?= $data['idApartamento'] ?>"  />
                <?php endif; ?>
                <?php if (array_key_exists('1', $data)): ?>
                    <input type="hidden" name="entrada" value="<?= $data['0']['entrada'] ?>"  />
                <?php else: ?>
                    <input type="hidden" name="entrada" value="<?= $data['entrada'] ?>"  />
                <?php endif; ?>
                <?php if (array_key_exists('1', $data)): ?>
                    <input type="hidden" name="salida" value="<?= $data['0']['salida'] ?>"  />
                <?php else: ?>
                    <input type="hidden" name="salida" value="<?= $data['salida'] ?>"  />
                <?php endif; ?>
                <?php if (array_key_exists('1', $data)): ?>
                    <input type="hidden" name="adultos" value="<?= $data['0']['adultos'] ?>"  />
                <?php else: ?>
                    <input type="hidden" name="adultos" value="<?= $data['adultos'] ?>"  />
                <?php endif; ?>
                <?php if (array_key_exists('1', $data)): ?>
                    <input type="hidden" name="ninos" value="<?= $data['0']['ninos'] ?>"  />
                <?php else: ?>
                    <input type="hidden" name="ninos" value="<?= $data['ninos'] ?>"  />
                <?php endif; ?>
                <div class="input-group">
                    <br>
                    <button class="btn btn-primary">Enviar</button>
                </div>
            </div>
        </div>
    </div>
</form>