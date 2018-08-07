<?php
/**
 * Fimmo plugin for Craft CMS 3.x
 *
 * Integrate Fortisimmo properties
 *
 * @link      wwwmakimm.be
 * @copyright Copyright (c) 2018 Akimm
 */

namespace akimmfimmo\fimmo\services;

use akimmfimmo\fimmo\Fimmo;

use Craft;
use craft\base\Component;

/**
 * FimmoService Service
 *
 * All of your plugin’s business logic should go in services, including saving data,
 * retrieving data, etc. They provide APIs that your controllers, template variables,
 * and other plugins can interact with.
 *
 * https://craftcms.com/docs/plugins/services
 *
 * @author    Akimm
 * @package   Fimmo
 * @since     0.0.1
 */
class FimmoService extends Component
{
    // Public Methods
    // =========================================================================

    /**
     * This function can literally be anything you want, and you can have as many service
     * functions as you want
     *
     * From any other plugin file, call it like this:
     *
     *     Fimmo::$plugin->fimmoService->exampleService()
     *
     * @return mixed
     */
    public function exampleService()
    {
        $result = 'something';
        // Check our Plugin's settings for `someAttribute`
        if (Fimmo::$plugin->getSettings()->someAttribute) {
        }

        return $result;
    }
}
