<?
use \Bitrix\Main\Localization\Loc as Lc; 
Lc::loadMessages(__FILE__);
?>

<footer class="site-footer">
    <div class="container">
      <div class="row">
        <div class="col-lg-4">
          <div class="mb-5">
            <?$APPLICATION->IncludeComponent(
              "bitrix:main.include",
              "",
              Array(
                "AREA_FILE_SHOW" => "file",
                "AREA_FILE_SUFFIX" => "inc",
                "EDIT_TEMPLATE" => "",
                "PATH" => "/include/about.php"
              )
            );?>
          </div>

        </div>
        <div class="col-lg-4 mb-5 mb-lg-0">

          <?$APPLICATION->IncludeComponent("bitrix:menu", "bottom_two_columns_menu", Array(
            "ALLOW_MULTI_SELECT" => "N",	// Разрешить несколько активных пунктов одновременно
              "CHILD_MENU_TYPE" => "left",	// Тип меню для остальных уровней
              "DELAY" => "N",	// Откладывать выполнение шаблона меню
              "MAX_LEVEL" => "2",	// Уровень вложенности меню
              "MENU_CACHE_GET_VARS" => "",	// Значимые переменные запроса
              "MENU_CACHE_TIME" => "3600",	// Время кеширования (сек.)
              "MENU_CACHE_TYPE" => "N",	// Тип кеширования
              "MENU_CACHE_USE_GROUPS" => "Y",	// Учитывать права доступа
              "ROOT_MENU_TYPE" => "top",	// Тип меню для первого уровня
              "USE_EXT" => "N",	// Подключать файлы с именами вида .тип_меню.menu_ext.php
              "COMPONENT_TEMPLATE" => "horizontal_multilevel"
            ),
            false
          );?>

        </div>

        <div class="col-lg-4 mb-5 mb-lg-0">
        <?$APPLICATION->IncludeComponent(
          "bitrix:main.include",
          "",
          Array(
            "AREA_FILE_SHOW" => "file",
            "AREA_FILE_SUFFIX" => "inc",
            "EDIT_TEMPLATE" => "",
            "PATH" => "/include/follow_us.php"
          )
        );?>

        </div>

      </div>
      <div class="row pt-5 mt-5 text-center">
        <div class="col-md-12">
        <?$APPLICATION->IncludeComponent(
          "bitrix:main.include",
          "",
          Array(
            "AREA_FILE_SHOW" => "file",
            "AREA_FILE_SUFFIX" => "inc",
            "EDIT_TEMPLATE" => "",
            "PATH" => "/include/copyright.php"
          )
        );?>
        </div>

      </div>
    </div>
  </footer>

  </div>


</body>

</html>