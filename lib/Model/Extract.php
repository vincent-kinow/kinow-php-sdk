<?php
/**
 * Extract
 *
 * PHP version 5
 *
 * @category Class
 * @package  Swagger\Client
 * @author   http://github.com/swagger-api/swagger-codegen
 * @license  http://www.apache.org/licenses/LICENSE-2.0 Apache Licene v2
 * @link     https://github.com/swagger-api/swagger-codegen
 */

/**
 * Kaemo API
 *
 * Public api for Kaemo back office
 *
 * OpenAPI spec version: 1.0.39
 * 
 * Generated by: https://github.com/swagger-api/swagger-codegen.git
 *
 * Licensed under the Apache License, Version 2.0 (the "License");
 * you may not use this file except in compliance with the License.
 * You may obtain a copy of the License at
 *
 *      http://www.apache.org/licenses/LICENSE-2.0
 *
 * Unless required by applicable law or agreed to in writing, software
 * distributed under the License is distributed on an "AS IS" BASIS,
 * WITHOUT WARRANTIES OR CONDITIONS OF ANY KIND, either express or implied.
 * See the License for the specific language governing permissions and
 * limitations under the License.
 */

/**
 * NOTE: This class is auto generated by the swagger code generator program.
 * https://github.com/swagger-api/swagger-codegen
 * Do not edit the class manually.
 */

namespace Swagger\Client\Model;

use \ArrayAccess;

/**
 * Extract Class Doc Comment
 *
 * @category    Class */
/** 
 * @package     Swagger\Client
 * @author      http://github.com/swagger-api/swagger-codegen
 * @license     http://www.apache.org/licenses/LICENSE-2.0 Apache Licene v2
 * @link        https://github.com/swagger-api/swagger-codegen
 */
class Extract implements ArrayAccess
{
    /**
      * The original name of the model.
      * @var string
      */
    protected static $swaggerModelName = 'Extract';

    /**
      * Array of property to type mappings. Used for (de)serialization
      * @var string[]
      */
    protected static $swaggerTypes = array(
        'id' => 'int',
        'id_product' => 'int',
        'id_product_image' => 'int',
        'id_media_player' => 'int',
        'id_media_source' => 'int',
        'filename' => 'string',
        'position' => 'int',
        'active' => 'bool',
        'date_add' => 'string',
        'date_upd' => 'string',
        'name' => '\Swagger\Client\Model\I18nField[]',
        'description' => '\Swagger\Client\Model\I18nField[]',
        'cover' => 'string',
        'thumbnail' => 'string'
    );

    public static function swaggerTypes()
    {
        return self::$swaggerTypes;
    }

    /**
     * Array of attributes where the key is the local name, and the value is the original name
     * @var string[]
     */
    protected static $attributeMap = array(
        'id' => 'id',
        'id_product' => 'id_product',
        'id_product_image' => 'id_product_image',
        'id_media_player' => 'id_media_player',
        'id_media_source' => 'id_media_source',
        'filename' => 'filename',
        'position' => 'position',
        'active' => 'active',
        'date_add' => 'date_add',
        'date_upd' => 'date_upd',
        'name' => 'name',
        'description' => 'description',
        'cover' => 'cover',
        'thumbnail' => 'thumbnail'
    );

    public static function attributeMap()
    {
        return self::$attributeMap;
    }

    /**
     * Array of attributes to setter functions (for deserialization of responses)
     * @var string[]
     */
    protected static $setters = array(
        'id' => 'setId',
        'id_product' => 'setIdProduct',
        'id_product_image' => 'setIdProductImage',
        'id_media_player' => 'setIdMediaPlayer',
        'id_media_source' => 'setIdMediaSource',
        'filename' => 'setFilename',
        'position' => 'setPosition',
        'active' => 'setActive',
        'date_add' => 'setDateAdd',
        'date_upd' => 'setDateUpd',
        'name' => 'setName',
        'description' => 'setDescription',
        'cover' => 'setCover',
        'thumbnail' => 'setThumbnail'
    );

    public static function setters()
    {
        return self::$setters;
    }

