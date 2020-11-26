
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

            <div class="navbar-collapse collapse">
                <ul class="nav navbar-nav">
                    <li>
                        <a href="/"class="first" >Главная</a>
                    </li>
                    <li class="dropdown">
                        <a class="dropdown-toggle" data-close-others="false" data-delay="0" data-hover=
                        "dropdown" data-toggle="dropdown" href="#">О нас <i class="fa fa-angle-down"></i>
                        </a>
                        <ul class="dropdown-menu">
                            <li>
                                <a href="typography.html">Наши преподаватели</a>
                            </li>
                            <li>
                                <a href="button.html">Контакты</a>
                            </li>
                            <li>
                                <a href="form.html">Реквизиты</a>
                            </li>
                        </ul>
                    </li>
                    <li class="dropdown">
                        <a class="dropdown-toggle" data-close-others="false" data-delay="0" data-hover=
                        "dropdown" data-toggle="dropdown" href="#">Работодателям <i class="fa fa-angle-down"></i>
                        </a>
                        <ul class="dropdown-menu">
                            <li>
                                <a href=<?_SERVER["DOCUMENT_ROOT"]?>"./bitrix/about.html">Личный кабинет</a>
                            </li>
                            <li>
                                <a href="404.html">Резюме</a>
                            </li>Пример #1 Определение констант
                            <li>
                                <a href="career.html">Добавить вакансию</a>
                            </li>
                            <li>
                                <a href="login.html">Мои вакансии</a>
                            </li>
                        </ul>
                    </li>
                    <li class="dropdown">
                        <a class="dropdown-toggle" data-close-others="false" data-delay="0" data-hover=
                        "dropdown" data-toggle="dropdown" href="#">Соискателям<i class="fa fa-angle-down"></i></a>
                        <ul class="dropdown-menu">
                            <li>
                                <a href="<?=SITE_TEMPLATE_PATH?>/about">Личный кабинет</a>
                            </li>
                            <li>
                                <a href="404.html">Вакансии</a>
                            </li>
                            <li>
                                <a href="career.html">Добавить резюме</a>
                            </li>
                            <li>
                                <a href="login.html">Мои резюме</a>
                            </li>
                        </ul>
                    </li>
                    <li>
                        <a href="terms.html">Мероприятия</a>
                    </li>
                    <li><input class="form-control search" placeholder=" Поиск" type="text"></li>
                </ul>
            </div>
        </div>
    </header>
    <!--header end-->

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
<?

    $APPLICATION->SetTitle("test1");
?> Text heredfsfd....<?require($_SERVER["DOCUMENT_ROOT"]."/bitrix/footer.php");?>