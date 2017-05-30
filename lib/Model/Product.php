<?php
/**
 * Product
 *
 * PHP version 5
 *
 * @category Class
 * @package  Kaemo\Client
 * @author   Swaagger Codegen team
 * @link     https://github.com/swagger-api/swagger-codegen
 */

/**
 * Kaemo API
 *
 * Public api for Kaemo back office
 *
 * OpenAPI spec version: 1.0.11
 * 
 * Generated by: https://github.com/swagger-api/swagger-codegen.git
 *
 */

/**
 * NOTE: This class is auto generated by the swagger code generator program.
 * https://github.com/swagger-api/swagger-codegen
 * Do not edit the class manually.
 */

namespace Kaemo\Client\Model;

use \ArrayAccess;

/**
 * Product Class Doc Comment
 *
 * @category    Class */
/**
 * @package     Kaemo\Client
 * @author      Swagger Codegen team
 * @link        https://github.com/swagger-api/swagger-codegen
 */
class Product implements ArrayAccess
{
    const DISCRIMINATOR = null;

    /**
      * The original name of the model.
      * @var string
      */
    protected static $swaggerModelName = 'Product';

    /**
      * Array of property to type mappings. Used for (de)serialization
      * @var string[]
      */
    protected static $swaggerTypes = [
        'id' => 'int',
        'reference' => 'string',
        'date_from' => 'string',
        'date_to' => 'string',
        'price' => 'float',
        'active' => 'bool',
        'available_for_order' => 'bool',
        'date_add' => 'string',
        'date_upd' => 'string',
        'id_category_default' => 'int',
        'images' => '\Kaemo\Client\Model\Image[]',
        'meta_description' => '\Kaemo\Client\Model\I18nField[]',
        'meta_keywords' => '\Kaemo\Client\Model\I18nField[]',
        'meta_title' => '\Kaemo\Client\Model\I18nField[]',
        'link_rewrite' => '\Kaemo\Client\Model\I18nField[]',
        'name' => '\Kaemo\Client\Model\I18nField[]',
        'description' => '\Kaemo\Client\Model\I18nField[]',
        'description_short' => '\Kaemo\Client\Model\I18nField[]',
        'tags' => 'string'
    ];

    public static function swaggerTypes()
    {
        return self::$swaggerTypes;
    }

    /**
     * Array of attributes where the key is the local name, and the value is the original name
     * @var string[]
     */
    protected static $attributeMap = [
        'id' => 'id',
        'reference' => 'reference',
        'date_from' => 'date_from',
        'date_to' => 'date_to',
        'price' => 'price',
        'active' => 'active',
        'available_for_order' => 'available_for_order',
        'date_add' => 'date_add',
        'date_upd' => 'date_upd',
        'id_category_default' => 'id_category_default',
        'images' => 'images',
        'meta_description' => 'meta_description',
        'meta_keywords' => 'meta_keywords',
        'meta_title' => 'meta_title',
        'link_rewrite' => 'link_rewrite',
        'name' => 'name',
        'description' => 'description',
        'description_short' => 'description_short',
        'tags' => 'tags'
    ];


    /**
     * Array of attributes to setter functions (for deserialization of responses)
     * @var string[]
     */
    protected static $setters = [
        'id' => 'setId',
        'reference' => 'setReference',
        'date_from' => 'setDateFrom',
        'date_to' => 'setDateTo',
        'price' => 'setPrice',
        'active' => 'setActive',
        'available_for_order' => 'setAvailableForOrder',
        'date_add' => 'setDateAdd',
        'date_upd' => 'setDateUpd',
        'id_category_default' => 'setIdCategoryDefault',
        'images' => 'setImages',
        'meta_description' => 'setMetaDescription',
        'meta_keywords' => 'setMetaKeywords',
        'meta_title' => 'setMetaTitle',
        'link_rewrite' => 'setLinkRewrite',
        'name' => 'setName',
        'description' => 'setDescription',
        'description_short' => 'setDescriptionShort',
        'tags' => 'setTags'
    ];


