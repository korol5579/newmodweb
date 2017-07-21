<?php   include 'stat.php'; ?>
<!DOCTYPE html>
<html lang="en">

<head>

    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="description" content="">
    <meta name="author" content="">
    <meta name="keywords" content="">
    <title>Modern Web Technologies</title>
    <!--Стили для выезжающего меню-->
    <link rel="stylesheet" type="text/css" href="css/normalize.css" />
    <link rel="stylesheet" type="text/css" href="css/demo.css" />
    <link rel="stylesheet" type="text/css" href="css/icons.css" />
    <link rel="stylesheet" type="text/css" href="css/component.css" />

    <!-- Bootstrap Core CSS -->
    <link href="vendor/bootstrap/css/bootstrap.min.css" rel="stylesheet">

    <!-- Custom Fonts -->
    <link href="vendor/font-awesome/css/font-awesome.min.css" rel="stylesheet" type="text/css">
    <link href='https://fonts.googleapis.com/css?family=Open+Sans:300italic,400italic,600italic,700italic,800italic,400,300,600,700,800' rel='stylesheet' type='text/css'>
    <link href='https://fonts.googleapis.com/css?family=Merriweather:400,300,300italic,400italic,700,700italic,900,900italic' rel='stylesheet' type='text/css'>

    <!-- Plugin CSS -->
    <link href="vendor/magnific-popup/magnific-popup.css" rel="stylesheet">

    <!--Слайдер-->
    <link rel="stylesheet" href="css/pignose.parallaxslider.css" />
    <!--cosmos-->
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/normalize/5.0.0/normalize.min.css">

     <!-- Theme CSS -->
    <link href="css/creative.min.css" rel="stylesheet">

    <!-- HTML5 Shim and Respond.js IE8 support of HTML5 elements and media queries -->
    <!-- WARNING: Respond.js doesn't work if you view the page via file:// -->
    <!--[if lt IE 9]>
        <script src="https://oss.maxcdn.com/libs/html5shiv/3.7.0/html5shiv.js"></script>
        <script src="https://oss.maxcdn.com/libs/respond.js/1.4.2/respond.min.js"></script>
    <![endif]-->
    <script src="js/modernizr.custom.js"></script>
</head>

<body id="page-top">

    <nav id="mainNav" class="navbar navbar-default navbar-fixed-top">
        <div class="container-fluid">
            <!-- Brand and toggle get grouped for better mobile display -->
            <div class="navbar-header">
                <button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#bs-example-navbar-collapse-1">
                    <span class="sr-only">Toggle navigation</span> Menu <i class="fa fa-bars"></i>
                </button>
                <img src="img/icons/code-outlined-programming-signs.png" alt="" id="header-icon">
                <a class="navbar-brand page-scroll" href="#page-top" id="info-tech">HTML5, CSS3, JAVASCRIPT,<br> BOOTSTRAP, JQUERRY, PHP</a>
            </div>

            <!-- Collect the nav links, forms, and other content for toggling -->
            <div class="collapse navbar-collapse" id="bs-example-navbar-collapse-1">
                <ul class="nav navbar-nav navbar-right">
                    <li>
                        <a class="page-scroll" href="#" id="open-popup" data-toggle="modal" data-target=".bs-example-modal-sm">Войти</a>
                    </li>
                  
                </ul>
            </div>
            <!-- /.navbar-collapse -->
        </div>
        <!-- /.container-fluid -->
    </nav>

    <header id="particle-canvas">
        <div class="header-content">
            <div class="header-content-inner">
                <h1 id="homeHeading">Современные Web технологии</h1>
                <p class="header-inner-tech">Front-end, Back-еnd</p>
                <hr>
                <p id="header-content-quality">Стильно, эффективно, профессионально</p>

                <a href="#about" class="btn btn-circle page-scroll">
                  <i class="fa fa-1x fa-angle-double-down animated"></i>
                </a>
            </div>
        </div>        
    </header>




    <section id="about" >
      <div class="container">
        <div class="row">
          <div class="col-lg-8 col-lg-offset-2 text-center">
            <h2 class="section-heading">Здесь представлены различные элементы из которых может
              состоять Ваш сайт.</h2>
              <hr class="light">
              <p class="text-faded">Адаптивный дизайн, кнопки, регистрация, шрифты, различные эффекты, плагины  и другие интересные фичи.</p>
              <a href="#services" class="page-scroll btn btn-default btn-xl sr-button" id="trigger">Например</a>          
            </div>
          </div>
        </div>
      </section>


      <!-- Push Wrapper -->
      <div class="mp-pusher" id="mp-pusher">

        <!-- mp-menu -->
        <nav id="mp-menu" class="mp-menu">
          <div class="mp-level">
            <h2 class="icon icon-world">Выезжающее меню. Дизайн и шрифты могут быть любыми по желанию</h2>
            <ul>
              <li class="icon icon-arrow-left">
                <a class="icon icon-display" href="#">Услуги</a>
                <div class="mp-level">
                  <h2 class="icon icon-display">Devices</h2>
                  <ul>
                    <li class="icon icon-arrow-left">
                      <a class="icon icon-phone" href="#">Mobile Phones</a>
                      <div class="mp-level">
                        <h2>Mobile Phones</h2>
                        <ul>
                          <li><a href="#">Super Smart Phone</a></li>
                          <li><a href="#">Thin Magic Mobile</a></li>
                          <li><a href="#">Performance Crusher</a></li>
                          <li><a href="#">Futuristic Experience</a></li>
                        </ul>
                      </div>
                    </li>
                    <li class="icon icon-arrow-left">
                      <a class="icon icon-tv" href="#">Televisions</a>
                      <div class="mp-level">
                        <h2>Televisions</h2>
                        <ul>
                          <li><a href="#">Flat Superscreen</a></li>
                          <li><a href="#">Gigantic LED</a></li>
                          <li><a href="#">Power Eater</a></li>
                          <li><a href="#">3D Experience</a></li>
                          <li><a href="#">Classic Comfort</a></li>
                        </ul>
                      </div>
                    </li>
                    <li class="icon icon-arrow-left">
                      <a class="icon icon-camera" href="#">Cameras</a>
                      <div class="mp-level">
                        <h2>Cameras</h2>
                        <ul>
                          <li><a href="#">Smart Shot</a></li>
                          <li><a href="#">Power Shooter</a></li>
                          <li><a href="#">Easy Photo Maker</a></li>
                          <li><a href="#">Super Pixel</a></li>
                        </ul>
                      </div>
                    </li>
                  </ul>
                </div>
              </li>
              <li class="icon icon-arrow-left">
                <a class="icon icon-news" href="#">Портфолио</a>
                <div class="mp-level">
                  <h2 class="icon icon-news">Magazines</h2>
                  <ul>
                    <li><a href="#">National Geographic</a></li>
                    <li><a href="#">Scientific American</a></li>
                    <li><a href="#">The Spectator</a></li>
                    <li><a href="#">The Rambler</a></li>
                    <li><a href="#">Physics World</a></li>
                    <li><a href="#">The New Scientist</a></li>
                  </ul>
                </div>
              </li>
              <li class="icon icon-arrow-left">
                <a class="icon icon-shop" href="#">Акции</a>
                <div class="mp-level">
                  <h2 class="icon icon-shop">Store</h2>
                  <ul>
                    <li class="icon icon-arrow-left">
                      <a class="icon icon-t-shirt" href="#">Clothes</a>
                      <div class="mp-level">
                        <h2 class="icon icon-t-shirt">Clothes</h2>
                        <ul>
                          <li class="icon icon-arrow-left">
                            <a class="icon icon-female" href="#">Women's Clothing</a>
                            <div class="mp-level">
                              <h2>Women's Clothing</h2>
                              <ul>
                                <li><a href="#">Tops</a></li>
                                <li><a href="#">Dresses</a></li>
                                <li><a href="#">Trousers</a></li>
                                <li><a href="#">Shoes</a></li>
                                <li><a href="#">Sale</a></li>
                              </ul>
                            </div>
                          </li>
                          <li class="icon icon-arrow-left">
                            <a class="icon icon-male" href="#">Men's Clothing</a>
                            <div class="mp-level">
                              <h2>Men's Clothing</h2>
                              <ul>
                                <li><a href="#">Shirts</a></li>
                                <li><a href="#">Trousers</a></li>
                                <li><a href="#">Shoes</a></li>
                                <li><a href="#">Sale</a></li>
                              </ul>
                            </div>
                          </li>
                        </ul>
                      </div>
                    </li>
                    <li>
                      <a class="icon icon-diamond" href="#">Jewelry</a>
                    </li>
                    <li>
                      <a class="icon icon-music" href="#">Music</a>
                    </li>
                    <li>
                      <a class="icon icon-food" href="#">Grocery</a>
                    </li>
                  </ul>
                </div>
              </li>
              <li><a class="icon icon-photo" href="#">Новости</a></li>
              <li><a class="icon icon-wallet" href="#">Цены</a></li>
            </ul>
          </div>
        </nav>
        <!-- /mp-menu -->

                
                

      </div><!-- /pusher -->



