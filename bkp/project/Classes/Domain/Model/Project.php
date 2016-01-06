<?php
namespace Project\Project\Domain\Model;

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
 * Project
 */
class Project extends \TYPO3\CMS\Extbase\DomainObject\AbstractEntity {

	/**
	 * banner
	 *
	 * @var \TYPO3\CMS\Extbase\Domain\Model\FileReference
	 */
	protected $banner = NULL;

	/**
	 * contentHeader
	 *
	 * @var string
	 */
	protected $contentHeader = '';

	/**
	 * contentSubheader
	 *
	 * @var string
	 */
	protected $contentSubheader = '';

	/**
	 * contentDescription1
	 *
	 * @var string
	 */
	protected $contentDescription1 = '';

	/**
	 * contentDescription2
	 *
	 * @var string
	 */
	protected $contentDescription2 = '';

	/**
	 * contentBulletList
	 *
	 * @var string
	 */
	protected $contentBulletList = '';

	/**
	 * content1Header
	 *
	 * @var string
	 */
	protected $content1Header = '';

	/**
	 * content1Subheader
	 *
	 * @var string
	 */
	protected $content1Subheader = '';

	/**
	 * content1Image
	 *
	 * @var \TYPO3\CMS\Extbase\Domain\Model\FileReference
	 */
	protected $content1Image = NULL;

	/**
	 * content2Header
	 *
	 * @var string
	 */
	protected $content2Header = '';

	/**
	 * content2Subheader
	 *
	 * @var string
	 */
	protected $content2Subheader = '';

	/**
	 * content2Image
	 *
	 * @var \TYPO3\CMS\Extbase\Domain\Model\FileReference
	 */
	protected $content2Image = NULL;

	/**
	 * content3Header
	 *
	 * @var string
	 */
	protected $content3Header = '';

	/**
	 * content3Subheader
	 *
	 * @var string
	 */
	protected $content3Subheader = '';

	/**
	 * contentSlider
	 *
	 * @var \TYPO3\CMS\Extbase\Domain\Model\FileReference
	 */
	protected $contentSlider = NULL;

	/**
	 * sliderLink
	 *
	 * @var string
	 */
	protected $sliderLink = '';

	/**
	 * zitatHeader
	 *
	 * @var string
	 */
	protected $zitatHeader = '';

	/**
	 * zitatSubheader
	 *
	 * @var string
	 */
	protected $zitatSubheader = '';

	/**
	 * zitatDescritpion
	 *
	 * @var string
	 */
	protected $zitatDescritpion = '';

	/**
	 * zitatImage
	 *
	 * @var \TYPO3\CMS\Extbase\Domain\Model\FileReference
	 */
	protected $zitatImage = NULL;

	/**
	 * galleryHeader
	 *
	 * @var string
	 */
	protected $galleryHeader = '';

	/**
	 * gallerySubheader
	 *
	 * @var string
	 */
	protected $gallerySubheader = '';

	/**
	 * galleryImages
	 *
	 * @var \TYPO3\CMS\Extbase\Domain\Model\FileReference
	 */
	protected $galleryImages = NULL;

	/**
	 * galleryLink
	 *
	 * @var string
	 */
	protected $galleryLink = '';

	/**
	 * contactHeader
	 *
	 * @var string
	 */
	protected $contactHeader = '';

	/**
	 * contactSubheader
	 *
	 * @var string
	 */
	protected $contactSubheader = '';

	/**
	 * contactName
	 *
	 * @var string
	 */
	protected $contactName = '';

	/**
	 * contactPosition
	 *
	 * @var string
	 */
	protected $contactPosition = '';

	/**
	 * contactTelephone
	 *
	 * @var string
	 */
	protected $contactTelephone = '';

	/**
	 * contactEmail
	 *
	 * @var string
	 */
	protected $contactEmail = '';

	/**
	 * bannerLogo
	 *
	 * @var \TYPO3\CMS\Extbase\Domain\Model\FileReference
	 */
	protected $bannerLogo = NULL;

	/**
	 * contentDescription
	 *
	 * @var string
	 */
	protected $contentDescription = '';

	/**
	 * Returns the banner
	 *
	 * @return \TYPO3\CMS\Extbase\Domain\Model\FileReference $banner
	 */
	public function getBanner() {
		return $this->banner;
	}

