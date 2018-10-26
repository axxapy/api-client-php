<?php
/**
 * FeatureFlag
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
 * OpenAPI spec version: 2.0.10
 * Contact: support@launchdarkly.com
 * Generated by: https://github.com/swagger-api/swagger-codegen.git
 * Swagger Codegen version: 2.3.1
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
 * FeatureFlag Class Doc Comment
 *
 * @category Class
 * @package  LaunchDarklyApi
 * @author   Swagger Codegen team
 * @link     https://github.com/swagger-api/swagger-codegen
 */
class FeatureFlag implements ModelInterface, ArrayAccess
{
    const DISCRIMINATOR = null;

    /**
      * The original name of the model.
      *
      * @var string
      */
    protected static $swaggerModelName = 'FeatureFlag';

    /**
      * Array of property to type mappings. Used for (de)serialization
      *
      * @var string[]
      */
    protected static $swaggerTypes = [
        'key' => 'string',
        'name' => 'string',
        'description' => 'string',
        'kind' => 'string',
        'creation_date' => 'float',
        'include_in_snippet' => 'bool',
        'temporary' => 'bool',
        'maintainer_id' => 'string',
        'tags' => 'string[]',
        'variations' => '\LaunchDarklyApi\Model\Variation[]',
        'custom_properties' => '\LaunchDarklyApi\Model\CustomProperties',
        '_links' => '\LaunchDarklyApi\Model\Links',
        '_maintainer' => '\LaunchDarklyApi\Model\Member',
        'environments' => 'map[string,\LaunchDarklyApi\Model\FeatureFlagConfig]'
    ];

    /**
      * Array of property to format mappings. Used for (de)serialization
      *
      * @var string[]
      */
    protected static $swaggerFormats = [
        'key' => null,
        'name' => null,
        'description' => null,
        'kind' => null,
        'creation_date' => 'int64',
        'include_in_snippet' => null,
        'temporary' => null,
        'maintainer_id' => null,
        'tags' => null,
        'variations' => null,
        'custom_properties' => null,
        '_links' => null,
        '_maintainer' => null,
        'environments' => null
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
        'key' => 'key',
        'name' => 'name',
        'description' => 'description',
        'kind' => 'kind',
        'creation_date' => 'creationDate',
        'include_in_snippet' => 'includeInSnippet',
        'temporary' => 'temporary',
        'maintainer_id' => 'maintainerId',
        'tags' => 'tags',
        'variations' => 'variations',
        'custom_properties' => 'customProperties',
        '_links' => '_links',
        '_maintainer' => '_maintainer',
        'environments' => 'environments'
    ];

    /**
     * Array of attributes to setter functions (for deserialization of responses)
     *
     * @var string[]
     */
    protected static $setters = [
        'key' => 'setKey',
        'name' => 'setName',
        'description' => 'setDescription',
        'kind' => 'setKind',
        'creation_date' => 'setCreationDate',
        'include_in_snippet' => 'setIncludeInSnippet',
        'temporary' => 'setTemporary',
        'maintainer_id' => 'setMaintainerId',
        'tags' => 'setTags',
        'variations' => 'setVariations',
        'custom_properties' => 'setCustomProperties',
        '_links' => 'setLinks',
        '_maintainer' => 'setMaintainer',
        'environments' => 'setEnvironments'
    ];

