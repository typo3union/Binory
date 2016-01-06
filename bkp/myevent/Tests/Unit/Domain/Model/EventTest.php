<?php

namespace JS\JsEvent\Tests\Unit\Domain\Model;

/***************************************************************
 *  Copyright notice
 *
 *  (c) 2015 
 *
 *  All rights reserved
 *
 *  This script is part of the TYPO3 project. The TYPO3 project is
 *  free software; you can redistribute it and/or modify
 *  it under the terms of the GNU General Public License as published by
 *  the Free Software Foundation; either version 2 of the License, or
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
 * Test case for class \JS\JsEvent\Domain\Model\Event.
 *
 * @copyright Copyright belongs to the respective authors
 * @license http://www.gnu.org/licenses/gpl.html GNU General Public License, version 3 or later
 *
 */
class EventTest extends \TYPO3\CMS\Core\Tests\UnitTestCase {
	/**
	 * @var \JS\JsEvent\Domain\Model\Event
	 */
	protected $subject = NULL;

	protected function setUp() {
		$this->subject = new \JS\JsEvent\Domain\Model\Event();
	}

	protected function tearDown() {
		unset($this->subject);
	}

	/**
	 * @test
	 */
	public function getTitleReturnsInitialValueForString() {
		$this->assertSame(
			'',
			$this->subject->getTitle()
		);
	}

	/**
	 * @test
	 */
	public function setTitleForStringSetsTitle() {
		$this->subject->setTitle('Conceived at T3CON10');

		$this->assertAttributeEquals(
			'Conceived at T3CON10',
			'title',
			$this->subject
		);
	}

	/**
	 * @test
	 */
	public function getStartDateReturnsInitialValueForDateTime() {
		$this->assertEquals(
			NULL,
			$this->subject->getStartDate()
		);
	}

	/**
	 * @test
	 */
	public function setStartDateForDateTimeSetsStartDate() {
		$dateTimeFixture = new \DateTime();
		$this->subject->setStartDate($dateTimeFixture);

		$this->assertAttributeEquals(
			$dateTimeFixture,
			'startDate',
			$this->subject
		);
	}

	/**
	 * @test
	 */
	public function getEndDateReturnsInitialValueForDateTime() {
		$this->assertEquals(
			NULL,
			$this->subject->getEndDate()
		);
	}

	/**
	 * @test
	 */
	public function setEndDateForDateTimeSetsEndDate() {
		$dateTimeFixture = new \DateTime();
		$this->subject->setEndDate($dateTimeFixture);

		$this->assertAttributeEquals(
			$dateTimeFixture,
			'endDate',
			$this->subject
		);
	}

	/**
	 * @test
	 */
	public function getLocationReturnsInitialValueForString() {
		$this->assertSame(
			'',
			$this->subject->getLocation()
		);
	}

	/**
	 * @test
	 */
	public function setLocationForStringSetsLocation() {
		$this->subject->setLocation('Conceived at T3CON10');

		$this->assertAttributeEquals(
			'Conceived at T3CON10',
			'location',
			$this->subject
		);
	}

	/**
	 * @test
	 */
	public function getPriceReturnsInitialValueForString() {
		$this->assertSame(
			'',
			$this->subject->getPrice()
		);
	}

	/**
	 * @test
	 */
	public function setPriceForStringSetsPrice() {
		$this->subject->setPrice('Conceived at T3CON10');

		$this->assertAttributeEquals(
			'Conceived at T3CON10',
			'price',
			$this->subject
		);
	}

	/**
	 * @test
	 */
	public function getDescriptionReturnsInitialValueForString() {
		$this->assertSame(
			'',
			$this->subject->getDescription()
		);
	}

	/**
	 * @test
	 */
	public function setDescriptionForStringSetsDescription() {
		$this->subject->setDescription('Conceived at T3CON10');

		$this->assertAttributeEquals(
			'Conceived at T3CON10',
			'description',
			$this->subject
		);
	}

	/**
	 * @test
	 */
	public function getImageReturnsInitialValueForFileReference() {
		$this->assertEquals(
			NULL,
			$this->subject->getImage()
		);
	}

	/**
	 * @test
	 */
	public function setImageForFileReferenceSetsImage() {
		$fileReferenceFixture = new \TYPO3\CMS\Extbase\Domain\Model\FileReference();
		$this->subject->setImage($fileReferenceFixture);

		$this->assertAttributeEquals(
			$fileReferenceFixture,
			'image',
			$this->subject
		);
	}

