<?php
# Generated by the protocol buffer compiler.  DO NOT EDIT!
# source: google/ads/googleads/v13/services/recommendation_service.proto

namespace Google\Ads\GoogleAds\V13\Services\ApplyRecommendationOperation;

use Google\Protobuf\Internal\GPBType;
use Google\Protobuf\Internal\RepeatedField;
use Google\Protobuf\Internal\GPBUtil;

/**
 * Parameters to use when applying a campaign budget recommendation.
 *
 * Generated from protobuf message <code>google.ads.googleads.v13.services.ApplyRecommendationOperation.CampaignBudgetParameters</code>
 */
class CampaignBudgetParameters extends \Google\Protobuf\Internal\Message
{
    /**
     * New budget amount to set for target budget resource. This is a required
     * field.
     *
     * Generated from protobuf field <code>optional int64 new_budget_amount_micros = 2;</code>
     */
    protected $new_budget_amount_micros = null;

    /**
     * Constructor.
     *
     * @param array $data {
     *     Optional. Data for populating the Message object.
     *
     *     @type int|string $new_budget_amount_micros
     *           New budget amount to set for target budget resource. This is a required
     *           field.
     * }
     */
    public function __construct($data = NULL) {
        \GPBMetadata\Google\Ads\GoogleAds\V13\Services\RecommendationService::initOnce();
        parent::__construct($data);
    }

    /**
     * New budget amount to set for target budget resource. This is a required
     * field.
     *
     * Generated from protobuf field <code>optional int64 new_budget_amount_micros = 2;</code>
     * @return int|string
     */
    public function getNewBudgetAmountMicros()
    {
        return isset($this->new_budget_amount_micros) ? $this->new_budget_amount_micros : 0;
    }

    public function hasNewBudgetAmountMicros()
    {
        return isset($this->new_budget_amount_micros);
    }

    public function clearNewBudgetAmountMicros()
    {
        unset($this->new_budget_amount_micros);
    }

    /**
     * New budget amount to set for target budget resource. This is a required
     * field.
     *
     * Generated from protobuf field <code>optional int64 new_budget_amount_micros = 2;</code>
     * @param int|string $var
     * @return $this
     */
    public function setNewBudgetAmountMicros($var)
    {
        GPBUtil::checkInt64($var);
        $this->new_budget_amount_micros = $var;

        return $this;
    }

}

// Adding a class alias for backwards compatibility with the previous class name.
class_alias(CampaignBudgetParameters::class, \Google\Ads\GoogleAds\V13\Services\ApplyRecommendationOperation_CampaignBudgetParameters::class);

