
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
<div class="grid-65">
    <form>
        <div class="panel panel-default">
            <div class="panel-body">
                <div class="input-group">
                    <span class="input-group-addon" id="basic-addon1">Entrada</span>
                    <div id="calendario" class="input-daterange input-group" id="datepicker">
                        <input type="text" class="input-sm form-control" name="start" />

                        <span class="input-group-addon">Salida</span>

                        <input type="text" class="input-sm form-control" name="end" />
                    </div>
                    <script>
                        $('#calendario').datepicker({
                            format: "dd/mm/yy",
                            todayBtn: "linked",
                            language: "es",
                            autoclose: true
                        });
                    </script>
                </div>
                <br><br>
                <div class="input-group">
                    <span class="input-group-addon" id="basic-addon1">Adultos</span>
                    <select class="selectpicker">
                        <option>1</option>
                        <option>2</option>
                        <option>3</option>
                        <option>4</option>
                        <option>5</option>
                    </select>
                    <span class="input-group-addon" id="basic-addon1">Niños</span>
                    <select class="selectpicker">
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





<div class="grid-65" id="newsBlock">
    <h3>Noticias más recientes</h3><hr/>
    <div class="contentNew">
        <img class="newImg" src="view/images/news/new0.jpg">
        <h3>Titulo Noticia 1</h3>
        <p>Lorem ipsum dolor sit amet, consectetuer adipiscing elit. Aenean commodo ligula eget dolor. Aenean massa. 
            Cum sociis natoque penatibus et magnis dis parturient montes, nascetur ridiculus mus. Donec quam felis, 
            ultricies nec, pellentesque eu, pretium quis, sem. Nulla consequat massa quis enim.</p>
    </div>
    <div class="contentNew">
        <img class="newImg" src="view/images/news/new0.jpg">
        <h3>Titulo Noticia 2</h3>
        <p>Lorem ipsum dolor sit amet, consectetuer adipiscing elit. Aenean commodo ligula eget dolor. Aenean massa. 
            Cum sociis natoque penatibus et magnis dis parturient montes, nascetur ridiculus mus. Donec quam felis, 
            ultricies nec, pellentesque eu, pretium quis, sem. Nulla consequat massa quis enim.</p>
    </div>
    <div class="contentNew">
        <img class="newImg" src="view/images/news/new0.jpg">
        <h3>Titulo Noticia 3</h3>
        <p>Lorem ipsum dolor sit amet, consectetuer adipiscing elit. Aenean commodo ligula eget dolor. Aenean massa. 
            Cum sociis natoque penatibus et magnis dis parturient montes, nascetur ridiculus mus. Donec quam felis, 
            ultricies nec, pellentesque eu, pretium quis, sem. Nulla consequat massa quis enim.</p>
    </div>    
</div>

<div class="grid-35 promoContainer">
    <img id="promo" src="view/images/promo01.jpg">
    <img id="promo" src="view/images/promo01.jpg">
    <img id="promo" src="view/images/promo01.jpg">
</div>