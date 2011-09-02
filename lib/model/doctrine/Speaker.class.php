<?php

/**
 * Speaker
 *
 * This class has been auto-generated by the Doctrine ORM Framework
 *
 * @package    regist
 * @subpackage model
 * @author     Your name here
 * @version    SVN: $Id: Builder.php 7490 2010-03-29 19:53:27Z jwage $
 */
class Speaker extends BaseSpeaker {

    public function setPhoto($Filename) {
        $PhotoDir = sfConfig::get('sf_upload_dir') . '/Speaker';
        mkdir($PhotoDir, 0777, true);
        copy($Filename, "$PhotoDir/" . $this->getId() . '.jpg');
    }

    public function getPhoto() {
        $PhotoDir = sfConfig::get('sf_upload_dir') . '/Speaker';
        if (file_exists("$PhotoDir/" . $this->getId() . '.jpg')) {
            $ModifyTime=filemtime("$PhotoDir/" . $this->getId() . '.jpg');
            $BaseUrl = sfContext::getInstance()->getRequest()->getRelativeUrlRoot();
            $UploadDir = substr(sfConfig::get('sf_upload_dir'), strlen(sfConfig::get('sf_web_dir'))).'/Speaker';
            $UploadUrl = $BaseUrl . $UploadDir;
            return "$UploadUrl/".$this->getId().'.jpg?_='.$ModifyTime;
        }
        return null;
    }

}