<nav class="menu">
   <input type="checkbox" href="#" class="menu-open" name="menu-open" id="menu-open" />
   <label class="menu-open-button" for="menu-open">
    <span class="lines line-1"></span>
    <span class="lines line-2"></span>
    <span class="lines line-3"></span>
  </label>

   <a href="#" class="menu-item blue"> <i class="fa fa-handshake-o"></i> </a>
   <a href="#" class="menu-item green"> <i class="fa fa-user"></i> </a>
   <a href="#" class="menu-item red"> <i class="fa fa-heart"></i> </a>
   <a href="#" class="menu-item purple"> <i class="fa fa-microphone"></i> </a>
   <a href="#" class="menu-item orange"> <i class="fa fa-star"></i> </a>
   <a href="#" class="menu-item lightblue"> <i class="fa fa-camera"></i> </a>
</nav>

          

    <section id="services">
        <div class="container">
            <div class="row">
                <div class="col-lg-12 text-center">
                    <h2 class="section-heading">Примеры иконок для Вашего сайта</h2>
                    <hr class="primary">
                </div>
            </div>
        </div>
        <div class="container">
            <div class="row">
                <div class="col-lg-3 col-md-6 text-center">
                    <div class="service-box">
                        <i class="fa fa-4x fa-paper-plane-o sr-icons"></i>
                        <h3>Sturdy Templates</h3>
                        <p class="text-muted">Our templates are updated regularly so they don't break.</p>
                    </div>
                </div>
                <div class="col-lg-3 col-md-6 text-center">
                    <div class="service-box">
                        <i class="fa fa-4x fa-thumbs-o-up  sr-icons"></i>
                        <h3>Ready to Ship</h3>
                        <p class="text-muted">You can use this theme as is, or you can make changes!</p>
                    </div>
                </div>
                <div class="col-lg-3 col-md-6 text-center">
                    <div class="service-box">
                        <i class="fa fa-4x fa-bars text-primary sr-icons"></i>
                        <h3>Up to Date</h3>
                        <p class="text-muted">We update dependencies to keep things fresh.</p>
                    </div>
                </div>
                <div class="col-lg-3 col-md-6 text-center">
                    <div class="service-box">
                        <i class="fa fa-4x fa-heart text-primary sr-icons"></i>
                        <h3>Made with Love</h3>
                        <p class="text-muted">You have to make your websites with love these days!</p>
                    </div>
                </div>
            </div>
             <div class="row">
                <div class="col-lg-3 col-md-6 text-center">
                    <div class="service-box">
                        <i class="fa fa-4x fa-envelope-open sr-icons"></i>
                        <h3>Sturdy Templates</h3>
                        <p class="text-muted">Our templates are updated regularly so they don't break.</p>
                    </div>
                </div>
                <div class="col-lg-3 col-md-6 text-center">
                    <div class="service-box">
                        <i class="fa fa-4x fa fa-handshake-o  sr-icons"></i>
                        <h3>Ready to Ship</h3>
                        <p class="text-muted">You can use this theme as is, or you can make changes!</p>
                    </div>
                </div>
                <div class="col-lg-3 col-md-6 text-center">
                    <div class="service-box">
                        <i class="fa fa-4x  fa-check-circle text-primary sr-icons"></i>
                        <h3>Up to Date</h3>
                        <p class="text-muted">We update dependencies to keep things fresh.</p>
                    </div>
                </div>
                <div class="col-lg-3 col-md-6 text-center">
                    <div class="service-box">
                        <i class="fa fa-4x fa-eye text-primary sr-icons"></i>
                        <h3>Made with Love</h3>
                        <p class="text-muted">You have to make your websites with love these days!</p>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <hr>

