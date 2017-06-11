<!DOCTYPE html>
<html>
<head>
    <!-- Head -->
    <title>Смарт-устройства</title>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="stylesheet" type="text/css" href="css/smart-devices.css">
    <link rel="stylesheet" href="bootstrap/bootstrap.min.css" />
    <link href="css/animate.min.css" rel="stylesheet" />
    <link rel="stylesheet" href="//code.ionicframework.com/ionicons/2.0.1/css/ionicons.min.css" />
    <link rel="stylesheet" href="bootstrap/smart-device-bootstrap.css" />
    <script type="text/javascript" src="js/jquery-1.9.1.min.js"></script>
    <script type="text/javascript" src="js/jssor.slider.mini.js"></script>
</head>
<body>
<nav id="topNav" class="navbar navbar-default navbar-fixed-top">
    <div class="container-fluid">
        <div class="navbar-header">
            <button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#bs-navbar">
                <span class="sr-only">Toggle navigation</span>
                <span class="icon-bar"></span>
                <span class="icon-bar"></span>
                <span class="icon-bar"></span>
            </button>
            <a class="navbar-brand page-scroll" href="#first"><i class="ion-ios-analytics-outline"></i> World of Technic</a>
        </div>
        <div class="navbar-collapse collapse" id="bs-navbar">
            <ul class="nav navbar-nav">
                <li>
                    <a class="page-scroll" href="index.html">Начало</a>
                </li>
                <li>
                    <a class="page-scroll" href="smart-devices.html">Смарт-устройства</a>
                </li>
                <li>
                    <a class="page-scroll" href="#last">Новини</a>
                </li>
            </ul>
            <ul class="nav navbar-nav navbar-right">
                <li>
                    <a class="page-scroll" data-toggle="modal" title="A free Bootstrap video landing theme" href="#aboutModal">Регистрация</a>
                </li>
            </ul>
        </div>
    </div>
</nav>
<!-- Slideshow -->
<div class="slideshow">
    <script>
        jQuery(document).ready(function ($) {

            var jssor_1_SlideoTransitions = [
                [{b:5500,d:3000,o:-1,r:240,e:{r:2}}],
                [{b:-1,d:1,o:-1,c:{x:51.0,t:-51.0}},{b:0,d:1000,o:1,c:{x:-51.0,t:51.0},e:{o:7,c:{x:7,t:7}}}],
                [{b:-1,d:1,o:-1,sX:9,sY:9},{b:1000,d:1000,o:1,sX:-9,sY:-9,e:{sX:2,sY:2}}],
                [{b:-1,d:1,o:-1,r:-180,sX:9,sY:9},{b:2000,d:1000,o:1,r:180,sX:-9,sY:-9,e:{r:2,sX:2,sY:2}}],
                [{b:-1,d:1,o:-1},{b:3000,d:2000,y:180,o:1,e:{y:16}}],
                [{b:-1,d:1,o:-1,r:-150},{b:7500,d:1600,o:1,r:150,e:{r:3}}],
                [{b:10000,d:2000,x:-379,e:{x:7}}],
                [{b:10000,d:2000,x:-379,e:{x:7}}],
                [{b:-1,d:1,o:-1,r:288,sX:9,sY:9},{b:9100,d:900,x:-1400,y:-660,o:1,r:-288,sX:-9,sY:-9,e:{r:6}},{b:10000,d:1600,x:-200,o:-1,e:{x:16}}]
            ];

            var jssor_1_options = {
                $AutoPlay: true,
                $SlideDuration: 800,
                $SlideEasing: $Jease$.$OutQuint,
                $CaptionSliderOptions: {
                    $Class: $JssorCaptionSlideo$,
                    $Transitions: jssor_1_SlideoTransitions
                },
                $ArrowNavigatorOptions: {
                    $Class: $JssorArrowNavigator$
                },
                $BulletNavigatorOptions: {
                    $Class: $JssorBulletNavigator$
                }
            };

            var jssor_1_slider = new $JssorSlider$("jssor_1", jssor_1_options);

            //responsive code begin
            //you can remove responsive code if you don't want the slider scales while window resizing
            function ScaleSlider() {
                var refSize = jssor_1_slider.$Elmt.parentNode.clientWidth;
                if (refSize) {
                    refSize = Math.min(refSize, 1920);
                    jssor_1_slider.$ScaleWidth(refSize);
                }
                else {
                    window.setTimeout(ScaleSlider, 30);
                }
            }
            ScaleSlider();
            $(window).bind("load", ScaleSlider);
            $(window).bind("resize", ScaleSlider);
            $(window).bind("orientationchange", ScaleSlider);
            //responsive code end
        });
    </script>

    <div id="jssor_1" style="position: relative; margin: 0 auto; top: 0px; left: 0px; width: 1300px; height: 500px; overflow: hidden; visibility: hidden;">
        <!-- Loading Screen -->
        <div data-u="loading" style="position: absolute; top: 0px; left: 0px;">
            <div style="filter: alpha(opacity=70); opacity: 0.7; position: absolute; display: block; top: 0px; left: 0px; width: 100%; height: 100%;"></div>
            <div style="position:absolute;display:block;background:url('img/loading.gif') no-repeat center center;top:0px;left:0px;width:100%;height:100%;"></div>
        </div>
        <div data-u="slides" style="cursor: default; position: relative; top: 0px; left: 0px; width: 1300px; height: 500px; overflow: hidden;">
            <div data-p="225.00" style="display: none;">
                <img data-u="image" src="img/smartphones.jpg" />
                <div style="position: absolute; top: 30px; left: 30px; width: 480px; height: 120px; font-size: 50px; color: #ffffff; line-height: 60px;"></div>
                <div style="position: absolute; top: 300px; left: 30px; width: 480px; height: 120px; font-size: 30px; color: #ffffff; line-height: 38px;"></div>
                <div data-u="caption" data-t="0" style="position: absolute; top: 100px; left: 600px; width: 445px; height: 300px;"></div>
                <div data-u="caption" data-t="5" style="position: absolute; top: 120px; left: 650px; width: 470px; height: 220px;">
                    <div style="position: absolute; top: 4px; left: 45px; width: 379px; height: 213px; overflow: hidden;"></div>
                </div>
            </div>
            <div data-p="225.00" style="display: none;">
                <img data-u="image" src="img/tablets.jpg" />
            </div>
            <div data-p="225.00" style="display: none;">
                <img data-u="image" src="img/laptops.jpg" />
            </div>
        </div>
        <!-- Bullet Navigator -->
        <div data-u="navigator" class="jssorb05" style="bottom:16px;right:16px;" data-autocenter="1">
            <!-- bullet navigator item prototype -->
            <div data-u="prototype" style="width:16px;height:16px;"></div>
        </div>
        <!-- Arrow Navigator -->
        <span data-u="arrowleft" class="jssora22l" style="top:0px;left:12px;width:40px;height:58px;" data-autocenter="2"></span>
        <span data-u="arrowright" class="jssora22r" style="top:0px;right:12px;width:40px;height:58px;" data-autocenter="2"></span>
    </div>
    <!-- #endregion Jssor Slider End -->
