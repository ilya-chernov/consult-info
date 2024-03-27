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
$this->setFrameMode(true);
?>

<main class="website-workarea">
    <section class="">
        <div class="container blog_article">
            <?if($arParams["DISPLAY_PICTURE"]!="N" && is_array($arResult["DETAIL_PICTURE"])):?>
                <img
                        class="detail_picture"
                        src="<?=$arResult["DETAIL_PICTURE"]["SRC"]?>"
                        width="100%"
                        height="100%"
                        alt="<?=$arResult["DETAIL_PICTURE"]["ALT"]?>"
                        title="<?=$arResult["DETAIL_PICTURE"]["TITLE"]?>"
                />
            <?endif?>


            <?if($arParams["DISPLAY_NAME"]!="N" && $arResult["NAME"]):?>
                <h1><?=$arResult["NAME"]?></h1>
            <?endif;?>

            <?if($arParams["DISPLAY_PREVIEW_TEXT"]!="N" && ($arResult["FIELDS"]["PREVIEW_TEXT"] ?? '')):?>
                <p><?=$arResult["FIELDS"]["PREVIEW_TEXT"];unset($arResult["FIELDS"]["PREVIEW_TEXT"]);?></p>
            <?endif;?>
            <?if($arResult["NAV_RESULT"]):?>
                <?if($arParams["DISPLAY_TOP_PAGER"]):?><?=$arResult["NAV_STRING"]?><br /><?endif;?>
                <?echo $arResult["NAV_TEXT"];?>
                <?if($arParams["DISPLAY_BOTTOM_PAGER"]):?><br /><?=$arResult["NAV_STRING"]?><?endif;?>
            <?elseif($arResult["DETAIL_TEXT"] <> ''):?>
                <?echo $arResult["DETAIL_TEXT"];?>
            <?else:?>
                <?echo $arResult["PREVIEW_TEXT"];?>
            <?endif?>



        </div>
    </section>
</main>