<section id="social-btns-wrapper">
    <div class="social-btns">
      <a class="btn facebook" href="https://www.facebook.com" data-link="Facebook" title="Facebook">
        <i class="fa  fa-facebook"></i>
      </a>
      <a class="btn twitter" href="https://twitter.com" data-link="Twitter"  title="Twitter"><i class="fa fa-twitter"></i></a>
      <a class="btn google" href="#" data-link="Google" title="Google"><i class="fa fa-google"></i></a>
      <a class="btn dribbble" href="#" data-link="Dribbble" title="Dribbble"><i class="fa fa-dribbble"></i></a>
      <a class="btn skype" href="#" data-link="Skype" title="Skype"><i class="fa fa-skype"></i></a>
      <a class="btn telegram" href="#" data-link="Telegram" title="Telegram"><i class="fa fa-telegram "></i></a>
      <a class="btn vk" href="#" data-link="VK" title="VK"><i class="fa fa-vk"></i></a>
      <a class="btn vimeo" href="#" data-link="Vimeo" title="Vimeo"><i class="fa fa-vimeo"></i></a>
      <a class="btn youtube" href="#" data-link="Youtube" title="Youtube"><i class="fa fa-youtube-play"></i></a>
      <a class="btn instagram" href="#" data-link="Instagram" title="Instagram"><i class="fa fa-instagram"></i></a>
    </div>
    <div class="custom-tooltips">
      <div class="custom-tooltip"></div>
    </div>
</section>

<p>Эффект №3, такой-то такой-то, делает то-то то-то</p>
    <section class="no-padding" id="portfolio">
        <div class="container-fluid">
            <div class="row no-gutter popup-gallery">
                <div class="col-lg-4 col-sm-6">
                    <a href="img/portfolio/fullsize/7.jpg" class="portfolio-box">
                        <img src="img/portfolio/thumbnails/7.jpg" class="img-responsive" alt="">
                        <div class="portfolio-box-caption">
                            <div class="portfolio-box-caption-content">
                                <div class="project-category text-faded">
                                    Категория
                                </div>
                                <div class="project-name">
                                    Старинные авто
                                </div>
                            </div>
                        </div>
                    </a>
                </div>
                <div class="col-lg-4 col-sm-6">
                    <a href="img/portfolio/fullsize/8.jpg" class="portfolio-box">
                        <img src="img/portfolio/thumbnails/8.jpg" class="img-responsive" alt="">
                        <div class="portfolio-box-caption">
                            <div class="portfolio-box-caption-content">
                                <div class="project-category text-faded">
                                    Категория
                                </div>
                                <div class="project-name">
                                    Ferrari
                                </div>
                            </div>
                        </div>
                    </a>
                </div>
                <div class="col-lg-4 col-sm-6">
                    <a href="img/portfolio/fullsize/9.jpg" class="portfolio-box">
                        <img src="img/portfolio/thumbnails/9.jpg" class="img-responsive" alt="">
                        <div class="portfolio-box-caption">
                            <div class="portfolio-box-caption-content">
                                <div class="project-category text-faded">
                                    Категория
                                </div>
                                <div class="project-name">
                                    Камаз
                                </div>
                            </div>
                        </div>
                    </a>
                </div>
                <div class="col-lg-4 col-sm-6">
                    <a href="img/portfolio/fullsize/10.jpg" class="portfolio-box">
                        <img src="img/portfolio/thumbnails/10.jpg" class="img-responsive" alt="">
                        <div class="portfolio-box-caption">
                            <div class="portfolio-box-caption-content">
                                <div class="project-category text-faded">
                                    Категория
                                </div>
                                <div class="project-name">
                                    Авто СССР
                                </div>
                            </div>
                        </div>
                    </a>
                </div>
                <div class="col-lg-4 col-sm-6">
                    <a href="img/portfolio/fullsize/11.jpg" class="portfolio-box">
                        <img src="img/portfolio/thumbnails/11.jpg" class="img-responsive" alt="">
                        <div class="portfolio-box-caption">
                            <div class="portfolio-box-caption-content">
                                <div class="project-category text-faded">
                                    Категория
                                </div>
                                <div class="project-name">
                                    Mercedes
                                </div>
                            </div>
                        </div>
                    </a>
                </div>
                <div class="col-lg-4 col-sm-6">
                    <a href="img/portfolio/fullsize/12.jpg" class="portfolio-box">
                        <img src="img/portfolio/thumbnails/12.jpg" class="img-responsive" alt="">
                        <div class="portfolio-box-caption">
                            <div class="portfolio-box-caption-content">
                                <div class="project-category text-faded">
                                    Категория
                                </div>
                                <div class="project-name">
                                    Ford Mustang
                                </div>
                            </div>
                        </div>
                    </a>
                </div>
            </div>
        </div>

    </section>

    <aside class="bg-dark">
        <div class="container text-center">
            <div class="call-to-action">
                <h2>Похожие эффекты</h2>
                <a href="http://startbootstrap.com/template-overviews/creative/" class="btn btn-default btn-xl sr-button">Посмотреть</a>
            </div>
        </div>
    </aside>

    <hr>
    <!--Слайдер-->
    <p>Слайдеры</p>
