<!DOCTYPE html>
<html lang="ru">
<head>
    <meta charset="utf-8">
    <meta http-equiv="x-ua-compatible" content="ie=edge">
    <meta class="js-meta-viewport" name="viewport" content="width=device-width, height=device-height, initial-scale=1, shrink-to-fit=no, user-scalable=no, minimum-scale=1.0, maximum-scale=1.0">
    <meta name="format-detection" content="telephone=no">
    <?php
    use Bitrix\Main\Page\Asset;
    Asset::getInstance()->addJs(SITE_TEMPLATE_PATH . "/js/vendor/inputmask.min.js");
    Asset::getInstance()->addJs(SITE_TEMPLATE_PATH . "/js/vendor/swiper-bundle.min.js");
    Asset::getInstance()->addJs(SITE_TEMPLATE_PATH . "/js/build.js");
    ?>
    <title><?$APPLICATION->ShowTitle()?></title>
    <? $APPLICATION->ShowHead();?>
</head>

<body>
<div id="panel">
    <?php $APPLICATION->ShowPanel(); ?>
</div>
    <header class="header">
        <div class="container">
            <div class="header-wrapper">
                <?$APPLICATION->IncludeComponent(
                    "bitrix:main.include",
                    "",
                    Array(
                        "AREA_FILE_SHOW" => "file",
                        "AREA_FILE_SUFFIX" => "inc",
                        "EDIT_TEMPLATE" => "",
                        "PATH" => SITE_TEMPLATE_PATH . "/includes/logo_inc.php"
                    )
                );?>
                <div class="header__burger header__burger_close">
                    <span class="burger-line"></span>
                    <span class="burger-line"></span>
                    <span class="burger-line"></span>
                </div>
                <div class="header-nav">
                    <?$APPLICATION->IncludeComponent(
                        "bitrix:menu",
                        "yanicode_top_menu",
                        Array(
                            "ALLOW_MULTI_SELECT" => "N",
                            "CHILD_MENU_TYPE" => "left",
                            "COMPONENT_TEMPLATE" => "blue_tabs",
                            "DELAY" => "N",
                            "MAX_LEVEL" => "1",
                            "MENU_CACHE_GET_VARS" => "",
                            "MENU_CACHE_TIME" => "3600",
                            "MENU_CACHE_TYPE" => "N",
                            "MENU_CACHE_USE_GROUPS" => "Y",
                            "ROOT_MENU_TYPE" => "top",
                            "USE_EXT" => "N"
                        )
                    );?>
                    <div class="header__phone">
                        <?$APPLICATION->IncludeComponent(
                            "bitrix:main.include",
                            "",
                            Array(
                                "AREA_FILE_SHOW" => "file",
                                "AREA_FILE_SUFFIX" => "inc",
                                "EDIT_TEMPLATE" => "",
                                "PATH" => SITE_TEMPLATE_PATH . "/includes/number_inc.php"
                            )
                        );?>
                    </div>
                </div>
            </div>
        </div>
    </header>

<?
if($APPLICATION->GetCurDir() == "/") {
?>
    <main class="website-workarea">
        <section class="banner banner_before1" style="background-image: url('<?=SITE_TEMPLATE_PATH?>/images/banner_blog.jpg');">
            <div class="banner-wrapper">
                <div class="container">
                    <div class="banner__content">
                        <p>Более 20-ти лет управляю<br />
                            творческими проектами в<br />
                            брендинге.</p>
                        <p><b class="text_gold">
                                Моя личная миссия: </b>делать<br />
                            вас богаче, а ваших<br />
                            клиентов счастливее!</p>
                    </div>
                </div>
            </div>

            <div class="container">
                <div class="stages">
                    <div class="stages__item">
                        <div class="stages__step">01</div>
                        <div class="stages__desc-step">АУДИТ</div>
                    </div>
                    <div class="stages__item">
                        <div class="stages__step">02</div>
                        <div class="stages__desc-step">СТРАТЕГИЯ</div>
                    </div>
                    <div class="stages__item">
                        <div class="stages__step">03</div>
                        <div class="stages__desc-step">КОНЦЕПЦИЯ</div>
                    </div>
                    <div class="stages__item">
                        <div class="stages__step">04</div>
                        <div class="stages__desc-step">ДИЗАЙН</div>
                    </div>
                    <div class="stages__item">
                        <div class="stages__step">05</div>
                        <div class="stages__desc-step">КОММУНИКАЦИИ</div>
                    </div>
                </div>
            </div>
        </section>
    </main>
        <?}?>

