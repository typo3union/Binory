<?php
if (!defined ('TYPO3_MODE')) {
	die ('Access denied.');
}

$GLOBALS['TCA']['tx_jsevent_domain_model_event'] = array(
	'ctrl' => $GLOBALS['TCA']['tx_jsevent_domain_model_event']['ctrl'],
	'interface' => array(
		'showRecordFieldList' => 'sys_language_uid, l10n_parent, l10n_diffsource, hidden, title, start_date, location,price, description, image, repetition, weekly, week_day, week_count, weekly_days, monthly, month_on_value, every_month_value, month_occurance, month_day, months_counts, yearly, every_year_count_value, every_year_month_value, year_occurance, year_day, year_month_value, breakup, insgesamt, ende_am, category',
	),
	'types' => array(
		'1' => array('showitem' => 'sys_language_uid;;;;1-1-1, l10n_parent, l10n_diffsource, hidden;;1, title, start_date, location, price, description;;;richtext:rte_transform[mode=ts_links], image, repetition, weekly, week_day, week_count, weekly_days, monthly, month_on_value, every_month_value, month_occurance, month_day, months_counts, yearly, every_year_count_value, every_year_month_value, year_occurance, year_day, year_month_value, breakup, insgesamt, ende_am, category, --div--;LLL:EXT:cms/locallang_ttc.xlf:tabs.access, starttime, endtime'),
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
				'foreign_table' => 'tx_jsevent_domain_model_event',
				'foreign_table_where' => 'AND tx_jsevent_domain_model_event.pid=###CURRENT_PID### AND tx_jsevent_domain_model_event.sys_language_uid IN (-1,0)',
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

		'title' => array(
			'exclude' => 1,
			'label' => 'LLL:EXT:js_event/Resources/Private/Language/locallang_db.xlf:tx_jsevent_domain_model_event.title',
			'config' => array(
				'type' => 'input',
				'size' => 30,
				'eval' => 'trim'
			),
		),
		'start_date' => array(
			'exclude' => 1,
			'label' => 'LLL:EXT:js_event/Resources/Private/Language/locallang_db.xlf:tx_jsevent_domain_model_event.start_date',
			'config' => array(
				'type' => 'input',
				'size' => 10,
				'eval' => 'datetime',
				'checkbox' => 1,
				'default' => time()
			),
		),
		'end_date' => array(
			'exclude' => 1,
			'label' => 'LLL:EXT:js_event/Resources/Private/Language/locallang_db.xlf:tx_jsevent_domain_model_event.end_date',
			'config' => array(
				'type' => 'input',
				'size' => 10,
				'eval' => 'datetime',
				'checkbox' => 1,
				'default' => time()
			),
		),
		'location' => array(
			'exclude' => 1,
			'label' => 'LLL:EXT:js_event/Resources/Private/Language/locallang_db.xlf:tx_jsevent_domain_model_event.location',
			'config' => array(
				'type' => 'input',
				'size' => 30,
				'eval' => 'trim'
			),
		),
		'price' => array(
			'exclude' => 1,
			'label' => 'LLL:EXT:js_event/Resources/Private/Language/locallang_db.xlf:tx_jsevent_domain_model_event.price',
			'config' => array(
				'type' => 'input',
				'size' => 30,
				'eval' => 'trim'
			),
		),
		'description' => array(
			'exclude' => 1,
			'label' => 'LLL:EXT:js_event/Resources/Private/Language/locallang_db.xlf:tx_jsevent_domain_model_event.description',
			'config' => array(
				'type' => 'text',
				'cols' => 40,
				'rows' => 15,
				'eval' => 'trim',
				'wizards' => array(
					'RTE' => array(
						'icon' => 'wizard_rte2.gif',
						'notNewRecords'=> 1,
						'RTEonly' => 1,
						'script' => 'wizard_rte.php',
						'title' => 'LLL:EXT:cms/locallang_ttc.xlf:bodytext.W.RTE',
						'type' => 'script'
					)
				)
			),
		),
		'image' => array(
			'exclude' => 1,
			'label' => 'LLL:EXT:js_event/Resources/Private/Language/locallang_db.xlf:tx_jsevent_domain_model_event.image',
			'config' => \TYPO3\CMS\Core\Utility\ExtensionManagementUtility::getFileFieldTCAConfig(
				'image',
				array('maxitems' => 1),
				$GLOBALS['TYPO3_CONF_VARS']['GFX']['imagefile_ext']
			),
		),
		'repetition' => array(
			'exclude' => 1,
			'label' => 'LLL:EXT:js_event/Resources/Private/Language/locallang_db.xlf:tx_jsevent_domain_model_event.repetition',
			'config' => array(
				'type' => 'select',
				'items' => array(
					array('-- Label --', 0),
				),
				'size' => 1,
				'maxitems' => 1,
				'eval' => ''
			),
		),
		'weekly' => array(
			'exclude' => 1,
			'label' => 'LLL:EXT:js_event/Resources/Private/Language/locallang_db.xlf:tx_jsevent_domain_model_event.weekly',
			'config' => array(
				'type' => 'select',
				'items' => array(
					array('-- Label --', 0),
				),
				'size' => 1,
				'maxitems' => 1,
				'eval' => ''
			),
		),
		'week_count' => array(
			'exclude' => 1,
			'label' => 'LLL:EXT:js_event/Resources/Private/Language/locallang_db.xlf:tx_jsevent_domain_model_event.week_count',
			'config' => array(
				'type' => 'input',
				'size' => 30,
				'eval' => 'trim'
			),
		),
		'monthly' => array(
			'exclude' => 1,
			'label' => 'LLL:EXT:js_event/Resources/Private/Language/locallang_db.xlf:tx_jsevent_domain_model_event.monthly',
			'config' => array(
				'type' => 'select',
				'items' => array(
					array('-- Label --', 0),
				),
				'size' => 1,
				'maxitems' => 1,
				'eval' => ''
			),
		),
		'month_on_value' => array(
			'exclude' => 1,
			'label' => 'LLL:EXT:js_event/Resources/Private/Language/locallang_db.xlf:tx_jsevent_domain_model_event.month_on_value',
			'config' => array(
				'type' => 'input',
				'size' => 30,
				'eval' => 'trim'
			),
		),
		'every_month_value' => array(
			'exclude' => 1,
			'label' => 'LLL:EXT:js_event/Resources/Private/Language/locallang_db.xlf:tx_jsevent_domain_model_event.every_month_value',
			'config' => array(
				'type' => 'input',
				'size' => 30,
				'eval' => 'trim'
			),
		),
		'month_occurance' => array(
			'exclude' => 1,
			'label' => 'LLL:EXT:js_event/Resources/Private/Language/locallang_db.xlf:tx_jsevent_domain_model_event.month_occurance',
			'config' => array(
				'type' => 'select',
				'items' => array(
					array('-- Label --', 0),
				),
				'size' => 1,
				'maxitems' => 1,
				'eval' => ''
			),
		),
		'months_counts' => array(
			'exclude' => 1,
			'label' => 'LLL:EXT:js_event/Resources/Private/Language/locallang_db.xlf:tx_jsevent_domain_model_event.months_counts',
			'config' => array(
				'type' => 'input',
				'size' => 30,
				'eval' => 'trim'
			),
		),
		'yearly' => array(
			'exclude' => 1,
			'label' => 'LLL:EXT:js_event/Resources/Private/Language/locallang_db.xlf:tx_jsevent_domain_model_event.yearly',
			'config' => array(
				'type' => 'select',
				'items' => array(
					array('-- Label --', 0),
				),
				'size' => 1,
				'maxitems' => 1,
				'eval' => ''
			),
		),
		'every_year_count_value' => array(
			'exclude' => 1,
			'label' => 'LLL:EXT:js_event/Resources/Private/Language/locallang_db.xlf:tx_jsevent_domain_model_event.every_year_count_value',
			'config' => array(
				'type' => 'input',
				'size' => 30,
				'eval' => 'trim'
			),
		),
		'year_occurance' => array(
			'exclude' => 1,
			'label' => 'LLL:EXT:js_event/Resources/Private/Language/locallang_db.xlf:tx_jsevent_domain_model_event.year_occurance',
			'config' => array(
				'type' => 'select',
				'items' => array(
					array('-- Label --', 0),
				),
				'size' => 1,
				'maxitems' => 1,
				'eval' => ''
			),
		),
		'breakup' => array(
			'exclude' => 1,
			'label' => 'LLL:EXT:js_event/Resources/Private/Language/locallang_db.xlf:tx_jsevent_domain_model_event.breakup',
			'config' => array(
				'type' => 'select',
				'items' => array(
					array('-- Label --', 0),
				),
				'size' => 1,
				'maxitems' => 1,
				'eval' => ''
			),
		),
		'insgesamt' => array(
			'exclude' => 1,
			'label' => 'LLL:EXT:js_event/Resources/Private/Language/locallang_db.xlf:tx_jsevent_domain_model_event.insgesamt',
			'config' => array(
				'type' => 'input',
				'size' => 30,
				'eval' => 'trim'
			),
		),
		'ende_am' => array(
			'exclude' => 1,
			'label' => 'LLL:EXT:js_event/Resources/Private/Language/locallang_db.xlf:tx_jsevent_domain_model_event.ende_am',
			'config' => array(
				'type' => 'input',
				'size' => 10,
				'eval' => 'datetime',
				'checkbox' => 1,
				'default' => time()
			),
		),
		'category' => array(
			'exclude' => 1,
			'label' => 'LLL:EXT:js_event/Resources/Private/Language/locallang_db.xlf:tx_jsevent_domain_model_event.category',
			'config' => array(
				'type' => 'select',
				'foreign_table' => 'tx_jsevent_domain_model_category',
				'MM' => 'tx_jsevent_event_category_mm',
				'size' => 10,
				'autoSizeMax' => 30,
				'maxitems' => 9999,
				'multiple' => 0,
				'wizards' => array(
					'_PADDING' => 1,
					'_VERTICAL' => 1,
					'edit' => array(
						'type' => 'popup',
						'title' => 'Edit',
						'script' => 'wizard_edit.php',
						'icon' => 'edit2.gif',
						'popup_onlyOpenIfSelected' => 1,
						'JSopenParams' => 'height=350,width=580,status=0,menubar=0,scrollbars=1',
						),
					'add' => Array(
						'type' => 'script',
						'title' => 'Create new',
						'icon' => 'add.gif',
						'params' => array(
							'table' => 'tx_jsevent_domain_model_category',
							'pid' => '###CURRENT_PID###',
							'setValue' => 'prepend'
							),
						'script' => 'wizard_add.php',
					),
				),
			),
		),
		'week_day' => array(
			'exclude' => 1,
			'label' => 'LLL:EXT:js_event/Resources/Private/Language/locallang_db.xlf:tx_jsevent_domain_model_event.week_day',
			'config' => array(
				'type' => 'select',
				'foreign_table' => 'tx_jsevent_domain_model_days',
				'minitems' => 0,
				'maxitems' => 1,
			),
		),
		'weekly_days' => array(
			'exclude' => 1,
			'label' => 'LLL:EXT:js_event/Resources/Private/Language/locallang_db.xlf:tx_jsevent_domain_model_event.weekly_days',
			'config' => array(
				'type' => 'select',
				'foreign_table' => 'tx_jsevent_domain_model_days',
				'MM' => 'tx_jsevent_event_weeklydays_days_mm',
				'size' => 10,
				'autoSizeMax' => 30,
				'maxitems' => 9999,
				'multiple' => 0,
				'wizards' => array(
					'_PADDING' => 1,
					'_VERTICAL' => 1,
					'edit' => array(
						'type' => 'popup',
						'title' => 'Edit',
						'script' => 'wizard_edit.php',
						'icon' => 'edit2.gif',
						'popup_onlyOpenIfSelected' => 1,
						'JSopenParams' => 'height=350,width=580,status=0,menubar=0,scrollbars=1',
						),
					'add' => Array(
						'type' => 'script',
						'title' => 'Create new',
						'icon' => 'add.gif',
						'params' => array(
							'table' => 'tx_jsevent_domain_model_days',
							'pid' => '###CURRENT_PID###',
							'setValue' => 'prepend'
							),
						'script' => 'wizard_add.php',
					),
				),
			),
		),
		'month_day' => array(
			'exclude' => 1,
			'label' => 'LLL:EXT:js_event/Resources/Private/Language/locallang_db.xlf:tx_jsevent_domain_model_event.month_day',
			'config' => array(
				'type' => 'select',
				'foreign_table' => 'tx_jsevent_domain_model_days',
				'minitems' => 0,
				'maxitems' => 1,
			),
		),
		'every_year_month_value' => array(
			'exclude' => 1,
			'label' => 'LLL:EXT:js_event/Resources/Private/Language/locallang_db.xlf:tx_jsevent_domain_model_event.every_year_month_value',
			'config' => array(
				'type' => 'select',
				'foreign_table' => 'tx_jsevent_domain_model_months',
				'minitems' => 0,
				'maxitems' => 1,
			),
		),
		'year_day' => array(
			'exclude' => 1,
			'label' => 'LLL:EXT:js_event/Resources/Private/Language/locallang_db.xlf:tx_jsevent_domain_model_event.year_day',
			'config' => array(
				'type' => 'select',
				'foreign_table' => 'tx_jsevent_domain_model_days',
				'minitems' => 0,
				'maxitems' => 1,
			),
		),
		'year_month_value' => array(
			'exclude' => 1,
			'label' => 'LLL:EXT:js_event/Resources/Private/Language/locallang_db.xlf:tx_jsevent_domain_model_event.year_month_value',
			'config' => array(
				'type' => 'select',
				'foreign_table' => 'tx_jsevent_domain_model_months',
				'minitems' => 0,
				'maxitems' => 1,
			),
		),
		
	),
);
## EXTENSION BUILDER DEFAULTS END TOKEN - Everything BEFORE this line is overwritten with the defaults of the extension builder