<section id="visual-wrapper">
  <div id="visual">
      <div class="slide-visual">
        <!-- Slide Image Area (1000 x 424) -->
        <ul class="slide-group">
          <li><img src="slider_img/visual_slide01.jpg" alt="slider image" /></li>
          <li><img src="slider_img/visual_slide02.jpg" alt="slider image" /></li>
          <li><img src="slider_img/visual_slide03.jpg" alt="slider image" /></li>
          <li><img src="slider_img/visual_slide04.jpg" alt="slider image" /></li>
          <li><img src="slider_img/visual_slide05.jpg" alt="slider image" /></li>
          <li><img src="slider_img/visual_slide06.jpg" alt="slider image" /></li>
        </ul>
      </div>
    <div class="slide-controller">
      <a href="#" class="btn-prev"><img src="slider_img/btn_prev.png" alt="prev slide" /></a>
      <a href="#" class="btn-play"><img src="slider_img/btn_play_2.png" alt="start slide" /></a>
      <a href="#" class="btn-pause"><img src="slider_img/btn_pause.png" alt="pause slide" /></a>
      <a href="#" class="btn-next"><img src="slider_img/btn_next.png" alt="next slide" /></a>
    </div>
  </div>
</section>
  
    <a href="#services" class="page-scroll btn btn-default btn-xl sr-button" style="background-color: #000;color:#fff;">Ещё</a>

  
