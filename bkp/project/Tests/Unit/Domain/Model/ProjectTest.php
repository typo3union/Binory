<?php

namespace Project\Project\Tests\Unit\Domain\Model;

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
 * Test case for class \Project\Project\Domain\Model\Project.
 *
 * @copyright Copyright belongs to the respective authors
 * @license http://www.gnu.org/licenses/gpl.html GNU General Public License, version 3 or later
 *
 */
class ProjectTest extends \TYPO3\CMS\Core\Tests\UnitTestCase {
	/**
	 * @var \Project\Project\Domain\Model\Project
	 */
	protected $subject = NULL;

	public function setUp() {
		$this->subject = new \Project\Project\Domain\Model\Project();
	}

	public function tearDown() {
		unset($this->subject);
	}

	/**
	 * @test
	 */
	public function getBannerReturnsInitialValueForFileReference() {
		$this->assertEquals(
			NULL,
			$this->subject->getBanner()
		);
	}

	/**
	 * @test
	 */
	public function setBannerForFileReferenceSetsBanner() {
		$fileReferenceFixture = new \TYPO3\CMS\Extbase\Domain\Model\FileReference();
		$this->subject->setBanner($fileReferenceFixture);

		$this->assertAttributeEquals(
			$fileReferenceFixture,
			'banner',
			$this->subject
		);
	}

	/**
	 * @test
	 */
	public function getBannerLogoReturnsInitialValueForFileReference() {
		$this->assertEquals(
			NULL,
			$this->subject->getBannerLogo()
		);
	}

	/**
	 * @test
	 */
	public function setBannerLogoForFileReferenceSetsBannerLogo() {
		$fileReferenceFixture = new \TYPO3\CMS\Extbase\Domain\Model\FileReference();
		$this->subject->setBannerLogo($fileReferenceFixture);

		$this->assertAttributeEquals(
			$fileReferenceFixture,
			'bannerLogo',
			$this->subject
		);
	}

	/**
	 * @test
	 */
	public function getContentHeaderReturnsInitialValueForString() {
		$this->assertSame(
			'',
			$this->subject->getContentHeader()
		);
	}

	/**
	 * @test
	 */
	public function setContentHeaderForStringSetsContentHeader() {
		$this->subject->setContentHeader('Conceived at T3CON10');

		$this->assertAttributeEquals(
			'Conceived at T3CON10',
			'contentHeader',
			$this->subject
		);
	}

	/**
	 * @test
	 */
	public function getContentSubheaderReturnsInitialValueForString() {
		$this->assertSame(
			'',
			$this->subject->getContentSubheader()
		);
	}

	/**
	 * @test
	 */
	public function setContentSubheaderForStringSetsContentSubheader() {
		$this->subject->setContentSubheader('Conceived at T3CON10');

		$this->assertAttributeEquals(
			'Conceived at T3CON10',
			'contentSubheader',
			$this->subject
		);
	}

	/**
	 * @test
	 */
	public function getContentDescriptionReturnsInitialValueForString() {
		$this->assertSame(
			'',
			$this->subject->getContentDescription()
		);
	}

	/**
	 * @test
	 */
	public function setContentDescriptionForStringSetsContentDescription() {
		$this->subject->setContentDescription('Conceived at T3CON10');

		$this->assertAttributeEquals(
			'Conceived at T3CON10',
			'contentDescription',
			$this->subject
		);
	}

	/**
	 * @test
	 */
	public function getContentDescription1ReturnsInitialValueForString() {
		$this->assertSame(
			'',
			$this->subject->getContentDescription1()
		);
	}

	/**
	 * @test
	 */
	public function setContentDescription1ForStringSetsContentDescription1() {
		$this->subject->setContentDescription1('Conceived at T3CON10');

		$this->assertAttributeEquals(
			'Conceived at T3CON10',
			'contentDescription1',
			$this->subject
		);
	}

	/**
	 * @test
	 */
	public function getContentDescription2ReturnsInitialValueForString() {
		$this->assertSame(
			'',
			$this->subject->getContentDescription2()
		);
	}

	/**
	 * @test
	 */
	public function setContentDescription2ForStringSetsContentDescription2() {
		$this->subject->setContentDescription2('Conceived at T3CON10');

		$this->assertAttributeEquals(
			'Conceived at T3CON10',
			'contentDescription2',
			$this->subject
		);
	}