    /**
     * Array of attributes to getter functions (for serialization of requests)
     * @var string[]
     */
    protected static $getters = array(
        'id' => 'getId',
        'id_product' => 'getIdProduct',
        'id_product_image' => 'getIdProductImage',
        'id_media_player' => 'getIdMediaPlayer',
        'id_media_source' => 'getIdMediaSource',
        'filename' => 'getFilename',
        'position' => 'getPosition',
        'active' => 'getActive',
        'date_add' => 'getDateAdd',
        'date_upd' => 'getDateUpd',
        'name' => 'getName',
        'description' => 'getDescription',
        'cover' => 'getCover',
        'thumbnail' => 'getThumbnail'
    );

    public static function getters()
    {
        return self::$getters;
    }

    

    

    /**
     * Associative array for storing property values
     * @var mixed[]
     */
    protected $container = array();

    /**
     * Constructor
     * @param mixed[] $data Associated array of property value initalizing the model
     */
    public function __construct(array $data = null)
    {
        $this->container['id'] = isset($data['id']) ? $data['id'] : null;
        $this->container['id_product'] = isset($data['id_product']) ? $data['id_product'] : null;
        $this->container['id_product_image'] = isset($data['id_product_image']) ? $data['id_product_image'] : null;
        $this->container['id_media_player'] = isset($data['id_media_player']) ? $data['id_media_player'] : null;
        $this->container['id_media_source'] = isset($data['id_media_source']) ? $data['id_media_source'] : null;
        $this->container['filename'] = isset($data['filename']) ? $data['filename'] : null;
        $this->container['position'] = isset($data['position']) ? $data['position'] : null;
        $this->container['active'] = isset($data['active']) ? $data['active'] : null;
        $this->container['date_add'] = isset($data['date_add']) ? $data['date_add'] : null;
        $this->container['date_upd'] = isset($data['date_upd']) ? $data['date_upd'] : null;
        $this->container['name'] = isset($data['name']) ? $data['name'] : null;
        $this->container['description'] = isset($data['description']) ? $data['description'] : null;
        $this->container['cover'] = isset($data['cover']) ? $data['cover'] : null;
        $this->container['thumbnail'] = isset($data['thumbnail']) ? $data['thumbnail'] : null;
    }

    /**
     * show all the invalid properties with reasons.
     *
     * @return array invalid properties with reasons
     */
    public function listInvalidProperties()
    {
        $invalid_properties = array();
        return $invalid_properties;
    }

    /**
     * validate all the properties in the model
     * return true if all passed
     *
     * @return bool True if all properteis are valid
     */
    public function valid()
    {
        return true;
    }


    /**
     * Gets id
     * @return int
     */
    public function getId()
    {
        return $this->container['id'];
    }

    /**
     * Sets id
     * @param int $id
     * @return $this
     */
    public function setId($id)
    {
        $this->container['id'] = $id;

        return $this;
    }

    /**
     * Gets id_product
     * @return int
     */
    public function getIdProduct()
    {
        return $this->container['id_product'];
    }

    /**
     * Sets id_product
     * @param int $id_product
     * @return $this
     */
    public function setIdProduct($id_product)
    {
        $this->container['id_product'] = $id_product;

        return $this;
    }

    /**
     * Gets id_product_image
     * @return int
     */
    public function getIdProductImage()
    {
        return $this->container['id_product_image'];
    }

    /**
     * Sets id_product_image
     * @param int $id_product_image
     * @return $this
     */
    public function setIdProductImage($id_product_image)
    {
        $this->container['id_product_image'] = $id_product_image;

        return $this;
    }

    /**
     * Gets id_media_player
     * @return int
     */
    public function getIdMediaPlayer()
    {
        return $this->container['id_media_player'];
    }

    /**
     * Sets id_media_player
     * @param int $id_media_player
     * @return $this
     */
    public function setIdMediaPlayer($id_media_player)
    {
        $this->container['id_media_player'] = $id_media_player;

        return $this;
    }

    /**
     * Gets id_media_source
     * @return int
     */
    public function getIdMediaSource()
    {
        return $this->container['id_media_source'];
    }

    /**
     * Sets id_media_source
     * @param int $id_media_source
     * @return $this
     */
    public function setIdMediaSource($id_media_source)
    {
        $this->container['id_media_source'] = $id_media_source;

        return $this;
    }

