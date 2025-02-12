# # FeatureFlag

## Properties

Name | Type | Description | Notes
------------ | ------------- | ------------- | -------------
**name** | **string** | A human-friendly name for the feature flag |
**kind** | **string** | Kind of feature flag |
**description** | **string** | Description of the feature flag | [optional]
**key** | **string** | A unique key used to reference the flag in your code |
**_version** | **int** | Version of the feature flag |
**creation_date** | **int** |  |
**include_in_snippet** | **bool** | Deprecated, use clientSideAvailability. Whether or not this flag should be made available to the client-side JavaScript SDK | [optional]
**client_side_availability** | [**\LaunchDarklyApi\Model\ClientSideAvailability**](ClientSideAvailability.md) |  | [optional]
**variations** | [**\LaunchDarklyApi\Model\Variation[]**](Variation.md) | An array of possible variations for the flag |
**variation_json_schema** | **mixed** |  | [optional]
**temporary** | **bool** | Whether or not the flag is a temporary flag |
**tags** | **string[]** | Tags for the feature flag |
**_links** | [**array<string,\LaunchDarklyApi\Model\Link>**](Link.md) |  |
**maintainer_id** | **string** | Associated maintainerId for the feature flag | [optional]
**_maintainer** | [**\LaunchDarklyApi\Model\MemberSummaryRep**](MemberSummaryRep.md) |  | [optional]
**goal_ids** | **string[]** |  | [optional]
**experiments** | [**\LaunchDarklyApi\Model\ExperimentInfoRep**](ExperimentInfoRep.md) |  |
**custom_properties** | [**array<string,\LaunchDarklyApi\Model\CustomProperty>**](CustomProperty.md) |  |
**archived** | **bool** | Boolean indicating if the feature flag is archived |
**archived_date** | **int** |  | [optional]
**defaults** | [**\LaunchDarklyApi\Model\Defaults**](Defaults.md) |  | [optional]
**environments** | [**array<string,\LaunchDarklyApi\Model\FeatureFlagConfig>**](FeatureFlagConfig.md) |  |

[[Back to Model list]](../../README.md#models) [[Back to API list]](../../README.md#endpoints) [[Back to README]](../../README.md)
