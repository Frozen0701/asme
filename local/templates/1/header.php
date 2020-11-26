<?if(!defined("B_PROLOG_INCLUDED") || B_PROLOG_INCLUDED!==true)die();
IncludeTemplateLangFile(__FILE__);
?>

<!DOCTYPE html>
<html lang="ru">
  <head>
      <?$APPLICATION->ShowHead();?>
      <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta name="description" content="Developed By M Abdur Rokib Promy">
    <meta name="author" content="cosmic">
    <meta name="keywords" content="Bootstrap 3, Template, Theme, Responsive, Corporate, Business">
    <link rel="shortcut icon" href="<?=SITE_TEMPLATE_PATH?>/img/link-icon.png">

      <title><?$APPLICATION->ShowTitle()?></title>
      <?
      $APPLICATION->AddHeadScript(SITE_TEMPLATE_PATH.'/js/parallax-slider/modernizr.custom.28468.js');
      $APPLICATION->AddHeadScript(SITE_TEMPLATE_PATH.'/js/html5shiv.js');
      $APPLICATION->AddHeadScript(SITE_TEMPLATE_PATH.'/js/respond.min.js');

      $APPLICATION->SetAdditionalCss(SITE_TEMPLATE_PATH.'/css/bootstrap.min.css');
      $APPLICATION->SetAdditionalCss(SITE_TEMPLATE_PATH.'/css/theme.css');
      $APPLICATION->SetAdditionalCss(SITE_TEMPLATE_PATH.'/css/bootstrap-reset.css');
      $APPLICATION->SetAdditionalCss(SITE_TEMPLATE_PATH.'/assets/font-awesome/css/font-awesome.css');

      $APPLICATION->SetAdditionalCss(SITE_TEMPLATE_PATH.'/css/flexslider.css');
      $APPLICATION->SetAdditionalCss(SITE_TEMPLATE_PATH.'/assets/bxslider/jquery.bxslider.css');
      $APPLICATION->SetAdditionalCss(SITE_TEMPLATE_PATH.'/css/animate.css');
      $APPLICATION->SetAdditionalCss(SITE_TEMPLATE_PATH.'/assets/owlcarousel/owl.carousel.css');
      $APPLICATION->SetAdditionalCss(SITE_TEMPLATE_PATH.'/assets/owlcarousel/owl.theme.css');
      $APPLICATION->SetAdditionalCss(SITE_TEMPLATE_PATH.'/css/superfish.css');
      $APPLICATION->SetAdditionalCss(SITE_TEMPLATE_PATH.'/css/style-responsive.css');
      $APPLICATION->SetAdditionalCss(SITE_TEMPLATE_PATH.'/css/parallax-slider/parallax-slider.css');
      $APPLICATION->SetAdditionalCss(SITE_TEMPLATE_PATH.'/css/component.css');
      ?>


    <link href='<?=SITE_TEMPLATE_PATH?>http://fonts.googleapis.com/css?family=Lato' rel='stylesheet' type='text/css'>
    <link href='<?=SITE_TEMPLATE_PATH?>http://fonts.googleapis.com/css?family=Open+Sans' rel='stylesheet' type='text/css'>

    </script>

    <!-- HTML5 shim and Respond.js IE8 support of HTML5 tooltipss and media queries -->
    <!--[if lt IE 9]>
    <script src="<?=SITE_TEMPLATE_PATH?>js/html5shiv.js">
    </script>
    <script src="<?=SITE_TEMPLATE_PATH?>js/respond.min.js">
    </script>
    <![endif]-->
  </head>



  <body>
    <!--header start-->
    <?$APPLICATION->ShowPanel();?>
    <header class="head-section">

      <div class="navbar navbar-default navbar-static-top container">
          <div class="navbar-header">
              <button class="navbar-toggle" data-target=".navbar-collapse" data-toggle="collapse" type="button">
                <span class="icon-bar"></span>
                <span class="icon-bar"></span>
                <span class="icon-bar"></span>
              </button>
              <a class="navbar-brand" href="/">A<span>cme</span></a>
          </div>

          <?$APPLICATION->IncludeComponent(
              "bitrix:menu",
              "top_multi",
              Array(
                  "ALLOW_MULTI_SELECT" => "N",
                  "CHILD_MENU_TYPE" => "left",
                  "DELAY" => "N",
                  "MAX_LEVEL" => "2",
                  "MENU_CACHE_GET_VARS" => array(0=>"",),
                  "MENU_CACHE_TIME" => "3600",
                  "MENU_CACHE_TYPE" => "N",
                  "MENU_CACHE_USE_GROUPS" => "Y",
                  "ROOT_MENU_TYPE" => "top",
                  "USE_EXT" => "N"
              )
          );?>


    </header>
    <!--header end-->