	/**
	 * Sets the banner
	 *
	 * @param \TYPO3\CMS\Extbase\Domain\Model\FileReference $banner
	 * @return void
	 */
	public function setBanner(\TYPO3\CMS\Extbase\Domain\Model\FileReference $banner) {
		$this->banner = $banner;
	}

	/**
	 * Returns the contentHeader
	 *
	 * @return string $contentHeader
	 */
	public function getContentHeader() {
		return $this->contentHeader;
	}

	/**
	 * Sets the contentHeader
	 *
	 * @param string $contentHeader
	 * @return void
	 */
	public function setContentHeader($contentHeader) {
		$this->contentHeader = $contentHeader;
	}

	/**
	 * Returns the contentSubheader
	 *
	 * @return string $contentSubheader
	 */
	public function getContentSubheader() {
		return $this->contentSubheader;
	}

	/**
	 * Sets the contentSubheader
	 *
	 * @param string $contentSubheader
	 * @return void
	 */
	public function setContentSubheader($contentSubheader) {
		$this->contentSubheader = $contentSubheader;
	}

	/**
	 * Returns the contentDescription1
	 *
	 * @return string $contentDescription1
	 */
	public function getContentDescription1() {
		return $this->contentDescription1;
	}

	/**
	 * Sets the contentDescription1
	 *
	 * @param string $contentDescription1
	 * @return void
	 */
	public function setContentDescription1($contentDescription1) {
		$this->contentDescription1 = $contentDescription1;
	}

	/**
	 * Returns the contentDescription2
	 *
	 * @return string $contentDescription2
	 */
	public function getContentDescription2() {
		return $this->contentDescription2;
	}

	/**
	 * Sets the contentDescription2
	 *
	 * @param string $contentDescription2
	 * @return void
	 */
	public function setContentDescription2($contentDescription2) {
		$this->contentDescription2 = $contentDescription2;
	}

	/**
	 * Returns the contentBulletList
	 *
	 * @return string $contentBulletList
	 */
	public function getContentBulletList() {
		return $this->contentBulletList;
	}

	/**
	 * Sets the contentBulletList
	 *
	 * @param string $contentBulletList
	 * @return void
	 */
	public function setContentBulletList($contentBulletList) {
		$this->contentBulletList = $contentBulletList;
	}

	/**
	 * Returns the content1Header
	 *
	 * @return string $content1Header
	 */
	public function getContent1Header() {
		return $this->content1Header;
	}

	/**
	 * Sets the content1Header
	 *
	 * @param string $content1Header
	 * @return void
	 */
	public function setContent1Header($content1Header) {
		$this->content1Header = $content1Header;
	}

	/**
	 * Returns the content1Subheader
	 *
	 * @return string $content1Subheader
	 */
	public function getContent1Subheader() {
		return $this->content1Subheader;
	}

	/**
	 * Sets the content1Subheader
	 *
	 * @param string $content1Subheader
	 * @return void
	 */
	public function setContent1Subheader($content1Subheader) {
		$this->content1Subheader = $content1Subheader;
	}

	/**
	 * Returns the content1Image
	 *
	 * @return \TYPO3\CMS\Extbase\Domain\Model\FileReference $content1Image
	 */
	public function getContent1Image() {
		return $this->content1Image;
	}

	/**
	 * Sets the content1Image
	 *
	 * @param \TYPO3\CMS\Extbase\Domain\Model\FileReference $content1Image
	 * @return void
	 */
	public function setContent1Image(\TYPO3\CMS\Extbase\Domain\Model\FileReference $content1Image) {
		$this->content1Image = $content1Image;
	}

	/**
	 * Returns the content2Header
	 *
	 * @return string $content2Header
	 */
	public function getContent2Header() {
		return $this->content2Header;
	}

	/**
	 * Sets the content2Header
	 *
	 * @param string $content2Header
	 * @return void
	 */
	public function setContent2Header($content2Header) {
		$this->content2Header = $content2Header;
	}

	/**
	 * Returns the content2Subheader
	 *
	 * @return string $content2Subheader
	 */
	public function getContent2Subheader() {
		return $this->content2Subheader;
	}

	/**
	 * Sets the content2Subheader
	 *
	 * @param string $content2Subheader
	 * @return void
	 */
	public function setContent2Subheader($content2Subheader) {
		$this->content2Subheader = $content2Subheader;
	}

	/**
	 * Returns the content2Image
	 *
	 * @return \TYPO3\CMS\Extbase\Domain\Model\FileReference $content2Image
	 */
	public function getContent2Image() {
		return $this->content2Image;
	}

