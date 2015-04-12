<?php if (array_key_exists("user", $_SESSION)) : ?>
<div class="col-md-3">
    <div class="btn-group-vertical" role="group" aria-label="Vertical button group">
        <a href="#comentario" class="btn btn-default" data-toggle="modal">Agregar Comentario</a>
    </div>
    <div id="comentario" class="modal fade">
        <div class="modal-dialog">
            <div class="modal-content">
                <div class="modal-header">
                    <button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">&times;</span></button>
                    <h4 class="modal-title">Agregar Comentario</h4>
                </div>
                <form role="form" action="" method="Post">
                    <div class="modal-body">
                        <div class="form-group">
                            <label for="Comentario">Comentario:</label>
                            <input  class="form-control" id="comentario" name="comentario" placeholder="Comentario...">
                        </div>
                    </div>
                    <div class="modal-footer">
                        <button type="submit" class="btn btn-default">Agregar</button>
                        <button type="button" class="btn btn-default" data-dismiss="modal">Cancelar</button>
                    </div>
                </form>
            </div><!-- /.modal-content -->
        </div><!-- /.modal-dialog -->
    </div>
</div>
<?php endif; ?>
<div class="col-md-9">
    <div class="panel panel-default">
        <div class="panel-heading">
            <h3 class="panel-title">Nombre del que deja el cometario</h3>
        </div>
        <div class="panel-body">
            Comentario, habra que sacarlos desde base de datos
        </div>
    </div>
    <div class="panel panel-default">
        <div class="panel-heading">
            <h3 class="panel-title">Nombre del que deja el cometario</h3>
        </div>
        <div class="panel-body">
            Comentario
        </div>
    </div>
    <div class="panel panel-default">
        <div class="panel-heading">
            <h3 class="panel-title">Nombre del que deja el cometario</h3>
        </div>
        <div class="panel-body">
            Comentario
        </div>
    </div>
    <div class="panel panel-default">
        <div class="panel-heading">
            <h3 class="panel-title">Nombre del que deja el cometario</h3>
        </div>
        <div class="panel-body">
            Comentario
        </div>
    </div>
    <div class="panel panel-default">
        <div class="panel-heading">
            <h3 class="panel-title">Nombre del que deja el cometario</h3>
        </div>
        <div class="panel-body">
            Comentario
        </div>
    </div>
</div>
