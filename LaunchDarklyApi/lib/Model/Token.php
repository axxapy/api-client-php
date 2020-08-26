<?php
/**
 * Token
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
 * OpenAPI spec version: 3.5.0
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
 * Token Class Doc Comment
 *
 * @category Class
 * @package  LaunchDarklyApi
 * @author   Swagger Codegen team
 * @link     https://github.com/swagger-api/swagger-codegen
 */
class Token implements ModelInterface, ArrayAccess
{
    const DISCRIMINATOR = null;

    /**
      * The original name of the model.
      *
      * @var string
      */
    protected static $swaggerModelName = 'Token';

    /**
      * Array of property to type mappings. Used for (de)serialization
      *
      * @var string[]
      */
    protected static $swaggerTypes = [
        '_links' => '\LaunchDarklyApi\Model\Links',
        '_id' => '\LaunchDarklyApi\Model\Id',
        'owner_id' => '\LaunchDarklyApi\Model\Id',
        'member_id' => '\LaunchDarklyApi\Model\Id',
        '_member' => '\LaunchDarklyApi\Model\Member',
        'creation_date' => 'int',
        'last_modified' => 'int',
        'last_used' => 'int',
        'token' => 'string',
        'name' => 'string',
        'role' => 'string',
        'custom_role_ids' => 'string[]',
        'inline_role' => '\LaunchDarklyApi\Model\Statement[]',
        'service_token' => 'bool',
        'default_api_version' => 'int'
    ];

    /**
      * Array of property to format mappings. Used for (de)serialization
      *
      * @var string[]
      */
    protected static $swaggerFormats = [
        '_links' => null,
        '_id' => null,
        'owner_id' => null,
        'member_id' => null,
        '_member' => null,
        'creation_date' => 'int64',
        'last_modified' => 'int64',
        'last_used' => 'int64',
        'token' => null,
        'name' => null,
        'role' => null,
        'custom_role_ids' => null,
        'inline_role' => null,
        'service_token' => null,
        'default_api_version' => null
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
        '_links' => '_links',
        '_id' => '_id',
        'owner_id' => 'ownerId',
        'member_id' => 'memberId',
        '_member' => '_member',
        'creation_date' => 'creationDate',
        'last_modified' => 'lastModified',
        'last_used' => 'lastUsed',
        'token' => 'token',
        'name' => 'name',
        'role' => 'role',
        'custom_role_ids' => 'customRoleIds',
        'inline_role' => 'inlineRole',
        'service_token' => 'serviceToken',
        'default_api_version' => 'defaultApiVersion'
    ];

    /**
     * Array of attributes to setter functions (for deserialization of responses)
     *
     * @var string[]
     */
    protected static $setters = [
        '_links' => 'setLinks',
        '_id' => 'setId',
        'owner_id' => 'setOwnerId',
        'member_id' => 'setMemberId',
        '_member' => 'setMember',
        'creation_date' => 'setCreationDate',
        'last_modified' => 'setLastModified',
        'last_used' => 'setLastUsed',
        'token' => 'setToken',
        'name' => 'setName',
        'role' => 'setRole',
        'custom_role_ids' => 'setCustomRoleIds',
        'inline_role' => 'setInlineRole',
        'service_token' => 'setServiceToken',
        'default_api_version' => 'setDefaultApiVersion'
    ];