</div>

<section id="two">
    <div class="container">
        <div class="row">
            <div class="col-lg-12 text-center">
                <h2 class="text-primary">Смарт-устройства</h2>
                <hr class="primary">
            </div>
        </div>
    </div>
    <div class="container">
        <div class="row">
            <div class="col-md-4 text-center col-sm-6 col-xs-6">
                <div class="thumbnail product-box">
                    <img src="img/iphone6.png" alt="" />
                    <div class="caption">
                        <h3><a href='popup.html' onClick="MyWindow=window.open('popup.html','MyWindow',width=400,height=200); return false;">Смартфони</a></h3>
                        <p>Технически <strong>Характеристики</strong>  </p>
                        <p><a href="#">Новини</a></p>
                        <p>Видео ревю</p>
                        <p><a href="#" class="btn btn-success" role="button">асдад</a> <a href="#" class="btn btn-primary" role="button">Виж още</a></p>
                    </div>
                </div>
            </div>
            <!-- /.col -->
            <div class="col-md-4 text-center col-sm-6 col-xs-6">
                <div class="thumbnail product-box">
                    <img src="img/tablets.png" alt="" />
                    <div class="caption">
                        <h3><a href="#">Таблети </a></h3>
                        <p>Технически <strong>Характеристики</strong>  </p>
                        <p><a href="#">Новини</a></p>
                        <p>Видео ревю</p>
                        <p><a href="#" class="btn btn-success" role="button">дасда</a> <a href="#" class="btn btn-primary" role="button">Виж още</a></p>
                    </div>
                </div>
            </div>
            <!-- /.col -->
            <div class="col-md-4 text-center col-sm-6 col-xs-6">
                <div class="thumbnail product-box">
                    <img src="img/laptops1.jpg" alt="" />
                    <div class="caption">
                        <h3><a href="#">Лаптопи </a></h3>
                        <p>Технически <strong>Характеристики</strong>  </p>
                        <p><a href="#">Новини</a></p>
                        <p>Видео ревю</p>
                        <p><a href="#" class="btn btn-success" role="button">Aасдад</a> <a href="#" class="btn btn-primary" role="button">Виж още</a></p>
                    </div>
                </div>
            </div>
            <!-- /.col -->
        </div>
    </div>
</section>
</body>
</html>