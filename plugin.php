<?php
/**
 * This is an Omeka plugin that inserts a Google Analytics tracking code into
 * the <head> tag on each page on the site.
 * 
 * PHP version 5
 *
 * Licensed under the Apache License, Version 2.0 (the "License"); you may not
 * use this file except in compliance with the License. You may obtain a copy
 * of the License at http://www.apache.org/licenses/LICENSE-2.0 Unless
 * required by applicable law or agreed to in writing, software distributed
 * under the License is distributed on an "AS IS" BASIS, WITHOUT WARRANTIES OR
 * CONDITIONS OF ANY KIND, either express or implied. See the License for the
 * specific language governing permissions and limitations under the License.
 *
 * @package   GoogleAnalytics
 * @author    David McClure <david.mcclure@virginia.edu>
 * @copyright 2011 The Board and Visitors of the University of Virginia
 * @license   http://www.apache.org/licenses/LICENSE-2.0 Apache 2.0
 * @version   0.1
 *
 */


/**
 * Add plugin hooks:
 *
 * 'config_form': Triggered when the user clicks the "Configure" button on the
 * plugins page.
 *
 * 'config': Triggered when the user clicks the "Save Changes" button on the 
 * configuration page.
 *
 * 'public_theme_header': Triggered during template rendering in the middle of 
 * the <head> tag.
 */
add_plugin_hook('config_form', 'google_analytics_config_form');
add_plugin_hook('config', 'google_analytics_config');
add_plugin_hook('public_theme_header', 'google_analytics_insertGATC');


/**
 * Include the configuration form.
 */
function google_analytics_config_form()
{

    include 'forms/config_form.php';

}


/**
 * Save changes to the tracking code.
 */
function google_analytics_config()
{

    $tracking_code = $this->getRequest()->getParam('google_analytics_tracking_code');
    set_option('google_analytics_tracking_code', $tracking_code);

}


/**
 * Print the tracking code in the <head> tag.
 */
function google_analytics_insertGATC()
{

    echo get_option('google_analytics_tracking_code');

}