    /**
     * Gets filename
     * @return string
     */
    public function getFilename()
    {
        return $this->container['filename'];
    }

    /**
     * Sets filename
     * @param string $filename
     * @return $this
     */
    public function setFilename($filename)
    {
        $this->container['filename'] = $filename;

        return $this;
    }

    /**
     * Gets position
     * @return int
     */
    public function getPosition()
    {
        return $this->container['position'];
    }

    /**
     * Sets position
     * @param int $position
     * @return $this
     */
    public function setPosition($position)
    {
        $this->container['position'] = $position;

        return $this;
    }

    /**
     * Gets active
     * @return bool
     */
    public function getActive()
    {
        return $this->container['active'];
    }

    /**
     * Sets active
     * @param bool $active
     * @return $this
     */
    public function setActive($active)
    {
        $this->container['active'] = $active;

        return $this;
    }

    /**
     * Gets date_add
     * @return string
     */
    public function getDateAdd()
    {
        return $this->container['date_add'];
    }

    /**
     * Sets date_add
     * @param string $date_add
     * @return $this
     */
    public function setDateAdd($date_add)
    {
        $this->container['date_add'] = $date_add;

        return $this;
    }

    /**
     * Gets date_upd
     * @return string
     */
    public function getDateUpd()
    {
        return $this->container['date_upd'];
    }

    /**
     * Sets date_upd
     * @param string $date_upd
     * @return $this
     */
    public function setDateUpd($date_upd)
    {
        $this->container['date_upd'] = $date_upd;

        return $this;
    }

    /**
     * Gets name
     * @return \Swagger\Client\Model\I18nField[]
     */
    public function getName()
    {
        return $this->container['name'];
    }

    /**
     * Sets name
     * @param \Swagger\Client\Model\I18nField[] $name
     * @return $this
     */
    public function setName($name)
    {
        $this->container['name'] = $name;

        return $this;
    }

    /**
     * Gets description
     * @return \Swagger\Client\Model\I18nField[]
     */
    public function getDescription()
    {
        return $this->container['description'];
    }

    /**
     * Sets description
     * @param \Swagger\Client\Model\I18nField[] $description
     * @return $this
     */
    public function setDescription($description)
    {
        $this->container['description'] = $description;

        return $this;
    }

    /**
     * Gets cover
     * @return string
     */
    public function getCover()
    {
        return $this->container['cover'];
    }

    /**
     * Sets cover
     * @param string $cover
     * @return $this
     */
    public function setCover($cover)
    {
        $this->container['cover'] = $cover;

        return $this;
    }

    /**
     * Gets thumbnail
     * @return string
     */
    public function getThumbnail()
    {
        return $this->container['thumbnail'];
    }

    /**
     * Sets thumbnail
     * @param string $thumbnail
     * @return $this
     */
    public function setThumbnail($thumbnail)
    {
        $this->container['thumbnail'] = $thumbnail;

        return $this;
    }
    /**
     * Returns true if offset exists. False otherwise.
     * @param  integer $offset Offset
     * @return boolean
     */
    public function offsetExists($offset)
    {
        return isset($this->container[$offset]);
    }

    /**
     * Gets offset.
     * @param  integer $offset Offset
     * @return mixed
     */
    public function offsetGet($offset)
    {
        return isset($this->container[$offset]) ? $this->container[$offset] : null;
    }

    /**
     * Sets value based on offset.
     * @param  integer $offset Offset
     * @param  mixed   $value  Value to be set
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
     * @param  integer $offset Offset
     * @return void
     */
    public function offsetUnset($offset)
    {
        unset($this->container[$offset]);
    }

    /**
     * Gets the string presentation of the object
     * @return string
     */
    public function __toString()
    {
        if (defined('JSON_PRETTY_PRINT')) { // use JSON pretty print
            return json_encode(\Swagger\Client\ObjectSerializer::sanitizeForSerialization($this), JSON_PRETTY_PRINT);
        }

        return json_encode(\Swagger\Client\ObjectSerializer::sanitizeForSerialization($this));
    }
}


