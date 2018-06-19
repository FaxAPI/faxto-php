<?php
/**
 * InlineResponse2009
 *
 * PHP version 5
 *
 * @category Class
 * @package  Swagger\Client
 * @author   Swagger Codegen team
 * @link     https://github.com/swagger-api/swagger-codegen
 */

/**
 * Fax.to REST API client for PHP
 *
 * This is Fax.to REST API client for PHP.
 *
 * OpenAPI spec version: 2.0.0
 * Contact: inquiries@fax.to
 * Generated by: https://github.com/swagger-api/swagger-codegen.git
 * Swagger Codegen version: 2.4.0-SNAPSHOT
 */

/**
 * NOTE: This class is auto generated by the swagger code generator program.
 * https://github.com/swagger-api/swagger-codegen
 * Do not edit the class manually.
 */

namespace Swagger\Client\Model;

use \ArrayAccess;
use \Swagger\Client\ObjectSerializer;

/**
 * InlineResponse2009 Class Doc Comment
 *
 * @category Class
 * @package  Swagger\Client
 * @author   Swagger Codegen team
 * @link     https://github.com/swagger-api/swagger-codegen
 */
class InlineResponse2009 implements ModelInterface, ArrayAccess
{
    const DISCRIMINATOR = null;

    /**
      * The original name of the model.
      *
      * @var string
      */
    protected static $swaggerModelName = 'inline_response_200_9';

    /**
      * Array of property to type mappings. Used for (de)serialization
      *
      * @var string[]
      */
    protected static $swaggerTypes = [
        'status' => 'string',
        'user_id' => 'int',
        'created_date' => '\DateTime',
        'id' => 'int',
        'filename' => 'string',
        'orig_filename' => 'string',
        'preview_file' => 'string',
        'preview_image' => 'string',
        'preview_in_storage' => 'int',
        'file_extension' => 'string',
        'filename_uploaded' => 'string',
        'filesize' => 'string',
        's3' => 'int',
        'server_document_id' => 'int',
        'team_user_id' => 'int',
        'total_pages' => 'int',
        'updated_at' => '\DateTime'
    ];

    /**
      * Array of property to format mappings. Used for (de)serialization
      *
      * @var string[]
      */
    protected static $swaggerFormats = [
        'status' => null,
        'user_id' => null,
        'created_date' => 'date-time',
        'id' => null,
        'filename' => null,
        'orig_filename' => null,
        'preview_file' => null,
        'preview_image' => null,
        'preview_in_storage' => null,
        'file_extension' => null,
        'filename_uploaded' => null,
        'filesize' => null,
        's3' => null,
        'server_document_id' => null,
        'team_user_id' => null,
        'total_pages' => null,
        'updated_at' => 'date-time'
    ];

    /**
     * Array of property to type mappings. Used for (de)serialization
     *
     * @return array
     */
    public static function swaggerTypes()
    {
        return self::$swaggerTypes;
    }

    /**
     * Array of property to format mappings. Used for (de)serialization
     *
     * @return array
     */
    public static function swaggerFormats()
    {
        return self::$swaggerFormats;
    }

    /**
     * Array of attributes where the key is the local name,
     * and the value is the original name
     *
     * @var string[]
     */
    protected static $attributeMap = [
        'status' => 'status',
        'user_id' => 'user_id',
        'created_date' => 'created_date',
        'id' => 'id',
        'filename' => 'filename',
        'orig_filename' => 'orig_filename',
        'preview_file' => 'preview_file',
        'preview_image' => 'preview_image',
        'preview_in_storage' => 'preview_in_storage',
        'file_extension' => 'file_extension',
        'filename_uploaded' => 'filename_uploaded',
        'filesize' => 'filesize',
        's3' => 's3',
        'server_document_id' => 'server_document_id',
        'team_user_id' => 'team_user_id',
        'total_pages' => 'total_pages',
        'updated_at' => 'updated_at'
    ];