<? /*
    <!-- Sequence Modern Slider -->
    <div id="da-slider" class="da-slider">

            <div class="da-slide">
            <div class="container">
              <div class="row">
                <div class="col-md-12">
              <h2>
                <i>CLEAN &amp; FRESH</i>
                <br>
                <i>RESPONSIVE</i>
                <br>
                <i>DESIGN</i>
              </h2>
              <p>
                <i>Lorem ipsum dolor amet</i>
                <br />
                <i>veniam omnis</i>
              </p>
              <a href="#" class="btn btn-info btn-lg da-link">
                Read more
              </a>
              <div class="da-img">
                <img src="<?=SITE_TEMPLATE_PATH?>/img/parallax-slider/images/2.png" alt="image01" />
              </div>
            </div>
          </div>
        </div>
      </div>


            <div class="da-slide">
            <div class="container">
        <div class="row">
          <div class="col-md-12">
        <h2>
          <i>RESPONSIVE VIDEO</i>
            <br />
          <i>SUPPORT AND</i>
            <br />
          <i>MANY MORE</i>
        </h2>
        <p>
          <i>Lorem ipsum dolor amet</i>
            <br />
          <i>tempor incididunt ut</i>
        </p>
        <a href="#" class="btn btn-info btn-lg da-link">
          Read more
        </a>
        <div class="da-img">
          <img src="<?=SITE_TEMPLATE_PATH?>/img/parallax-slider/images/3.png" alt="image01" />
        </div>
      </div>
          </div>
        </div>
      </div>


      <div class="da-slide">
      <div class="container">
        <div class="row">
          <div class="col-md-12">
        <h2>
          <i>USING BEST WEB</i>
            </br>
          <i>SOLUTIONS WITH</i>
            </br>
          <i>HTML5/CSS3</i>
        </h2>
        <p>
          <i>Lorem ipsum dolor amet</i>
          <br />
          <i>tempor incididunt ut</i>
          <br />
          <i>veniam omnis </i>
        </p>
        <a href="#" class="btn btn-info btn-lg da-link">
          Read more
        </a>
        <div class="da-img">
          <img src="<?=SITE_TEMPLATE_PATH?>/img/parallax-slider/images/1.png" alt="image01" />
        </div>
      </div>
      </div>
      </div>
      </div>

      <nav class="da-arrows">
        <span class="da-arrows-prev">
        </span>
        <span class="da-arrows-next">
        </span>
      </nav>
    </div>

?>
    <div class="container">
      <div class="row mar-b-50">
        <div class="col-md-12">
          <div class="text-center feature-head wow fadeInDown">
            <h1 class="">
              Онлайн-сервис "Биржа труда"
            </h1>

          </div>


          <div class="feature-box">
            <div class="col-md-4 col-sm-4 text-center wow fadeInUp">
              <div class="feature-box-heading">
                <em>
                <img src="<?=SITE_TEMPLATE_PATH?>/img/1.png" alt="" width="100" height="100">

                </em>
                <h4>
                  <b>Удобный формат</b>
                </h4>
              </div>
              <p class="text-center">
                Lorem ipsum dolor sit amet, dolore eiusmod quis tempor incididunt ut et dolore Ut veniam unde nostrudlaboris.
              </p>
            </div>
            <div class="col-md-4 col-sm-4 text-center wow fadeInUp">
              <div class="feature-box-heading">
                <em>
                  <img src="<?=SITE_TEMPLATE_PATH?>/img/2.png" alt="" width="100" height="100">
                </em>
                <h4>
                  <b>Быстрый доступ</b>
                </h4>
              </div>
              <p class="text-center">
                Lorem ipsum dolor sit amet, dolore eiusmod quis tempor incididunt ut et dolore Ut veniam unde nostrudlaboris.
              </p>
            </div>
            <div class="col-md-4 col-sm-4 text-center wow fadeInUp">
              <div class="feature-box-heading">
                <em>
                  <img src="<?=SITE_TEMPLATE_PATH?>/img/3.png" alt="" width="100" height="100">
                </em>
                <h4>
                  <b>Работа и обучение</b>
                </h4>
              </div>
              <p class="text-center">
                Lorem ipsum dolor sit amet, dolore eiusmod quis tempor incididunt ut et dolore Ut veniam unde nostrudlaboris.
              </p>
            </div>
          </div>

          <!--feature end-->
        </div>
      </div>
    </div>


    <!--property start-->
    <div class="property gray-bg">
      <div class="container">
        <div class="row">
          <div class="col-lg-6 col-sm-6 text-center wow fadeInLeft">
            <img src="<?=SITE_TEMPLATE_PATH?>/img/tab1.png" alt="">
          </div>
          <div class="col-lg-6 col-sm-6 wow fadeInRight">
            <h1>
              Заголовок включаемой области
            </h1>
            <hr>
            <p>
              <i class="fa fa-check fa-lg pr-10">
              </i>
              Абзацы текста включаемой области. Sed ut perspiciatis unde omnis iste natus error sit voluptatem accusantium doloremque laudantium, totam rem aperiam, eaque ipsa quae ablic jiener. natus error sit voluptatem accusantium doloremque laudantium, totam rem aperiam, eaque ipsa quae ablic jiener. natus error sit voluptatem accusantiu.
            </p>
            <p>
              <i class="fa fa-check fa-lg pr-10">
              </i>
              Абзацы текста включаемой области. Sed ut perspiciatis unde omnis iste natus error sit voluptatem accusantium doloremque laudantium, totam rem aperiam, eaque ipsa quae ablic jiener. natus error sit voluptatem accusantium doloremque laudantium, totam rem aperiam, eaque ipsa quae ablic jiener. natus error sit voluptatem accusantiu.
            </p>
            <p>
              <i class="fa fa-check fa-lg pr-10">
              </i>
              Абзацы текста включаемой области. Sed ut perspiciatis unde omnis iste natus error sit voluptatem accusantium doloremque laudantium, totam rem aperiam, eaque ipsa quae ablic jiener.
            </p>
            <hr>
            <a href="registration.php" class="btn btn-purchase">
              Зарегистрироваться
            </a>
            <a href="login.html" class="btn btn-purchase">
              Вход
            </a>
          </div>
        </div>
      </div>
    </div>
    <!--property end-->

    <div class="container">

      <div class="row mar-b-60">
        <div class="col-lg-6">
          <!--tab start-->
          <section class="tab wow fadeInLeft">
            <header class="panel-heading tab-bg-dark-navy-blue">
              <ul class="nav nav-tabs nav-justified ">
                <li class="active">
                  <a data-toggle="tab" href="#news">
                    Самые свежие резюме
                  </a>
                </li>
                <li>
                  <a data-toggle="tab" href="#events">
                    Текущие события
                  </a>
                </li>
                <li class="">
                  <a data-toggle="tab" href="#notice-board">
                    Самые горячие вакансии
                  </a>
                </li>
              </ul>
            </header>
            <div class="panel-body">
              <div class="tab-content tasi-tab">
                <div id="news" class="tab-pane fade in active">
                  <article class="media">
                    <a class="pull-left thumb p-thumb">
                      <img src="<?=SITE_TEMPLATE_PATH?>/img/product1.jpg" alt="">
                    </a>
                    <div class="media-body b-btm">
                      <a href="#" class=" p-head">
                        Должность
                      </a>
                      <p>
                        Общий стаж, ожидание по зарплате
                      </p>
                    </div>
                  </article>
                  <article class="media">
                    <a class="pull-left thumb p-thumb">
                      <img src="<?=SITE_TEMPLATE_PATH?>/img/product2.jpg" alt="">
                    </a>
                    <div class="media-body b-btm">
                      <a href="#" class=" p-head">
                        Должность
                      </a>
                      <p>
                        Общий стаж, ожидание по зарплате
                      </p>
                    </div>
                  </article>
                  <article class="media">
                    <a class="pull-left thumb p-thumb">
                      <img src="<?=SITE_TEMPLATE_PATH?>/img/product1.jpg" alt="">
                    </a>
                    <div class="media-body b-btm">
                      <a href="#" class=" p-head">
                        Должность
                      </a>
                      <p>
                        Общий стаж, ожидание по зарплате
                      </p>
                    </div>
                  </article>
                </div>
                <div id="events" class="tab-pane fade">
                  <article class="media">
                    <a class="pull-left thumb p-thumb">
                      <!--image goes here-->
                    </a>
                    <div class="media-body b-btm">
                      <a href="#" class="cmt-head">
                        Название мероприятия
                      </a>
                      <p>

                        <i class="fa fa-time">
                        </i>
                        Дата
                      </p>
                    </div>
                  </article>
                  <article class="media">
                    <a class="pull-left thumb p-thumb">
                      <!--image goes here-->
                    </a>
                    <div class="media-body b-btm">
                      <a href="#" class="cmt-head">
                        Название мероприятия
                      </a>
                      <p>

                        <i class="fa fa-time">
                        </i>
                        Дата
                      </p>
                    </div>
                  </article>
                  <article class="media">
                    <a class="pull-left thumb p-thumb">
                      <!--image goes here-->
                    </a>
                    <div class="media-body b-btm">
                      <a href="#" class="cmt-head">
                        Название мероприятия
                      </a>
                      <p>

                        <i class="fa fa-time">
                        </i>admin
                        Дата
                      </p>
                    </div>
                  </article>
                </div>
                <div id="notice-board" class="tab-pane fade">
                  <article class="media">
                    
                    <div class="media-body b-btm">
                      <a href="#" class=" p-head">
                        Название вакансии
                      </a>
                      <p>
                        зарплата
                      </p>
                    </div>
                  </article>
                  <article class="media">
                    <div class="media-body b-btm">
                      <a href="#" class=" p-head">
                        Название вакансии
                      </a>
                      <p>
                        зарплата
                      </p>
                    </div>
                  </article>
                  <article class="media">
                    <a class="pull-left thumb p-thumb">
                      <img src="<?=SITE_TEMPLATE_PATH?>/img/product1.jpg" alt="">
                    </a>
                    <div class="media-body b-btm">
                      <a href="#" class=" p-head">
                        Название вакансии
                      </a>
                      <p>
                        зарплата
                      </p>
                    </div>
                  </article>
                </div>
              </div>
            </div>
          </section>
          <!--tab end-->
        </div>
        
        </div>
      </div>



    <div id="home-services">

      <div class="container">
        <div class="row">
          <div class="col-md-12">
            <h2>
              Наши преподаватели
            </h2>
          </div>

          <div class="col-md-4">
            <div class="h-service">
              <div class="icon-wrap ico-bg round-fifty wow fadeInDown">
                <i class="fa fa-question">

                </i>
              </div>
              <div class="h-service-content wow fadeInUp">
                <h3>
                  ПРЕПОДАВАТЕЛЬ 1 
                </h3>
                <p>
                  Краткая биография
                  <br>
                  
                </p>
              </div>
            </div>
          </div>
          <div class="col-md-4">
            <div class="h-service">
              <div class="icon-wrap ico-bg round-fifty wow fadeInDown">
                <i class="fa fa-h-square">
                </i>
              </div>
              <div class="h-service-content wow fadeInUp">
                <h3>
                  ПРЕПОДАВАТЕЛЬ 1 
                </h3>
                <p>
                  Краткая биография
                  <br>
                  
                </p>
              </div>
            </div>
          </div>
          <div class="col-md-4">
            <div class="h-service">
              <div class="icon-wrap ico-bg round-fifty wow fadeInDown">
                <i class="fa fa-users">
                </i>
              </div>
              <div class="h-service-content wow fadeInUp">
                <h3>
                  ПРЕПОДАВАТЕЛЬ 1 
                </h3>
                <p>
                  Краткая биография
                  <br>
                  
                </p>
              </div>
            </div>
          </div>
        </div>
        <!-- /row -->

      </div>
      <!-- /container -->

    </div>
    <!-- service end -->
    
    <!--container end-->
    