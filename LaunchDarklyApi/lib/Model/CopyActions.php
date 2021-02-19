<?php
/**
 * CopyActions
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
 * OpenAPI spec version: 5.0.1
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
use \LaunchDarklyApi\ObjectSerializer;

/**
 * CopyActions Class Doc Comment
 *
 * @category Class
 * @package  LaunchDarklyApi
 * @author   Swagger Codegen team
 * @link     https://github.com/swagger-api/swagger-codegen
 */
class CopyActions
{
    /**
     * Possible values of this enum
     */
    const UPDATE_ON = 'updateOn';
    const UPDATE_PREREQUISITES = 'updatePrerequisites';
    const UPDATE_TARGETS = 'updateTargets';
    const UPDATE_RULES = 'updateRules';
    const UPDATE_FALLTHROUGH = 'updateFallthrough';
    const UPDATE_OFF_VARIATION = 'updateOffVariation';
    
    /**
     * Gets allowable values of the enum
     * @return string[]
     */
    public static function getAllowableEnumValues()
    {
        return [
            self::UPDATE_ON,
            self::UPDATE_PREREQUISITES,
            self::UPDATE_TARGETS,
            self::UPDATE_RULES,
            self::UPDATE_FALLTHROUGH,
            self::UPDATE_OFF_VARIATION,
        ];
    }
}