    /**
     * Array of attributes to getter functions (for serialization of requests)
     *
     * @var string[]
     */
    protected static $getters = [
        '_links' => 'getLinks',
        '_id' => 'getId',
        'owner_id' => 'getOwnerId',
        'member_id' => 'getMemberId',
        '_member' => 'getMember',
        'creation_date' => 'getCreationDate',
        'last_modified' => 'getLastModified',
        'last_used' => 'getLastUsed',
        'token' => 'getToken',
        'name' => 'getName',
        'role' => 'getRole',
        'custom_role_ids' => 'getCustomRoleIds',
        'inline_role' => 'getInlineRole',
        'service_token' => 'getServiceToken',
        'default_api_version' => 'getDefaultApiVersion'
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
        $this->container['_links'] = isset($data['_links']) ? $data['_links'] : null;
        $this->container['_id'] = isset($data['_id']) ? $data['_id'] : null;
        $this->container['owner_id'] = isset($data['owner_id']) ? $data['owner_id'] : null;
        $this->container['member_id'] = isset($data['member_id']) ? $data['member_id'] : null;
        $this->container['_member'] = isset($data['_member']) ? $data['_member'] : null;
        $this->container['creation_date'] = isset($data['creation_date']) ? $data['creation_date'] : null;
        $this->container['last_modified'] = isset($data['last_modified']) ? $data['last_modified'] : null;
        $this->container['last_used'] = isset($data['last_used']) ? $data['last_used'] : null;
        $this->container['token'] = isset($data['token']) ? $data['token'] : null;
        $this->container['name'] = isset($data['name']) ? $data['name'] : null;
        $this->container['role'] = isset($data['role']) ? $data['role'] : null;
        $this->container['custom_role_ids'] = isset($data['custom_role_ids']) ? $data['custom_role_ids'] : null;
        $this->container['inline_role'] = isset($data['inline_role']) ? $data['inline_role'] : null;
        $this->container['service_token'] = isset($data['service_token']) ? $data['service_token'] : null;
        $this->container['default_api_version'] = isset($data['default_api_version']) ? $data['default_api_version'] : null;
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
     * Gets _id
     *
     * @return \LaunchDarklyApi\Model\Id
     */
    public function getId()
    {
        return $this->container['_id'];
    }

    /**
     * Sets _id
     *
     * @param \LaunchDarklyApi\Model\Id $_id _id
     *
     * @return $this
     */
    public function setId($_id)
    {
        $this->container['_id'] = $_id;

        return $this;
    }

    /**
     * Gets owner_id
     *
     * @return \LaunchDarklyApi\Model\Id
     */
    public function getOwnerId()
    {
        return $this->container['owner_id'];
    }

    /**
     * Sets owner_id
     *
     * @param \LaunchDarklyApi\Model\Id $owner_id owner_id
     *
     * @return $this
     */
    public function setOwnerId($owner_id)
    {
        $this->container['owner_id'] = $owner_id;

        return $this;
    }

    /**
     * Gets member_id
     *
     * @return \LaunchDarklyApi\Model\Id
     */
    public function getMemberId()
    {
        return $this->container['member_id'];
    }

    /**
     * Sets member_id
     *
     * @param \LaunchDarklyApi\Model\Id $member_id member_id
     *
     * @return $this
     */
    public function setMemberId($member_id)
    {
        $this->container['member_id'] = $member_id;

        return $this;
    }

    /**
     * Gets _member
     *
     * @return \LaunchDarklyApi\Model\Member
     */
    public function getMember()
    {
        return $this->container['_member'];
    }

    /**
     * Sets _member
     *
     * @param \LaunchDarklyApi\Model\Member $_member _member
     *
     * @return $this
     */
    public function setMember($_member)
    {
        $this->container['_member'] = $_member;

        return $this;
    }

    /**
     * Gets creation_date
     *
     * @return int
     */
    public function getCreationDate()
    {
        return $this->container['creation_date'];
    }

    /**
     * Sets creation_date
     *
     * @param int $creation_date A unix epoch time in milliseconds specifying the creation time of this access token.
     *
     * @return $this
     */
    public function setCreationDate($creation_date)
    {
        $this->container['creation_date'] = $creation_date;

        return $this;
    }

    /**
     * Gets last_modified
     *
     * @return int
     */
    public function getLastModified()
    {
        return $this->container['last_modified'];
    }

    /**
     * Sets last_modified
     *
     * @param int $last_modified A unix epoch time in milliseconds specifying the last time this access token was modified.
     *
     * @return $this
     */
    public function setLastModified($last_modified)
    {
        $this->container['last_modified'] = $last_modified;

        return $this;
    }

    /**
     * Gets last_used
     *
     * @return int
     */
    public function getLastUsed()
    {
        return $this->container['last_used'];
    }

    /**
     * Sets last_used
     *
     * @param int $last_used A unix epoch time in milliseconds specifying the last time this access token was used to authorize access to the LaunchDarkly REST API.
     *
     * @return $this
     */
    public function setLastUsed($last_used)
    {
        $this->container['last_used'] = $last_used;

        return $this;
    }

    /**
     * Gets token
     *
     * @return string
     */
    public function getToken()
    {
        return $this->container['token'];
    }

    /**
     * Sets token
     *
     * @param string $token The last 4 digits of the unique secret key for this access token. If creating or resetting the token, this will be the full token secret.
     *
     * @return $this
     */
    public function setToken($token)
    {
        $this->container['token'] = $token;

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
     * @param string $name A human-friendly name for the access token
     *
     * @return $this
     */
    public function setName($name)
    {
        $this->container['name'] = $name;

        return $this;
    }

    /**
     * Gets role
     *
     * @return string
     */
    public function getRole()
    {
        return $this->container['role'];
    }

    /**
     * Sets role
     *
     * @param string $role The name of a built-in role for the token
     *
     * @return $this
     */
    public function setRole($role)
    {
        $this->container['role'] = $role;

        return $this;
    }

    /**
     * Gets custom_role_ids
     *
     * @return string[]
     */
    public function getCustomRoleIds()
    {
        return $this->container['custom_role_ids'];
    }

    /**
     * Sets custom_role_ids
     *
     * @param string[] $custom_role_ids A list of custom role IDs to use as access limits for the access token
     *
     * @return $this
     */
    public function setCustomRoleIds($custom_role_ids)
    {
        $this->container['custom_role_ids'] = $custom_role_ids;

        return $this;
    }

    /**
     * Gets inline_role
     *
     * @return \LaunchDarklyApi\Model\Statement[]
     */
    public function getInlineRole()
    {
        return $this->container['inline_role'];
    }

    /**
     * Sets inline_role
     *
     * @param \LaunchDarklyApi\Model\Statement[] $inline_role inline_role
     *
     * @return $this
     */
    public function setInlineRole($inline_role)
    {
        $this->container['inline_role'] = $inline_role;

        return $this;
    }

    /**
     * Gets service_token
     *
     * @return bool
     */
    public function getServiceToken()
    {
        return $this->container['service_token'];
    }

    /**
     * Sets service_token
     *
     * @param bool $service_token Whether the token will be a service token https://docs.launchdarkly.com/home/account-security/api-access-tokens#service-tokens
     *
     * @return $this
     */
    public function setServiceToken($service_token)
    {
        $this->container['service_token'] = $service_token;

        return $this;
    }

    /**
     * Gets default_api_version
     *
     * @return int
     */
    public function getDefaultApiVersion()
    {
        return $this->container['default_api_version'];
    }

    /**
     * Sets default_api_version
     *
     * @param int $default_api_version The default API version for this token
     *
     * @return $this
     */
    public function setDefaultApiVersion($default_api_version)
    {
        $this->container['default_api_version'] = $default_api_version;

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


