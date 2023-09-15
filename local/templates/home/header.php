<?if(!defined("B_PROLOG_INCLUDED") || B_PROLOG_INCLUDED!==true)die();?>
<?
use \Bitrix\Main\Localization\Loc as Lc; 
Lc::loadMessages(__FILE__);
?>

<!DOCTYPE html>
<html lang="<?=LANGUAGE_ID?>-<?=strtoupper(LANGUAGE_ID)?>">

<head>
  <?$APPLICATION->ShowHead();?>
  <title><?$APPLICATION->ShowTitle()?></title>
  <?
    $APPLICATION->SetAdditionalCSS(SITE_TEMPLATE_PATH . "/https://fonts.googleapis.com/css?family=Nunito+Sans:200,300,400,700,900|Roboto+Mono:300,400,500");
    $APPLICATION->SetAdditionalCSS(SITE_TEMPLATE_PATH . "/fonts/icomoon/style.css");
    $APPLICATION->SetAdditionalCSS(SITE_TEMPLATE_PATH . "/css/bootstrap.min.css");
    $APPLICATION->SetAdditionalCSS(SITE_TEMPLATE_PATH . "/css/magnific-popup.css");
    $APPLICATION->SetAdditionalCSS(SITE_TEMPLATE_PATH . "/css/jquery-ui.css");
    $APPLICATION->SetAdditionalCSS(SITE_TEMPLATE_PATH . "/css/owl.carousel.min.css");
    $APPLICATION->SetAdditionalCSS(SITE_TEMPLATE_PATH . "/css/owl.theme.default.min.css");
    $APPLICATION->SetAdditionalCSS(SITE_TEMPLATE_PATH . "/css/bootstrap-datepicker.css");
    $APPLICATION->SetAdditionalCSS(SITE_TEMPLATE_PATH . "/css/mediaelementplayer.css");
    $APPLICATION->SetAdditionalCSS(SITE_TEMPLATE_PATH . "/css/animate.css");
    $APPLICATION->SetAdditionalCSS(SITE_TEMPLATE_PATH . "/fonts/flaticon/font/flaticon.css");
    $APPLICATION->SetAdditionalCSS(SITE_TEMPLATE_PATH . "/css/fl-bigmug-line.css");
    $APPLICATION->SetAdditionalCSS(SITE_TEMPLATE_PATH . "/css/aos.css");
    $APPLICATION->SetAdditionalCSS(SITE_TEMPLATE_PATH . "/css/style.css");
  

    $APPLICATION->AddHeadScript(SITE_TEMPLATE_PATH . "/js/jquery-3.3.1.min.js");
    $APPLICATION->AddHeadScript(SITE_TEMPLATE_PATH . "/js/jquery-migrate-3.0.1.min.js");
    $APPLICATION->AddHeadScript(SITE_TEMPLATE_PATH . "/js/jquery-ui.js");
    $APPLICATION->AddHeadScript(SITE_TEMPLATE_PATH . "/js/popper.min.js");
    $APPLICATION->AddHeadScript(SITE_TEMPLATE_PATH . "/js/bootstrap.min.js");
    $APPLICATION->AddHeadScript(SITE_TEMPLATE_PATH . "/js/owl.carousel.min.js");
    $APPLICATION->AddHeadScript(SITE_TEMPLATE_PATH . "/js/mediaelement-and-player.min.js");
    $APPLICATION->AddHeadScript(SITE_TEMPLATE_PATH . "/js/jquery.stellar.min.js");
    $APPLICATION->AddHeadScript(SITE_TEMPLATE_PATH . "/js/jquery.countdown.min.js");
    $APPLICATION->AddHeadScript(SITE_TEMPLATE_PATH . "/js/jquery.magnific-popup.min.js");
    $APPLICATION->AddHeadScript(SITE_TEMPLATE_PATH . "/js/bootstrap-datepicker.min.js");
    $APPLICATION->AddHeadScript(SITE_TEMPLATE_PATH . "/js/aos.js");
  
    $APPLICATION->AddHeadScript(SITE_TEMPLATE_PATH . "/js/main.js");
  ?>

</head>