	/**
	 * @test
	 */
	public function getContentBulletListReturnsInitialValueForString() {
		$this->assertSame(
			'',
			$this->subject->getContentBulletList()
		);
	}

	/**
	 * @test
	 */
	public function setContentBulletListForStringSetsContentBulletList() {
		$this->subject->setContentBulletList('Conceived at T3CON10');

		$this->assertAttributeEquals(
			'Conceived at T3CON10',
			'contentBulletList',
			$this->subject
		);
	}

	/**
	 * @test
	 */
	public function getContent1HeaderReturnsInitialValueForString() {
		$this->assertSame(
			'',
			$this->subject->getContent1Header()
		);
	}

	/**
	 * @test
	 */
	public function setContent1HeaderForStringSetsContent1Header() {
		$this->subject->setContent1Header('Conceived at T3CON10');

		$this->assertAttributeEquals(
			'Conceived at T3CON10',
			'content1Header',
			$this->subject
		);
	}

	/**
	 * @test
	 */
	public function getContent1SubheaderReturnsInitialValueForString() {
		$this->assertSame(
			'',
			$this->subject->getContent1Subheader()
		);
	}

	/**
	 * @test
	 */
	public function setContent1SubheaderForStringSetsContent1Subheader() {
		$this->subject->setContent1Subheader('Conceived at T3CON10');

		$this->assertAttributeEquals(
			'Conceived at T3CON10',
			'content1Subheader',
			$this->subject
		);
	}

	/**
	 * @test
	 */
	public function getContent1ImageReturnsInitialValueForFileReference() {
		$this->assertEquals(
			NULL,
			$this->subject->getContent1Image()
		);
	}

	/**
	 * @test
	 */
	public function setContent1ImageForFileReferenceSetsContent1Image() {
		$fileReferenceFixture = new \TYPO3\CMS\Extbase\Domain\Model\FileReference();
		$this->subject->setContent1Image($fileReferenceFixture);

		$this->assertAttributeEquals(
			$fileReferenceFixture,
			'content1Image',
			$this->subject
		);
	}

	/**
	 * @test
	 */
	public function getContent2HeaderReturnsInitialValueForString() {
		$this->assertSame(
			'',
			$this->subject->getContent2Header()
		);
	}

	/**
	 * @test
	 */
	public function setContent2HeaderForStringSetsContent2Header() {
		$this->subject->setContent2Header('Conceived at T3CON10');

		$this->assertAttributeEquals(
			'Conceived at T3CON10',
			'content2Header',
			$this->subject
		);
	}

	/**
	 * @test
	 */
	public function getContent2SubheaderReturnsInitialValueForString() {
		$this->assertSame(
			'',
			$this->subject->getContent2Subheader()
		);
	}

	/**
	 * @test
	 */
	public function setContent2SubheaderForStringSetsContent2Subheader() {
		$this->subject->setContent2Subheader('Conceived at T3CON10');

		$this->assertAttributeEquals(
			'Conceived at T3CON10',
			'content2Subheader',
			$this->subject
		);
	}

	/**
	 * @test
	 */
	public function getContent2ImageReturnsInitialValueForFileReference() {
		$this->assertEquals(
			NULL,
			$this->subject->getContent2Image()
		);
	}

	/**
	 * @test
	 */
	public function setContent2ImageForFileReferenceSetsContent2Image() {
		$fileReferenceFixture = new \TYPO3\CMS\Extbase\Domain\Model\FileReference();
		$this->subject->setContent2Image($fileReferenceFixture);

		$this->assertAttributeEquals(
			$fileReferenceFixture,
			'content2Image',
			$this->subject
		);
	}

	/**
	 * @test
	 */
	public function getContent3HeaderReturnsInitialValueForString() {
		$this->assertSame(
			'',
			$this->subject->getContent3Header()
		);
	}

	/**
	 * @test
	 */
	public function setContent3HeaderForStringSetsContent3Header() {
		$this->subject->setContent3Header('Conceived at T3CON10');

		$this->assertAttributeEquals(
			'Conceived at T3CON10',
			'content3Header',
			$this->subject
		);
	}

