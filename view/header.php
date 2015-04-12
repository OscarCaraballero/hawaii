<html>
    <head>
    </head>
    <body>
<!--        <script type="text/javascript">
            setInterval(function () {
                check()
            }, 30000);
            function check() {
                $.post("control/ajax/CheckSession.php", function (data) {
                    if (data === '0') {
                        alert('Su sesión ha expirado.');
                        location.href = 'Logout';
                    }
                });
            }
        </script>-->
        <div class="grid-container">
            <div>
                <a href=""><img src="view/images/logo-hawaii.png" style="width:200px;height:60px"></a>
            </div>
            <nav class="navbar navbar-default">
                <div class="container-fluid">
                    <!-- Brand and toggle get grouped for better mobile display -->
                    <div class="navbar-header">
                        <a class="navbar-brand" href="Inicio">Inicio</a>
                    </div>

                    <!-- Collect the nav links, forms, and other content for toggling -->
                    <div class="collapse navbar-collapse" id="bs-example-navbar-collapse-1">
                        <ul class="nav navbar-nav">                            
                            <li><a href="Apartamentos">Apartamentos</a></li>
                            <li><a href="Reservar">Reservar</a></li>
                            <li><a href="Contacto">Contacto</a></li>
                            <li><a href="Contacto">Comentarios</a></li>
                        </ul>
                        <ul class="nav navbar-nav navbar-right">
                            <?php if (!array_key_exists("user", $_SESSION)) : ?>
                                <li><a href="#loginModal" data-toggle="modal">Login</a></li>
                                <div id="loginModal" class="modal fade">
                                    <div class="modal-dialog">
                                        <div class="modal-content">
                                            <div class="modal-header">
                                                <button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">&times;</span></button>
                                                <h4 class="modal-title">Login</h4>
                                            </div>
                                            <form role="form" action="Login" method="Post">
                                                <div class="modal-body">
                                                    <form role="form" action="Login" method="Post">
                                                        <div class="form-group">
                                                            <label for="email">Email:</label>
                                                            <input  class="form-control" id="email" name="email" placeholder="Email...">
                                                        </div>
                                                        <div class="form-group">
                                                            <label for="pwd">Password:</label>
                                                            <input type="password" class="form-control" id="pwd" name="contrasena" placeholder="Contraseña..">
                                                        </div>
                                                </div>
                                                <div class="modal-footer">
                                                    <button type="button" class="btn btn-default" data-dismiss="modal">Close</button>
                                                    <button type="submit" class="btn btn-default">Login</button>
                                                </div>
                                            </form>
                                        </div><!-- /.modal-content -->
                                    </div><!-- /.modal-dialog -->
                                </div>
                            <?php endif; ?>
                            <?php if (array_key_exists("user", $_SESSION) && $_SESSION['rol'] === 'admin') : ?>
                                <li class="dropdown">
                                    <a href="#" class="dropdown-toggle" data-toggle="dropdown" role="button" aria-expanded="false">Administrar <span class="caret"></span></a>
                                    <ul class="dropdown-menu" role="menu">
                                        <li><a href="#">Noticias</a></li>
                                        <li><a href="#">Comentarios</a></li>
                                    </ul>
                                </li>
                                <li><a href="Logout">Salir</a></li>
                            <?php elseif (array_key_exists("user", $_SESSION)) : ?>
                                <li><a href="Logout">Salir</a></li>
                            <?php endif; ?>
                        </ul>
                    </div><!-- /.navbar-collapse -->
                </div><!-- /.container-fluid -->
            </nav>