<body>

  <div id="panel"><?$APPLICATION->ShowPanel();?></div>

  <!-- Почему-то вызывает ошибку при загрузке шаблона -->
  <!-- <div class="site-loader"></div> -->

  <div class="site-wrap">

    <div class="site-mobile-menu">
      <div class="site-mobile-menu-header">
        <div class="site-mobile-menu-close mt-3">
          <span class="icon-close2 js-menu-toggle"></span>
        </div>
      </div>
      <div class="site-mobile-menu-body"></div>
    </div> <!-- .site-mobile-menu -->

    <div class="border-bottom bg-white top-bar">
      <div class="container">
        <div class="row align-items-center">
          <div class="col-6 col-md-6">
            <p class="mb-0">
              <?$APPLICATION->IncludeComponent(
                "bitrix:main.include",
                "",
                Array(
                  "AREA_FILE_SHOW" => "file",
                  "AREA_FILE_SUFFIX" => "inc",
                  "EDIT_TEMPLATE" => "",
                  "PATH" => "/include/phone.php"
                )
              );?>
              <?$APPLICATION->IncludeComponent(
                "bitrix:main.include",
                "",
                Array(
                  "AREA_FILE_SHOW" => "file",
                  "AREA_FILE_SUFFIX" => "inc",
                  "EDIT_TEMPLATE" => "",
                  "PATH" => "/include/email.php"
                )
              );?>
            </p>
          </div>
          <div class="col-6 col-md-6 text-right">
            <?$APPLICATION->IncludeComponent(
              "bitrix:main.include",
              "",
              Array(
                "AREA_FILE_SHOW" => "file",
                "AREA_FILE_SUFFIX" => "inc",
                "EDIT_TEMPLATE" => "",
                "PATH" => "/include/socials.php"
              )
            );?>
          </div>
        </div>
      </div>

    </div>
    <div class="site-navbar">
      <div class="container py-1">
        <div class="row align-items-center">
          <div class="col-8 col-md-8 col-lg-4">
            <h1 class="">
              <?$APPLICATION->IncludeComponent(
                "bitrix:main.include",
                "",
                Array(
                  "AREA_FILE_SHOW" => "file",
                  "AREA_FILE_SUFFIX" => "inc",
                  "EDIT_TEMPLATE" => "",
                  "PATH" => "/include/logo.php"
                )
              );?>
            </h1>
          </div>
          <div class="col-4 col-md-4 col-lg-8">
            <nav class="site-navigation text-right text-md-right" role="navigation">

              <div class="d-inline-block d-lg-none ml-md-0 mr-auto py-3"><a href="#"
                  class="site-menu-toggle js-menu-toggle text-black"><span class="icon-menu h3"></span></a></div>

              <ul class="site-menu js-clone-nav d-none d-lg-block">
                <li class="active">
                  <a href="index.html">
                    <?=Lc::getMessage("HOME")?>
                  </a>
                </li>
                <li class="has-children">
                  <a href="properties.html">
                    <?=Lc::getMessage("PROPERTIES")?>
                  </a>
                  <ul class="dropdown">
                    <li><a href="#">
                      <?=Lc::getMessage("BUY")?>
                    </a></li>
                    <li><a href="#">
                      <?=Lc::getMessage("RENT")?>
                    </a></li>
                    <li><a href="#">
                      <?=Lc::getMessage("LEASE")?>
                    </a></li>
                    <li class="has-children">
                      <a href="#">
                        <?=Lc::getMessage("MENU")?>
                      </a>
                      <ul class="dropdown">
                        <li><a href="#">
                          <?=Lc::getMessage("MENU ONE")?>
                        </a></li>
                        <li><a href="#">
                          <?=Lc::getMessage("MENU TWO")?>
                        </a></li>
                        <li><a href="#">
                          <?=Lc::getMessage("MENU THREE")?>
                        </a></li>
                      </ul>
                    </li>
                  </ul>
                </li>
                <li><a href="blog.html">
                  <?=Lc::getMessage("BLOG")?>
                </a></li>
                <li><a href="about.html">
                  <?=Lc::getMessage("ABOUT")?>
                </a></li>
                <li><a href="contact.html">
                  <?=Lc::getMessage("CONTACT")?>
                </a></li>
              </ul>
            </nav>
            <?$APPLICATION->IncludeComponent(
              "bitrix:menu",
              "horizontal_multilevel",
              Array(
                "ALLOW_MULTI_SELECT" => "N",
                "CHILD_MENU_TYPE" => "left",
                "DELAY" => "N",
                "MAX_LEVEL" => "2",
                "MENU_CACHE_GET_VARS" => array(""),
                "MENU_CACHE_TIME" => "3600",
                "MENU_CACHE_TYPE" => "N",
                "MENU_CACHE_USE_GROUPS" => "Y",
                "ROOT_MENU_TYPE" => "top",
                "USE_EXT" => "N"
              )
            );?>
          </div>


        </div>
      </div>
    </div>
  </div>

