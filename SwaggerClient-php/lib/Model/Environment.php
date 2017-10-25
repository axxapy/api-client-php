<?php
/**
 * Environment
 *
 * PHP version 5
 *
 * @category Class
 * @package  Swagger\Client
 * @author   Swaagger Codegen team
 * @link     https://github.com/swagger-api/swagger-codegen
 */

/**
 * LaunchDarkly REST API
 *
 * Build custom integrations with the LaunchDarkly REST API
 *
 * OpenAPI spec version: 2.0.0
 * Contact: support@launchdarkly.com
 * Generated by: https://github.com/swagger-api/swagger-codegen.git
 *
 */

/**
 * NOTE: This class is auto generated by the swagger code generator program.
 * https://github.com/swagger-api/swagger-codegen
 * Do not edit the class manually.
 */

namespace Swagger\Client\Model;

use \ArrayAccess;

/**
 * Environment Class Doc Comment
 *
 * @category    Class
 * @package     Swagger\Client
 * @author      Swagger Codegen team
 * @link        https://github.com/swagger-api/swagger-codegen
 */
class Environment implements ArrayAccess
{
    const DISCRIMINATOR = null;

    /**
      * The original name of the model.
      * @var string
      */
    protected static $swaggerModelName = 'Environment';

    /**
      * Array of property to type mappings. Used for (de)serialization
      * @var string[]
      */
    protected static $swaggerTypes = [
        '_links' => '\Swagger\Client\Model\Links',
        '_id' => 'string',
        'key' => 'string',
        'name' => 'string',
        'api_key' => 'string',
        'mobile_key' => 'string',
        'color' => 'string',
        'default_ttl' => 'float',
        'secure_mode' => 'bool'
    ];

    /**
      * Array of property to format mappings. Used for (de)serialization
      * @var string[]
      */
    protected static $swaggerFormats = [
        '_links' => null,
        '_id' => null,
        'key' => null,
        'name' => null,
        'api_key' => null,
        'mobile_key' => null,
        'color' => null,
        'default_ttl' => null,
        'secure_mode' => null
    ];

    public static function swaggerTypes()
    {
        return self::$swaggerTypes;
    }

    public static function swaggerFormats()
    {
        return self::$swaggerFormats;
    }

    /**
     * Array of attributes where the key is the local name, and the value is the original name
     * @var string[]
     */
    protected static $attributeMap = [
        '_links' => '_links',
        '_id' => '_id',
        'key' => 'key',
        'name' => 'name',
        'api_key' => 'apiKey',
        'mobile_key' => 'mobileKey',
        'color' => 'color',
        'default_ttl' => 'defaultTtl',
        'secure_mode' => 'secureMode'
    ];


    /**
     * Array of attributes to setter functions (for deserialization of responses)
     * @var string[]
     */
    protected static $setters = [
        '_links' => 'setLinks',
        '_id' => 'setId',
        'key' => 'setKey',
        'name' => 'setName',
        'api_key' => 'setApiKey',
        'mobile_key' => 'setMobileKey',
        'color' => 'setColor',
        'default_ttl' => 'setDefaultTtl',
        'secure_mode' => 'setSecureMode'
    ];


    /**
     * Array of attributes to getter functions (for serialization of requests)
     * @var string[]
     */
    protected static $getters = [
        '_links' => 'getLinks',
        '_id' => 'getId',
        'key' => 'getKey',
        'name' => 'getName',
        'api_key' => 'getApiKey',
        'mobile_key' => 'getMobileKey',
        'color' => 'getColor',
        'default_ttl' => 'getDefaultTtl',
        'secure_mode' => 'getSecureMode'
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
        $this->container['_links'] = isset($data['_links']) ? $data['_links'] : null;
        $this->container['_id'] = isset($data['_id']) ? $data['_id'] : null;
        $this->container['key'] = isset($data['key']) ? $data['key'] : null;
        $this->container['name'] = isset($data['name']) ? $data['name'] : null;
        $this->container['api_key'] = isset($data['api_key']) ? $data['api_key'] : null;
        $this->container['mobile_key'] = isset($data['mobile_key']) ? $data['mobile_key'] : null;
        $this->container['color'] = isset($data['color']) ? $data['color'] : null;
        $this->container['default_ttl'] = isset($data['default_ttl']) ? $data['default_ttl'] : null;
        $this->container['secure_mode'] = isset($data['secure_mode']) ? $data['secure_mode'] : null;
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
     * @return bool True if all properties are valid
     */
    public function valid()
    {

        return true;
    }


    /**
     * Gets _links
     * @return \Swagger\Client\Model\Links
     */
    public function getLinks()
    {
        return $this->container['_links'];
    }

    /**
     * Sets _links
     * @param \Swagger\Client\Model\Links $_links
     * @return $this
     */
    public function setLinks($_links)
    {
        $this->container['_links'] = $_links;

        return $this;
    }

    /**
     * Gets _id
     * @return string
     */
    public function getId()
    {
        return $this->container['_id'];
    }

    /**
     * Sets _id
     * @param string $_id The unique id for the environment
     * @return $this
     */
    public function setId($_id)
    {
        $this->container['_id'] = $_id;

        return $this;
    }

    /**
     * Gets key
     * @return string
     */
    public function getKey()
    {
        return $this->container['key'];
    }

    /**
     * Sets key
     * @param string $key The key for the environment
     * @return $this
     */
    public function setKey($key)
    {
        $this->container['key'] = $key;

        return $this;
    }

    /**
     * Gets name
     * @return string
     */
    public function getName()
    {
        return $this->container['name'];
    }

    /**
     * Sets name
     * @param string $name The name of the environment
     * @return $this
     */
    public function setName($name)
    {
        $this->container['name'] = $name;

        return $this;
    }

    /**
     * Gets api_key
     * @return string
     */
    public function getApiKey()
    {
        return $this->container['api_key'];
    }

    /**
     * Sets api_key
     * @param string $api_key The SDK key for backend LaunchDarkly SDKs
     * @return $this
     */
    public function setApiKey($api_key)
    {
        $this->container['api_key'] = $api_key;

        return $this;
    }

    /**
     * Gets mobile_key
     * @return string
     */
    public function getMobileKey()
    {
        return $this->container['mobile_key'];
    }

    /**
     * Sets mobile_key
     * @param string $mobile_key The SDK key for mobile LaunchDarkly SDKs
     * @return $this
     */
    public function setMobileKey($mobile_key)
    {
        $this->container['mobile_key'] = $mobile_key;

        return $this;
    }

    /**
     * Gets color
     * @return string
     */
    public function getColor()
    {
        return $this->container['color'];
    }

    /**
     * Sets color
     * @param string $color The swatch color for the environment
     * @return $this
     */
    public function setColor($color)
    {
        $this->container['color'] = $color;

        return $this;
    }

    /**
     * Gets default_ttl
     * @return float
     */
    public function getDefaultTtl()
    {
        return $this->container['default_ttl'];
    }

    /**
     * Sets default_ttl
     * @param float $default_ttl The default TTL
     * @return $this
     */
    public function setDefaultTtl($default_ttl)
    {
        $this->container['default_ttl'] = $default_ttl;

        return $this;
    }

    /**
     * Gets secure_mode
     * @return bool
     */
    public function getSecureMode()
    {
        return $this->container['secure_mode'];
    }

    /**
     * Sets secure_mode
     * @param bool $secure_mode Determines if this environment is in safe mode
     * @return $this
     */
    public function setSecureMode($secure_mode)
    {
        $this->container['secure_mode'] = $secure_mode;

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


