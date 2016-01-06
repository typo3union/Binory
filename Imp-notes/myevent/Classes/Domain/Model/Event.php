<?php
namespace JS\JsEvent\Domain\Model;

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
 * Event
 */
class Event extends \TYPO3\CMS\Extbase\DomainObject\AbstractEntity {

	/**
	 * title
	 *
	 * @var string
	 */
	protected $title = '';

	/**
	 * startDate
	 *
	 * @var \DateTime
	 */
	protected $startDate = NULL;

	/**
	 * endDate
	 *
	 * @var \DateTime
	 */
	protected $endDate = NULL;

	/**
	 * location
	 *
	 * @var string
	 */
	protected $location = '';

	/**
	 * price
	 *
	 * @var string
	 */
	protected $price = '';

	/**
	 * description
	 *
	 * @var string
	 */
	protected $description = '';

	/**
	 * image
	 *
	 * @var \TYPO3\CMS\Extbase\Domain\Model\FileReference
	 */
	protected $image = NULL;

	/**
	 * repetition
	 *
	 * @var integer
	 */
	protected $repetition = 0;

	/**
	 * weekly
	 *
	 * @var integer
	 */
	protected $weekly = 0;

	/**
	 * weekCount
	 *
	 * @var string
	 */
	protected $weekCount = '';

	/**
	 * monthly
	 *
	 * @var integer
	 */
	protected $monthly = 0;

	/**
	 * monthOnValue
	 *
	 * @var string
	 */
	protected $monthOnValue = '';

	/**
	 * everyMonthValue
	 *
	 * @var string
	 */
	protected $everyMonthValue = '';

	/**
	 * monthOccurance
	 *
	 * @var integer
	 */
	protected $monthOccurance = 0;

	/**
	 * monthsCounts
	 *
	 * @var string
	 */
	protected $monthsCounts = '';

	/**
	 * yearly
	 *
	 * @var integer
	 */
	protected $yearly = 0;

	/**
	 * everyYearCountValue
	 *
	 * @var string
	 */
	protected $everyYearCountValue = '';

	/**
	 * yearOccurance
	 *
	 * @var string
	 */
	protected $yearOccurance = '';

	/**
	 * breakup
	 *
	 * @var integer
	 */
	protected $breakup = 0;

	/**
	 * insgesamt
	 *
	 * @var string
	 */
	protected $insgesamt = '';

	/**
	 * endeAm
	 *
	 * @var \DateTime
	 */
	protected $endeAm = NULL;

	/**
	 * category
	 *
	 * @var \TYPO3\CMS\Extbase\Persistence\ObjectStorage<\JS\JsEvent\Domain\Model\Category>
	 */
	protected $category = NULL;

	/**
	 * weekDay
	 *
	 * @var \JS\JsEvent\Domain\Model\Days
	 */
	protected $weekDay = NULL;

	/**
	 * weeklyDays
	 *
	 * @var \TYPO3\CMS\Extbase\Persistence\ObjectStorage<\JS\JsEvent\Domain\Model\Days>
	 */
	protected $weeklyDays = NULL;

	/**
	 * monthDay
	 *
	 * @var \JS\JsEvent\Domain\Model\Days
	 */
	protected $monthDay = NULL;

	/**
	 * everyYearMonthValue
	 *
	 * @var \JS\JsEvent\Domain\Model\Months
	 */
	protected $everyYearMonthValue = NULL;

	/**
	 * yearDay
	 *
	 * @var \JS\JsEvent\Domain\Model\Days
	 */
	protected $yearDay = NULL;

	/**
	 * yearMonthValue
	 *
	 * @var \JS\JsEvent\Domain\Model\Months
	 */
	protected $yearMonthValue = NULL;

	/**
	 * __construct
	 */
	public function __construct() {
		//Do not remove the next line: It would break the functionality
		$this->initStorageObjects();
	}

	/**
	 * Initializes all ObjectStorage properties
	 * Do not modify this method!
	 * It will be rewritten on each save in the extension builder
	 * You may modify the constructor of this class instead
	 *
	 * @return void
	 */
	protected function initStorageObjects() {
		$this->category = new \TYPO3\CMS\Extbase\Persistence\ObjectStorage();
		$this->weeklyDays = new \TYPO3\CMS\Extbase\Persistence\ObjectStorage();
	}