<div class="tic-tac-toe">
  <input class="player-1 left first-column top first-row first-diagonal turn-1" id="block1-1-1" type="radio"/>
  <label class="turn-1" for="block1-1-1"></label>
  <input class="player-1 middle second-column top first-row turn-1" id="block1-1-2" type="radio"/>
  <label class="turn-1" for="block1-1-2"></label>
  <input class="player-1 right third-column top first-row second-diagonal turn-1" id="block1-1-3" type="radio"/>
  <label class="turn-1" for="block1-1-3"></label>
  <input class="player-1 left first-column center second-row turn-1" id="block1-2-1" type="radio"/>
  <label class="turn-1" for="block1-2-1"></label>
  <input class="player-1 middle second-column center second-row first-diagonal second-diagonal turn-1" id="block1-2-2" type="radio"/>
  <label class="turn-1" for="block1-2-2"></label>
  <input class="player-1 right third-column center second-row turn-1" id="block1-2-3" type="radio"/>
  <label class="turn-1" for="block1-2-3"></label>
  <input class="player-1 left first-column bottom third-row second-diagonal turn-1" id="block1-3-1" type="radio"/>
  <label class="turn-1" for="block1-3-1"></label>
  <input class="player-1 middle second-column bottom third-row turn-1" id="block1-3-2" type="radio"/>
  <label class="turn-1" for="block1-3-2"></label>
  <input class="player-1 right third-column bottom third-row first-diagonal turn-1" id="block1-3-3" type="radio"/>
  <label class="turn-1" for="block1-3-3"></label>
  <input class="player-2 left first-column top first-row first-diagonal turn-2" id="block2-1-1" type="radio"/>
  <label class="turn-2" for="block2-1-1"></label>
  <input class="player-2 middle second-column top first-row turn-2" id="block2-1-2" type="radio"/>
  <label class="turn-2" for="block2-1-2"></label>
  <input class="player-2 right third-column top first-row second-diagonal turn-2" id="block2-1-3" type="radio"/>
  <label class="turn-2" for="block2-1-3"></label>
  <input class="player-2 left first-column center second-row turn-2" id="block2-2-1" type="radio"/>
  <label class="turn-2" for="block2-2-1"></label>
  <input class="player-2 middle second-column center second-row first-diagonal second-diagonal turn-2" id="block2-2-2" type="radio"/>
  <label class="turn-2" for="block2-2-2"></label>
  <input class="player-2 right third-column center second-row turn-2" id="block2-2-3" type="radio"/>
  <label class="turn-2" for="block2-2-3"></label>
  <input class="player-2 left first-column bottom third-row second-diagonal turn-2" id="block2-3-1" type="radio"/>
  <label class="turn-2" for="block2-3-1"></label>
  <input class="player-2 middle second-column bottom third-row turn-2" id="block2-3-2" type="radio"/>
  <label class="turn-2" for="block2-3-2"></label>
  <input class="player-2 right third-column bottom third-row first-diagonal turn-2" id="block2-3-3" type="radio"/>
  <label class="turn-2" for="block2-3-3"></label>
  <input class="player-1 left first-column top first-row first-diagonal turn-3" id="block3-1-1" type="radio"/>
  <label class="turn-3" for="block3-1-1"></label>
  <input class="player-1 middle second-column top first-row turn-3" id="block3-1-2" type="radio"/>
  <label class="turn-3" for="block3-1-2"></label>
  <input class="player-1 right third-column top first-row second-diagonal turn-3" id="block3-1-3" type="radio"/>
  <label class="turn-3" for="block3-1-3"></label>
  <input class="player-1 left first-column center second-row turn-3" id="block3-2-1" type="radio"/>
  <label class="turn-3" for="block3-2-1"></label>
  <input class="player-1 middle second-column center second-row first-diagonal second-diagonal turn-3" id="block3-2-2" type="radio"/>
  <label class="turn-3" for="block3-2-2"></label>
  <input class="player-1 right third-column center second-row turn-3" id="block3-2-3" type="radio"/>
  <label class="turn-3" for="block3-2-3"></label>
  <input class="player-1 left first-column bottom third-row second-diagonal turn-3" id="block3-3-1" type="radio"/>
  <label class="turn-3" for="block3-3-1"></label>
  <input class="player-1 middle second-column bottom third-row turn-3" id="block3-3-2" type="radio"/>
  <label class="turn-3" for="block3-3-2"></label>
  <input class="player-1 right third-column bottom third-row first-diagonal turn-3" id="block3-3-3" type="radio"/>
  <label class="turn-3" for="block3-3-3"></label>
  <input class="player-2 left first-column top first-row first-diagonal turn-4" id="block4-1-1" type="radio"/>
  <label class="turn-4" for="block4-1-1"></label>
  <input class="player-2 middle second-column top first-row turn-4" id="block4-1-2" type="radio"/>
  <label class="turn-4" for="block4-1-2"></label>
  <input class="player-2 right third-column top first-row second-diagonal turn-4" id="block4-1-3" type="radio"/>
  <label class="turn-4" for="block4-1-3"></label>
  <input class="player-2 left first-column center second-row turn-4" id="block4-2-1" type="radio"/>
  <label class="turn-4" for="block4-2-1"></label>
  <input class="player-2 middle second-column center second-row first-diagonal second-diagonal turn-4" id="block4-2-2" type="radio"/>
  <label class="turn-4" for="block4-2-2"></label>
  <input class="player-2 right third-column center second-row turn-4" id="block4-2-3" type="radio"/>
  <label class="turn-4" for="block4-2-3"></label>
  <input class="player-2 left first-column bottom third-row second-diagonal turn-4" id="block4-3-1" type="radio"/>
  <label class="turn-4" for="block4-3-1"></label>
  <input class="player-2 middle second-column bottom third-row turn-4" id="block4-3-2" type="radio"/>
  <label class="turn-4" for="block4-3-2"></label>
  <input class="player-2 right third-column bottom third-row first-diagonal turn-4" id="block4-3-3" type="radio"/>
  <label class="turn-4" for="block4-3-3"></label>
  <input class="player-1 left first-column top first-row first-diagonal turn-5" id="block5-1-1" type="radio"/>
  <label class="turn-5" for="block5-1-1"></label>
  <input class="player-1 middle second-column top first-row turn-5" id="block5-1-2" type="radio"/>
  <label class="turn-5" for="block5-1-2"></label>
  <input class="player-1 right third-column top first-row second-diagonal turn-5" id="block5-1-3" type="radio"/>
  <label class="turn-5" for="block5-1-3"></label>
  <input class="player-1 left first-column center second-row turn-5" id="block5-2-1" type="radio"/>
  <label class="turn-5" for="block5-2-1"></label>
  <input class="player-1 middle second-column center second-row first-diagonal second-diagonal turn-5" id="block5-2-2" type="radio"/>
  <label class="turn-5" for="block5-2-2"></label>
  <input class="player-1 right third-column center second-row turn-5" id="block5-2-3" type="radio"/>
  <label class="turn-5" for="block5-2-3"></label>
  <input class="player-1 left first-column bottom third-row second-diagonal turn-5" id="block5-3-1" type="radio"/>
  <label class="turn-5" for="block5-3-1"></label>
  <input class="player-1 middle second-column bottom third-row turn-5" id="block5-3-2" type="radio"/>
  <label class="turn-5" for="block5-3-2"></label>
  <input class="player-1 right third-column bottom third-row first-diagonal turn-5" id="block5-3-3" type="radio"/>
  <label class="turn-5" for="block5-3-3"></label>
  <input class="player-2 left first-column top first-row first-diagonal turn-6" id="block6-1-1" type="radio"/>
  <label class="turn-6" for="block6-1-1"></label>
  <input class="player-2 middle second-column top first-row turn-6" id="block6-1-2" type="radio"/>
  <label class="turn-6" for="block6-1-2"></label>
  <input class="player-2 right third-column top first-row second-diagonal turn-6" id="block6-1-3" type="radio"/>
  <label class="turn-6" for="block6-1-3"></label>
  <input class="player-2 left first-column center second-row turn-6" id="block6-2-1" type="radio"/>
  <label class="turn-6" for="block6-2-1"></label>
  <input class="player-2 middle second-column center second-row first-diagonal second-diagonal turn-6" id="block6-2-2" type="radio"/>
  <label class="turn-6" for="block6-2-2"></label>
  <input class="player-2 right third-column center second-row turn-6" id="block6-2-3" type="radio"/>
  <label class="turn-6" for="block6-2-3"></label>
  <input class="player-2 left first-column bottom third-row second-diagonal turn-6" id="block6-3-1" type="radio"/>
  <label class="turn-6" for="block6-3-1"></label>
  <input class="player-2 middle second-column bottom third-row turn-6" id="block6-3-2" type="radio"/>
  <label class="turn-6" for="block6-3-2"></label>
  <input class="player-2 right third-column bottom third-row first-diagonal turn-6" id="block6-3-3" type="radio"/>
  <label class="turn-6" for="block6-3-3"></label>
  <input class="player-1 left first-column top first-row first-diagonal turn-7" id="block7-1-1" type="radio"/>
  <label class="turn-7" for="block7-1-1"></label>
  <input class="player-1 middle second-column top first-row turn-7" id="block7-1-2" type="radio"/>
  <label class="turn-7" for="block7-1-2"></label>
  <input class="player-1 right third-column top first-row second-diagonal turn-7" id="block7-1-3" type="radio"/>
  <label class="turn-7" for="block7-1-3"></label>
  <input class="player-1 left first-column center second-row turn-7" id="block7-2-1" type="radio"/>
  <label class="turn-7" for="block7-2-1"></label>
  <input class="player-1 middle second-column center second-row first-diagonal second-diagonal turn-7" id="block7-2-2" type="radio"/>
  <label class="turn-7" for="block7-2-2"></label>
  <input class="player-1 right third-column center second-row turn-7" id="block7-2-3" type="radio"/>
  <label class="turn-7" for="block7-2-3"></label>
  <input class="player-1 left first-column bottom third-row second-diagonal turn-7" id="block7-3-1" type="radio"/>
  <label class="turn-7" for="block7-3-1"></label>
  <input class="player-1 middle second-column bottom third-row turn-7" id="block7-3-2" type="radio"/>
  <label class="turn-7" for="block7-3-2"></label>
  <input class="player-1 right third-column bottom third-row first-diagonal turn-7" id="block7-3-3" type="radio"/>
  <label class="turn-7" for="block7-3-3"></label>
  <input class="player-2 left first-column top first-row first-diagonal turn-8" id="block8-1-1" type="radio"/>
  <label class="turn-8" for="block8-1-1"></label>
  <input class="player-2 middle second-column top first-row turn-8" id="block8-1-2" type="radio"/>
  <label class="turn-8" for="block8-1-2"></label>
  <input class="player-2 right third-column top first-row second-diagonal turn-8" id="block8-1-3" type="radio"/>
  <label class="turn-8" for="block8-1-3"></label>
  <input class="player-2 left first-column center second-row turn-8" id="block8-2-1" type="radio"/>
  <label class="turn-8" for="block8-2-1"></label>
  <input class="player-2 middle second-column center second-row first-diagonal second-diagonal turn-8" id="block8-2-2" type="radio"/>
  <label class="turn-8" for="block8-2-2"></label>
  <input class="player-2 right third-column center second-row turn-8" id="block8-2-3" type="radio"/>
  <label class="turn-8" for="block8-2-3"></label>
  <input class="player-2 left first-column bottom third-row second-diagonal turn-8" id="block8-3-1" type="radio"/>
  <label class="turn-8" for="block8-3-1"></label>
  <input class="player-2 middle second-column bottom third-row turn-8" id="block8-3-2" type="radio"/>
  <label class="turn-8" for="block8-3-2"></label>
  <input class="player-2 right third-column bottom third-row first-diagonal turn-8" id="block8-3-3" type="radio"/>
  <label class="turn-8" for="block8-3-3"></label>
  <input class="player-1 left first-column top first-row first-diagonal turn-9" id="block9-1-1" type="radio"/>
  <label class="turn-9" for="block9-1-1"></label>
  <input class="player-1 middle second-column top first-row turn-9" id="block9-1-2" type="radio"/>
  <label class="turn-9" for="block9-1-2"></label>
  <input class="player-1 right third-column top first-row second-diagonal turn-9" id="block9-1-3" type="radio"/>
  <label class="turn-9" for="block9-1-3"></label>
  <input class="player-1 left first-column center second-row turn-9" id="block9-2-1" type="radio"/>
  <label class="turn-9" for="block9-2-1"></label>
  <input class="player-1 middle second-column center second-row first-diagonal second-diagonal turn-9" id="block9-2-2" type="radio"/>
  <label class="turn-9" for="block9-2-2"></label>
  <input class="player-1 right third-column center second-row turn-9" id="block9-2-3" type="radio"/>
  <label class="turn-9" for="block9-2-3"></label>
  <input class="player-1 left first-column bottom third-row second-diagonal turn-9" id="block9-3-1" type="radio"/>
  <label class="turn-9" for="block9-3-1"></label>
  <input class="player-1 middle second-column bottom third-row turn-9" id="block9-3-2" type="radio"/>
  <label class="turn-9" for="block9-3-2"></label>
  <input class="player-1 right third-column bottom third-row first-diagonal turn-9" id="block9-3-3" type="radio"/>
  <label class="turn-9" for="block9-3-3"></label>
  <div class="end">
    <h3></h3><a href="">Restart</a>
  </div>