	/**
	 * Sets the content2Image
	 *
	 * @param \TYPO3\CMS\Extbase\Domain\Model\FileReference $content2Image
	 * @return void
	 */
	public function setContent2Image(\TYPO3\CMS\Extbase\Domain\Model\FileReference $content2Image) {
		$this->content2Image = $content2Image;
	}

	/**
	 * Returns the content3Header
	 *
	 * @return string $content3Header
	 */
	public function getContent3Header() {
		return $this->content3Header;
	}

	/**
	 * Sets the content3Header
	 *
	 * @param string $content3Header
	 * @return void
	 */
	public function setContent3Header($content3Header) {
		$this->content3Header = $content3Header;
	}

	/**
	 * Returns the content3Subheader
	 *
	 * @return string $content3Subheader
	 */
	public function getContent3Subheader() {
		return $this->content3Subheader;
	}

	/**
	 * Sets the content3Subheader
	 *
	 * @param string $content3Subheader
	 * @return void
	 */
	public function setContent3Subheader($content3Subheader) {
		$this->content3Subheader = $content3Subheader;
	}

	/**
	 * Returns the contentSlider
	 *
	 * @return \TYPO3\CMS\Extbase\Domain\Model\FileReference $contentSlider
	 */
	public function getContentSlider() {
		return $this->contentSlider;
	}

	/**
	 * Sets the contentSlider
	 *
	 * @param \TYPO3\CMS\Extbase\Domain\Model\FileReference $contentSlider
	 * @return void
	 */
	public function setContentSlider(\TYPO3\CMS\Extbase\Domain\Model\FileReference $contentSlider) {
		$this->contentSlider = $contentSlider;
	}

	/**
	 * Returns the sliderLink
	 *
	 * @return string $sliderLink
	 */
	public function getSliderLink() {
		return $this->sliderLink;
	}

	/**
	 * Sets the sliderLink
	 *
	 * @param string $sliderLink
	 * @return void
	 */
	public function setSliderLink($sliderLink) {
		$this->sliderLink = $sliderLink;
	}

	/**
	 * Returns the zitatHeader
	 *
	 * @return string $zitatHeader
	 */
	public function getZitatHeader() {
		return $this->zitatHeader;
	}

	/**
	 * Sets the zitatHeader
	 *
	 * @param string $zitatHeader
	 * @return void
	 */
	public function setZitatHeader($zitatHeader) {
		$this->zitatHeader = $zitatHeader;
	}

	/**
	 * Returns the zitatSubheader
	 *
	 * @return string $zitatSubheader
	 */
	public function getZitatSubheader() {
		return $this->zitatSubheader;
	}

	/**
	 * Sets the zitatSubheader
	 *
	 * @param string $zitatSubheader
	 * @return void
	 */
	public function setZitatSubheader($zitatSubheader) {
		$this->zitatSubheader = $zitatSubheader;
	}

	/**
	 * Returns the zitatDescritpion
	 *
	 * @return string $zitatDescritpion
	 */
	public function getZitatDescritpion() {
		return $this->zitatDescritpion;
	}

	/**
	 * Sets the zitatDescritpion
	 *
	 * @param string $zitatDescritpion
	 * @return void
	 */
	public function setZitatDescritpion($zitatDescritpion) {
		$this->zitatDescritpion = $zitatDescritpion;
	}

	/**
	 * Returns the zitatImage
	 *
	 * @return \TYPO3\CMS\Extbase\Domain\Model\FileReference $zitatImage
	 */
	public function getZitatImage() {
		return $this->zitatImage;
	}

	/**
	 * Sets the zitatImage
	 *
	 * @param \TYPO3\CMS\Extbase\Domain\Model\FileReference $zitatImage
	 * @return void
	 */
	public function setZitatImage(\TYPO3\CMS\Extbase\Domain\Model\FileReference $zitatImage) {
		$this->zitatImage = $zitatImage;
	}

	/**
	 * Returns the galleryHeader
	 *
	 * @return string $galleryHeader
	 */
	public function getGalleryHeader() {
		return $this->galleryHeader;
	}

	/**
	 * Sets the galleryHeader
	 *
	 * @param string $galleryHeader
	 * @return void
	 */
	public function setGalleryHeader($galleryHeader) {
		$this->galleryHeader = $galleryHeader;
	}

	/**
	 * Returns the gallerySubheader
	 *
	 * @return string $gallerySubheader
	 */
	public function getGallerySubheader() {
		return $this->gallerySubheader;
	}

