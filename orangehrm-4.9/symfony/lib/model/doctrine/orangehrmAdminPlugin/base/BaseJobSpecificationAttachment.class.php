<?php

/**
 * BaseJobSpecificationAttachment
 * 
 * This class has been auto-generated by the Doctrine ORM Framework
 * 
 * @property int                         $id                         Type: integer(13), primary key
 * @property int                         $jobTitleId                 Type: integer(13)
 * @property string                      $fileName                   Type: string(255)
 * @property string                      $fileType                   Type: string(255)
 * @property int                         $fileSize                   Type: integer(30)
 * @property object                      $fileContent                Type: blob(2147483647)
 * @property JobTitle                    $JobTitle                   
 *  
 * @method int                           getId()                     Type: integer(13), primary key
 * @method int                           getJobtitleid()             Type: integer(13)
 * @method string                        getFilename()               Type: string(255)
 * @method string                        getFiletype()               Type: string(255)
 * @method int                           getFilesize()               Type: integer(30)
 * @method object                        getFilecontent()            Type: blob(2147483647)
 * @method JobTitle                      getJobTitle()               
 *  
 * @method JobSpecificationAttachment    setId(int $val)             Type: integer(13), primary key
 * @method JobSpecificationAttachment    setJobtitleid(int $val)     Type: integer(13)
 * @method JobSpecificationAttachment    setFilename(string $val)    Type: string(255)
 * @method JobSpecificationAttachment    setFiletype(string $val)    Type: string(255)
 * @method JobSpecificationAttachment    setFilesize(int $val)       Type: integer(30)
 * @method JobSpecificationAttachment    setFilecontent(object $val) Type: blob(2147483647)
 * @method JobSpecificationAttachment    setJobTitle(JobTitle $val)  
 *  
 * @package    orangehrm
 * @subpackage model
 * @author     Your name here
 * @version    SVN: $Id: Builder.php 7490 2010-03-29 19:53:27Z jwage $
 */
abstract class BaseJobSpecificationAttachment extends sfDoctrineRecord
{
    public function setTableDefinition()
    {
        $this->setTableName('ohrm_job_specification_attachment');
        $this->hasColumn('id', 'integer', 13, array(
             'type' => 'integer',
             'primary' => true,
             'length' => 13,
             ));
        $this->hasColumn('job_title_id as jobTitleId', 'integer', 13, array(
             'type' => 'integer',
             'length' => 13,
             ));
        $this->hasColumn('file_name as fileName', 'string', 255, array(
             'type' => 'string',
             'length' => 255,
             ));
        $this->hasColumn('file_type as fileType', 'string', 255, array(
             'type' => 'string',
             'length' => 255,
             ));
        $this->hasColumn('file_size as fileSize', 'integer', 30, array(
             'type' => 'integer',
             'length' => 30,
             ));
        $this->hasColumn('file_content as fileContent', 'blob', 2147483647, array(
             'type' => 'blob',
             'length' => 2147483647,
             ));
    }

    public function setUp()
    {
        parent::setUp();
        $this->hasOne('JobTitle', array(
             'local' => 'jobTitleId',
             'foreign' => 'id'));
    }
}