$GLOBALS['TCA']['tx_jsevent_domain_model_event']['columns']['repetition']['onChange'] = 'reload';
$GLOBALS['TCA']['tx_jsevent_domain_model_event']['columns']['weekly']['onChange'] = 'reload';
$GLOBALS['TCA']['tx_jsevent_domain_model_event']['columns']['monthly']['onChange'] = 'reload';
$GLOBALS['TCA']['tx_jsevent_domain_model_event']['columns']['yearly']['onChange'] = 'reload';
$GLOBALS['TCA']['tx_jsevent_domain_model_event']['columns']['breakup']['onChange'] = 'reload';

$GLOBALS['TCA']['tx_jsevent_domain_model_event']['columns']['weekly']['displayCond'] = 'FIELD:repetition:=:1';
$GLOBALS['TCA']['tx_jsevent_domain_model_event']['columns']['monthly']['displayCond'] = 'FIELD:repetition:=:2';
$GLOBALS['TCA']['tx_jsevent_domain_model_event']['columns']['yearly']['displayCond'] = 'FIELD:repetition:=:3';

$GLOBALS['TCA']['tx_jsevent_domain_model_event']['columns']['week_day']['displayCond'] = 'FIELD:weekly:=:1';
$GLOBALS['TCA']['tx_jsevent_domain_model_event']['columns']['week_count']['displayCond'] = 'FIELD:weekly:=:2';
$GLOBALS['TCA']['tx_jsevent_domain_model_event']['columns']['weekly_days']['displayCond'] = 'FIELD:weekly:=:2';

