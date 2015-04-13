
 <?php 
 
 //var_dump($_SESSION);
 
 ?>

<ul class="pgwSlider">
    <li><img src="view/images/slider/imgslider01.jpg" alt="Titulo Apartamento 1" data-description="Descripción Apartamento 1"></li>
    <li><img src="view/images/slider/imgslider02.jpg" alt="Titulo Apartamento 2" data-description="Descripción Apartamento 2"></li>
    <li><img src="view/images/slider/imgslider03.jpg" alt="Titulo Apartamento 3" data-description="Descripción Apartamento 3"></li>
</ul>

 <script>
 
    $(document).ready(function() {
       $('.pgwSlider').pgwSlider({verticalCentering: true, maxHeight: 350});
   });
 
 </script>

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