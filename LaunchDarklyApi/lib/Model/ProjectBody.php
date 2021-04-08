<?php
/**
 * ProjectBody
 *
 * PHP version 5
 *
 * @category Class
 * @package  LaunchDarklyApi
 * @author   Swagger Codegen team
 * @link     https://github.com/swagger-api/swagger-codegen
 */

/**
 * LaunchDarkly REST API
 *
 * Build custom integrations with the LaunchDarkly REST API
 *
 * OpenAPI spec version: 5.0.3
 * Contact: support@launchdarkly.com
 * Generated by: https://github.com/swagger-api/swagger-codegen.git
 * Swagger Codegen version: 2.4.17
 */

/**
 * NOTE: This class is auto generated by the swagger code generator program.
 * https://github.com/swagger-api/swagger-codegen
 * Do not edit the class manually.
 */

namespace LaunchDarklyApi\Model;

use \ArrayAccess;
use \LaunchDarklyApi\ObjectSerializer;

/**
 * ProjectBody Class Doc Comment
 *
 * @category Class
 * @package  LaunchDarklyApi
 * @author   Swagger Codegen team
 * @link     https://github.com/swagger-api/swagger-codegen
 */
class ProjectBody implements ModelInterface, ArrayAccess
{
    const DISCRIMINATOR = null;

    /**
      * The original name of the model.
      *
      * @var string
      */
    protected static $swaggerModelName = 'projectBody';

    /**
      * Array of property to type mappings. Used for (de)serialization
      *
      * @var string[]
      */
    protected static $swaggerTypes = [
        'name' => 'string',
        'key' => 'string',
        'include_in_snippet_by_default' => 'bool',
        'tags' => 'string[]',
        'environments' => '\LaunchDarklyApi\Model\EnvironmentPost[]',
        'default_client_side_availability' => '\LaunchDarklyApi\Model\ClientSideAvailability'
    ];

    /**
      * Array of property to format mappings. Used for (de)serialization
      *
      * @var string[]
      */
    protected static $swaggerFormats = [
        'name' => null,
        'key' => null,
        'include_in_snippet_by_default' => null,
        'tags' => null,
        'environments' => null,
        'default_client_side_availability' => null
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
        'name' => 'name',
        'key' => 'key',
        'include_in_snippet_by_default' => 'includeInSnippetByDefault',
        'tags' => 'tags',
        'environments' => 'environments',
        'default_client_side_availability' => 'defaultClientSideAvailability'
    ];

    /**
     * Array of attributes to setter functions (for deserialization of responses)
     *
     * @var string[]
     */
    protected static $setters = [
        'name' => 'setName',
        'key' => 'setKey',
        'include_in_snippet_by_default' => 'setIncludeInSnippetByDefault',
        'tags' => 'setTags',
        'environments' => 'setEnvironments',
        'default_client_side_availability' => 'setDefaultClientSideAvailability'
    ];

    /**
     * Array of attributes to getter functions (for serialization of requests)
     *
     * @var string[]
     */
    protected static $getters = [
        'name' => 'getName',
        'key' => 'getKey',
        'include_in_snippet_by_default' => 'getIncludeInSnippetByDefault',
        'tags' => 'getTags',
        'environments' => 'getEnvironments',
        'default_client_side_availability' => 'getDefaultClientSideAvailability'
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
        $this->container['name'] = isset($data['name']) ? $data['name'] : null;
        $this->container['key'] = isset($data['key']) ? $data['key'] : null;
        $this->container['include_in_snippet_by_default'] = isset($data['include_in_snippet_by_default']) ? $data['include_in_snippet_by_default'] : null;
        $this->container['tags'] = isset($data['tags']) ? $data['tags'] : null;
        $this->container['environments'] = isset($data['environments']) ? $data['environments'] : null;
        $this->container['default_client_side_availability'] = isset($data['default_client_side_availability']) ? $data['default_client_side_availability'] : null;
    }

    /**
     * Show all the invalid properties with reasons.
     *
     * @return array invalid properties with reasons
     */
    public function listInvalidProperties()
    {
        $invalidProperties = [];

        if ($this->container['name'] === null) {
            $invalidProperties[] = "'name' can't be null";
        }
        if ($this->container['key'] === null) {
            $invalidProperties[] = "'key' can't be null";
        }
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
     * Gets name
     *
     * @return string
     */
    public function getName()
    {
        return $this->container['name'];
    }

    /**
     * Sets name
     *
     * @param string $name name
     *
     * @return $this
     */
    public function setName($name)
    {
        $this->container['name'] = $name;

        return $this;
    }

    /**
     * Gets key
     *
     * @return string
     */
    public function getKey()
    {
        return $this->container['key'];
    }

    /**
     * Sets key
     *
     * @param string $key key
     *
     * @return $this
     */
    public function setKey($key)
    {
        $this->container['key'] = $key;

        return $this;
    }

    /**
     * Gets include_in_snippet_by_default
     *
     * @return bool
     */
    public function getIncludeInSnippetByDefault()
    {
        return $this->container['include_in_snippet_by_default'];
    }

    /**
     * Sets include_in_snippet_by_default
     *
     * @param bool $include_in_snippet_by_default include_in_snippet_by_default
     *
     * @return $this
     */
    public function setIncludeInSnippetByDefault($include_in_snippet_by_default)
    {
        $this->container['include_in_snippet_by_default'] = $include_in_snippet_by_default;

        return $this;
    }

    /**
     * Gets tags
     *
     * @return string[]
     */
    public function getTags()
    {
        return $this->container['tags'];
    }

    /**
     * Sets tags
     *
     * @param string[] $tags tags
     *
     * @return $this
     */
    public function setTags($tags)
    {
        $this->container['tags'] = $tags;

        return $this;
    }

    /**
     * Gets environments
     *
     * @return \LaunchDarklyApi\Model\EnvironmentPost[]
     */
    public function getEnvironments()
    {
        return $this->container['environments'];
    }

    /**
     * Sets environments
     *
     * @param \LaunchDarklyApi\Model\EnvironmentPost[] $environments environments
     *
     * @return $this
     */
    public function setEnvironments($environments)
    {
        $this->container['environments'] = $environments;

        return $this;
    }

    /**
     * Gets default_client_side_availability
     *
     * @return \LaunchDarklyApi\Model\ClientSideAvailability
     */
    public function getDefaultClientSideAvailability()
    {
        return $this->container['default_client_side_availability'];
    }

    /**
     * Sets default_client_side_availability
     *
     * @param \LaunchDarklyApi\Model\ClientSideAvailability $default_client_side_availability default_client_side_availability
     *
     * @return $this
     */
    public function setDefaultClientSideAvailability($default_client_side_availability)
    {
        $this->container['default_client_side_availability'] = $default_client_side_availability;

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


