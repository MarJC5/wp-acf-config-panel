/**
 * Plugin Name:       wp-acf-config-panel
 * Plugin URI:        https://github.com/MarJC5/wp-acf-config-panel
 * Description:       Plugin to add a Config panel in Wordpress wp-admin. This will allow us to create a default ACF for static website contents (eg: phone, street, social links etc ...) 
 * Version:           1.0.0
 * Requires at least: 5.8.2
 * Requires PHP:      7.4.1
 * Author:            Martin Jean-Christio
 * Author URI:        https://github.com/MarJC5
 * License:           GPL v2 or later
 * License URI:       https://www.gnu.org/licenses/gpl-2.0.html
 * Text Domain:       wp-acf-config-panel
 */

define( 'ABSPATH' ) or die ( 'Unauthorized Access' );

if ( function_exists( 'acf_add_options_page' )) {
    acf_add_options_page(
        array(
            'page_title' => 'Config Panel Page',
            'menu_title' => 'Config Panel',
            'redirect'   => false,
            'position'   => 2,
            'icon_url'   => 'dashicons-feedback',
            'capability' => 'administrator'
        )
    );
}