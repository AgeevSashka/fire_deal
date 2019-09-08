<!DOCTYPE html>
<html lang="ru">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <meta name="viewport" content="initial-scale=1.0, user-scalable=no, maximum-scale=1">
   <link rel="stylesheet" href="../css/bootstrap.min.css">
   
   <link rel="stylesheet" href="../css/reset.css">
   <link href="https://fonts.googleapis.com/css?family=Roboto:400,700&amp;subset=cyrillic" rel="stylesheet">
   <link rel="stylesheet" href="../css/slick.css">
   <link rel="stylesheet" href="../css/animate.css">
   <link rel="stylesheet" href="../css/stocks/style.css">
   <link rel="shortcut icon" href="img/favicon.ico" type="image/x-icon">
    <title>Меню</title>
</head>
<body>
  <section class="menu-head">
    <div class="container cont">
            <div class="header-wrap__logo-img head wow fadeInLeft"><a href="../index.php"><img src="../img/logo.png" alt="Логотип"></a></div>
            <div class="menu-block">
                <nav class="menu-nav">
                  <a href="../stocks/cta.php">Доставка</a>
                  <a href="../stocks/menu.php">Меню</a>
                  <a href="../stocks/action.php">Акции</a>
                  <a href="http://baseballclub.ru/">О нас</a>
                  <a href="../stocks/translate.php">Контакты</a>
                </nav>
                
                <a href="#" class="menu-btn">
                  <span></span>
                </a>
            </div>
                  <div class="header-nav">
                  <div class="header-wrap__logo wow fadeInLeft">
                      <div class="header-wrap__logo-img"><a href="../index.php"><img src="../img/logo.png" alt="Логотип"></a></div>
                  </div>
                  <nav class="header-navigation wow fadeInRight">
                      <ul class="header-ul">
                          <li class="header-li"><a href="../stocks/cta.php">Доставка</a></li>
                          <li class="header-li"><a href="../stocks/menu.php">Меню</a></li>
                          <li class="header-li"><a href="../stocks/action.php">Акции</a></li>
                          <li class="header-li"><a href="http://baseballclub.ru/">О нас</a></li>
                          <li class="header-li"><a href="../stocks/translate.php">Контакты</a></li>
                      </ul>
                  </nav>
              </div>
    </div>
  </section>
   <section class="main" id="main">
       <div class="container cont">
           <div class="main-wrap">
               <div class="slider">
                <img src="../img/slider/foto-broadcast.jpg" alt="#">
                <img src="../img/slider/foto1.jpg" alt="#">
                <img src="../img/slider/foto2.jpg" alt="#">
                <img src="../img/slider/foto3.jpg" alt="#">
               </div>
           </div>
       </div>
   </section>
   <section>
     <div class="container cont">
         <div class="broadcast-title"> <img src="../img/baseball-left.png" alt="#">Контакты<img src="../img/baseball-right.png" alt="#"></div>
                <div class="container cont">
       <div id="map" style="width: 100%; height: 400px"></div>
     </div>

     </div>
   </section>
       <footer class="footer" id="footer">
       <div class="container cont">
           <div class="footer-wrap">
               <div class="row footer-info">
                   <div class="col-lg-9 footer-logo">
                       <div class="foot-logo"><a href="https://vk.com/public74002343"><img src="../img/footer/vk-icon.png" alt=""></a></div>
                       <div class="foot-logo"><a href=""><img src="../img/footer/fb-icon.png" alt=""></a></div>
                       <div class="foot-logo"><a href=""><img src="../img/footer/logo.png" alt=""></a></div>
                   </div>
                   
              
               <div class="col-lg-3 offset-lg-0 col-md-6 offset-md-6  footer-popup">
                   <form action="../mailer/smart.php" method="POST" class="form-form">
                       <input type="text" placeholder="Ваше имя" class="footer_inp">
                       <input type="tel" placeholder="Ваш телефон" class="footer_inp">
                       <button class="footer-btn">Заказать звонок</button>
                   </form>
               </div>
                </div>
               <div class="footer-contacts">
                 <div class="footer-adress"><img src="../img/footer/metro.png" alt="#"> Приморская, Улица Одоевского, д.34</div>
                <div class="footer-phone"><a href=""><img src="../img/footer/phon-wait.png" alt=""> +79219419159</a></div>
               </div>
           </div>
       </div>
   </footer>

      <div class="overlay">
    <div class="popup">
      <div class="poput-title">Форма обратной связи</div>
      <!-- /.poput-title -->
      <div class="popup-close"> &times;</div>
      <!-- /.popup-close -->
      <div class="popup-form">
        <form action="../mailer/smart.php" method="POST"class="main-form">
          <div class="popup-form-header">
            Если вы не смогли дозвониться до нас
            <span>оставьте заявку и мы позвоним</span>
            <label for="phone" class="popup-form__label">
              Введите ваш номер телефона:
            </label>
            <input type="tel" class="popup-form__input" placeholder="+7(XXX)XXX-XX-XX" name="user_phone" required>
            <button class="button popup-form__btn">Оставить заявку!
            </button>
            <div class="popup-form__note">
              *Мы работаем 24 часа !
            </div>
          </div>
        </form>
      </div>
      <!-- /.popup-form -->
    </div>
    <!-- /.popup -->
  </div>
  <!-- /.overlay -->

   
 <script src="https://api-maps.yandex.ru/2.1/?apikey=<ваш API-ключ>&lang=ru_RU"></script>
   <script src="../js/jquery-3.3.1.min.js"></script>
   <script src="../js/slick.min.js"></script>
   <script src="../js/wow.min.js"></script>
    <script src="https://unpkg.com/sweetalert/dist/sweetalert.min.js"></script>

    <script>
        $('.menu-btn').on('click', function(e) {
          e.preventDefault();
          $(this).toggleClass('menu-btn_active');
          $('.menu-nav').toggleClass('menu-nav_active');
        });
    </script> 
   <script>
     $('.slider').slick({
       dots: false,
      infinite: true,
      speed: 500,
      fade: true,
      arrows: false,
      autoplay: true
     });
   </script>
   <script>
     $('.section-broadcast').addClass('animated bounceInLeft');
     
   </script>
   <script>
    // Функция ymaps.ready() будет вызвана, когда
    // загрузятся все компоненты API, а также когда будет готово DOM-дерево.
    ymaps.ready(init);
    function init(){ 
        // Создание карты.    
        var myMap = new ymaps.Map("map", {
            // Координаты центра карты.
            // Порядок по умолчанию: «широта, долгота».
            // Чтобы не определять координаты центра карты вручную,
            // воспользуйтесь инструментом Определение координат.
            center: [59.947946, 30.232873],
            // Уровень масштабирования. Допустимые значения:
            // от 0 (весь мир) до 19.
            zoom: 18,

        });
        myMap.behaviors.disable('scrollZoom'); 
        var myGeoObject = new ymaps.GeoObject({
    geometry: {
        type: "Point", // тип геометрии - точка
        coordinates: [59.947946, 30.233396] // координаты точки
    }
});
        myMap.geoObjects.add(myGeoObject); 
    }
</script>

    <script>
      

    $(document).ready(function(){
      $('.button').on("click", function(){
        $('.overlay').show();

      });
            $('.bpt-btn').on("click", function(){
                $('.overlay').show();

            });
             $('.button-price').on("click", function(){
                $('.overlay').show();

            });
      $('.popup-close').on("click", function(){
        $('.overlay').hide();
      });

    });



    </script>
</body>
</html>