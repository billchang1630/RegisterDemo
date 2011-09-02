<?php

/**
 * BaseSpeaker
 * 
 * This class has been auto-generated by the Doctrine ORM Framework
 * 
 * @property integer $id
 * @property string $name
 * @property string $email
 * @property timestamp $starttime
 * @property timestamp $endtime
 * @property string $blog
 * @property string $plurk
 * @property string $twitter
 * @property string $gplus
 * @property string $facebook
 * @property string $slide
 * @property text $content
 * @property text $keynote
 * 
 * @method integer   getId()        Returns the current record's "id" value
 * @method string    getName()      Returns the current record's "name" value
 * @method string    getEmail()     Returns the current record's "email" value
 * @method timestamp getStarttime() Returns the current record's "starttime" value
 * @method timestamp getEndtime()   Returns the current record's "endtime" value
 * @method string    getBlog()      Returns the current record's "blog" value
 * @method string    getPlurk()     Returns the current record's "plurk" value
 * @method string    getTwitter()   Returns the current record's "twitter" value
 * @method string    getGplus()     Returns the current record's "gplus" value
 * @method string    getFacebook()  Returns the current record's "facebook" value
 * @method string    getSlide()     Returns the current record's "slide" value
 * @method text      getContent()   Returns the current record's "content" value
 * @method text      getKeynote()   Returns the current record's "keynote" value
 * @method Speaker   setId()        Sets the current record's "id" value
 * @method Speaker   setName()      Sets the current record's "name" value
 * @method Speaker   setEmail()     Sets the current record's "email" value
 * @method Speaker   setStarttime() Sets the current record's "starttime" value
 * @method Speaker   setEndtime()   Sets the current record's "endtime" value
 * @method Speaker   setBlog()      Sets the current record's "blog" value
 * @method Speaker   setPlurk()     Sets the current record's "plurk" value
 * @method Speaker   setTwitter()   Sets the current record's "twitter" value
 * @method Speaker   setGplus()     Sets the current record's "gplus" value
 * @method Speaker   setFacebook()  Sets the current record's "facebook" value
 * @method Speaker   setSlide()     Sets the current record's "slide" value
 * @method Speaker   setContent()   Sets the current record's "content" value
 * @method Speaker   setKeynote()   Sets the current record's "keynote" value
 * 
 * @package    regist
 * @subpackage model
 * @author     Your name here
 * @version    SVN: $Id: Builder.php 7490 2010-03-29 19:53:27Z jwage $
 */
abstract class BaseSpeaker extends sfDoctrineRecord
{
    public function setTableDefinition()
    {
        $this->setTableName('speaker');
        $this->hasColumn('id', 'integer', null, array(
             'type' => 'integer',
             'primary' => true,
             'autoincrement' => true,
             ));
        $this->hasColumn('name', 'string', 255, array(
             'type' => 'string',
             'notnull' => true,
             'length' => 255,
             ));
        $this->hasColumn('email', 'string', 255, array(
             'type' => 'string',
             'length' => 255,
             ));
        $this->hasColumn('starttime', 'timestamp', null, array(
             'type' => 'timestamp',
             'notnull' => true,
             ));
        $this->hasColumn('endtime', 'timestamp', null, array(
             'type' => 'timestamp',
             'notnull' => true,
             ));
        $this->hasColumn('blog', 'string', 255, array(
             'type' => 'string',
             'length' => 255,
             ));
        $this->hasColumn('plurk', 'string', 255, array(
             'type' => 'string',
             'length' => 255,
             ));
        $this->hasColumn('twitter', 'string', 255, array(
             'type' => 'string',
             'length' => 255,
             ));
        $this->hasColumn('gplus', 'string', 255, array(
             'type' => 'string',
             'length' => 255,
             ));
        $this->hasColumn('facebook', 'string', 255, array(
             'type' => 'string',
             'length' => 255,
             ));
        $this->hasColumn('slide', 'string', 255, array(
             'type' => 'string',
             'length' => 255,
             ));
        $this->hasColumn('content', 'text', null, array(
             'type' => 'text',
             ));
        $this->hasColumn('keynote', 'text', null, array(
             'type' => 'text',
             ));


        $this->index('starttime_index', array(
             'fields' => 
             array(
              0 => 'starttime',
             ),
             ));
    }

    public function setUp()
    {
        parent::setUp();
        $timestampable0 = new Doctrine_Template_Timestampable();
        $this->actAs($timestampable0);
    }
}