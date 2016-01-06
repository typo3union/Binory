<?php
namespace Video\Video\Domain\Model;

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
 * Videos
 */
class Videos extends \TYPO3\CMS\Extbase\DomainObject\AbstractEntity
{

    /**
     * uploadVideo
     *
     * @var string
     */
    protected $uploadVideo = '';
    
    /**
     * alttag
     *
     * @var string
     */
    protected $alttag = '';
    
    /**
     * backgroundImage
     *
     * @var \TYPO3\CMS\Extbase\Domain\Model\FileReference
     */
    protected $backgroundImage = null;
    
    /**
     * Returns the uploadVideo
     *
     * @return string $uploadVideo
     */
    public function getUploadVideo()
    {
        return $this->uploadVideo;
    }
    
    /**
     * Sets the uploadVideo
     *
     * @param string $uploadVideo
     * @return void
     */
    public function setUploadVideo($uploadVideo)
    {
        $this->uploadVideo = $uploadVideo;
    }
    
    /**
     * Returns the alttag
     *
     * @return string $alttag
     */
    public function getAlttag()
    {
        return $this->alttag;
    }
    
    /**
     * Sets the alttag
     *
     * @param string $alttag
     * @return void
     */
    public function setAlttag($alttag)
    {
        $this->alttag = $alttag;
    }
    
    /**
     * Returns the backgroundImage
     *
     * @return \TYPO3\CMS\Extbase\Domain\Model\FileReference $backgroundImage
     */
    public function getBackgroundImage()
    {
        return $this->backgroundImage;
    }
    
    /**
     * Sets the backgroundImage
     *
     * @param \TYPO3\CMS\Extbase\Domain\Model\FileReference $backgroundImage
     * @return void
     */
    public function setBackgroundImage(\TYPO3\CMS\Extbase\Domain\Model\FileReference $backgroundImage)
    {
        $this->backgroundImage = $backgroundImage;
    }

}