<?php
/**
 * This code was generated by
 * ___ _ _ _ _ _    _ ____    ____ ____ _    ____ ____ _  _ ____ ____ ____ ___ __   __
 *  |  | | | | |    | |  | __ |  | |__| | __ | __ |___ |\ | |___ |__/ |__|  | |  | |__/
 *  |  |_|_| | |___ | |__|    |__| |  | |    |__] |___ | \| |___ |  \ |  |  | |__| |  \
 *
 * Twilio - Flex
 * This is the public Twilio REST API.
 *
 * NOTE: This class is auto generated by OpenAPI Generator.
 * https://openapi-generator.tech
 * Do not edit the class manually.
 */

namespace Twilio\Rest\FlexApi\V2;

use Twilio\Options;
use Twilio\Values;
use Twilio\Version;

abstract class WebChannelsOptions
{
    /**
     * @param string $chatFriendlyName The Conversation's friendly name. See the [Conversation resource](https://www.twilio.com/docs/conversations/api/conversation-resource) for an example.
     * @param string $customerFriendlyName The Conversation participant's friendly name. See the [Conversation Participant Resource](https://www.twilio.com/docs/conversations/api/conversation-participant-resource) for an example.
     * @param string $preEngagementData The pre-engagement data.
     * @param string $uiVersion The Ui-Version HTTP request header
     * @return CreateWebChannelsOptions Options builder
     */
    public static function create(
        
        string $chatFriendlyName = Values::NONE,
        string $customerFriendlyName = Values::NONE,
        string $preEngagementData = Values::NONE,
        string $uiVersion = Values::NONE

    ): CreateWebChannelsOptions
    {
        return new CreateWebChannelsOptions(
            $chatFriendlyName,
            $customerFriendlyName,
            $preEngagementData,
            $uiVersion
        );
    }

}

class CreateWebChannelsOptions extends Options
    {
    /**
     * @param string $chatFriendlyName The Conversation's friendly name. See the [Conversation resource](https://www.twilio.com/docs/conversations/api/conversation-resource) for an example.
     * @param string $customerFriendlyName The Conversation participant's friendly name. See the [Conversation Participant Resource](https://www.twilio.com/docs/conversations/api/conversation-participant-resource) for an example.
     * @param string $preEngagementData The pre-engagement data.
     * @param string $uiVersion The Ui-Version HTTP request header
     */
    public function __construct(
        
        string $chatFriendlyName = Values::NONE,
        string $customerFriendlyName = Values::NONE,
        string $preEngagementData = Values::NONE,
        string $uiVersion = Values::NONE

    ) {
        $this->options['chatFriendlyName'] = $chatFriendlyName;
        $this->options['customerFriendlyName'] = $customerFriendlyName;
        $this->options['preEngagementData'] = $preEngagementData;
        $this->options['uiVersion'] = $uiVersion;
    }

    /**
     * The Conversation's friendly name. See the [Conversation resource](https://www.twilio.com/docs/conversations/api/conversation-resource) for an example.
     *
     * @param string $chatFriendlyName The Conversation's friendly name. See the [Conversation resource](https://www.twilio.com/docs/conversations/api/conversation-resource) for an example.
     * @return $this Fluent Builder
     */
    public function setChatFriendlyName(string $chatFriendlyName): self
    {
        $this->options['chatFriendlyName'] = $chatFriendlyName;
        return $this;
    }

    /**
     * The Conversation participant's friendly name. See the [Conversation Participant Resource](https://www.twilio.com/docs/conversations/api/conversation-participant-resource) for an example.
     *
     * @param string $customerFriendlyName The Conversation participant's friendly name. See the [Conversation Participant Resource](https://www.twilio.com/docs/conversations/api/conversation-participant-resource) for an example.
     * @return $this Fluent Builder
     */
    public function setCustomerFriendlyName(string $customerFriendlyName): self
    {
        $this->options['customerFriendlyName'] = $customerFriendlyName;
        return $this;
    }

    /**
     * The pre-engagement data.
     *
     * @param string $preEngagementData The pre-engagement data.
     * @return $this Fluent Builder
     */
    public function setPreEngagementData(string $preEngagementData): self
    {
        $this->options['preEngagementData'] = $preEngagementData;
        return $this;
    }

    /**
     * The Ui-Version HTTP request header
     *
     * @param string $uiVersion The Ui-Version HTTP request header
     * @return $this Fluent Builder
     */
    public function setUiVersion(string $uiVersion): self
    {
        $this->options['uiVersion'] = $uiVersion;
        return $this;
    }

    /**
     * Provide a friendly representation
     *
     * @return string Machine friendly representation
     */
    public function __toString(): string
    {
        $options = \http_build_query(Values::of($this->options), '', ' ');
        return '[Twilio.FlexApi.V2.CreateWebChannelsOptions ' . $options . ']';
    }
}