	/**
	 * Returns the title
	 *
	 * @return string $title
	 */
	public function getTitle() {
		return $this->title;
	}

	/**
	 * Sets the title
	 *
	 * @param string $title
	 * @return void
	 */
	public function setTitle($title) {
		$this->title = $title;
	}

	/**
	 * Returns the startDate
	 *
	 * @return \DateTime $startDate
	 */
	public function getStartDate() {
		return $this->startDate;
	}

	/**
	 * Sets the startDate
	 *
	 * @param \DateTime $startDate
	 * @return void
	 */
	public function setStartDate(\DateTime $startDate) {
		$this->startDate = $startDate;
	}

	/**
	 * Returns the endDate
	 *
	 * @return \DateTime $endDate
	 */
	public function getEndDate() {
		return $this->endDate;
	}

	/**
	 * Sets the endDate
	 *
	 * @param \DateTime $endDate
	 * @return void
	 */
	public function setEndDate(\DateTime $endDate) {
		$this->endDate = $endDate;
	}

	/**
	 * Returns the location
	 *
	 * @return string $location
	 */
	public function getLocation() {
		return $this->location;
	}

	/**
	 * Sets the location
	 *
	 * @param string $location
	 * @return void
	 */
	public function setLocation($location) {
		$this->location = $location;
	}

	/**
	 * Returns the description
	 *
	 * @return string $description
	 */
	public function getDescription() {
		return $this->description;
	}

	/**
	 * Sets the description
	 *
	 * @param string $description
	 * @return void
	 */
	public function setDescription($description) {
		$this->description = $description;
	}

	/**
	 * Returns the image
	 *
	 * @return \TYPO3\CMS\Extbase\Domain\Model\FileReference $image
	 */
	public function getImage() {
		return $this->image;
	}

	/**
	 * Sets the image
	 *
	 * @param \TYPO3\CMS\Extbase\Domain\Model\FileReference $image
	 * @return void
	 */
	public function setImage(\TYPO3\CMS\Extbase\Domain\Model\FileReference $image) {
		$this->image = $image;
	}

	/**
	 * Adds a Category
	 *
	 * @param \JS\JsEvent\Domain\Model\Category $category
	 * @return void
	 */
	public function addCategory(\JS\JsEvent\Domain\Model\Category $category) {
		$this->category->attach($category);
	}

	/**
	 * Removes a Category
	 *
	 * @param \JS\JsEvent\Domain\Model\Category $categoryToRemove The Category to be removed
	 * @return void
	 */
	public function removeCategory(\JS\JsEvent\Domain\Model\Category $categoryToRemove) {
		$this->category->detach($categoryToRemove);
	}

	/**
	 * Returns the category
	 *
	 * @return \TYPO3\CMS\Extbase\Persistence\ObjectStorage<\JS\JsEvent\Domain\Model\Category> $category
	 */
	public function getCategory() {
		return $this->category;
	}

	/**
	 * Sets the category
	 *
	 * @param \TYPO3\CMS\Extbase\Persistence\ObjectStorage<\JS\JsEvent\Domain\Model\Category> $category
	 * @return void
	 */
	public function setCategory(\TYPO3\CMS\Extbase\Persistence\ObjectStorage $category) {
		$this->category = $category;
	}

	/**
	 * Returns the repetition
	 *
	 * @return integer $repetition
	 */
	public function getRepetition() {
		return $this->repetition;
	}

	/**
	 * Sets the repetition
	 *
	 * @param integer $repetition
	 * @return void
	 */
	public function setRepetition($repetition) {
		$this->repetition = $repetition;
	}

	/**
	 * Returns the weekly
	 *
	 * @return integer $weekly
	 */
	public function getWeekly() {
		return $this->weekly;
	}

	/**
	 * Sets the weekly
	 *
	 * @param integer $weekly
	 * @return void
	 */
	public function setWeekly($weekly) {
		$this->weekly = $weekly;
	}

	/**
	 * Returns the weekCount
	 *
	 * @return string $weekCount
	 */
	public function getWeekCount() {
		return $this->weekCount;
	}

	/**
	 * Sets the weekCount
	 *
	 * @param string $weekCount
	 * @return void
	 */
	public function setWeekCount($weekCount) {
		$this->weekCount = $weekCount;
	}