    /**
     * Array of attributes to getter functions (for serialization of requests)
     * @var string[]
     */
    protected static $getters = [
        'id' => 'getId',
        'reference' => 'getReference',
        'date_from' => 'getDateFrom',
        'date_to' => 'getDateTo',
        'price' => 'getPrice',
        'active' => 'getActive',
        'available_for_order' => 'getAvailableForOrder',
        'date_add' => 'getDateAdd',
        'date_upd' => 'getDateUpd',
        'id_category_default' => 'getIdCategoryDefault',
        'images' => 'getImages',
        'meta_description' => 'getMetaDescription',
        'meta_keywords' => 'getMetaKeywords',
        'meta_title' => 'getMetaTitle',
        'link_rewrite' => 'getLinkRewrite',
        'name' => 'getName',
        'description' => 'getDescription',
        'description_short' => 'getDescriptionShort',
        'tags' => 'getTags'
    ];

    public static function attributeMap()
    {
        return self::$attributeMap;
    }

    public static function setters()
    {
        return self::$setters;
    }

    public static function getters()
    {
        return self::$getters;
    }

    

    

    /**
     * Associative array for storing property values
     * @var mixed[]
     */
    protected $container = [];

    /**
     * Constructor
     * @param mixed[] $data Associated array of property values initializing the model
     */
    public function __construct(array $data = null)
    {
        $this->container['id'] = isset($data['id']) ? $data['id'] : null;
        $this->container['reference'] = isset($data['reference']) ? $data['reference'] : null;
        $this->container['date_from'] = isset($data['date_from']) ? $data['date_from'] : null;
        $this->container['date_to'] = isset($data['date_to']) ? $data['date_to'] : null;
        $this->container['price'] = isset($data['price']) ? $data['price'] : null;
        $this->container['active'] = isset($data['active']) ? $data['active'] : null;
        $this->container['available_for_order'] = isset($data['available_for_order']) ? $data['available_for_order'] : null;
        $this->container['date_add'] = isset($data['date_add']) ? $data['date_add'] : null;
        $this->container['date_upd'] = isset($data['date_upd']) ? $data['date_upd'] : null;
        $this->container['id_category_default'] = isset($data['id_category_default']) ? $data['id_category_default'] : null;
        $this->container['images'] = isset($data['images']) ? $data['images'] : null;
        $this->container['meta_description'] = isset($data['meta_description']) ? $data['meta_description'] : null;
        $this->container['meta_keywords'] = isset($data['meta_keywords']) ? $data['meta_keywords'] : null;
        $this->container['meta_title'] = isset($data['meta_title']) ? $data['meta_title'] : null;
        $this->container['link_rewrite'] = isset($data['link_rewrite']) ? $data['link_rewrite'] : null;
        $this->container['name'] = isset($data['name']) ? $data['name'] : null;
        $this->container['description'] = isset($data['description']) ? $data['description'] : null;
        $this->container['description_short'] = isset($data['description_short']) ? $data['description_short'] : null;
        $this->container['tags'] = isset($data['tags']) ? $data['tags'] : null;
    }