$GLOBALS['TCA']['tx_jsevent_domain_model_event']['columns']['month_on_value']['displayCond'] = 'FIELD:monthly:=:1';
$GLOBALS['TCA']['tx_jsevent_domain_model_event']['columns']['every_month_value']['displayCond'] = 'FIELD:monthly:=:1';
$GLOBALS['TCA']['tx_jsevent_domain_model_event']['columns']['month_occurance']['displayCond'] = 'FIELD:monthly:=:2';
$GLOBALS['TCA']['tx_jsevent_domain_model_event']['columns']['month_day']['displayCond'] = 'FIELD:monthly:=:2';
$GLOBALS['TCA']['tx_jsevent_domain_model_event']['columns']['months_counts']['displayCond'] = 'FIELD:monthly:=:2';

$GLOBALS['TCA']['tx_jsevent_domain_model_event']['columns']['every_year_count_value']['displayCond'] = 'FIELD:yearly:=:1';
$GLOBALS['TCA']['tx_jsevent_domain_model_event']['columns']['every_year_month_value']['displayCond'] = 'FIELD:yearly:=:1';
$GLOBALS['TCA']['tx_jsevent_domain_model_event']['columns']['year_occurance']['displayCond'] = 'FIELD:yearly:=:2';
$GLOBALS['TCA']['tx_jsevent_domain_model_event']['columns']['year_day']['displayCond'] = 'FIELD:yearly:=:2';
$GLOBALS['TCA']['tx_jsevent_domain_model_event']['columns']['year_month_value']['displayCond'] = 'FIELD:yearly:=:2';