</div>

<!-- Beauty animated buttons -->
<section class="custom-buttons">
  <div class="container-fluid">
    <a href="https://twitter.com/Dave_Conner" class="btn-beauty btn-1">
      <svg>
        <rect x="0" y="0" fill="none" width="100%" height="100%"/>
      </svg>
     Hover
    </a>
    <!--svg hover inspired by https://codepen.io/karimbalaa/pen/qERbBY?editors=110 -->
    <!--End of Button 1 -->
    
    <a href="https://twitter.com/Dave_Conner" class="btn-beauty btn-2">Hover</a> 
    <!--End of Button 2 -->
    
    <a href="https://twitter.com/Dave_Conner" class="btn-beauty btn-3">Hover</a> 
    <!--End of Button 3 -->
    
    <a href="https://twitter.com/Dave_Conner" class="btn-beauty btn-4"><span>Hover</span></a> 
    <!--End of Button 4 -->
    
    <a href="https://twitter.com/Dave_Conner" class="btn-beauty btn-5">Hover</a> 
    <!--End of Button 5 -->
    
    <p>Follow on <a href="https://twitter.com/Dave_Conner" target="_blank">Twitter</a></p>
  </div>
  
</section>

    <section id="contact">
        <div class="container">
            <div class="row">
                <div class="col-lg-8 col-lg-offset-2 text-center">
                    <h2 class="section-heading">Мои контакты</h2>
                    <hr class="primary">
                    <p>Вам нужен современный сайт? Добавьте меня в скайпе или напишите на почту,
                    обсудим подробности!</p>
                </div>
                <div class="col-lg-4 col-lg-offset-2 text-center">
                    <i class="fa fa-skype fa-3x sr-contact"></i>
                    <p>korol5579</p>
                </div>
                <div class="col-lg-4 text-center">
                    <i class="fa fa-envelope-o fa-3x sr-contact"></i>
                    <p><a href="mailto:your-email@your-domain.com">feedback@startbootstrap.com</a></p>
                </div>
            </div>
        </div>
    </section>