    /**
     * show all the invalid properties with reasons.
     *
     * @return array invalid properties with reasons
     */
    public function listInvalidProperties()
    {
        $invalid_properties = [];
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
     * Gets reference
     * @return string
     */
    public function getReference()
    {
        return $this->container['reference'];
    }

    /**
     * Sets reference
     * @param string $reference
     * @return $this
     */
    public function setReference($reference)
    {
        $this->container['reference'] = $reference;

        return $this;
    }

    /**
     * Gets date_from
     * @return string
     */
    public function getDateFrom()
    {
        return $this->container['date_from'];
    }

    /**
     * Sets date_from
     * @param string $date_from
     * @return $this
     */
    public function setDateFrom($date_from)
    {
        $this->container['date_from'] = $date_from;

        return $this;
    }

    /**
     * Gets date_to
     * @return string
     */
    public function getDateTo()
    {
        return $this->container['date_to'];
    }

    /**
     * Sets date_to
     * @param string $date_to
     * @return $this
     */
    public function setDateTo($date_to)
    {
        $this->container['date_to'] = $date_to;

        return $this;
    }

    /**
     * Gets price
     * @return float
     */
    public function getPrice()
    {
        return $this->container['price'];
    }

    /**
     * Sets price
     * @param float $price
     * @return $this
     */
    public function setPrice($price)
    {
        $this->container['price'] = $price;

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
     * Gets available_for_order
     * @return bool
     */
    public function getAvailableForOrder()
    {
        return $this->container['available_for_order'];
    }

    /**
     * Sets available_for_order
     * @param bool $available_for_order
     * @return $this
     */
    public function setAvailableForOrder($available_for_order)
    {
        $this->container['available_for_order'] = $available_for_order;

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
     * Gets id_category_default
     * @return int
     */
    public function getIdCategoryDefault()
    {
        return $this->container['id_category_default'];
    }

    /**
     * Sets id_category_default
     * @param int $id_category_default
     * @return $this
     */
    public function setIdCategoryDefault($id_category_default)
    {
        $this->container['id_category_default'] = $id_category_default;

        return $this;
    }

    /**
     * Gets images
     * @return \Kaemo\Client\Model\Image[]
     */
    public function getImages()
    {
        return $this->container['images'];
    }

    /**
     * Sets images
     * @param \Kaemo\Client\Model\Image[] $images
     * @return $this
     */
    public function setImages($images)
    {
        $this->container['images'] = $images;

        return $this;
    }

    /**
     * Gets meta_description
     * @return \Kaemo\Client\Model\I18nField[]
     */
    public function getMetaDescription()
    {
        return $this->container['meta_description'];
    }

    /**
     * Sets meta_description
     * @param \Kaemo\Client\Model\I18nField[] $meta_description
     * @return $this
     */
    public function setMetaDescription($meta_description)
    {
        $this->container['meta_description'] = $meta_description;

        return $this;
    }

    /**
     * Gets meta_keywords
     * @return \Kaemo\Client\Model\I18nField[]
     */
    public function getMetaKeywords()
    {
        return $this->container['meta_keywords'];
    }

    /**
     * Sets meta_keywords
     * @param \Kaemo\Client\Model\I18nField[] $meta_keywords
     * @return $this
     */
    public function setMetaKeywords($meta_keywords)
    {
        $this->container['meta_keywords'] = $meta_keywords;

        return $this;
    }

    /**
     * Gets meta_title
     * @return \Kaemo\Client\Model\I18nField[]
     */
    public function getMetaTitle()
    {
        return $this->container['meta_title'];
    }

    /**
     * Sets meta_title
     * @param \Kaemo\Client\Model\I18nField[] $meta_title
     * @return $this
     */
    public function setMetaTitle($meta_title)
    {
        $this->container['meta_title'] = $meta_title;

        return $this;
    }

    /**
     * Gets link_rewrite
     * @return \Kaemo\Client\Model\I18nField[]
     */
    public function getLinkRewrite()
    {
        return $this->container['link_rewrite'];
    }

    /**
     * Sets link_rewrite
     * @param \Kaemo\Client\Model\I18nField[] $link_rewrite
     * @return $this
     */
    public function setLinkRewrite($link_rewrite)
    {
        $this->container['link_rewrite'] = $link_rewrite;

        return $this;
    }

    /**
     * Gets name
     * @return \Kaemo\Client\Model\I18nField[]
     */
    public function getName()
    {
        return $this->container['name'];
    }

    /**
     * Sets name
     * @param \Kaemo\Client\Model\I18nField[] $name
     * @return $this
     */
    public function setName($name)
    {
        $this->container['name'] = $name;

        return $this;
    }

    /**
     * Gets description
     * @return \Kaemo\Client\Model\I18nField[]
     */
    public function getDescription()
    {
        return $this->container['description'];
    }

    /**
     * Sets description
     * @param \Kaemo\Client\Model\I18nField[] $description
     * @return $this
     */
    public function setDescription($description)
    {
        $this->container['description'] = $description;

        return $this;
    }

    /**
     * Gets description_short
     * @return \Kaemo\Client\Model\I18nField[]
     */
    public function getDescriptionShort()
    {
        return $this->container['description_short'];
    }

    /**
     * Sets description_short
     * @param \Kaemo\Client\Model\I18nField[] $description_short
     * @return $this
     */
    public function setDescriptionShort($description_short)
    {
        $this->container['description_short'] = $description_short;

        return $this;
    }

    /**
     * Gets tags
     * @return string
     */
    public function getTags()
    {
        return $this->container['tags'];
    }

    /**
     * Sets tags
     * @param string $tags
     * @return $this
     */
    public function setTags($tags)
    {
        $this->container['tags'] = $tags;

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
            return json_encode(\Kaemo\Client\ObjectSerializer::sanitizeForSerialization($this), JSON_PRETTY_PRINT);
        }

        return json_encode(\Kaemo\Client\ObjectSerializer::sanitizeForSerialization($this));
    }
}