	/**
	 * @test
	 */
	public function getRepetitionReturnsInitialValueForInteger() {
		$this->assertSame(
			0,
			$this->subject->getRepetition()
		);
	}

	/**
	 * @test
	 */
	public function setRepetitionForIntegerSetsRepetition() {
		$this->subject->setRepetition(12);

		$this->assertAttributeEquals(
			12,
			'repetition',
			$this->subject
		);
	}

	/**
	 * @test
	 */
	public function getWeeklyReturnsInitialValueForInteger() {
		$this->assertSame(
			0,
			$this->subject->getWeekly()
		);
	}

	/**
	 * @test
	 */
	public function setWeeklyForIntegerSetsWeekly() {
		$this->subject->setWeekly(12);

		$this->assertAttributeEquals(
			12,
			'weekly',
			$this->subject
		);
	}

	/**
	 * @test
	 */
	public function getWeekCountReturnsInitialValueForString() {
		$this->assertSame(
			'',
			$this->subject->getWeekCount()
		);
	}

	/**
	 * @test
	 */
	public function setWeekCountForStringSetsWeekCount() {
		$this->subject->setWeekCount('Conceived at T3CON10');

		$this->assertAttributeEquals(
			'Conceived at T3CON10',
			'weekCount',
			$this->subject
		);
	}

	/**
	 * @test
	 */
	public function getMonthlyReturnsInitialValueForInteger() {
		$this->assertSame(
			0,
			$this->subject->getMonthly()
		);
	}

	/**
	 * @test
	 */
	public function setMonthlyForIntegerSetsMonthly() {
		$this->subject->setMonthly(12);

		$this->assertAttributeEquals(
			12,
			'monthly',
			$this->subject
		);
	}

	/**
	 * @test
	 */
	public function getMonthOnValueReturnsInitialValueForString() {
		$this->assertSame(
			'',
			$this->subject->getMonthOnValue()
		);
	}

	/**
	 * @test
	 */
	public function setMonthOnValueForStringSetsMonthOnValue() {
		$this->subject->setMonthOnValue('Conceived at T3CON10');

		$this->assertAttributeEquals(
			'Conceived at T3CON10',
			'monthOnValue',
			$this->subject
		);
	}

	/**
	 * @test
	 */
	public function getEveryMonthValueReturnsInitialValueForString() {
		$this->assertSame(
			'',
			$this->subject->getEveryMonthValue()
		);
	}

	/**
	 * @test
	 */
	public function setEveryMonthValueForStringSetsEveryMonthValue() {
		$this->subject->setEveryMonthValue('Conceived at T3CON10');

		$this->assertAttributeEquals(
			'Conceived at T3CON10',
			'everyMonthValue',
			$this->subject
		);
	}

	/**
	 * @test
	 */
	public function getMonthOccuranceReturnsInitialValueForInteger() {
		$this->assertSame(
			0,
			$this->subject->getMonthOccurance()
		);
	}

	/**
	 * @test
	 */
	public function setMonthOccuranceForIntegerSetsMonthOccurance() {
		$this->subject->setMonthOccurance(12);

		$this->assertAttributeEquals(
			12,
			'monthOccurance',
			$this->subject
		);
	}

	/**
	 * @test
	 */
	public function getMonthsCountsReturnsInitialValueForString() {
		$this->assertSame(
			'',
			$this->subject->getMonthsCounts()
		);
	}

	/**
	 * @test
	 */
	public function setMonthsCountsForStringSetsMonthsCounts() {
		$this->subject->setMonthsCounts('Conceived at T3CON10');

		$this->assertAttributeEquals(
			'Conceived at T3CON10',
			'monthsCounts',
			$this->subject
		);
	}

	/**
	 * @test
	 */
	public function getYearlyReturnsInitialValueForInteger() {
		$this->assertSame(
			0,
			$this->subject->getYearly()
		);
	}

	/**
	 * @test
	 */
	public function setYearlyForIntegerSetsYearly() {
		$this->subject->setYearly(12);

		$this->assertAttributeEquals(
			12,
			'yearly',
			$this->subject
		);
	}

	/**
	 * @test
	 */
	public function getEveryYearCountValueReturnsInitialValueForString() {
		$this->assertSame(
			'',
			$this->subject->getEveryYearCountValue()
		);
	}

	/**
	 * @test
	 */
	public function setEveryYearCountValueForStringSetsEveryYearCountValue() {
		$this->subject->setEveryYearCountValue('Conceived at T3CON10');

		$this->assertAttributeEquals(
			'Conceived at T3CON10',
			'everyYearCountValue',
			$this->subject
		);
	}

