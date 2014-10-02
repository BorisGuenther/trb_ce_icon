<?php
if(!defined('TYPO3_MODE')) {
	die('Access denied.');
}


/*
 * SETUP TYPE
 */
$GLOBALS['TCA']['tt_content']['types']['trbceicon_icon']['showitem']	= '
	--palette--;LLL:EXT:cms/locallang_ttc.xlf:palette.general;general,
	layout;LLL:EXT:cms/locallang_ttc.xlf:layout_formlabel,
	tx_trb_basics_fontawesome_icon,
	header_link,
	header;LLL:EXT:cms/locallang_ttc.xlf:header_formlabel,
	bodytext;LLL:EXT:cms/locallang_ttc.xlf:bodytext_formlabel;;richtext:rte_transform[flag=rte_enabled|mode=ts_css],
	rte_enabled;LLL:EXT:cms/locallang_ttc.xlf:rte_enabled_formlabel,

--div--;LLL:EXT:cms/locallang_ttc.xlf:tabs.access,
	--palette--;LLL:EXT:cms/locallang_ttc.xlf:palette.visibility;visibility,
	--palette--;LLL:EXT:cms/locallang_ttc.xlf:palette.access;access,

--div--;LLL:EXT:lang/locallang_tca.xlf:sys_category.tabs.category,
	categories
';