	/**
	 * @test
	 */
	public function getContent3SubheaderReturnsInitialValueForString() {
		$this->assertSame(
			'',
			$this->subject->getContent3Subheader()
		);
	}

	/**
	 * @test
	 */
	public function setContent3SubheaderForStringSetsContent3Subheader() {
		$this->subject->setContent3Subheader('Conceived at T3CON10');

		$this->assertAttributeEquals(
			'Conceived at T3CON10',
			'content3Subheader',
			$this->subject
		);
	}

	/**
	 * @test
	 */
	public function getContentSliderReturnsInitialValueForFileReference() {
		$this->assertEquals(
			NULL,
			$this->subject->getContentSlider()
		);
	}

	/**
	 * @test
	 */
	public function setContentSliderForFileReferenceSetsContentSlider() {
		$fileReferenceFixture = new \TYPO3\CMS\Extbase\Domain\Model\FileReference();
		$this->subject->setContentSlider($fileReferenceFixture);

		$this->assertAttributeEquals(
			$fileReferenceFixture,
			'contentSlider',
			$this->subject
		);
	}

	/**
	 * @test
	 */
	public function getSliderLinkReturnsInitialValueForString() {
		$this->assertSame(
			'',
			$this->subject->getSliderLink()
		);
	}

	/**
	 * @test
	 */
	public function setSliderLinkForStringSetsSliderLink() {
		$this->subject->setSliderLink('Conceived at T3CON10');

		$this->assertAttributeEquals(
			'Conceived at T3CON10',
			'sliderLink',
			$this->subject
		);
	}

	/**
	 * @test
	 */
	public function getZitatHeaderReturnsInitialValueForString() {
		$this->assertSame(
			'',
			$this->subject->getZitatHeader()
		);
	}

	/**
	 * @test
	 */
	public function setZitatHeaderForStringSetsZitatHeader() {
		$this->subject->setZitatHeader('Conceived at T3CON10');

		$this->assertAttributeEquals(
			'Conceived at T3CON10',
			'zitatHeader',
			$this->subject
		);
	}

	/**
	 * @test
	 */
	public function getZitatSubheaderReturnsInitialValueForString() {
		$this->assertSame(
			'',
			$this->subject->getZitatSubheader()
		);
	}

	/**
	 * @test
	 */
	public function setZitatSubheaderForStringSetsZitatSubheader() {
		$this->subject->setZitatSubheader('Conceived at T3CON10');

		$this->assertAttributeEquals(
			'Conceived at T3CON10',
			'zitatSubheader',
			$this->subject
		);
	}

	/**
	 * @test
	 */
	public function getZitatDescritpionReturnsInitialValueForString() {
		$this->assertSame(
			'',
			$this->subject->getZitatDescritpion()
		);
	}

	/**
	 * @test
	 */
	public function setZitatDescritpionForStringSetsZitatDescritpion() {
		$this->subject->setZitatDescritpion('Conceived at T3CON10');

		$this->assertAttributeEquals(
			'Conceived at T3CON10',
			'zitatDescritpion',
			$this->subject
		);
	}

	/**
	 * @test
	 */
	public function getZitatImageReturnsInitialValueForFileReference() {
		$this->assertEquals(
			NULL,
			$this->subject->getZitatImage()
		);
	}

	/**
	 * @test
	 */
	public function setZitatImageForFileReferenceSetsZitatImage() {
		$fileReferenceFixture = new \TYPO3\CMS\Extbase\Domain\Model\FileReference();
		$this->subject->setZitatImage($fileReferenceFixture);

		$this->assertAttributeEquals(
			$fileReferenceFixture,
			'zitatImage',
			$this->subject
		);
	}

	/**
	 * @test
	 */
	public function getGalleryHeaderReturnsInitialValueForString() {
		$this->assertSame(
			'',
			$this->subject->getGalleryHeader()
		);
	}

	/**
	 * @test
	 */
	public function setGalleryHeaderForStringSetsGalleryHeader() {
		$this->subject->setGalleryHeader('Conceived at T3CON10');

		$this->assertAttributeEquals(
			'Conceived at T3CON10',
			'galleryHeader',
			$this->subject
		);
	}

	/**
	 * @test
	 */
	public function getGallerySubheaderReturnsInitialValueForString() {
		$this->assertSame(
			'',
			$this->subject->getGallerySubheader()
		);
	}

