<?php
$GLOBALS['TYPO3_CONF_VARS']['SYS']['curlUse'] = true;

$TYPO3_CONF_VARS['EXTCONF']['realurl_404_multilingual'] = array(
    '_DEFAULT' => array(
        'errorPage' => '404/',
    ),
);



$GLOBALS['TYPO3_CONF_VARS']['EXTCONF']['realurl'] = unserialize('a:1:{s:8:"_DEFAULT";a:5:{s:4:"init";a:6:{s:16:"enableCHashCache";b:1;s:18:"appendMissingSlash";s:18:"ifNotFile,redirect";s:18:"adminJumpToBackend";b:1;s:20:"enableUrlDecodeCache";b:1;s:20:"enableUrlEncodeCache";b:1;s:19:"emptyUrlReturnValue";s:1:"/";}s:8:"pagePath";a:5:{s:4:"type";s:4:"user";s:8:"userFunc";s:68:"EXT:realurl/class.tx_realurl_advanced.php:&tx_realurl_advanced->main";s:14:"spaceCharacter";s:1:"-";s:14:"languageGetVar";s:1:"L";s:11:"rootpage_id";s:1:"1";}s:8:"fileName";a:3:{s:25:"defaultToHTMLsuffixOnPrev";i:0;s:16:"acceptHTMLsuffix";i:1;s:5:"index";a:1:{s:5:"print";a:1:{s:9:"keyValues";a:1:{s:4:"type";i:98;}}}}s:7:"preVars";a:1:{i:0;a:3:{s:6:"GETvar";s:1:"L";s:8:"valueMap";a:1:{s:2:"en";s:1:"1";}s:7:"noMatch";s:6:"bypass";}}s:11:"postVarSets";a:1:{s:8:"_DEFAULT";a:1:{s:4:"news";a:1:{i:0;a:2:{s:6:"GETvar";s:17:"tx_news_pi1[news]";s:11:"lookUpTable";a:5:{s:5:"table";s:25:"tx_news_domain_model_news";s:8:"id_field";s:3:"uid";s:11:"alias_field";s:5:"title";s:14:"useUniqueCache";i:1;s:19:"useUniqueCache_conf";a:2:{s:10:"strtolower";i:1;s:14:"spaceCharacter";s:1:"-";}}}}}}}}');

$TYPO3_CONF_VARS['EXTCONF']['realurl']['_DEFAULT'] = array(
    'init' => array(
        'enableCHashCache' => 1,
        'appendMissingSlash' => 'ifNotFile',
        'enableUrlDecodeCache' => 1,
        'enableUrlEncodeCache' => 1,
        'respectSimulateStaticURLs' => 0,
        'postVarSet_failureMode' => '',
    ),
    'redirects_regex' => array(
    ),
    'preVars' => array(
        array(
            'GETvar' => 'no_cache',
            'valueMap' => array(
                'no_cache' => 1,
            ),
            'noMatch' => 'bypass',
        ),
        array(
            'GETvar' => 'L',
            'valueMap' => array(
                'en' => '1',
            ),
            'noMatch' => 'bypass',
        ),
    ),
    'pagePath' => array(
        'type' => 'user',
        'userFunc' => 'EXT:realurl/class.tx_realurl_advanced.php:&tx_realurl_advanced->main',
        'spaceCharacter' => '-',
        'languageGetVar' => 'L',
        'expireDays' => 7,
        'rootpage_id' => 1,
    ),
    'postVarSets' => array(
        '_DEFAULT' => array(
            // news archive parameters
            'archive' => array(
                array(
                    'GETvar' => 'tx_ttnews[year]',
                ),
                array(
                    'GETvar' => 'tx_ttnews[month]',
                    'valueMap' => array(
                        'january' => '01',
                        'february' => '02',
                        'march' => '03',
                        'april' => '04',
                        'may' => '05',
                        'june' => '06',
                        'july' => '07',
                        'august' => '08',
                        'september' => '09',
                        'october' => '10',
                        'november' => '11',
                        'december' => '12',
                    )
                ),
            ),
            // news pagebrowser
            'browse' => array(
                array(
                    'GETvar' => 'tx_ttnews[pointer]',
                ),
            ),
            // news categories
            'select_category' => array(
                array(
                    'GETvar' => 'tx_ttnews[cat]',
                ),
            ),
            // news articles and searchwords
            'article' => array(
                array(
                    'GETvar' => 'tx_news_pi1[news]',
                    'lookUpTable' => array(
                        'table' => 'tx_news_domain_model_news',
                        'id_field' => 'uid',
                        'alias_field' => 'title',
                        'addWhereClause' => ' AND NOT deleted',
                        'useUniqueCache' => 1,
                        'useUniqueCache_conf' => array(
                            'strtolower' => 1,
                            'spaceCharacter' => '-',
                        ),
                    ),
                ),
                array(
                    'GETvar' => 'tx_ttnews[swords]',
                ),
            ),
           
           'category' => array(
                array(
                    'GETvar' => 'tx_product_product[subcategory]',
                    'lookUpTable' => array(
                        'table' => 'tx_product_domain_model_subcategory',
                        'id_field' => 'uid',
                        'alias_field' => 'title',
                        'addWhereClause' => ' AND NOT deleted',
                        'useUniqueCache' => 1,
                        'useUniqueCache_conf' => array(
                            'strtolower' => 1,
                            'spaceCharacter' => '-'
                        ),
                        'autoUpdate' => 1,
                        'expireDays' => 180
                    ),
                    
                ),

                         
             ),
             'action' => array(
                    array(
                        'GETvar' => 'tx_golf_golf[action]',
                        'noMatch' => 'bypass'
                    ),
                    
                ),    



           'team' => array(
                array(
                    'GETvar' => 'tx_team_team[team]',
                    'lookUpTable' => array(
                        'table' => 'tx_team_domain_model_team',
                        'id_field' => 'uid',
                        'alias_field' => 'name',
                        'addWhereClause' => ' AND NOT deleted',
                        'useUniqueCache' => 1,
                        'useUniqueCache_conf' => array(
                            'strtolower' => 1,
                            'spaceCharacter' => '-'
                        ),
                        'autoUpdate' => 1,
                        'expireDays' => 180
                    ),
                    
                ), 
           
            ), 

                 'act' => array(
                    array(
                        'GETvar' => 'tx_team_team[action]',
                    'noMatch' => 'bypass'
                    )
                ),
        ),
    ),
    'fileName' => array(
        'defaultToHTMLsuffixOnPrev' => 0,
        'index' => array(
            'rss.xml' => array(
                'keyValues' => array(
                    'type' => 100,
                ),
            ),
            'rss091.xml' => array(
                'keyValues' => array(
                    'type' => 101,
                ),
            ),
            'rdf.xml' => array(
                'keyValues' => array(
                    'type' => 102,
                ),
            ),
            'atom.xml' => array(
                'keyValues' => array(
                    'type' => 103,
                ),
            ),
        ),
    ),
);
