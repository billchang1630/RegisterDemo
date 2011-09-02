<?php

/**
 * BaseMember
 * 
 * This class has been auto-generated by the Doctrine ORM Framework
 * 
 * @property integer $id
 * @property string $name
 * @property string $email
 * @property string $phone
 * @property varchar $sex
 * 
 * @method integer getId()    Returns the current record's "id" value
 * @method string  getName()  Returns the current record's "name" value
 * @method string  getEmail() Returns the current record's "email" value
 * @method string  getPhone() Returns the current record's "phone" value
 * @method varchar getSex()   Returns the current record's "sex" value
 * @method Member  setId()    Sets the current record's "id" value
 * @method Member  setName()  Sets the current record's "name" value
 * @method Member  setEmail() Sets the current record's "email" value
 * @method Member  setPhone() Sets the current record's "phone" value
 * @method Member  setSex()   Sets the current record's "sex" value
 * 
 * @package    regist
 * @subpackage model
 * @author     Your name here
 * @version    SVN: $Id: Builder.php 7490 2010-03-29 19:53:27Z jwage $
 */
abstract class BaseMember extends sfDoctrineRecord
{
    public function setTableDefinition()
    {
        $this->setTableName('member');
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
             'notnull' => true,
             'unique' => true,
             'length' => 255,
             ));
        $this->hasColumn('phone', 'string', 20, array(
             'type' => 'string',
             'notnull' => true,
             'length' => 20,
             ));
        $this->hasColumn('sex', 'varchar', 1, array(
             'type' => 'varchar',
             'notnull' => true,
             'length' => 1,
             ));
    }

    public function setUp()
    {
        parent::setUp();
        $timestampable0 = new Doctrine_Template_Timestampable();
        $this->actAs($timestampable0);
    }
}