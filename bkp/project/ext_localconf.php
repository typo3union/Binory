<?php
if (!defined('TYPO3_MODE')) {
	die('Access denied.');
}

\TYPO3\CMS\Extbase\Utility\ExtensionUtility::configurePlugin(
	'Project.' . $_EXTKEY,
	'Project',
	array(
		'Project' => 'list, show',
		
	),
	// non-cacheable actions
	array(
		'Project' => '',
		
	)
);
