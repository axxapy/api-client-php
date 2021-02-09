<?php
/**
 * FeatureFlagBody
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
 * OpenAPI spec version: 5.0.0
 * Contact: support@launchdarkly.com
 * Generated by: https://github.com/swagger-api/swagger-codegen.git
 * Swagger Codegen version: 2.4.8
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
 * FeatureFlagBody Class Doc Comment
 *
 * @category Class
 * @package  LaunchDarklyApi
 * @author   Swagger Codegen team
 * @link     https://github.com/swagger-api/swagger-codegen
 */
class FeatureFlagBody implements ModelInterface, ArrayAccess
{
    const DISCRIMINATOR = null;

    /**
      * The original name of the model.
      *
      * @var string
      */
    protected static $swaggerModelName = 'featureFlagBody';

    /**
      * Array of property to type mappings. Used for (de)serialization
      *
      * @var string[]
      */
    protected static $swaggerTypes = [
        'name' => 'string',
        'key' => 'string',
        'description' => 'string',
        'variations' => '\LaunchDarklyApi\Model\Variation[]',
        'temporary' => 'bool',
        'tags' => 'string[]',
        'include_in_snippet' => 'bool',
        'client_side_availability' => '\LaunchDarklyApi\Model\ClientSideAvailability',
        'defaults' => '\LaunchDarklyApi\Model\Defaults'
    ];

    /**
      * Array of property to format mappings. Used for (de)serialization
      *
      * @var string[]
      */
    protected static $swaggerFormats = [
        'name' => null,
        'key' => null,
        'description' => null,
        'variations' => null,
        'temporary' => null,
        'tags' => null,
        'include_in_snippet' => null,
        'client_side_availability' => null,
        'defaults' => null
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
        'description' => 'description',
        'variations' => 'variations',
        'temporary' => 'temporary',
        'tags' => 'tags',
        'include_in_snippet' => 'includeInSnippet',
        'client_side_availability' => 'clientSideAvailability',
        'defaults' => 'defaults'
    ];

    /**
     * Array of attributes to setter functions (for deserialization of responses)
     *
     * @var string[]
     */
    protected static $setters = [
        'name' => 'setName',
        'key' => 'setKey',
        'description' => 'setDescription',
        'variations' => 'setVariations',
        'temporary' => 'setTemporary',
        'tags' => 'setTags',
        'include_in_snippet' => 'setIncludeInSnippet',
        'client_side_availability' => 'setClientSideAvailability',
        'defaults' => 'setDefaults'
    ];

    /**
     * Array of attributes to getter functions (for serialization of requests)
     *
     * @var string[]
     */
    protected static $getters = [
        'name' => 'getName',
        'key' => 'getKey',
        'description' => 'getDescription',
        'variations' => 'getVariations',
        'temporary' => 'getTemporary',
        'tags' => 'getTags',
        'include_in_snippet' => 'getIncludeInSnippet',
        'client_side_availability' => 'getClientSideAvailability',
        'defaults' => 'getDefaults'
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
        $this->container['description'] = isset($data['description']) ? $data['description'] : null;
        $this->container['variations'] = isset($data['variations']) ? $data['variations'] : null;
        $this->container['temporary'] = isset($data['temporary']) ? $data['temporary'] : null;
        $this->container['tags'] = isset($data['tags']) ? $data['tags'] : null;
        $this->container['include_in_snippet'] = isset($data['include_in_snippet']) ? $data['include_in_snippet'] : null;
        $this->container['client_side_availability'] = isset($data['client_side_availability']) ? $data['client_side_availability'] : null;
        $this->container['defaults'] = isset($data['defaults']) ? $data['defaults'] : null;
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
        if ($this->container['variations'] === null) {
            $invalidProperties[] = "'variations' can't be null";
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
     * @param string $name A human-friendly name for the feature flag. Remember to note if this flag is intended to be temporary or permanent.
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
     * @param string $key A unique key that will be used to reference the flag in your code.
     *
     * @return $this
     */
    public function setKey($key)
    {
        $this->container['key'] = $key;

        return $this;
    }

    /**
     * Gets description
     *
     * @return string
     */
    public function getDescription()
    {
        return $this->container['description'];
    }

    /**
     * Sets description
     *
     * @param string $description A description of the feature flag.
     *
     * @return $this
     */
    public function setDescription($description)
    {
        $this->container['description'] = $description;

        return $this;
    }

    /**
     * Gets variations
     *
     * @return \LaunchDarklyApi\Model\Variation[]
     */
    public function getVariations()
    {
        return $this->container['variations'];
    }

    /**
     * Sets variations
     *
     * @param \LaunchDarklyApi\Model\Variation[] $variations An array of possible variations for the flag.
     *
     * @return $this
     */
    public function setVariations($variations)
    {
        $this->container['variations'] = $variations;

        return $this;
    }

    /**
     * Gets temporary
     *
     * @return bool
     */
    public function getTemporary()
    {
        return $this->container['temporary'];
    }

    /**
     * Sets temporary
     *
     * @param bool $temporary Whether or not the flag is a temporary flag.
     *
     * @return $this
     */
    public function setTemporary($temporary)
    {
        $this->container['temporary'] = $temporary;

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
     * @param string[] $tags Tags for the feature flag.
     *
     * @return $this
     */
    public function setTags($tags)
    {
        $this->container['tags'] = $tags;

        return $this;
    }

    /**
     * Gets include_in_snippet
     *
     * @return bool
     */
    public function getIncludeInSnippet()
    {
        return $this->container['include_in_snippet'];
    }

    /**
     * Sets include_in_snippet
     *
     * @param bool $include_in_snippet Whether or not this flag should be made available to the client-side JavaScript SDK.
     *
     * @return $this
     */
    public function setIncludeInSnippet($include_in_snippet)
    {
        $this->container['include_in_snippet'] = $include_in_snippet;

        return $this;
    }

    /**
     * Gets client_side_availability
     *
     * @return \LaunchDarklyApi\Model\ClientSideAvailability
     */
    public function getClientSideAvailability()
    {
        return $this->container['client_side_availability'];
    }

    /**
     * Sets client_side_availability
     *
     * @param \LaunchDarklyApi\Model\ClientSideAvailability $client_side_availability client_side_availability
     *
     * @return $this
     */
    public function setClientSideAvailability($client_side_availability)
    {
        $this->container['client_side_availability'] = $client_side_availability;

        return $this;
    }

    /**
     * Gets defaults
     *
     * @return \LaunchDarklyApi\Model\Defaults
     */
    public function getDefaults()
    {
        return $this->container['defaults'];
    }

    /**
     * Sets defaults
     *
     * @param \LaunchDarklyApi\Model\Defaults $defaults defaults
     *
     * @return $this
     */
    public function setDefaults($defaults)
    {
        $this->container['defaults'] = $defaults;

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