<!--popup-->


<div class="modal fade bs-example-modal-sm" tabindex="-1" role="dialog" aria-labelledby="mySmallModalLabel">
  <div class="modal-dialog modal-sm" role="document">
    <div class="modal-content">
        <div>

          <!-- Nav tabs -->
          <ul class="nav nav-tabs" role="tablist">
            <li role="presentation" class="active"><a href="#form-enter" aria-controls="form-enter" role="tab" data-toggle="tab">Вход</a></li>
            <li role="presentation"><a href="#form-registration" aria-controls="form-registration" role="tab" data-toggle="tab">Регистрация</a></li>
          </ul>

          <!-- Tab panes -->
          <div class="tab-content">
            <div role="tabpanel" class="tab-pane active" id="form-enter">
                <form>
                  <div class="form-group">
                    <label for="exampleInputEmail1">Email</label>
                    <input type="email" class="form-control" id="exampleInputEmail1" placeholder="Введите login">
                  </div>
                  <div class="form-group">
                    <label for="exampleInputPassword1">Password</label>
                    <input type="password" class="form-control" id="exampleInputPassword1" placeholder="Введите пароль">
                  </div>
                  <button type="submit" class="btn btn-primary">Войти</button>
                  <p>Забыли login или пароль?</p><br> 
                  <span>И увидеть больше интересных эффектов, плагинов, фичей и возможностей.</span>
                </form>
            </div>
            <div role="tabpanel" class="tab-pane" id="form-registration">
              <form>
                  <div class="form-group">
                    <label for="exampleInputEmail1">Email</label>
                    <input type="email" class="form-control" id="exampleInputEmail1" placeholder="Введите адрес электронной почты">
                  </div>
                  <div class="form-group">
                    <label for="exampleInputPassword1">Password</label>
                    <input type="password" class="form-control" id="exampleInputPassword1" 
                    placeholder="Введите пароль">
                  </div>
                  <div class="form-group">
                    <input type="password" class="form-control" id="exampleInputPassword2" placeholder="Повторите пароль">
                  </div>

                  <button type="submit" class="btn btn-primary">Зарегистрироваться</button>
                </form>
            </div>
          </div>

        </div>
    </div>
  </div>
</div>


<div class="container">
    <h4>Hamburger Icon Animations</h4>
    <div class="row">
      <div class="col-sm-2">
        <div class="hamburger" id="hamburger-1">
          <span class="line"></span>
          <span class="line"></span>
          <span class="line"></span>
        </div>
      </div>
      <div class="col-sm-2">
        <div class="hamburger" id="hamburger-2">
          <span class="line"></span>
          <span class="line"></span>
          <span class="line"></span>
        </div>
      </div>
      <div class="col-sm-2">
        <div class="hamburger" id="hamburger-3">
          <span class="line"></span>
          <span class="line"></span>
          <span class="line"></span>
        </div>
      </div>
      <div class="col-sm-2">
        <div class="hamburger" id="hamburger-4">
          <span class="line"></span>
          <span class="line"></span>
          <span class="line"></span>
        </div>
      </div>
      <div class="col-sm-2">
        <div class="hamburger" id="hamburger-5">
          <span class="line"></span>
          <span class="line"></span>
          <span class="line"></span>
        </div>
      </div>
      <div class="col-sm-2">
        <div class="hamburger" id="hamburger-6">
          <span class="line"></span>
          <span class="line"></span>
          <span class="line"></span>
        </div>
      </div>
      <div class="col-sm-2">
        <div class="hamburger" id="hamburger-7">
          <span class="line"></span>
          <span class="line"></span>
          <span class="line"></span>
        </div>
      </div>
      <div class="col-sm-2">
        <div class="hamburger" id="hamburger-8">
          <span class="line"></span>
          <span class="line"></span>
          <span class="line"></span>
        </div>
      </div>
      <div class="col-sm-2">
        <div class="hamburger" id="hamburger-9">
          <span class="line"></span>
          <span class="line"></span>
          <span class="line"></span>
        </div>
      </div>
      <div class="col-sm-2">
        <div class="hamburger" id="hamburger-10">
          <span class="line"></span>
          <span class="line"></span>
          <span class="line"></span>
        </div>
      </div>
      <div class="col-sm-2">
        <div class="hamburger" id="hamburger-11">
          <span class="line"></span>
          <span class="line"></span>
          <span class="line"></span>
        </div>
      </div>
      <div class="col-sm-2">
        <div class="hamburger" id="hamburger-12">
          <span class="line"></span>
          <span class="line"></span>
          <span class="line"></span>
        </div>
      </div>
    </div>
  </div>
  <!-- Анимирование лого на CSS -->
 <div class="animated-logo">  
    <p>
    Эффект на CSS
    <span>
      New Modern Web
    </span>
    &mdash; Без применения JavaScript &mdash;
  </p>
</div>
<!--Выезжающее слева меню на CSS-->

<section id="typing">
  <div class="container">
    <div class="row">
      <div class="col-md-4">
        <span class="type-example"></span>
      </div>
      <div class="col-md-4"></div>
      <div class="col-md-4"></div>
    </div>
  </div>
</section>
  
  

 <a href="#" class="btn btn-circle page-scroll" id="arrow-up-scroll">
                            <i class="fa fa-1x fa-angle-double-up animated"></i>
                </a>


 <div class="container demo">
   <div class="content">
      <div id="large-header" class="large-header">
         <canvas id="demo-canvas"></canvas>
         <h1 class="main-title"><span class="thin">Explore</span> Space</h1>
      </div>
   </div>
