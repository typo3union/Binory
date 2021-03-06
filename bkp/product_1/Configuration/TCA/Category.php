<?php
if (!defined ('TYPO3_MODE')) {
	die ('Access denied.');
}

$GLOBALS['TCA']['tx_product_domain_model_category'] = array(
	'ctrl' => $GLOBALS['TCA']['tx_product_domain_model_category']['ctrl'],
	'interface' => array(
		'showRecordFieldList' => 'sys_language_uid, l10n_parent, l10n_diffsource, hidden, category_name, is_sub, sub_category, in_menu',
	),
	'types' => array(
		'1' => array('showitem' => 'sys_language_uid;;;;1-1-1, l10n_parent, l10n_diffsource, hidden;;1, category_name, is_sub, sub_category, in_menu, --div--;LLL:EXT:cms/locallang_ttc.xlf:tabs.access, starttime, endtime'),
	),
	'palettes' => array(
		'1' => array('showitem' => ''),
	),
	'columns' => array(
	
		'sys_language_uid' => array(
			'exclude' => 1,
			'label' => 'LLL:EXT:lang/locallang_general.xlf:LGL.language',
			'config' => array(
				'type' => 'select',
				'foreign_table' => 'sys_language',
				'foreign_table_where' => 'ORDER BY sys_language.title',
				'items' => array(
					array('LLL:EXT:lang/locallang_general.xlf:LGL.allLanguages', -1),
					array('LLL:EXT:lang/locallang_general.xlf:LGL.default_value', 0)
				),
			),
		),
		'l10n_parent' => array(
			'displayCond' => 'FIELD:sys_language_uid:>:0',
			'exclude' => 1,
			'label' => 'LLL:EXT:lang/locallang_general.xlf:LGL.l18n_parent',
			'config' => array(
				'type' => 'select',
				'items' => array(
					array('', 0),
				),
				'foreign_table' => 'tx_product_domain_model_category',
				'foreign_table_where' => 'AND tx_product_domain_model_category.pid=###CURRENT_PID### AND tx_product_domain_model_category.sys_language_uid IN (-1,0)',
			),
		),
		'l10n_diffsource' => array(
			'config' => array(
				'type' => 'passthrough',
			),
		),

		't3ver_label' => array(
			'label' => 'LLL:EXT:lang/locallang_general.xlf:LGL.versionLabel',
			'config' => array(
				'type' => 'input',
				'size' => 30,
				'max' => 255,
			)
		),
	
		'hidden' => array(
			'exclude' => 1,
			'label' => 'LLL:EXT:lang/locallang_general.xlf:LGL.hidden',
			'config' => array(
				'type' => 'check',
			),
		),
		'starttime' => array(
			'exclude' => 1,
			'l10n_mode' => 'mergeIfNotBlank',
			'label' => 'LLL:EXT:lang/locallang_general.xlf:LGL.starttime',
			'config' => array(
				'type' => 'input',
				'size' => 13,
				'max' => 20,
				'eval' => 'datetime',
				'checkbox' => 0,
				'default' => 0,
				'range' => array(
					'lower' => mktime(0, 0, 0, date('m'), date('d'), date('Y'))
				),
			),
		),
		'endtime' => array(
			'exclude' => 1,
			'l10n_mode' => 'mergeIfNotBlank',
			'label' => 'LLL:EXT:lang/locallang_general.xlf:LGL.endtime',
			'config' => array(
				'type' => 'input',
				'size' => 13,
				'max' => 20,
				'eval' => 'datetime',
				'checkbox' => 0,
				'default' => 0,
				'range' => array(
					'lower' => mktime(0, 0, 0, date('m'), date('d'), date('Y'))
				),
			),
		),

		'category_name' => array(
			'exclude' => 1,
			'label' => 'LLL:EXT:product/Resources/Private/Language/locallang_db.xlf:tx_product_domain_model_category.category_name',
			'config' => array(
				'type' => 'input',
				'size' => 30,
				'eval' => 'trim'
			),
		),
		'is_sub' => array(
			'exclude' => 1,
			'label' => 'LLL:EXT:product/Resources/Private/Language/locallang_db.xlf:tx_product_domain_model_category.is_sub',
			'config' => array(
				'type' => 'check',
				'default' => 0
			)
		),
		'sub_category' => array(
	        'exclude' => 1,
	        'label' => 'LLL:EXT:myproduct/Resources/Private/Language/locallang_db.xlf:tx_product_domain_model_category.sub_category',
	        'config' => array(
	            'type' => 'select',
	            'foreign_table' => 'tx_product_domain_model_category',
	            'foreign_table_where' => ' AND tx_product_domain_model_category.is_sub=0',
	            'size' => 10,
	            'autoSizeMax' => 30,
	            'maxitems' => 9999,
	            'multiple' => 0,
	    
	        ),
	    ),
		'in_menu' => array(
			'exclude' => 1,
			'label' => 'LLL:EXT:product/Resources/Private/Language/locallang_db.xlf:tx_product_domain_model_category.in_menu',
			'config' => array(
				'type' => 'check',
				'default' => 0
			)
		),
		
	),
);
