<?php
/**
 * @link      https://craftcampaign.com
 * @copyright Copyright (c) PutYourLightsOn
 */

namespace putyourlightson\campaignpro;

use craft\base\Plugin;

/**
 * Campaign Pro plugin
 *
 * @author    PutYourLightsOn
 * @package   Campaign Pro
 * @since     1.0.0
 */
class CampaignPro extends Plugin
{
    // Static Properties
    // =========================================================================

    /**
     * @var CampaignPro
     */
    public static $plugin;

    // Public Methods
    // =========================================================================

    public function init()
    {
        parent::init();
        self::$plugin = $this;
    }
}
