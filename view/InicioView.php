
<?php
//var_dump($_SESSION);
?>

<ul class="pgwSlider">
    <li><img src="view/images/slider/imgslider01.jpg" alt="Titulo Apartamento 1" data-description="Descripción Apartamento 1"></li>
    <li><img src="view/images/slider/imgslider02.jpg" alt="Titulo Apartamento 2" data-description="Descripción Apartamento 2"></li>
    <li><img src="view/images/slider/imgslider03.jpg" alt="Titulo Apartamento 3" data-description="Descripción Apartamento 3"></li>
</ul>

<script>

    $(document).ready(function () {
        $('.pgwSlider').pgwSlider({verticalCentering: true, maxHeight: 350});
    });

</script>
<div class="col-md-4 formularioReserva">
    <form action="Disponibilidad" method="post">
        <div class="panel panel-default">
            <div class="panel-body">
                <div class="input-group col-md-12">
                    <span class="input-group-addon etiqueta" id="basic-addon1">Entrada</span>
                    <div id="calendario" class="input-group date calendar">
                        <input type="text" name="entrada" class="form-control" required><span class="input-group-addon"><i class="glyphicon glyphicon-th"></i></span>
                    </div>               
                </div>
                <br><br>
                <div class="input-group col-md-12">
                    <span class="input-group-addon etiqueta" id="basic-addon1">Salida</span>
                    <div id="calendario" class="input-group date calendar">
                        <input type="text" name="salida" class="form-control" required><span class="input-group-addon"><i class="glyphicon glyphicon-th"></i></span>
                    </div>
                </div>
                <script>
                    $('.calendar').datepicker({
                        format: "dd/mm/yyyy",
                        todayBtn: "linked",
                        autoclose: "true",
                        language: "es"
                    });
                </script>
                <br><br>

                <div class="input-group col-md-6">
                    <span class="input-group-addon etiqueta" id="basic-addon1">Adultos</span>
                    <select name="adultos" class="selectpicker">
                        <option>1</option>
                        <option>2</option>
                        <option>3</option>
                        <option>4</option>
                        <option>5</option>
                    </select>
                </div>
                <br><br>
                <div class="input-group col-md-6">
                    <span class="input-group-addon etiqueta" id="basic-addon1">Niños</span>
                    <select name="ninos" class="selectpicker">
                        <option>0</option>
                        <option>1</option>
                        <option>2</option>
                        <option>3</option>
                        <option>4</option>
                        <option>5</option>
                    </select>
                </div>
                <br><br>
                <div class="input-group">
                    <button type="submit" class="btn btn-default">Buscar</button>
                </div>
                <script>
                    $('.selectpicker').selectpicker();
                </script>
            </div>
        </div>
    </form>
</div>





<div class="col-md-8" id="newsBlock">
    <h3>Noticias más recientes</h3><hr/>
    <div class="col-md-12 noticia">
        <div class="contentNew col-md-5">
            <img class="newImg" src="view/images/news/new0.jpg">
        </div>
        <div class="col-md-7">
            <h4 class="tituloNoticia">Titulo Noticia 1</h4>
            <p>Lorem ipsum dolor sit amet, consectetuer adipiscing elit. Aenean commodo ligula eget dolor. Aenean massa. 
                Cum sociis natoque penatibus et magnis dis parturient montes, nascetur ridiculus mus. Donec quam felis, 
                ultricies nec, pellentesque eu, pretium quis, sem. Nulla consequat massa quis enim.</p>  
        </div>
    </div>
    <div class="col-md-12 noticia">
        <div class="contentNew col-md-5">
            <img class="newImg" src="view/images/news/new0.jpg">
        </div>
        <div class="col-md-7">
            <h4 class="tituloNoticia">Titulo Noticia 1</h4>
            <p>Lorem ipsum dolor sit amet, consectetuer adipiscing elit. Aenean commodo ligula eget dolor. Aenean massa. 
                Cum sociis natoque penatibus et magnis dis parturient montes, nascetur ridiculus mus. Donec quam felis, 
                ultricies nec, pellentesque eu, pretium quis, sem. Nulla consequat massa quis enim.</p>  
        </div>
    </div>
    <div class="col-md-12 noticia">
        <div class="contentNew col-md-5">
            <img class="newImg" src="view/images/news/new0.jpg">
        </div>
        <div class="col-md-7">
            <h4 class="tituloNoticia">Titulo Noticia 1</h4>
            <p>Lorem ipsum dolor sit amet, consectetuer adipiscing elit. Aenean commodo ligula eget dolor. Aenean massa. 
                Cum sociis natoque penatibus et magnis dis parturient montes, nascetur ridiculus mus. Donec quam felis, 
                ultricies nec, pellentesque eu, pretium quis, sem. Nulla consequat massa quis enim.</p>  
        </div>
    </div>
</div>

<div class="col-md-12 promoContainer">
    <img id="promo" src="view/images/promo01.jpg">
    <img id="promo" src="view/images/promo01.jpg">
    <img id="promo" src="view/images/promo01.jpg">
</div>