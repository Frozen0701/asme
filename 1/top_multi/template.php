<?if (!defined("B_PROLOG_INCLUDED") || B_PROLOG_INCLUDED!==true)die();?>


<?if (!empty($arResult)):?>
    <div class="navbar-collapse collapse">
<ul class="nav navbar-nav">


<?
$previousLevel = 0;
foreach($arResult as $arItem):?>

	<?if ($previousLevel && $arItem["DEPTH_LEVEL"] < $previousLevel):?>
		<?=str_repeat("</ul></li>", ($previousLevel - $arItem["DEPTH_LEVEL"]));?>
	<?endif?>


	<?if ($arItem["IS_PARENT"]):?>

		<?if ($arItem["DEPTH_LEVEL"] == 1):?>
			<li class="dropdown" > <a class="dropdown-toggle" data-close-others="false" data-delay="0" data-hover=
                "dropdown" data-toggle="dropdown" href="<?=$arItem["LINK"]?>" <?if(isset($arItem['PARAMS']['dis'])):?> class="dropdown-item disabled" <?endif?> class="<?if ($arItem['SELECTED']):?>dropdown-item disabled<? else:?>nav navbar-nav<?endif?>"<?if(isset($arItem['PARAMS']['dis'])):?> class="dropdown-item disabled" <?endif?> ><span><?=$arItem["TEXT"]?></span><i class="fa fa-angle-down"></i></a>
				<ul class="dropdown-menu">
		<?else:?>
			<li  class="dropdown"> <a href="<?=$arItem["LINK"]?>"  <?if(isset($arItem['PARAMS']['dis'])):?> class="dropdown-item disabled" <?endif?>  <a href="<?=$arItem["LINK"]?>"> <?=$arItem["TEXT"]?></a>
				<ul class="dropdown-menu">
		<?endif?>

	<?else:?>

		<?if ($arItem["PERMISSION"] > "D"):?>

			<?if ($arItem["DEPTH_LEVEL"] == 1):?>
				<li class="dropdown"><a class="dropdown-toggle" data-close-others="false" data-delay="0" data-hover=
                    "dropdown" data-toggle="dropdown" class="dropdown-toggle" data-close-others="false" data-delay="0" data-hover=
                    "dropdown" data-toggle="dropdown" href="<?=$arItem["LINK"]?>"<?if(isset($arItem['PARAMS']['dis'])):?> class="dropdown-item disabled" <?endif?> ><span><?=$arItem["TEXT"]?></span></a></li>
			<?else:?>
				<li><a  href="<?=$arItem["LINK"]?>" <?if(isset($arItem['PARAMS']['dis'])):?> class="dropdown-item disabled" <?endif?> ><?=$arItem["TEXT"]?></a></li>
			<?endif?>


		<?endif?>

	<?endif?>

	<?$previousLevel = $arItem["DEPTH_LEVEL"];?>

<?endforeach?>

<?if ($previousLevel > 1)://close last item tags?>
	<?=str_repeat("</ul></li>", ($previousLevel-1) );?>
<?endif?>

                    <li>
                        <?$APPLICATION->IncludeComponent(
                            "bitrix:search.form",
                            "search",
                            Array(
                                "COMPONENT_TEMPLATE" => "search",
                                "PAGE" => "#SITE_DIR#search/index.php",
                                "USE_SUGGEST" => "Y"
                            )
                        );?>
                    </li></ul>
    </div>

<?endif?>