</div>

  <footer class="flex-rw">
  
  <ul class="footer-list-top">
    <li>
      <h4 class="footer-list-header">About Pavilion</h4></li>
    <li><a href='/shop/about-mission' class="generic-anchor footer-list-anchor" itemprop="significantLink">ИНТЕРЕСНОЕ</a></li>
    <li><a href='/promos.html' class="generic-anchor footer-list-anchor" itemprop="significantLink">ШРИФТЫ</a></li>
    <li><a href='/retailers/new-retailers.html' class="generic-anchor footer-list-anchor" itemprop="significantLink">СЛАЙДЕРЫ</a></li>

    <li><a href='/job-openings.html' itemprop="significantLink" class="generic-anchor footer-list-anchor">КНОПКИ</a></li>

    <li><a href='/shop/about-show-schedule' class="generic-anchor footer-list-anchor" itemprop="significantLink">EVENTS</a></li>
  </ul>
  <ul class="footer-list-top">
    <li>
      <h4 class="footer-list-header">The Gift Selection</h4></li>


    <li><a href='/Angels/cat/id/70' class="generic-anchor footer-list-anchor">ANGEL FIGURINES</a></li>
    <li><a href='/Home-Decor/cat/id/64' class="generic-anchor footer-list-anchor">HOME DECOR</a></li>
    <li><a href='/Mugs/cat/id/32' class="generic-anchor footer-list-anchor">MUGS</a></li>
    <li><a href='/Pet-Lover/cat/id/108' class="generic-anchor footer-list-anchor">PET LOVER</a></li>
    <li><a href='/Ladies-Accessories/cat/id/117' class="generic-anchor footer-list-anchor" target="_blank">HANDBAGS & JEWELRY</a></li>
  </ul>
  <ul class="footer-list-top">
    <li id='help'>
      <h4 class="footer-list-header">Please Help Me</h4></li>
    <li><a href='/shop/about-contact' class="generic-anchor footer-list-anchor" itemprop="significantLink">CONTACT</a></li>
    <li><a href='/faq.html' class="generic-anchor footer-list-anchor" itemprop="significantLink">FAQ</a></li>
    <li id='find-a-store'><a href='/shop/store-locator' class="generic-anchor footer-list-anchor" itemprop="significantLink">STORE LOCATOR</a></li>
    <li id='user-registration'><a href='/shop/user-registration?URL=' class="generic-anchor footer-list-anchor" itemprop="significantLink">NEW USERS</a></li>
    <li id='order-tracking'><a href='/shop/order-status' itemprop="significantLink" class="generic-anchor footer-list-anchor">ORDER STATUS</a></li>
  </ul>
  <section class="footer-social-section flex-rw">
      <span class="footer-social-overlap footer-social-connect">
      Front-end <span class="footer-social-small">with</span> Back-end
      </span>
      <span class="footer-social-overlap footer-social-icons-wrapper">
      <a href="https://www.pinterest.com/paviliongift/" class="generic-anchor" target="_blank" title="Pinterest" itemprop="significantLink"><i class="fa fa-pinterest"></i></a>
      <a href="https://www.facebook.com/paviliongift" class="generic-anchor" target="_blank" title="Facebook" itemprop="significantLink"><i class="fa fa-facebook"></i></a>
      <a href="https://twitter.com/PavilionGiftCo" class="generic-anchor" target="_blank" title="Twitter" itemprop="significantLink"><i class="fa fa-twitter"></i></a>
      <a href="http://instagram.com/paviliongiftcompany" class="generic-anchor" target="_blank" title="Instagram" itemprop="significantLink"><i class="fa fa-instagram"></i></a>
      <a href="https://www.youtube.com/channel/UCYgUODvd0qXbu_LkUWpTVEg" class="generic-anchor" target="_blank" title="Youtube" itemprop="significantLink"><i class="fa fa-youtube"></i></a>
      <a href="https://plus.google.com/+Paviliongift/posts" class="generic-anchor" target="_blank" title="Google Plus" itemprop="significantLink"><i class="fa fa-google-plus"></i></a>
      </span>
  </section>
  <section class="footer-bottom-section flex-rw">
<div class="footer-bottom-wrapper">   
 <i class="fa fa-copyright" role="copyright"></i> New Mod Web 2017<!--<address class="footer-address" role="company address">Bergen, NY</address><span class="footer-bottom-rights"> - All Rights Reserved - </span> -->
    </div>
    <div class="footer-bottom-wrapper">
    <a href="/terms-of-use.html" class="generic-anchor" rel="nofollow">О нас</a> | <a href="/privacy-policy.html" class="generic-anchor" rel="nofollow">О сайте</a>
      </div>
  </section>
</footer>

 
    <!-- jQuery -->
    <script src="vendor/jquery/jquery.min.js"></script>

    <!-- Bootstrap Core JavaScript - http://getbootstrap.com/javascript -->
    <script src="vendor/bootstrap/js/bootstrap.min.js"></script>

    <!-- Plugin JavaScript -->
    <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery-easing/1.3/jquery.easing.min.js"></script>
    <!--Вот так будет работать локально, качаем, вставляем в папку
    Подключаем вот так: <script src="js/jquery.easing.min"></script>
    -->

    <script type="text/javascript" src="js/pignose.parallaxslider.js"></script>

    <script src="vendor/scrollreveal/scrollreveal.min.js"></script>

    <script src="vendor/magnific-popup/jquery.magnific-popup.min.js"></script>
  
    
    <script src="js/classie.js"></script>
    <script src="js/mlpushmenu.js"></script>
    <!--Бегущие буквы-->
    <script src="js/typed.js"></script>
    <script src="js/particle-network.js"></script>
    <!--cosmos-->
      <script src='https://s3-us-west-2.amazonaws.com/s.cdpn.io/499416/TweenLite.min.js'></script>
<script src='https://s3-us-west-2.amazonaws.com/s.cdpn.io/499416/EasePack.min.js'></script>
<script src='https://s3-us-west-2.amazonaws.com/s.cdpn.io/499416/demo.js'></script>
    <!-- Theme JavaScript -->
    <script src="js/creative.js"></script>



</body>

</html>
