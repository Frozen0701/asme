<?if(!defined("B_PROLOG_INCLUDED") || B_PROLOG_INCLUDED!==true)die();
/** @var array $arParams */
/** @var array $arResult */
/** @global CMain $APPLICATION */
/** @global CUser $USER */
/** @global CDatabase $DB */
/** @var CBitrixComponentTemplate $this */
/** @var string $templateName */
/** @var string $templateFile */
/** @var string $templateFolder */
/** @var string $componentPath */
/** @var CBitrixComponent $component */
$this->setFrameMode(true);?>
<form action="<?=$arResult["FORM_ACTION"]?>">

		<tr>
			<div><?if($arParams["USE_SUGGEST"] === "Y"):?><?$APPLICATION->IncludeComponent(
				"bitrix:search.form",
				"search",
				array(
					"NAME" => "q",
					"VALUE" => "",
					"INPUT_SIZE" => 3,
					"DROPDOWN_SIZE" => 5,
				),
				$component, array("HIDE_ICONS" => "Y")
			);?><?else:?><input class="form-control search" placeholder=" Поиск" type="text" /><?endif;?></div>
		</tr>


    </table></form>  </div>

</div>