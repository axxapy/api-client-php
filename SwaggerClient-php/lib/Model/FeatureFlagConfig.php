<?php
/**
 * FeatureFlagConfig
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
 * FeatureFlagConfig Class Doc Comment
 *
 * @category    Class
 * @package     Swagger\Client
 * @author      Swagger Codegen team
 * @link        https://github.com/swagger-api/swagger-codegen
 */
class FeatureFlagConfig implements ArrayAccess
{
    const DISCRIMINATOR = null;

    /**
      * The original name of the model.
      * @var string
      */
    protected static $swaggerModelName = 'FeatureFlagConfig';

    /**
      * Array of property to type mappings. Used for (de)serialization
      * @var string[]
      */
    protected static $swaggerTypes = [
        'on' => 'bool',
        'archived' => 'bool',
        'salt' => 'string',
        'sel' => 'string',
        'last_modified' => 'int',
        'version' => 'int',
        'targets' => '\Swagger\Client\Model\Target[]',
        'rules' => '\Swagger\Client\Model\Rule[]',
        'fallthrough' => '\Swagger\Client\Model\FeatureFlagConfigFallthrough'
    ];

    /**
      * Array of property to format mappings. Used for (de)serialization
      * @var string[]
      */
    protected static $swaggerFormats = [
        'on' => null,
        'archived' => null,
        'salt' => null,
        'sel' => null,
        'last_modified' => 'int64',
        'version' => null,
        'targets' => null,
        'rules' => null,
        'fallthrough' => null
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
        'on' => 'on',
        'archived' => 'archived',
        'salt' => 'salt',
        'sel' => 'sel',
        'last_modified' => 'lastModified',
        'version' => 'version',
        'targets' => 'targets',
        'rules' => 'rules',
        'fallthrough' => 'fallthrough'
    ];


    /**
     * Array of attributes to setter functions (for deserialization of responses)
     * @var string[]
     */
    protected static $setters = [
        'on' => 'setOn',
        'archived' => 'setArchived',
        'salt' => 'setSalt',
        'sel' => 'setSel',
        'last_modified' => 'setLastModified',
        'version' => 'setVersion',
        'targets' => 'setTargets',
        'rules' => 'setRules',
        'fallthrough' => 'setFallthrough'
    ];


    /**
     * Array of attributes to getter functions (for serialization of requests)
     * @var string[]
     */
    protected static $getters = [
        'on' => 'getOn',
        'archived' => 'getArchived',
        'salt' => 'getSalt',
        'sel' => 'getSel',
        'last_modified' => 'getLastModified',
        'version' => 'getVersion',
        'targets' => 'getTargets',
        'rules' => 'getRules',
        'fallthrough' => 'getFallthrough'
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
        $this->container['on'] = isset($data['on']) ? $data['on'] : null;
        $this->container['archived'] = isset($data['archived']) ? $data['archived'] : null;
        $this->container['salt'] = isset($data['salt']) ? $data['salt'] : null;
        $this->container['sel'] = isset($data['sel']) ? $data['sel'] : null;
        $this->container['last_modified'] = isset($data['last_modified']) ? $data['last_modified'] : null;
        $this->container['version'] = isset($data['version']) ? $data['version'] : null;
        $this->container['targets'] = isset($data['targets']) ? $data['targets'] : null;
        $this->container['rules'] = isset($data['rules']) ? $data['rules'] : null;
        $this->container['fallthrough'] = isset($data['fallthrough']) ? $data['fallthrough'] : null;
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
     * Gets on
     * @return bool
     */
    public function getOn()
    {
        return $this->container['on'];
    }

    /**
     * Sets on
     * @param bool $on
     * @return $this
     */
    public function setOn($on)
    {
        $this->container['on'] = $on;

        return $this;
    }

    /**
     * Gets archived
     * @return bool
     */
    public function getArchived()
    {
        return $this->container['archived'];
    }

    /**
     * Sets archived
     * @param bool $archived
     * @return $this
     */
    public function setArchived($archived)
    {
        $this->container['archived'] = $archived;

        return $this;
    }

    /**
     * Gets salt
     * @return string
     */
    public function getSalt()
    {
        return $this->container['salt'];
    }

    /**
     * Sets salt
     * @param string $salt
     * @return $this
     */
    public function setSalt($salt)
    {
        $this->container['salt'] = $salt;

        return $this;
    }

    /**
     * Gets sel
     * @return string
     */
    public function getSel()
    {
        return $this->container['sel'];
    }

    /**
     * Sets sel
     * @param string $sel
     * @return $this
     */
    public function setSel($sel)
    {
        $this->container['sel'] = $sel;

        return $this;
    }

    /**
     * Gets last_modified
     * @return int
     */
    public function getLastModified()
    {
        return $this->container['last_modified'];
    }

    /**
     * Sets last_modified
     * @param int $last_modified
     * @return $this
     */
    public function setLastModified($last_modified)
    {
        $this->container['last_modified'] = $last_modified;

        return $this;
    }

    /**
     * Gets version
     * @return int
     */
    public function getVersion()
    {
        return $this->container['version'];
    }

    /**
     * Sets version
     * @param int $version
     * @return $this
     */
    public function setVersion($version)
    {
        $this->container['version'] = $version;

        return $this;
    }

    /**
     * Gets targets
     * @return \Swagger\Client\Model\Target[]
     */
    public function getTargets()
    {
        return $this->container['targets'];
    }

    /**
     * Sets targets
     * @param \Swagger\Client\Model\Target[] $targets
     * @return $this
     */
    public function setTargets($targets)
    {
        $this->container['targets'] = $targets;

        return $this;
    }

    /**
     * Gets rules
     * @return \Swagger\Client\Model\Rule[]
     */
    public function getRules()
    {
        return $this->container['rules'];
    }

    /**
     * Sets rules
     * @param \Swagger\Client\Model\Rule[] $rules
     * @return $this
     */
    public function setRules($rules)
    {
        $this->container['rules'] = $rules;

        return $this;
    }

    /**
     * Gets fallthrough
     * @return \Swagger\Client\Model\FeatureFlagConfigFallthrough
     */
    public function getFallthrough()
    {
        return $this->container['fallthrough'];
    }

    /**
     * Sets fallthrough
     * @param \Swagger\Client\Model\FeatureFlagConfigFallthrough $fallthrough
     * @return $this
     */
    public function setFallthrough($fallthrough)
    {
        $this->container['fallthrough'] = $fallthrough;

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


