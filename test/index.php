<?
require($_SERVER["DOCUMENT_ROOT"]."/bitrix/header.php");

$APPLICATION->SetTitle("Главная страница тестов32");

?>
<?$APPLICATION->IncludeComponent(
    "bitrix:search.form",
    "search",
    Array(
        "COMPONENT_TEMPLATE" => "search",
        "PAGE" => "#SITE_DIR#search/index.php",
        "USE_SUGGEST" => "Y"
    )
);?>
    <br><?require($_SERVER["DOCUMENT_ROOT"]."/bitrix/footer.php");?>