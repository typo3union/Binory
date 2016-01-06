<?php

namespace Video\Video\Tests\Unit\Domain\Model;

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
 * Test case for class \Video\Video\Domain\Model\Videos.
 *
 * @copyright Copyright belongs to the respective authors
 * @license http://www.gnu.org/licenses/gpl.html GNU General Public License, version 3 or later
 *
 */
class VideosTest extends \TYPO3\CMS\Core\Tests\UnitTestCase
{
	/**
	 * @var \Video\Video\Domain\Model\Videos
	 */
	protected $subject = NULL;

	public function setUp()
	{
		$this->subject = new \Video\Video\Domain\Model\Videos();
	}

	public function tearDown()
	{
		unset($this->subject);
	}

	/**
	 * @test
	 */
	public function getUploadVideoReturnsInitialValueForString()
	{
		$this->assertSame(
			'',
			$this->subject->getUploadVideo()
		);
	}

	/**
	 * @test
	 */
	public function setUploadVideoForStringSetsUploadVideo()
	{
		$this->subject->setUploadVideo('Conceived at T3CON10');

		$this->assertAttributeEquals(
			'Conceived at T3CON10',
			'uploadVideo',
			$this->subject
		);
	}

	/**
	 * @test
	 */
	public function getAlttagReturnsInitialValueForString()
	{
		$this->assertSame(
			'',
			$this->subject->getAlttag()
		);
	}

	/**
	 * @test
	 */
	public function setAlttagForStringSetsAlttag()
	{
		$this->subject->setAlttag('Conceived at T3CON10');

		$this->assertAttributeEquals(
			'Conceived at T3CON10',
			'alttag',
			$this->subject
		);
	}

	/**
	 * @test
	 */
	public function getBackgroundImageReturnsInitialValueForFileReference()
	{
		$this->assertEquals(
			NULL,
			$this->subject->getBackgroundImage()
		);
	}

	/**
	 * @test
	 */
	public function setBackgroundImageForFileReferenceSetsBackgroundImage()
	{
		$fileReferenceFixture = new \TYPO3\CMS\Extbase\Domain\Model\FileReference();
		$this->subject->setBackgroundImage($fileReferenceFixture);

		$this->assertAttributeEquals(
			$fileReferenceFixture,
			'backgroundImage',
			$this->subject
		);
	}
}
