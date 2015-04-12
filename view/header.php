<html>
    <head>
    </head>
    <body>
        <script>
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
        </script>
        <div class="grid-container">
            <ul>
                <a href="">  
                    <img src="view/images/logo-hawaii.png" style="width:200px;height:60px">    
                </a>

                <div id="navbar">
                    <span class="inbar">
                        <ul>
                            <li class="navhome"><a href="#"><span>Inicio</span></a></li>
                            <li><a href="#"><span>Apartamentos</span></a></li>
                            <li><a href="#"><span>Reservar</span></a></li>
                            <li><a href="#"><span>Contacto</span></a></li>
                        </ul>
                    </span>
                </div>
            </ul>