	/**
	 * @test
	 */
	public function getYearOccuranceReturnsInitialValueForString() {
		$this->assertSame(
			'',
			$this->subject->getYearOccurance()
		);
	}

	/**
	 * @test
	 */
	public function setYearOccuranceForStringSetsYearOccurance() {
		$this->subject->setYearOccurance('Conceived at T3CON10');

		$this->assertAttributeEquals(
			'Conceived at T3CON10',
			'yearOccurance',
			$this->subject
		);
	}

	/**
	 * @test
	 */
	public function getBreakupReturnsInitialValueForInteger() {
		$this->assertSame(
			0,
			$this->subject->getBreakup()
		);
	}

	/**
	 * @test
	 */
	public function setBreakupForIntegerSetsBreakup() {
		$this->subject->setBreakup(12);

		$this->assertAttributeEquals(
			12,
			'breakup',
			$this->subject
		);
	}

	/**
	 * @test
	 */
	public function getInsgesamtReturnsInitialValueForString() {
		$this->assertSame(
			'',
			$this->subject->getInsgesamt()
		);
	}

	/**
	 * @test
	 */
	public function setInsgesamtForStringSetsInsgesamt() {
		$this->subject->setInsgesamt('Conceived at T3CON10');

		$this->assertAttributeEquals(
			'Conceived at T3CON10',
			'insgesamt',
			$this->subject
		);
	}

	/**
	 * @test
	 */
	public function getEndeAmReturnsInitialValueForDateTime() {
		$this->assertEquals(
			NULL,
			$this->subject->getEndeAm()
		);
	}

	/**
	 * @test
	 */
	public function setEndeAmForDateTimeSetsEndeAm() {
		$dateTimeFixture = new \DateTime();
		$this->subject->setEndeAm($dateTimeFixture);

		$this->assertAttributeEquals(
			$dateTimeFixture,
			'endeAm',
			$this->subject
		);
	}

	/**
	 * @test
	 */
	public function getCategoryReturnsInitialValueForCategory() {
		$newObjectStorage = new \TYPO3\CMS\Extbase\Persistence\ObjectStorage();
		$this->assertEquals(
			$newObjectStorage,
			$this->subject->getCategory()
		);
	}

	/**
	 * @test
	 */
	public function setCategoryForObjectStorageContainingCategorySetsCategory() {
		$category = new \JS\JsEvent\Domain\Model\Category();
		$objectStorageHoldingExactlyOneCategory = new \TYPO3\CMS\Extbase\Persistence\ObjectStorage();
		$objectStorageHoldingExactlyOneCategory->attach($category);
		$this->subject->setCategory($objectStorageHoldingExactlyOneCategory);

		$this->assertAttributeEquals(
			$objectStorageHoldingExactlyOneCategory,
			'category',
			$this->subject
		);
	}

	/**
	 * @test
	 */
	public function addCategoryToObjectStorageHoldingCategory() {
		$category = new \JS\JsEvent\Domain\Model\Category();
		$categoryObjectStorageMock = $this->getMock('TYPO3\\CMS\\Extbase\\Persistence\\ObjectStorage', array('attach'), array(), '', FALSE);
		$categoryObjectStorageMock->expects($this->once())->method('attach')->with($this->equalTo($category));
		$this->inject($this->subject, 'category', $categoryObjectStorageMock);

		$this->subject->addCategory($category);
	}

	/**
	 * @test
	 */
	public function removeCategoryFromObjectStorageHoldingCategory() {
		$category = new \JS\JsEvent\Domain\Model\Category();
		$categoryObjectStorageMock = $this->getMock('TYPO3\\CMS\\Extbase\\Persistence\\ObjectStorage', array('detach'), array(), '', FALSE);
		$categoryObjectStorageMock->expects($this->once())->method('detach')->with($this->equalTo($category));
		$this->inject($this->subject, 'category', $categoryObjectStorageMock);

		$this->subject->removeCategory($category);

	}

	/**
	 * @test
	 */
	public function getWeekDayReturnsInitialValueForDays() {
		$this->assertEquals(
			NULL,
			$this->subject->getWeekDay()
		);
	}

	/**
	 * @test
	 */
	public function setWeekDayForDaysSetsWeekDay() {
		$weekDayFixture = new \JS\JsEvent\Domain\Model\Days();
		$this->subject->setWeekDay($weekDayFixture);

		$this->assertAttributeEquals(
			$weekDayFixture,
			'weekDay',
			$this->subject
		);
	}

