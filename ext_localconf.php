<?php
if(!defined('TYPO3_MODE')) {
	die('Access denied.');
}


/*
 * PLUGIN
 */
\TYPO3\CMS\Extbase\Utility\ExtensionUtility::configurePlugin('TRB.'.$_EXTKEY, 'Icon', array('Icon' => 'main'), array(), \TYPO3\CMS\Extbase\Utility\ExtensionUtility::PLUGIN_TYPE_CONTENT_ELEMENT);
