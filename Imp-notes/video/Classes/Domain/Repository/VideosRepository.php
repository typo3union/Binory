<?php
namespace Video\Video\Domain\Repository;

/***************************************************************
 *
 *  Copyright notice
 *
 *  (c) 2015
 *
 *  All rights reserved
 *
 *  This script is part of the TYPO3 project. The TYPO3 project is
 *  free software; you can redistribute it and/or modify
 *  it under the terms of the GNU General Public License as published by
 *  the Free Software Foundation; either version 3 of the License, or
 *  (at your option) any later version.
 *
 *  The GNU General Public License can be found at
 *  http://www.gnu.org/copyleft/gpl.html.
 *
 *  This script is distributed in the hope that it will be useful,
 *  but WITHOUT ANY WARRANTY; without even the implied warranty of
 *  MERCHANTABILITY or FITNESS FOR A PARTICULAR PURPOSE.  See the
 *  GNU General Public License for more details.
 *
 *  This copyright notice MUST APPEAR in all copies of the script!
 ***************************************************************/

/**
 * The repository for Videos
 */
class VideosRepository extends \TYPO3\CMS\Extbase\Persistence\Repository
{

    /**
     * getVideoData
     *
     * @param $settings
     * @return
     */
    public function getVideoData($settings)
    {
        $this->fullURL = \TYPO3\CMS\Core\Utility\GeneralUtility::getIndpEnv('TYPO3_SITE_URL');
//$this->cObject = \TYPO3\CMS\Core\Utility\GeneralUtility::makeInstance('tslib_cObj');
        $limit = '';
        if (isset($settings['limit']) && $settings['limit'] > 0) {
            $limit = $settings['limit'];
        }
        $field = 'uid, upload_video, alttag, background_image';
        $table = 'tx_video_domain_model_videos';
        $orderBy = ' uid asc ';
        //$groupBy	= " ";
        $where = ' ';
        if (isset($settings['storagePID']) && $settings['storagePID'] != '') {
            $where .= ' AND pid in (' . $settings['storagePID'] . ') ';
        }
        $where = ' deleted = 0 AND hidden = 0' . $where;
        $conf = $this->getDBHandle()->exec_SELECTgetRows($field, $table, $where, $groupBy, $orderBy, $limit);
        //		echo $this->getDBHandle()->SELECTquery($field,$table,$where,$groupBy,$orderBy,$limit);	die;
        $data = array();
        foreach ($conf as $key => $value) {
            $data[$value['uid']] = $value;
            if ($value['background_image'] > 0) {
                $field1 = 'uid';
                $table1 = 'sys_file_reference';
                $where1 = ' tablenames = \'tx_video_domain_model_videos\' AND fieldname = \'backgroundImage\' AND uid_foreign = \'' . $value['uid'] . '\' AND deleted = 0 AND hidden = 0';
                $res = $this->getDBHandle()->exec_SELECTgetRows($field1, $table1, $where1);
                $data[$value['uid']]['imageReference'] = $res[0]['uid'];
            }
        }
        return $data;
    }
    
    /**
     * getDBHandle
     *
     * @return
     */
    public function getDBHandle()
    {
        return $GLOBALS['TYPO3_DB'];
    }

}