	/**
	 * @test
	 */
	public function getWeeklyDaysReturnsInitialValueForDays() {
		$newObjectStorage = new \TYPO3\CMS\Extbase\Persistence\ObjectStorage();
		$this->assertEquals(
			$newObjectStorage,
			$this->subject->getWeeklyDays()
		);
	}

	/**
	 * @test
	 */
	public function setWeeklyDaysForObjectStorageContainingDaysSetsWeeklyDays() {
		$weeklyDay = new \JS\JsEvent\Domain\Model\Days();
		$objectStorageHoldingExactlyOneWeeklyDays = new \TYPO3\CMS\Extbase\Persistence\ObjectStorage();
		$objectStorageHoldingExactlyOneWeeklyDays->attach($weeklyDay);
		$this->subject->setWeeklyDays($objectStorageHoldingExactlyOneWeeklyDays);

		$this->assertAttributeEquals(
			$objectStorageHoldingExactlyOneWeeklyDays,
			'weeklyDays',
			$this->subject
		);
	}

	/**
	 * @test
	 */
	public function addWeeklyDayToObjectStorageHoldingWeeklyDays() {
		$weeklyDay = new \JS\JsEvent\Domain\Model\Days();
		$weeklyDaysObjectStorageMock = $this->getMock('TYPO3\\CMS\\Extbase\\Persistence\\ObjectStorage', array('attach'), array(), '', FALSE);
		$weeklyDaysObjectStorageMock->expects($this->once())->method('attach')->with($this->equalTo($weeklyDay));
		$this->inject($this->subject, 'weeklyDays', $weeklyDaysObjectStorageMock);

		$this->subject->addWeeklyDay($weeklyDay);
	}

	/**
	 * @test
	 */
	public function removeWeeklyDayFromObjectStorageHoldingWeeklyDays() {
		$weeklyDay = new \JS\JsEvent\Domain\Model\Days();
		$weeklyDaysObjectStorageMock = $this->getMock('TYPO3\\CMS\\Extbase\\Persistence\\ObjectStorage', array('detach'), array(), '', FALSE);
		$weeklyDaysObjectStorageMock->expects($this->once())->method('detach')->with($this->equalTo($weeklyDay));
		$this->inject($this->subject, 'weeklyDays', $weeklyDaysObjectStorageMock);

		$this->subject->removeWeeklyDay($weeklyDay);

	}

	/**
	 * @test
	 */
	public function getMonthDayReturnsInitialValueForDays() {
		$this->assertEquals(
			NULL,
			$this->subject->getMonthDay()
		);
	}

	/**
	 * @test
	 */
	public function setMonthDayForDaysSetsMonthDay() {
		$monthDayFixture = new \JS\JsEvent\Domain\Model\Days();
		$this->subject->setMonthDay($monthDayFixture);

		$this->assertAttributeEquals(
			$monthDayFixture,
			'monthDay',
			$this->subject
		);
	}

	/**
	 * @test
	 */
	public function getEveryYearMonthValueReturnsInitialValueForMonths() {
		$this->assertEquals(
			NULL,
			$this->subject->getEveryYearMonthValue()
		);
	}

	/**
	 * @test
	 */
	public function setEveryYearMonthValueForMonthsSetsEveryYearMonthValue() {
		$everyYearMonthValueFixture = new \JS\JsEvent\Domain\Model\Months();
		$this->subject->setEveryYearMonthValue($everyYearMonthValueFixture);

		$this->assertAttributeEquals(
			$everyYearMonthValueFixture,
			'everyYearMonthValue',
			$this->subject
		);
	}

	/**
	 * @test
	 */
	public function getYearDayReturnsInitialValueForDays() {
		$this->assertEquals(
			NULL,
			$this->subject->getYearDay()
		);
	}

	/**
	 * @test
	 */
	public function setYearDayForDaysSetsYearDay() {
		$yearDayFixture = new \JS\JsEvent\Domain\Model\Days();
		$this->subject->setYearDay($yearDayFixture);

		$this->assertAttributeEquals(
			$yearDayFixture,
			'yearDay',
			$this->subject
		);
	}

	/**
	 * @test
	 */
	public function getYearMonthValueReturnsInitialValueForMonths() {
		$this->assertEquals(
			NULL,
			$this->subject->getYearMonthValue()
		);
	}

	/**
	 * @test
	 */
	public function setYearMonthValueForMonthsSetsYearMonthValue() {
		$yearMonthValueFixture = new \JS\JsEvent\Domain\Model\Months();
		$this->subject->setYearMonthValue($yearMonthValueFixture);

		$this->assertAttributeEquals(
			$yearMonthValueFixture,
			'yearMonthValue',
			$this->subject
		);
	}
}
