<?php
if(!defined("B_PROLOG_INCLUDED") || B_PROLOG_INCLUDED!==true)die();

/**
 * @global CMain $APPLICATION
 */

global $APPLICATION;

//delayed function must return a string
if(empty($arResult))
	return "";

$strReturn = '';

$strReturn .= '<div class="breadcrumbs" itemprop="http://schema.org/breadcrumb" itemscope itemtype="http://schema.org/BreadcrumbList">';

$itemSize = count($arResult);
for($index = 0; $index < $itemSize; $index++)
{
	$title = htmlspecialcharsex($arResult[$index]["TITLE"]);

	if($arResult[$index]["LINK"] <> "" && $index != $itemSize-1)
	{
		$strReturn .= '
			<span id="bx_breadcrumb_' . $index . '" itemprop="itemListElement" itemscope itemtype="http://schema.org/ListItem">
				'.$arrow.'
				<a href="'.$arResult[$index]["LINK"].'" title="'.$title.'" itemprop="url">
					<span itemprop="name">'.$title.'</span>
				</a>
				<meta itemprop="position" content="'.($index + 1).'" />
			</span>';
	}
	else
	{
		$strReturn .= '
			<span itemprop="itemListElement" itemscope itemtype="http://schema.org/ListItem">
				'.$arrow.'
				<span itemprop="name">'.$title.'</span>
				<meta itemprop="position" content="'.($index + 1).'" />
			</span>';
	}
}

return $strReturn;