	/**
	 * @test
	 */
	public function setGallerySubheaderForStringSetsGallerySubheader() {
		$this->subject->setGallerySubheader('Conceived at T3CON10');

		$this->assertAttributeEquals(
			'Conceived at T3CON10',
			'gallerySubheader',
			$this->subject
		);
	}

	/**
	 * @test
	 */
	public function getGalleryImagesReturnsInitialValueForFileReference() {
		$this->assertEquals(
			NULL,
			$this->subject->getGalleryImages()
		);
	}

	/**
	 * @test
	 */
	public function setGalleryImagesForFileReferenceSetsGalleryImages() {
		$fileReferenceFixture = new \TYPO3\CMS\Extbase\Domain\Model\FileReference();
		$this->subject->setGalleryImages($fileReferenceFixture);

		$this->assertAttributeEquals(
			$fileReferenceFixture,
			'galleryImages',
			$this->subject
		);
	}

	/**
	 * @test
	 */
	public function getContactSubheaderReturnsInitialValueForString() {
		$this->assertSame(
			'',
			$this->subject->getContactSubheader()
		);
	}

	/**
	 * @test
	 */
	public function setContactSubheaderForStringSetsContactSubheader() {
		$this->subject->setContactSubheader('Conceived at T3CON10');

		$this->assertAttributeEquals(
			'Conceived at T3CON10',
			'contactSubheader',
			$this->subject
		);
	}

	/**
	 * @test
	 */
	public function getGalleryLinkReturnsInitialValueForString() {
		$this->assertSame(
			'',
			$this->subject->getGalleryLink()
		);
	}

	/**
	 * @test
	 */
	public function setGalleryLinkForStringSetsGalleryLink() {
		$this->subject->setGalleryLink('Conceived at T3CON10');

		$this->assertAttributeEquals(
			'Conceived at T3CON10',
			'galleryLink',
			$this->subject
		);
	}

	/**
	 * @test
	 */
	public function getContactHeaderReturnsInitialValueForString() {
		$this->assertSame(
			'',
			$this->subject->getContactHeader()
		);
	}

	/**
	 * @test
	 */
	public function setContactHeaderForStringSetsContactHeader() {
		$this->subject->setContactHeader('Conceived at T3CON10');

		$this->assertAttributeEquals(
			'Conceived at T3CON10',
			'contactHeader',
			$this->subject
		);
	}

	/**
	 * @test
	 */
	public function getContactNameReturnsInitialValueForString() {
		$this->assertSame(
			'',
			$this->subject->getContactName()
		);
	}

	/**
	 * @test
	 */
	public function setContactNameForStringSetsContactName() {
		$this->subject->setContactName('Conceived at T3CON10');

		$this->assertAttributeEquals(
			'Conceived at T3CON10',
			'contactName',
			$this->subject
		);
	}

	/**
	 * @test
	 */
	public function getContactPositionReturnsInitialValueForString() {
		$this->assertSame(
			'',
			$this->subject->getContactPosition()
		);
	}

	/**
	 * @test
	 */
	public function setContactPositionForStringSetsContactPosition() {
		$this->subject->setContactPosition('Conceived at T3CON10');

		$this->assertAttributeEquals(
			'Conceived at T3CON10',
			'contactPosition',
			$this->subject
		);
	}

	/**
	 * @test
	 */
	public function getContactTelephoneReturnsInitialValueForString() {
		$this->assertSame(
			'',
			$this->subject->getContactTelephone()
		);
	}

	/**
	 * @test
	 */
	public function setContactTelephoneForStringSetsContactTelephone() {
		$this->subject->setContactTelephone('Conceived at T3CON10');

		$this->assertAttributeEquals(
			'Conceived at T3CON10',
			'contactTelephone',
			$this->subject
		);
	}

	/**
	 * @test
	 */
	public function getContactEmailReturnsInitialValueForString() {
		$this->assertSame(
			'',
			$this->subject->getContactEmail()
		);
	}

	/**
	 * @test
	 */
	public function setContactEmailForStringSetsContactEmail() {
		$this->subject->setContactEmail('Conceived at T3CON10');

		$this->assertAttributeEquals(
			'Conceived at T3CON10',
			'contactEmail',
			$this->subject
		);
	}
}