	/**
	 * Returns the monthly
	 *
	 * @return integer $monthly
	 */
	public function getMonthly() {
		return $this->monthly;
	}

	/**
	 * Sets the monthly
	 *
	 * @param integer $monthly
	 * @return void
	 */
	public function setMonthly($monthly) {
		$this->monthly = $monthly;
	}

	/**
	 * Returns the monthOnValue
	 *
	 * @return string $monthOnValue
	 */
	public function getMonthOnValue() {
		return $this->monthOnValue;
	}

	/**
	 * Sets the monthOnValue
	 *
	 * @param string $monthOnValue
	 * @return void
	 */
	public function setMonthOnValue($monthOnValue) {
		$this->monthOnValue = $monthOnValue;
	}

	/**
	 * Returns the everyMonthValue
	 *
	 * @return string $everyMonthValue
	 */
	public function getEveryMonthValue() {
		return $this->everyMonthValue;
	}

	/**
	 * Sets the everyMonthValue
	 *
	 * @param string $everyMonthValue
	 * @return void
	 */
	public function setEveryMonthValue($everyMonthValue) {
		$this->everyMonthValue = $everyMonthValue;
	}

	/**
	 * Returns the monthOccurance
	 *
	 * @return integer $monthOccurance
	 */
	public function getMonthOccurance() {
		return $this->monthOccurance;
	}

	/**
	 * Sets the monthOccurance
	 *
	 * @param integer $monthOccurance
	 * @return void
	 */
	public function setMonthOccurance($monthOccurance) {
		$this->monthOccurance = $monthOccurance;
	}

	/**
	 * Returns the monthsCounts
	 *
	 * @return string $monthsCounts
	 */
	public function getMonthsCounts() {
		return $this->monthsCounts;
	}

	/**
	 * Sets the monthsCounts
	 *
	 * @param string $monthsCounts
	 * @return void
	 */
	public function setMonthsCounts($monthsCounts) {
		$this->monthsCounts = $monthsCounts;
	}

	/**
	 * Returns the yearly
	 *
	 * @return integer $yearly
	 */
	public function getYearly() {
		return $this->yearly;
	}

	/**
	 * Sets the yearly
	 *
	 * @param integer $yearly
	 * @return void
	 */
	public function setYearly($yearly) {
		$this->yearly = $yearly;
	}

	/**
	 * Returns the everyYearCountValue
	 *
	 * @return string $everyYearCountValue
	 */
	public function getEveryYearCountValue() {
		return $this->everyYearCountValue;
	}

	/**
	 * Sets the everyYearCountValue
	 *
	 * @param string $everyYearCountValue
	 * @return void
	 */
	public function setEveryYearCountValue($everyYearCountValue) {
		$this->everyYearCountValue = $everyYearCountValue;
	}

	/**
	 * Returns the yearOccurance
	 *
	 * @return string $yearOccurance
	 */
	public function getYearOccurance() {
		return $this->yearOccurance;
	}

	/**
	 * Sets the yearOccurance
	 *
	 * @param string $yearOccurance
	 * @return void
	 */
	public function setYearOccurance($yearOccurance) {
		$this->yearOccurance = $yearOccurance;
	}

	/**
	 * Returns the breakup
	 *
	 * @return integer $breakup
	 */
	public function getBreakup() {
		return $this->breakup;
	}

	/**
	 * Sets the breakup
	 *
	 * @param integer $breakup
	 * @return void
	 */
	public function setBreakup($breakup) {
		$this->breakup = $breakup;
	}

	/**
	 * Returns the insgesamt
	 *
	 * @return string $insgesamt
	 */
	public function getInsgesamt() {
		return $this->insgesamt;
	}

	/**
	 * Sets the insgesamt
	 *
	 * @param string $insgesamt
	 * @return void
	 */
	public function setInsgesamt($insgesamt) {
		$this->insgesamt = $insgesamt;
	}

	/**
	 * Returns the endeAm
	 *
	 * @return \DateTime $endeAm
	 */
	public function getEndeAm() {
		return $this->endeAm;
	}

	/**
	 * Sets the endeAm
	 *
	 * @param \DateTime $endeAm
	 * @return void
	 */
	public function setEndeAm(\DateTime $endeAm) {
		$this->endeAm = $endeAm;
	}