    /**
     * Array of attributes to setter functions (for deserialization of responses)
     *
     * @var string[]
     */
    protected static $setters = [
        'status' => 'setStatus',
        'user_id' => 'setUserId',
        'created_date' => 'setCreatedDate',
        'id' => 'setId',
        'filename' => 'setFilename',
        'orig_filename' => 'setOrigFilename',
        'preview_file' => 'setPreviewFile',
        'preview_image' => 'setPreviewImage',
        'preview_in_storage' => 'setPreviewInStorage',
        'file_extension' => 'setFileExtension',
        'filename_uploaded' => 'setFilenameUploaded',
        'filesize' => 'setFilesize',
        's3' => 'setS3',
        'server_document_id' => 'setServerDocumentId',
        'team_user_id' => 'setTeamUserId',
        'total_pages' => 'setTotalPages',
        'updated_at' => 'setUpdatedAt'
    ];

    /**
     * Array of attributes to getter functions (for serialization of requests)
     *
     * @var string[]
     */
    protected static $getters = [
        'status' => 'getStatus',
        'user_id' => 'getUserId',
        'created_date' => 'getCreatedDate',
        'id' => 'getId',
        'filename' => 'getFilename',
        'orig_filename' => 'getOrigFilename',
        'preview_file' => 'getPreviewFile',
        'preview_image' => 'getPreviewImage',
        'preview_in_storage' => 'getPreviewInStorage',
        'file_extension' => 'getFileExtension',
        'filename_uploaded' => 'getFilenameUploaded',
        'filesize' => 'getFilesize',
        's3' => 'getS3',
        'server_document_id' => 'getServerDocumentId',
        'team_user_id' => 'getTeamUserId',
        'total_pages' => 'getTotalPages',
        'updated_at' => 'getUpdatedAt'
    ];

    /**
     * Array of attributes where the key is the local name,
     * and the value is the original name
     *
     * @return array
     */
    public static function attributeMap()
    {
        return self::$attributeMap;
    }

    /**
     * Array of attributes to setter functions (for deserialization of responses)
     *
     * @return array
     */
    public static function setters()
    {
        return self::$setters;
    }

    /**
     * Array of attributes to getter functions (for serialization of requests)
     *
     * @return array
     */
    public static function getters()
    {
        return self::$getters;
    }

    /**
     * The original name of the model.
     *
     * @return string
     */
    public function getModelName()
    {
        return self::$swaggerModelName;
    }

    

    

    /**
     * Associative array for storing property values
     *
     * @var mixed[]
     */
    protected $container = [];

    /**
     * Constructor
     *
     * @param mixed[] $data Associated array of property values
     *                      initializing the model
     */
    public function __construct(array $data = null)
    {
        $this->container['status'] = isset($data['status']) ? $data['status'] : null;
        $this->container['user_id'] = isset($data['user_id']) ? $data['user_id'] : null;
        $this->container['created_date'] = isset($data['created_date']) ? $data['created_date'] : null;
        $this->container['id'] = isset($data['id']) ? $data['id'] : null;
        $this->container['filename'] = isset($data['filename']) ? $data['filename'] : null;
        $this->container['orig_filename'] = isset($data['orig_filename']) ? $data['orig_filename'] : null;
        $this->container['preview_file'] = isset($data['preview_file']) ? $data['preview_file'] : null;
        $this->container['preview_image'] = isset($data['preview_image']) ? $data['preview_image'] : null;
        $this->container['preview_in_storage'] = isset($data['preview_in_storage']) ? $data['preview_in_storage'] : null;
        $this->container['file_extension'] = isset($data['file_extension']) ? $data['file_extension'] : null;
        $this->container['filename_uploaded'] = isset($data['filename_uploaded']) ? $data['filename_uploaded'] : null;
        $this->container['filesize'] = isset($data['filesize']) ? $data['filesize'] : null;
        $this->container['s3'] = isset($data['s3']) ? $data['s3'] : null;
        $this->container['server_document_id'] = isset($data['server_document_id']) ? $data['server_document_id'] : null;
        $this->container['team_user_id'] = isset($data['team_user_id']) ? $data['team_user_id'] : null;
        $this->container['total_pages'] = isset($data['total_pages']) ? $data['total_pages'] : null;
        $this->container['updated_at'] = isset($data['updated_at']) ? $data['updated_at'] : null;
    }

