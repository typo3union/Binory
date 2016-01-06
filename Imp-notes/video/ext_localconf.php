<?php
if (!defined('TYPO3_MODE')) {
	die('Access denied.');
}

\TYPO3\CMS\Extbase\Utility\ExtensionUtility::configurePlugin(
	'Video.' . $_EXTKEY,
	'Video',
	array(
		'Videos' => 'video',
		
	),
	// non-cacheable actions
	array(
		'Videos' => '',
		
	)
);
