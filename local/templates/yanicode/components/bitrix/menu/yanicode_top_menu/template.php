<?if (!defined("B_PROLOG_INCLUDED") || B_PROLOG_INCLUDED!==true)die();?>

<?if (!empty($arResult)):?>

<nav class="nav-list">
<?foreach($arResult as $arItem):?>
	<?if ($arItem["PERMISSION"] > "D"):?>
		<a href="<?=$arItem["LINK"]?>" class="nav-list__item" style="text-transform: uppercase"><nobr><?=$arItem["TEXT"]?></nobr></a>
	<?endif?>
<?endforeach?>
</nav>
<?endif?>