    /**
     * Show all the invalid properties with reasons.
     *
     * @return array invalid properties with reasons
     */
    public function listInvalidProperties()
    {
        $invalidProperties = [];

        return $invalidProperties;
    }

    /**
     * Validate all the properties in the model
     * return true if all passed
     *
     * @return bool True if all properties are valid
     */
    public function valid()
    {
        return count($this->listInvalidProperties()) === 0;
    }


    /**
     * Gets status
     *
     * @return string
     */
    public function getStatus()
    {
        return $this->container['status'];
    }

    /**
     * Sets status
     *
     * @param string $status status
     *
     * @return $this
     */
    public function setStatus($status)
    {
        $this->container['status'] = $status;

        return $this;
    }

    /**
     * Gets user_id
     *
     * @return int
     */
    public function getUserId()
    {
        return $this->container['user_id'];
    }

    /**
     * Sets user_id
     *
     * @param int $user_id user_id
     *
     * @return $this
     */
    public function setUserId($user_id)
    {
        $this->container['user_id'] = $user_id;

        return $this;
    }

    /**
     * Gets created_date
     *
     * @return \DateTime
     */
    public function getCreatedDate()
    {
        return $this->container['created_date'];
    }

    /**
     * Sets created_date
     *
     * @param \DateTime $created_date created_date
     *
     * @return $this
     */
    public function setCreatedDate($created_date)
    {
        $this->container['created_date'] = $created_date;

        return $this;
    }

    /**
     * Gets id
     *
     * @return int
     */
    public function getId()
    {
        return $this->container['id'];
    }

    /**
     * Sets id
     *
     * @param int $id id
     *
     * @return $this
     */
    public function setId($id)
    {
        $this->container['id'] = $id;

        return $this;
    }

    /**
     * Gets filename
     *
     * @return string
     */
    public function getFilename()
    {
        return $this->container['filename'];
    }

    /**
     * Sets filename
     *
     * @param string $filename filename
     *
     * @return $this
     */
    public function setFilename($filename)
    {
        $this->container['filename'] = $filename;

        return $this;
    }

    /**
     * Gets orig_filename
     *
     * @return string
     */
    public function getOrigFilename()
    {
        return $this->container['orig_filename'];
    }

    /**
     * Sets orig_filename
     *
     * @param string $orig_filename orig_filename
     *
     * @return $this
     */
    public function setOrigFilename($orig_filename)
    {
        $this->container['orig_filename'] = $orig_filename;

        return $this;
    }

    /**
     * Gets preview_file
     *
     * @return string
     */
    public function getPreviewFile()
    {
        return $this->container['preview_file'];
    }

    /**
     * Sets preview_file
     *
     * @param string $preview_file preview_file
     *
     * @return $this
     */
    public function setPreviewFile($preview_file)
    {
        $this->container['preview_file'] = $preview_file;

        return $this;
    }

    /**
     * Gets preview_image
     *
     * @return string
     */
    public function getPreviewImage()
    {
        return $this->container['preview_image'];
    }

    /**
     * Sets preview_image
     *
     * @param string $preview_image preview_image
     *
     * @return $this
     */
    public function setPreviewImage($preview_image)
    {
        $this->container['preview_image'] = $preview_image;

        return $this;
    }

    /**
     * Gets preview_in_storage
     *
     * @return int
     */
    public function getPreviewInStorage()
    {
        return $this->container['preview_in_storage'];
    }

    /**
     * Sets preview_in_storage
     *
     * @param int $preview_in_storage preview_in_storage
     *
     * @return $this
     */
    public function setPreviewInStorage($preview_in_storage)
    {
        $this->container['preview_in_storage'] = $preview_in_storage;

        return $this;
    }

    /**
     * Gets file_extension
     *
     * @return string
     */
    public function getFileExtension()
    {
        return $this->container['file_extension'];
    }

    /**
     * Sets file_extension
     *
     * @param string $file_extension file_extension
     *
     * @return $this
     */
    public function setFileExtension($file_extension)
    {
        $this->container['file_extension'] = $file_extension;

        return $this;
    }

