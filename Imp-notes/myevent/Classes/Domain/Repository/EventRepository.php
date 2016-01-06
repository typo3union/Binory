<?php
namespace JS\JsEvent\Domain\Repository;

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
 * The repository for Events
 */
class EventRepository extends \TYPO3\CMS\Extbase\Persistence\Repository {

	/**
	 * getEventData
	 *
	 * @param $settings
	 * @param $event
	 * @return
	 */
	public function getEventData($settings, $event,$allevent) {
		$this->fullURL = \TYPO3\CMS\Core\Utility\GeneralUtility::getIndpEnv('TYPO3_SITE_URL');
		$this->cObject = \TYPO3\CMS\Core\Utility\GeneralUtility::makeInstance('tslib_cObj');
		$limit = '';
		if (isset($settings['limit']) && $settings['limit'] > 0) {
			$limit = $settings['limit'];
		}
		$orderBy = ' e.start_date asc ';
		$field = 'e.*';
		//$field = 'e.uid, e.title, e.start_date, e.end_date, e.location, e.description, e.image, c.title as category,e.repetition,e.weekly,e.week_day,e.breakup,e.ende_am,e.insgesamt,e.weekly_day,e.week_count,e.monthly,e.month_on_value,e.every_month_value,e.month_occurance,e.months_count';
		$table = 'tx_jsevent_domain_model_event as e 
						LEFT JOIN tx_jsevent_event_category_mm AS m ON e.uid = m.uid_local 
						LEFT JOIN tx_jsevent_domain_model_category AS c ON m.uid_foreign = c.uid ';
		$groupBy = '( e.uid )';
		$where = ' ';
		$event = intval($event);
		if ($event > 0) {
			$where = ' AND e.uid =  \'' . $event . '\'';
		} else {
			if (isset($settings['storagePID']) && $settings['storagePID'] != '') {
				$where .= ' AND e.pid in (' . $settings['storagePID'] . ') ';
			}
			if (isset($settings['categories']) && $settings['categories'] != '') {
				$where .= ' AND m.uid_foreign IN (' . $settings['categories'] . ')  ';
			}
		}
		//$where = ' e.deleted = 0 AND e.hidden = 0 AND  e.end_date > ' . time() . ' AND  e.end_date > e.start_date ' . $where;
		$where = ' e.deleted = 0 AND e.hidden = 0' . $where;
		$conf = $this->getDBHandle()->exec_SELECTgetRows($field, $table, $where, $groupBy, $orderBy, $limit);
		//		echo $this->getDBHandle()->SELECTquery($field,$table,$where,$groupBy,$orderBy);	die;
		
		$eventdata = array();
		foreach ($conf as $key => $value) {

			$eventdata[$value['uid']] = $value;

			if ($value['repetition'] == '1') {
				if ($value['weekly'] == '1') {
					$start = $value['start_date']; 
					//$start = date('d-m-Y',$start);
					 $day = $value['week_day'] - 1; 
					//$dow_text = date('D', strtotime("Sunday +{$day} days"));
					//echo date('Y-m-d',strtotime($dow_text));  
					//exit;
					$final_date = true;
					$i = 0;
					$cnt = 0;
					while ($final_date) {
						
						$dow_text = date('l', strtotime("Sunday +{$day} days"));
						$time = '+' . $i . ' weeks'. $dow_text;
						$new_date = date('d-m-Y',strtotime($time));
						$new_date1 = strtotime($new_date);
						//echo $new_date." -- ".date('d-m-Y',$start)."<br />";
						
						if($new_date1 >= $start){
							
							$eventdata[$value['uid']]['newdate'][$cnt] = $new_date;
							break;
						}else {

						}
						
						$i++;
						$cnt++;
					}
					
					
				} elseif ($value['weekly'] == '2') {
					$start = $value['start_date']; 
					//$start = date('d-m-Y',$start);
					$day_id = $value['uid'];
					$field2 = '*';
					$table2 = 'tx_jsevent_event_weeklydays_days_mm';
					$where2 = 'uid_local = '.$day_id;
					$week_day = $this->getDBHandle()->exec_SELECTgetRows($field2, $table2, $where2);
					//echo date('m/d/Y', strtotime('+2 weeks Sunday', strtotime('10/01/2015')));
					
					$cnt = 0;
					foreach($week_day as $day){
						$day1 = $day['uid_foreign'] - 1;
						$dow_text1 = date('D', strtotime("Sunday +{$day1} days"));
						$totaltime = $value['week_count'];
						$time = '+' . $totaltime . ' weeks ' . $dow_text1;
						$start_date = date('m/d/Y',$start);
						$new_date = strtotime($time,strtotime($start_date)); 
						$new_date1 = date('d-m-Y',$new_date); 
						if($new_date >= $start){
							//echo date('Y-m-d',$new_date1); echo "--".$value['uid']."--".'test1--<br>';
									$eventdata[$value['uid']]['newdate'][$cnt] = $new_date1;
								}
					    
					$cnt++;
					}
					
				}
			}


			if ($value['repetition'] == '2') {
			
				if ($value['monthly'] == '1') {
				$start = $value['start_date']; 
				//$start = date('d-m-Y',$start);
					$month_on_value = $value['month_on_value'];
				    	$i = 0;
						 $m = true;
						 $cnt = 0;
						 while ($m) {
						 	$every_month_value = '+'.$value['every_month_value']+$i.'month';
								//$mdate = date('Y-m-'.$month_on_value, strtotime($every_month_value)); 
						 		$mdate_final = date($month_on_value.'-m-Y', strtotime($every_month_value)); 
				                $mdate_final1 = strtotime($mdate_final);
				                //echo $mdate_final1." -- ".$start; exit;
				             	//echo "<br />". $mdate." -- ".date('Y-m-d',$start);
								if($mdate_final1 >= $start){
									
									$eventdata[$value['uid']]['newdate'][$cnt] = $mdate_final;
									break;
								}
								$cnt++;
								$i++;
							}

				}
				elseif($value['monthly'] == '2') {
					$start = $value['start_date']; 
					//$start = date('d-m-Y',$start);
					$month_day = $value['month_day']-1;
					$month_occurance = $value['month_occurance'];
					if($month_occurance == '1'){
						$month_occurance = 'first';
					}
					elseif($month_occurance == '2')
					{
						$month_occurance = 'second';
					}
					elseif ($month_occurance == '3') {
						$month_occurance = 'third';
					}
					$month_count = $value['months_counts'];
					//echo $start .' start '.$month_day.' month_day '.$month_occurance.' month_occurance '.$month_count; exit;
				    	$i = 0;
						 $m_count = true;
						 $cnt = 0;
						 while ($m_count) {
						 	//echo date("Y-m-d", strtotime("first Monday of +1month")); exit;
						 	
						 	$final_value = $month_occurance.' '.date("l", strtotime("Sunday +{$month_day} days")).' of +'.($month_count+$i).'month'; 
						 	
						 	 $date = date("d-m-Y", strtotime($final_value)); 
						 	 $date1 = strtotime($date);
						 			
								if($date1 >= $start){
									$eventdata[$value['uid']]['newdate'][$cnt] = $date;
									break;
								}
								$cnt++;
								$i++;
							}
							
					}
					
	   			}


	   		if ($value['repetition'] == '3') {
			
				if ($value['yearly'] == '1') {
					$start = $value['start_date']; 
					//$start = date('d-m-Y',$start);
					$count_year = $value['every_year_count_value'];
					$yearly_month = $value['every_year_month_value'];
					 $cyear = date('Y-'.$yearly_month.'-'.$count_year);
					//echo date("Y-3-4"). '<br>';
					 $i = 0;
					 $cnt = 0;
						 $y_count = true;
						 while ($y_count) {
					// echo $futureDate=date('Y-m-d', strtotime('+1 year', strtotime($cyear)) ); exit;
						 	
						 	 $fdate=date('d-m-Y', strtotime('+'.$i.'year', strtotime($cyear)) );
						 	 $fdate1 = strtotime($fdate);
						 			//echo $futureDate. '<br>'; 
								if($fdate1 >= $start){
									$eventdata[$value['uid']]['newdate'][$cnt] = $fdate;
									break;
								}
								$cnt++;
								$i++;
							}
						}
				elseif($value['yearly'] == '2'){
					
					$start = $value['start_date']; 
					//$start = date('d-m-Y',$start);
					$year_occurance = $value['year_occurance'];
					if($year_occurance == '1'){
						$year_occurance = 'first';
					}
					elseif($year_occurance == '2')
					{
						$year_occurance = 'second';
					}
					elseif ($year_occurance == '3') {
						$year_occurance = 'third';
					}
					$year_day = $value['year_day']-1;
					$year_month_value = $value['year_month_value'];
					$month_name = date('F', mktime(0, 0, 0, $year_month_value));
					 
					$cnt = 0;
					$i = 0;
						 $year_count = true;
						 while ($year_count) {
						 	$currentyear = date('Y',strtotime('+'.$i.' years'));
						 	
						 		  $yearly_value = $year_occurance.' '.date("l", strtotime("Sunday +{$year_day} days")).' of '.$month_name.' '.$currentyear; 
						 		  $fydate = date("d-m-Y", strtotime($yearly_value));
						 		  $fydate1 = strtotime($fydate);
					           	//echo date("Y-m-d", strtotime("first Wednesday of March 2018")); exit;
								if($fydate1 >= $start){
									$eventdata[$value['uid']]['newdate'][$cnt] = $fydate;
									break;
								}
								$cnt++;
								$i++;
							}
					
					}
			}

			$link['additionalParams'] = '&tx_jsevent_event[action]=event&tx_jsevent_event[event]=' . $value['uid'];
			$link['returnLast'] = 'url';
			$link['parameter'] = $settings['listPage'];
			$detailLink = $this->fullURL . $this->cObject->typolink(NULL, $link);
			$eventdata[$value['uid']]['detailLink'] = $detailLink;

			if ($value['breakup'] == '1') {
				
			} 
			if ($value['breakup'] == '2') {
			     $start = $value['start_date'];

				//$start = date('d-m-Y',$start);
				$total_time = $value['insgesamt'];
				 $time = '+' . $total_time . ' weeks ' . date('D', $start);
				 $start_date = date('m/d/Y',$start);
				 $enddt = strtotime($time,strtotime($start_date)); 
				//$enddt = strtotime($time); 
			//	$enddt = date('d-m-Y',strtotime($time)); 
				//echo date('Y-m-d',strtotime($time)); exit;
				$mydate1 = getdate(date('U'));
				$current1 = strtotime($mydate1[weekday]);
				//echo $enddt.'<br>'.$start.'<br>'.$current1; 
				if ($enddt > $start) {
					if ($enddt <= $current1) {
						unset($eventdata[$value['uid']]);
					}
				}
			} 
			if ($value['breakup'] == '3') {

				$enddate = $value['ende_am'];
				$enddate = date('d-m-Y',$enddate);
				$mydate = getdate(date('U'));
				$current = strtotime($mydate[weekday]);
				$current = date('d-m-Y',$current);
				if ($value['ende_am'] > $value['start_date']) {

					if ($enddate <= $current) {
						unset($eventdata[$value['uid']]);
					}
				}
			}

			if($allevent > 0)
			{
				
			}
			else{
			$currentyear =  date("m");
			$date = $eventdata[$value['uid']]['newdate'];
			$mydate = getdate(date('U'));
			$current_date = strtotime($mydate[weekday]);
			foreach($date as $finaldate){
				$parts = explode('-', $finaldate);
				$dateyear =  $parts[1];
				$new = strtotime($finaldate);
			//echo $currentyear .'---'. $dateyear.'<br>';
			if($currentyear == $dateyear && $current_date <= $new){

			}
			else {
				unset($eventdata[$value['uid']]);
			}
			}
			}


			if ($value['image'] > 0) {
					$field1 = 'uid';
					$table1 = 'sys_file_reference';
					$where1 = ' tablenames = \'tx_jsevent_domain_model_event\' AND fieldname = \'image\' AND uid_foreign = \'' . $value['uid'] . '\' AND deleted = 0 AND hidden = 0';
					$res = $this->getDBHandle()->exec_SELECTgetRows($field1, $table1, $where1);
					$eventdata[$value['uid']]['imageReference'] = $res[0]['uid'];
				}

			//return $eventdata;
		}

		if ($event > 0) {
			
				return $eventdata[$event];
			}
		//echo '<pre>';
	//	echo $eventdata[$eventdata['uid']];
		
		return $eventdata;
		
		 
		/*$data = array();
		foreach ($conf as $key => $value) {
			$mydate2 = getdate(date('U'));
			$current_date = strtotime($mydate2[weekday]) . '<br>';
			$newdate = $value['newdate'];
			if ($current_date <= $newdate) {
				$data[$value['uid']] = $value;
				if ($value['image'] > 0) {
					$field1 = 'uid';
					$table1 = 'sys_file_reference';
					$where1 = ' tablenames = \'tx_jsevent_domain_model_event\' AND fieldname = \'image\' AND uid_foreign = \'' . $value['uid'] . '\' AND deleted = 0 AND hidden = 0';
					$res = $this->getDBHandle()->exec_SELECTgetRows($field1, $table1, $where1);
					$data[$value['uid']]['imageReference'] = $res[0]['uid'];
				}
				$link['additionalParams'] = '&tx_jsevent_event[action]=event&tx_jsevent_event[event]=' . $value['uid'];
				$link['returnLast'] = 'url';
				$link['parameter'] = $settings['listPage'];
				$detailLink = $this->fullURL . $this->cObject->typolink(NULL, $link);
				$data[$value['uid']]['detailLink'] = $detailLink;
			}
			if ($event > 0) {
				return $data[$event];
			}
			return $data;
		} */

	}

	/**
	 * getDBHandle
	 *
	 * @return
	 */
	public function getDBHandle() {
		return $GLOBALS['TYPO3_DB'];
	}

}