    /**
     * Array of attributes to getter functions (for serialization of requests)
     *
     * @var string[]
     */
    protected static $getters = [
        'key' => 'getKey',
        'name' => 'getName',
        'description' => 'getDescription',
        'kind' => 'getKind',
        'creation_date' => 'getCreationDate',
        'include_in_snippet' => 'getIncludeInSnippet',
        'temporary' => 'getTemporary',
        'maintainer_id' => 'getMaintainerId',
        'tags' => 'getTags',
        'variations' => 'getVariations',
        'custom_properties' => 'getCustomProperties',
        '_links' => 'getLinks',
        '_maintainer' => 'getMaintainer',
        'environments' => 'getEnvironments'
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
        $this->container['key'] = isset($data['key']) ? $data['key'] : null;
        $this->container['name'] = isset($data['name']) ? $data['name'] : null;
        $this->container['description'] = isset($data['description']) ? $data['description'] : null;
        $this->container['kind'] = isset($data['kind']) ? $data['kind'] : null;
        $this->container['creation_date'] = isset($data['creation_date']) ? $data['creation_date'] : null;
        $this->container['include_in_snippet'] = isset($data['include_in_snippet']) ? $data['include_in_snippet'] : null;
        $this->container['temporary'] = isset($data['temporary']) ? $data['temporary'] : null;
        $this->container['maintainer_id'] = isset($data['maintainer_id']) ? $data['maintainer_id'] : null;
        $this->container['tags'] = isset($data['tags']) ? $data['tags'] : null;
        $this->container['variations'] = isset($data['variations']) ? $data['variations'] : null;
        $this->container['custom_properties'] = isset($data['custom_properties']) ? $data['custom_properties'] : null;
        $this->container['_links'] = isset($data['_links']) ? $data['_links'] : null;
        $this->container['_maintainer'] = isset($data['_maintainer']) ? $data['_maintainer'] : null;
        $this->container['environments'] = isset($data['environments']) ? $data['environments'] : null;
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

        return true;
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
     * @param string $name Name of the feature flag.
     *
     * @return $this
     */
    public function setName($name)
    {
        $this->container['name'] = $name;

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
     * @param string $description Description of the feature flag.
     *
     * @return $this
     */
    public function setDescription($description)
    {
        $this->container['description'] = $description;

        return $this;
    }

    /**
     * Gets kind
     *
     * @return string
     */
    public function getKind()
    {
        return $this->container['kind'];
    }

    /**
     * Sets kind
     *
     * @param string $kind Whether the feature flag is a boolean flag or multivariate.
     *
     * @return $this
     */
    public function setKind($kind)
    {
        $this->container['kind'] = $kind;

        return $this;
    }

    /**
     * Gets creation_date
     *
     * @return float
     */
    public function getCreationDate()
    {
        return $this->container['creation_date'];
    }

    /**
     * Sets creation_date
     *
     * @param float $creation_date A unix epoch time in milliseconds specifying the creation time of this flag.
     *
     * @return $this
     */
    public function setCreationDate($creation_date)
    {
        $this->container['creation_date'] = $creation_date;

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
     * @param bool $include_in_snippet include_in_snippet
     *
     * @return $this
     */
    public function setIncludeInSnippet($include_in_snippet)
    {
        $this->container['include_in_snippet'] = $include_in_snippet;

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
     * @param bool $temporary Whether or not this flag is temporary.
     *
     * @return $this
     */
    public function setTemporary($temporary)
    {
        $this->container['temporary'] = $temporary;

        return $this;
    }

    /**
     * Gets maintainer_id
     *
     * @return string
     */
    public function getMaintainerId()
    {
        return $this->container['maintainer_id'];
    }

    /**
     * Sets maintainer_id
     *
     * @param string $maintainer_id The ID of the member that should maintain this flag.
     *
     * @return $this
     */
    public function setMaintainerId($maintainer_id)
    {
        $this->container['maintainer_id'] = $maintainer_id;

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
     * @param string[] $tags An array of tags for this feature flag.
     *
     * @return $this
     */
    public function setTags($tags)
    {
        $this->container['tags'] = $tags;

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
     * @param \LaunchDarklyApi\Model\Variation[] $variations The variations for this feature flag.
     *
     * @return $this
     */
    public function setVariations($variations)
    {
        $this->container['variations'] = $variations;

        return $this;
    }

    /**
     * Gets custom_properties
     *
     * @return \LaunchDarklyApi\Model\CustomProperties
     */
    public function getCustomProperties()
    {
        return $this->container['custom_properties'];
    }

    /**
     * Sets custom_properties
     *
     * @param \LaunchDarklyApi\Model\CustomProperties $custom_properties custom_properties
     *
     * @return $this
     */
    public function setCustomProperties($custom_properties)
    {
        $this->container['custom_properties'] = $custom_properties;

        return $this;
    }

    /**
     * Gets _links
     *
     * @return \LaunchDarklyApi\Model\Links
     */
    public function getLinks()
    {
        return $this->container['_links'];
    }

    /**
     * Sets _links
     *
     * @param \LaunchDarklyApi\Model\Links $_links _links
     *
     * @return $this
     */
    public function setLinks($_links)
    {
        $this->container['_links'] = $_links;

        return $this;
    }

    /**
     * Gets _maintainer
     *
     * @return \LaunchDarklyApi\Model\Member
     */
    public function getMaintainer()
    {
        return $this->container['_maintainer'];
    }

    /**
     * Sets _maintainer
     *
     * @param \LaunchDarklyApi\Model\Member $_maintainer _maintainer
     *
     * @return $this
     */
    public function setMaintainer($_maintainer)
    {
        $this->container['_maintainer'] = $_maintainer;

        return $this;
    }

    /**
     * Gets environments
     *
     * @return map[string,\LaunchDarklyApi\Model\FeatureFlagConfig]
     */
    public function getEnvironments()
    {
        return $this->container['environments'];
    }

    /**
     * Sets environments
     *
     * @param map[string,\LaunchDarklyApi\Model\FeatureFlagConfig] $environments environments
     *
     * @return $this
     */
    public function setEnvironments($environments)
    {
        $this->container['environments'] = $environments;

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


