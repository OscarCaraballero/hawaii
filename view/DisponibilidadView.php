<?php //var_dump($data) ?>

<h2>Seleccione el tipo de Apartamento</h2>

<form id="disponibilidad" action="DatosContacto" method="Post">
    <table class="table">
        <tr>
            <th>Tipo</th>
            <th>Dias</th>
            <th>Precio por noche</th>
            <th>Personas</th>
            <th>Total</th>
            <th></th>
        </tr>
        <?php foreach ($data as $apartment): ?>
            <tr>
                <td>
                    <?= $apartment['tipo'] ?>
                    <input type="hidden" name="tipo" value="<?= $apartment['tipo'] ?>">
                </td>
                <td>
                    <?= $apartment['dias'] ?>
                    <input type="hidden" name="dias" value="<?= $apartment['dias'] ?>">
                </td>
                <td>
                    <?= $apartment['precioNoche'] . " €" ?>
                    <input type="hidden" name="precioNoche" value="<?= $apartment['precioNoche'] ?>">
                </td>
                <td>
                    <?= $apartment['personas'] ?>
                    <input type="hidden" name="personas" value="<?= $apartment['personas'] ?>">
                </td>
                <td>
                    <?= $apartment['precioTotal'] . " €" ?>
                    <input type="hidden" name="precioTotal" value="<?= $apartment['precioTotal'] ?>">
                </td>
                <td>
                    <input type="hidden" name="idApartamento" value="<?= $apartment['idApartamento'] ?>">
                    <input type="hidden" name="entrada" value="<?= $apartment['entrada'] ?>">
                    <input type="hidden" name="salida" value="<?= $apartment['salida'] ?>">
                    <input type="hidden" name="adultos" value="<?= $apartment['adultos'] ?>">
                    <input type="hidden" name="ninos" value="<?= $apartment['ninos'] ?>">
                    <input class="btn btn-default" form="disponibilidad" type="submit" value="Reservar" />                      
                </td>
            </tr>
        <?php endforeach; ?>
    </table>
</form>