	/**
	 * Sets the gallerySubheader
	 *
	 * @param string $gallerySubheader
	 * @return void
	 */
	public function setGallerySubheader($gallerySubheader) {
		$this->gallerySubheader = $gallerySubheader;
	}

	/**
	 * Returns the galleryImages
	 *
	 * @return \TYPO3\CMS\Extbase\Domain\Model\FileReference $galleryImages
	 */
	public function getGalleryImages() {
		return $this->galleryImages;
	}

	/**
	 * Sets the galleryImages
	 *
	 * @param \TYPO3\CMS\Extbase\Domain\Model\FileReference $galleryImages
	 * @return void
	 */
	public function setGalleryImages(\TYPO3\CMS\Extbase\Domain\Model\FileReference $galleryImages) {
		$this->galleryImages = $galleryImages;
	}

	/**
	 * Returns the galleryLink
	 *
	 * @return string $galleryLink
	 */
	public function getGalleryLink() {
		return $this->galleryLink;
	}

	/**
	 * Sets the galleryLink
	 *
	 * @param string $galleryLink
	 * @return void
	 */
	public function setGalleryLink($galleryLink) {
		$this->galleryLink = $galleryLink;
	}

	/**
	 * Returns the contactHeader
	 *
	 * @return string $contactHeader
	 */
	public function getContactHeader() {
		return $this->contactHeader;
	}

	/**
	 * Sets the contactHeader
	 *
	 * @param string $contactHeader
	 * @return void
	 */
	public function setContactHeader($contactHeader) {
		$this->contactHeader = $contactHeader;
	}

	/**
	 * Returns the contactSubheader
	 *
	 * @return string $contactSubheader
	 */
	public function getContactSubheader() {
		return $this->contactSubheader;
	}

	/**
	 * Sets the contactSubheader
	 *
	 * @param string $contactSubheader
	 * @return void
	 */
	public function setContactSubheader($contactSubheader) {
		$this->contactSubheader = $contactSubheader;
	}

	/**
	 * Returns the contactName
	 *
	 * @return string $contactName
	 */
	public function getContactName() {
		return $this->contactName;
	}

	/**
	 * Sets the contactName
	 *
	 * @param string $contactName
	 * @return void
	 */
	public function setContactName($contactName) {
		$this->contactName = $contactName;
	}

	/**
	 * Returns the contactPosition
	 *
	 * @return string $contactPosition
	 */
	public function getContactPosition() {
		return $this->contactPosition;
	}

	/**
	 * Sets the contactPosition
	 *
	 * @param string $contactPosition
	 * @return void
	 */
	public function setContactPosition($contactPosition) {
		$this->contactPosition = $contactPosition;
	}

	/**
	 * Returns the contactTelephone
	 *
	 * @return string $contactTelephone
	 */
	public function getContactTelephone() {
		return $this->contactTelephone;
	}

	/**
	 * Sets the contactTelephone
	 *
	 * @param string $contactTelephone
	 * @return void
	 */
	public function setContactTelephone($contactTelephone) {
		$this->contactTelephone = $contactTelephone;
	}

	/**
	 * Returns the contactEmail
	 *
	 * @return string $contactEmail
	 */
	public function getContactEmail() {
		return $this->contactEmail;
	}

	/**
	 * Sets the contactEmail
	 *
	 * @param string $contactEmail
	 * @return void
	 */
	public function setContactEmail($contactEmail) {
		$this->contactEmail = $contactEmail;
	}

	/**
	 * Returns the bannerLogo
	 *
	 * @return \TYPO3\CMS\Extbase\Domain\Model\FileReference $bannerLogo
	 */
	public function getBannerLogo() {
		return $this->bannerLogo;
	}

	/**
	 * Sets the bannerLogo
	 *
	 * @param \TYPO3\CMS\Extbase\Domain\Model\FileReference $bannerLogo
	 * @return void
	 */
	public function setBannerLogo(\TYPO3\CMS\Extbase\Domain\Model\FileReference $bannerLogo) {
		$this->bannerLogo = $bannerLogo;
	}

	/**
	 * Returns the contentDescription
	 *
	 * @return string $contentDescription
	 */
	public function getContentDescription() {
		return $this->contentDescription;
	}

	/**
	 * Sets the contentDescription
	 *
	 * @param string $contentDescription
	 * @return void
	 */
	public function setContentDescription($contentDescription) {
		$this->contentDescription = $contentDescription;
	}

}