$GLOBALS['TCA']['tx_jsevent_domain_model_event']['columns']['insgesamt']['displayCond'] = 'FIELD:breakup:=:2';
$GLOBALS['TCA']['tx_jsevent_domain_model_event']['columns']['ende_am']['displayCond'] = 'FIELD:breakup:=:3';



$GLOBALS['TCA']['tx_jsevent_domain_model_event']['columns']['repetition']['config']['items'] =  array(
					array('LLL:EXT:js_event/Resources/Private/Language/locallang_db.xlf:tx_jsevent_domain_model_event.repetition.I.0', 0),
					array('LLL:EXT:js_event/Resources/Private/Language/locallang_db.xlf:tx_jsevent_domain_model_event.repetition.I.1', 1),
					array('LLL:EXT:js_event/Resources/Private/Language/locallang_db.xlf:tx_jsevent_domain_model_event.repetition.I.2', 2),
					array('LLL:EXT:js_event/Resources/Private/Language/locallang_db.xlf:tx_jsevent_domain_model_event.repetition.I.3', 3),
				);


$GLOBALS['TCA']['tx_jsevent_domain_model_event']['columns']['weekly']['config']['items'] =  array(
					array('LLL:EXT:js_event/Resources/Private/Language/locallang_db.xlf:tx_jsevent_domain_model_event.weekly.I.0', 0),
					array('LLL:EXT:js_event/Resources/Private/Language/locallang_db.xlf:tx_jsevent_domain_model_event.weekly.I.1', 1),
					array('LLL:EXT:js_event/Resources/Private/Language/locallang_db.xlf:tx_jsevent_domain_model_event.weekly.I.2', 2),
					
				);


