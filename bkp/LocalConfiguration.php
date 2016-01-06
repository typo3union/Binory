<?php
return array(
	'BE' => array(
		'debug' => '0',
		'explicitADmode' => 'explicitAllow',
		'installToolPassword' => '$P$Cn/OqztqXCty.eOhErtRP86edwgZ9G1',
		'loginSecurityLevel' => 'rsa',
		'versionNumberInFilename' => '0',
	),
	'DB' => array(
		'database' => 'critec_typo3',
		'extTablesDefinitionScript' => 'extTables.php',
		'host' => '127.0.0.1',
		'password' => 'u@qgCBRetED6',
		'port' => 3306,
		'socket' => '',
		'username' => 'c336_ritec',
	),
	'EXT' => array(
		'extConf' => array(
			'cbgooglemaps' => 'a:0:{}',
			'crawler' => 'a:19:{s:9:"sleepTime";s:4:"1000";s:16:"sleepAfterFinish";s:2:"10";s:11:"countInARun";s:3:"100";s:14:"purgeQueueDays";s:2:"14";s:12:"processLimit";s:1:"1";s:17:"processMaxRunTime";s:3:"300";s:14:"maxCompileUrls";s:5:"10000";s:12:"processDebug";s:1:"0";s:14:"processVerbose";s:1:"0";s:16:"crawlHiddenPages";s:1:"0";s:7:"phpPath";s:12:"/usr/bin/php";s:14:"enableTimeslot";s:1:"1";s:11:"logFileName";s:0:"";s:9:"follow30x";s:0:"";s:18:"makeDirectRequests";s:1:"0";s:16:"frontendBasePath";s:1:"/";s:22:"cleanUpOldQueueEntries";s:1:"1";s:19:"cleanUpProcessedAge";s:1:"2";s:19:"cleanUpScheduledAge";s:1:"7";}',
			'extend' => 'a:0:{}',
			'extension_builder' => 'a:3:{s:15:"enableRoundtrip";s:1:"1";s:15:"backupExtension";s:1:"1";s:9:"backupDir";s:35:"uploads/tx_extensionbuilder/backups";}',
			'fluidcontent' => 'a:0:{}',
			'fluidpages' => 'a:2:{s:8:"autoload";s:1:"1";s:8:"doktypes";s:0:"";}',
			'flux' => 'a:3:{s:9:"debugMode";s:1:"0";s:7:"compact";s:1:"0";s:12:"handleErrors";s:1:"0";}',
			'fluxtemplate' => 'a:0:{}',
			'indexed_search' => 'a:18:{s:8:"pdftools";s:9:"/usr/bin/";s:8:"pdf_mode";s:2:"20";s:5:"unzip";s:9:"/usr/bin/";s:6:"catdoc";s:9:"/usr/bin/";s:6:"xlhtml";s:9:"/usr/bin/";s:7:"ppthtml";s:9:"/usr/bin/";s:5:"unrtf";s:9:"/usr/bin/";s:9:"debugMode";s:1:"0";s:18:"fullTextDataLength";s:1:"0";s:23:"disableFrontendIndexing";s:1:"0";s:21:"enableMetaphoneSearch";s:1:"1";s:6:"minAge";s:2:"24";s:6:"maxAge";s:1:"0";s:16:"maxExternalFiles";s:1:"5";s:26:"useCrawlerForExternalFiles";s:1:"0";s:11:"flagBitMask";s:3:"192";s:16:"ignoreExtensions";s:0:"";s:17:"indexExternalURLs";s:1:"0";}',
			'news' => 'a:17:{s:29:"removeListActionFromFlexforms";s:1:"2";s:20:"pageModuleFieldsNews";s:317:"LLL:EXT:news/Resources/Private/Language/locallang_be.xlf:pagemodule_simple=title,datetime;LLL:EXT:news/Resources/Private/Language/locallang_be.xlf:pagemodule_advanced=title,datetime,teaser,categories;LLL:EXT:news/Resources/Private/Language/locallang_be.xlf:pagemodule_complex=title,datetime,teaser,categories,archive;";s:24:"pageModuleFieldsCategory";s:17:"title,description";s:11:"archiveDate";s:4:"date";s:13:"prependAtCopy";s:1:"1";s:6:"tagPid";s:1:"1";s:25:"showMediaDescriptionField";s:1:"0";s:12:"rteForTeaser";s:1:"0";s:22:"contentElementRelation";s:1:"0";s:13:"manualSorting";s:1:"0";s:19:"categoryRestriction";s:0:"";s:34:"categoryBeGroupTceFormsRestriction";s:1:"0";s:6:"useFal";s:1:"1";s:12:"showImporter";s:1:"0";s:18:"storageUidImporter";s:1:"1";s:22:"resourceFolderImporter";s:12:"/news_import";s:24:"showAdministrationModule";s:1:"1";}',
			'object_path' => 'a:0:{}',
			'phpmyadmin' => 'a:4:{s:12:"hideOtherDBs";s:1:"1";s:9:"uploadDir";s:21:"uploads/tx_phpmyadmin";s:10:"allowedIps";s:0:"";s:12:"useDevIpMask";s:1:"0";}',
			'powermail' => 'a:8:{s:12:"disableIpLog";s:1:"0";s:27:"disableMarketingInformation";s:1:"0";s:20:"disableBackendModule";s:1:"0";s:24:"disablePluginInformation";s:1:"0";s:13:"enableCaching";s:1:"0";s:28:"enableTableGarbageCollection";s:1:"0";s:15:"l10n_mode_merge";s:1:"0";s:29:"replaceIrreWithElementBrowser";s:1:"0";}',
			'product' => 'a:0:{}',
			'realurl' => 'a:5:{s:10:"configFile";s:26:"typo3conf/realurl_conf.php";s:14:"enableAutoConf";s:1:"1";s:14:"autoConfFormat";s:1:"0";s:12:"enableDevLog";s:1:"0";s:19:"enableChashUrlDebug";s:1:"0";}',
			'realurl_404_multilingual' => 'a:0:{}',
			'rsaauth' => 'a:1:{s:18:"temporaryDirectory";s:0:"";}',
			'saltedpasswords' => 'a:2:{s:3:"BE.";a:4:{s:21:"saltedPWHashingMethod";s:41:"TYPO3\\CMS\\Saltedpasswords\\Salt\\PhpassSalt";s:11:"forceSalted";i:0;s:15:"onlyAuthService";i:0;s:12:"updatePasswd";i:1;}s:3:"FE.";a:5:{s:7:"enabled";i:1;s:21:"saltedPWHashingMethod";s:41:"TYPO3\\CMS\\Saltedpasswords\\Salt\\PhpassSalt";s:11:"forceSalted";i:0;s:15:"onlyAuthService";i:0;s:12:"updatePasswd";i:1;}}',
			'sourceopt' => 'a:0:{}',
			'static_info_tables' => 'a:1:{s:13:"enableManager";s:1:"0";}',
			'vhs' => 'a:0:{}',
		),
	),
	'EXTCONF' => array(
		'lang' => array(
			'availableLanguages' => array(
				'de',
			),
		),
	),
	'FE' => array(
		'activateContentAdapter' => FALSE,
		'debug' => '0',
		'loginSecurityLevel' => 'rsa',
		'pageNotFound_handling' => '404',
	),
	'GFX' => array(
		'colorspace' => 'sRGB',
		'im' => '1',
		'im_mask_temp_ext_gif' => '1',
		'im_path' => '/usr/bin/',
		'im_path_lzw' => '/usr/bin/',
		'im_v5effects' => '0',
		'im_version_5' => 'im6',
		'image_processing' => '1',
		'jpg_quality' => '80',
	),
	'SYS' => array(
		'caching' => array(
			'cacheConfigurations' => array(
				'extbase_object' => array(
					'backend' => 'TYPO3\\CMS\\Core\\Cache\\Backend\\Typo3DatabaseBackend',
					'frontend' => 'TYPO3\\CMS\\Core\\Cache\\Frontend\\VariableFrontend',
					'groups' => array(
						'system',
					),
					'options' => array(
						'defaultLifetime' => 0,
					),
				),
			),
		),
		'clearCacheSystem' => '0',
		'compat_version' => '6.2',
		'devIPmask' => '',
		'displayErrors' => '1',
		'enableDeprecationLog' => '',
		'encryptionKey' => '3e28bbe96e6e1c6c540c92b6677004a7d85e76ff78806352b928d28bcf7a9c9df07fb95d978ba094ad67c96b94bb3d8e',
		'isInitialInstallationInProgress' => FALSE,
		'sitename' => 'Ritec',
		'sqlDebug' => '0',
		'systemLogLevel' => '2',
		't3lib_cs_convMethod' => 'mbstring',
		't3lib_cs_utils' => 'mbstring',
	),
);
?>