<?php
namespace Project\Project\Domain\Repository;

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
 * The repository for Projects
 */
class ProjectRepository extends \TYPO3\CMS\Extbase\Persistence\Repository {

	public function findprojects()
    {

        $Query = $this->createQuery();
        // Enable below line for debug
        $Query->getQuerySettings()->setReturnRawQueryResult(TRUE);
        $sql = 'SELECT * from tx_project_domain_model_project where deleted=0 AND hidden=0 AND sys_language_uid =' . $GLOBALS['TSFE']->sys_language_uid;
    	
    	$Query->statement($sql);
        $result = $this->falImages($Query->execute(), "tx_project_domain_model_project");
        
        return $result;
    }


     public function findproject_detail($id)
    {

        // Enable below line for debug
        $where1 = 'uid ='.$id;
        $next = $GLOBALS['TYPO3_DB']->exec_SELECTgetSingleRow('*','tx_project_domain_model_project',$where1);
        //$Query->statement($sql);
        $data[]=$next;
        $result = $this->falImages($data, "tx_project_domain_model_project");
      
        return $result;
    }
    

    /**
    * falImages
    *
    * @param $result
    * @param $tablename
    * @param $fieldname
    * @return
    */
    public function falImages($result, $tablename = NULL, $fieldname = NULL) {
        
        $query = $this->createQuery();
        $query->getQuerySettings()->setReturnRawQueryResult(TRUE);
        $where = '';
        if ($tablename != '') {
            $where = ' AND tablenames = "' . $tablename . '"';
        }
        if ($fieldname != '') {
            $where .= ' AND fieldname IN ("' . $fieldname . '")';
        }
        foreach ($result as $key => $value) {
            $whr = ' deleted= 0 and hidden = 0 ' . $where . ' AND uid_foreign = ' . $value['uid'];
            $sysImages = $GLOBALS['TYPO3_DB']->exec_SELECTgetRows('*', 'sys_file_reference', $whr);
            $arr = '';
            foreach ($sysImages as $key1 => $value1) {
                $sysImageDetail = 'SELECT * FROM sys_file WHERE uid = ' . $value1['uid_local'];
                $query->statement($sysImageDetail);
                $sysImageDetail = $query->execute();
                $arr[$value1['fieldname']][$value1['uid']]['identifier'] = 'fileadmin' . $sysImageDetail[0]['identifier'];
                $arr[$value1['fieldname']][$value1['uid']]['title'] = $value1['title'];
                $arr[$value1['fieldname']][$value1['uid']]['caption'] = $value1['description'];
                $arr[$value1['fieldname']][$value1['uid']]['extension'] = $sysImageDetail[0]['extension'];
                $arr[$value1['fieldname']][$value1['uid']]['mime_type'] = $sysImageDetail[0]['mime_type'];
                $arr[$value1['fieldname']][$value1['uid']]['name'] = $sysImageDetail[0]['name'];
                $arr[$value1['fieldname']][$value1['uid']]['uid'] = $sysImageDetail[0]['uid'];
                $arr1 = \TYPO3\CMS\Core\Utility\GeneralUtility::trimExplode('/', $sysImageDetail[0]['mime_type'], true);
                $arr[$value1['fieldname']][$value1['uid']]['mime'] = $arr1[0];
                $arr[$value1['fieldname']][$value1['uid']]['type'] = $arr1[1];
                $arr[$value1['fieldname']][$value1['uid']]['imageName'] = basename($sysImageDetail[0]['identifier']);
            }
            $result[$key]['media'] = $arr;
        }

        return $result;
    }
}