$GLOBALS['TCA']['tx_jsevent_domain_model_event']['columns']['monthly']['config']['items'] =  array(
					array('LLL:EXT:js_event/Resources/Private/Language/locallang_db.xlf:tx_jsevent_domain_model_event.monthly.I.0', 0),
					array('LLL:EXT:js_event/Resources/Private/Language/locallang_db.xlf:tx_jsevent_domain_model_event.monthly.I.1', 1),
					array('LLL:EXT:js_event/Resources/Private/Language/locallang_db.xlf:tx_jsevent_domain_model_event.monthly.I.2', 2),
					
				);


$GLOBALS['TCA']['tx_jsevent_domain_model_event']['columns']['month_occurance']['config']['items'] =  array(
					array('LLL:EXT:js_event/Resources/Private/Language/locallang_db.xlf:tx_jsevent_domain_model_event.month_occurance.I.0', 0),
					array('LLL:EXT:js_event/Resources/Private/Language/locallang_db.xlf:tx_jsevent_domain_model_event.month_occurance.I.1', 1),
					array('LLL:EXT:js_event/Resources/Private/Language/locallang_db.xlf:tx_jsevent_domain_model_event.month_occurance.I.2', 2),
					array('LLL:EXT:js_event/Resources/Private/Language/locallang_db.xlf:tx_jsevent_domain_model_event.month_occurance.I.3', 3),
				);

$GLOBALS['TCA']['tx_jsevent_domain_model_event']['columns']['yearly']['config']['items'] =  array(
					array('LLL:EXT:js_event/Resources/Private/Language/locallang_db.xlf:tx_jsevent_domain_model_event.yearly.I.0', 0),
					array('LLL:EXT:js_event/Resources/Private/Language/locallang_db.xlf:tx_jsevent_domain_model_event.yearly.I.1', 1),
					array('LLL:EXT:js_event/Resources/Private/Language/locallang_db.xlf:tx_jsevent_domain_model_event.yearly.I.2', 2),
					
				);

$GLOBALS['TCA']['tx_jsevent_domain_model_event']['columns']['year_occurance']['config']['items'] =  array(
					array('LLL:EXT:js_event/Resources/Private/Language/locallang_db.xlf:tx_jsevent_domain_model_event.year_occurance.I.0', 0),
					array('LLL:EXT:js_event/Resources/Private/Language/locallang_db.xlf:tx_jsevent_domain_model_event.year_occurance.I.1', 1),
					array('LLL:EXT:js_event/Resources/Private/Language/locallang_db.xlf:tx_jsevent_domain_model_event.year_occurance.I.2', 2),
					array('LLL:EXT:js_event/Resources/Private/Language/locallang_db.xlf:tx_jsevent_domain_model_event.year_occurance.I.3', 3),
				);


$GLOBALS['TCA']['tx_jsevent_domain_model_event']['columns']['breakup']['config']['items'] =  array(
					array('LLL:EXT:js_event/Resources/Private/Language/locallang_db.xlf:tx_jsevent_domain_model_event.breakup.I.0', 0),
					array('LLL:EXT:js_event/Resources/Private/Language/locallang_db.xlf:tx_jsevent_domain_model_event.breakup.I.1', 1),
					array('LLL:EXT:js_event/Resources/Private/Language/locallang_db.xlf:tx_jsevent_domain_model_event.breakup.I.2', 2),
					array('LLL:EXT:js_event/Resources/Private/Language/locallang_db.xlf:tx_jsevent_domain_model_event.breakup.I.3', 3),
				);