    /**
     * Gets filename_uploaded
     *
     * @return string
     */
    public function getFilenameUploaded()
    {
        return $this->container['filename_uploaded'];
    }

    /**
     * Sets filename_uploaded
     *
     * @param string $filename_uploaded filename_uploaded
     *
     * @return $this
     */
    public function setFilenameUploaded($filename_uploaded)
    {
        $this->container['filename_uploaded'] = $filename_uploaded;

        return $this;
    }

    /**
     * Gets filesize
     *
     * @return string
     */
    public function getFilesize()
    {
        return $this->container['filesize'];
    }

    /**
     * Sets filesize
     *
     * @param string $filesize filesize
     *
     * @return $this
     */
    public function setFilesize($filesize)
    {
        $this->container['filesize'] = $filesize;

        return $this;
    }

    /**
     * Gets s3
     *
     * @return int
     */
    public function getS3()
    {
        return $this->container['s3'];
    }

    /**
     * Sets s3
     *
     * @param int $s3 s3
     *
     * @return $this
     */
    public function setS3($s3)
    {
        $this->container['s3'] = $s3;

        return $this;
    }

    /**
     * Gets server_document_id
     *
     * @return int
     */
    public function getServerDocumentId()
    {
        return $this->container['server_document_id'];
    }

    /**
     * Sets server_document_id
     *
     * @param int $server_document_id server_document_id
     *
     * @return $this
     */
    public function setServerDocumentId($server_document_id)
    {
        $this->container['server_document_id'] = $server_document_id;

        return $this;
    }

    /**
     * Gets team_user_id
     *
     * @return int
     */
    public function getTeamUserId()
    {
        return $this->container['team_user_id'];
    }

    /**
     * Sets team_user_id
     *
     * @param int $team_user_id team_user_id
     *
     * @return $this
     */
    public function setTeamUserId($team_user_id)
    {
        $this->container['team_user_id'] = $team_user_id;

        return $this;
    }

    /**
     * Gets total_pages
     *
     * @return int
     */
    public function getTotalPages()
    {
        return $this->container['total_pages'];
    }

    /**
     * Sets total_pages
     *
     * @param int $total_pages total_pages
     *
     * @return $this
     */
    public function setTotalPages($total_pages)
    {
        $this->container['total_pages'] = $total_pages;

        return $this;
    }

    /**
     * Gets updated_at
     *
     * @return \DateTime
     */
    public function getUpdatedAt()
    {
        return $this->container['updated_at'];
    }

    /**
     * Sets updated_at
     *
     * @param \DateTime $updated_at updated_at
     *
     * @return $this
     */
    public function setUpdatedAt($updated_at)
    {
        $this->container['updated_at'] = $updated_at;

        return $this;
    }
    /**
     * Returns true if offset exists. False otherwise.
     *
     * @param integer $offset Offset
     *
     * @return boolean
     */
    public function offsetExists($offset)
    {
        return isset($this->container[$offset]);
    }

    /**
     * Gets offset.
     *
     * @param integer $offset Offset
     *
     * @return mixed
     */
    public function offsetGet($offset)
    {
        return isset($this->container[$offset]) ? $this->container[$offset] : null;
    }

    /**
     * Sets value based on offset.
     *
     * @param integer $offset Offset
     * @param mixed   $value  Value to be set
     *
     * @return void
     */
    public function offsetSet($offset, $value)
    {
        if (is_null($offset)) {
            $this->container[] = $value;
        } else {
            $this->container[$offset] = $value;
        }
    }

    /**
     * Unsets offset.
     *
     * @param integer $offset Offset
     *
     * @return void
     */
    public function offsetUnset($offset)
    {
        unset($this->container[$offset]);
    }

    /**
     * Gets the string presentation of the object
     *
     * @return string
     */
    public function __toString()
    {
        if (defined('JSON_PRETTY_PRINT')) { // use JSON pretty print
            return json_encode(
                ObjectSerializer::sanitizeForSerialization($this),
                JSON_PRETTY_PRINT
            );
        }

        return json_encode(ObjectSerializer::sanitizeForSerialization($this));
    }
}