	/**
	 * Returns the weekDay
	 *
	 * @return \JS\JsEvent\Domain\Model\Days $weekDay
	 */
	public function getWeekDay() {
		return $this->weekDay;
	}

	/**
	 * Sets the weekDay
	 *
	 * @param \JS\JsEvent\Domain\Model\Days $weekDay
	 * @return void
	 */
	public function setWeekDay(\JS\JsEvent\Domain\Model\Days $weekDay) {
		$this->weekDay = $weekDay;
	}

	/**
	 * Adds a Days
	 *
	 * @param \JS\JsEvent\Domain\Model\Days $weeklyDay
	 * @return void
	 */
	public function addWeeklyDay(\JS\JsEvent\Domain\Model\Days $weeklyDay) {
		$this->weeklyDays->attach($weeklyDay);
	}

	/**
	 * Removes a Days
	 *
	 * @param \JS\JsEvent\Domain\Model\Days $weeklyDayToRemove The Days to be removed
	 * @return void
	 */
	public function removeWeeklyDay(\JS\JsEvent\Domain\Model\Days $weeklyDayToRemove) {
		$this->weeklyDays->detach($weeklyDayToRemove);
	}

	/**
	 * Returns the weeklyDays
	 *
	 * @return \TYPO3\CMS\Extbase\Persistence\ObjectStorage<\JS\JsEvent\Domain\Model\Days> $weeklyDays
	 */
	public function getWeeklyDays() {
		return $this->weeklyDays;
	}

	/**
	 * Sets the weeklyDays
	 *
	 * @param \TYPO3\CMS\Extbase\Persistence\ObjectStorage<\JS\JsEvent\Domain\Model\Days> $weeklyDays
	 * @return void
	 */
	public function setWeeklyDays(\TYPO3\CMS\Extbase\Persistence\ObjectStorage $weeklyDays) {
		$this->weeklyDays = $weeklyDays;
	}

	/**
	 * Returns the monthDay
	 *
	 * @return \JS\JsEvent\Domain\Model\Days $monthDay
	 */
	public function getMonthDay() {
		return $this->monthDay;
	}

	/**
	 * Sets the monthDay
	 *
	 * @param \JS\JsEvent\Domain\Model\Days $monthDay
	 * @return void
	 */
	public function setMonthDay(\JS\JsEvent\Domain\Model\Days $monthDay) {
		$this->monthDay = $monthDay;
	}

	/**
	 * Returns the everyYearMonthValue
	 *
	 * @return \JS\JsEvent\Domain\Model\Months $everyYearMonthValue
	 */
	public function getEveryYearMonthValue() {
		return $this->everyYearMonthValue;
	}

	/**
	 * Sets the everyYearMonthValue
	 *
	 * @param \JS\JsEvent\Domain\Model\Months $everyYearMonthValue
	 * @return void
	 */
	public function setEveryYearMonthValue(\JS\JsEvent\Domain\Model\Months $everyYearMonthValue) {
		$this->everyYearMonthValue = $everyYearMonthValue;
	}

	/**
	 * Returns the yearDay
	 *
	 * @return \JS\JsEvent\Domain\Model\Days $yearDay
	 */
	public function getYearDay() {
		return $this->yearDay;
	}

	/**
	 * Sets the yearDay
	 *
	 * @param \JS\JsEvent\Domain\Model\Days $yearDay
	 * @return void
	 */
	public function setYearDay(\JS\JsEvent\Domain\Model\Days $yearDay) {
		$this->yearDay = $yearDay;
	}

	/**
	 * Returns the yearMonthValue
	 *
	 * @return \JS\JsEvent\Domain\Model\Months $yearMonthValue
	 */
	public function getYearMonthValue() {
		return $this->yearMonthValue;
	}

	/**
	 * Sets the yearMonthValue
	 *
	 * @param \JS\JsEvent\Domain\Model\Months $yearMonthValue
	 * @return void
	 */
	public function setYearMonthValue(\JS\JsEvent\Domain\Model\Months $yearMonthValue) {
		$this->yearMonthValue = $yearMonthValue;
	}

	/**
	 * Returns the price
	 *
	 * @return string $price
	 */
	public function getPrice() {
		return $this->price;
	}

	/**
	 * Sets the price
	 *
	 * @param string $price
	 * @return void
	 */
	public function setPrice($price) {
		$this->price = $price;
	}

}