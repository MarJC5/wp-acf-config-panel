<?php

/**
 * Plugin Name:       wp-acf-config-panel
 * Plugin URI:        https://github.com/MarJC5/wp-acf-config-panel
 * Description:       Plugin to add a Config panel in Wordpress wp-admin. This will allow us to create a default ACF for static website contents (eg: phone, street, social links etc ...) 
 * Version:           1.0.11
 * Requires at least: 5.8.2
 * Requires PHP:      7.4.1
 * Author:            Martin Jean-Christio
 * Author URI:        https://github.com/MarJC5
 * License:           GPL v2 or later
 * License URI:       https://www.gnu.org/licenses/gpl-2.0.html
 * Text Domain:       wp-acf-config-panel-pages
 */

defined('ABSPATH') or die('Unauthorized Access');

if (function_exists('acf_add_options_page')) {
    acf_add_options_page(
        array(
            'page_title' => 'Config Panel Page',
            'menu_title' => 'Config Panel',
            'redirect'   => false,
            'position'   => 2,
            'icon_url'   => 'dashicons-feedback',
            'capability' => 'administrator',
            'show_in_graphql' => true,
        )
    );
}

if (function_exists('acf_add_local_field_group')) :

    acf_add_local_field_group(array(
        'key' => 'group_61c5187f0d7ca',
        'title' => 'Utils',
        'fields' => array(
            array(
                'key' => 'field_61c5189b2726f',
                'label' => 'location',
                'name' => 'location',
                'type' => 'group',
                'instructions' => '',
                'required' => 0,
                'conditional_logic' => 0,
                'wrapper' => array(
                    'width' => '',
                    'class' => '',
                    'id' => '',
                ),
                'layout' => 'block',
                'sub_fields' => array(
                    array(
                        'key' => 'field_61c518e127270',
                        'label' => 'street',
                        'name' => 'street',
                        'type' => 'text',
                        'instructions' => '',
                        'required' => 0,
                        'conditional_logic' => 0,
                        'wrapper' => array(
                            'width' => '',
                            'class' => '',
                            'id' => '',
                        ),
                        'default_value' => '',
                        'placeholder' => '',
                        'prepend' => '',
                        'append' => '',
                        'maxlength' => '',
                    ),
                    array(
                        'key' => 'field_61c518fb27271',
                        'label' => 'npa',
                        'name' => 'npa',
                        'type' => 'number',
                        'instructions' => '',
                        'required' => 0,
                        'conditional_logic' => 0,
                        'wrapper' => array(
                            'width' => '',
                            'class' => '',
                            'id' => '',
                        ),
                        'show_in_graphql' => 1,
                        'default_value' => '',
                        'placeholder' => '',
                        'prepend' => '',
                        'append' => '',
                        'min' => '',
                        'max' => '',
                        'step' => '',
                    ),
                    array(
                        'key' => 'field_61c5190e27272',
                        'label' => 'country',
                        'name' => 'country',
                        'type' => 'text',
                        'instructions' => '',
                        'required' => 0,
                        'conditional_logic' => 0,
                        'wrapper' => array(
                            'width' => '',
                            'class' => '',
                            'id' => '',
                        ),
                        'default_value' => '',
                        'placeholder' => '',
                        'prepend' => '',
                        'append' => '',
                        'maxlength' => '',
                    ),
                ),
            ),
            array(
                'key' => 'field_61c5192927273',
                'label' => 'contact',
                'name' => 'contact',
                'type' => 'group',
                'instructions' => '',
                'required' => 0,
                'conditional_logic' => 0,
                'wrapper' => array(
                    'width' => '',
                    'class' => '',
                    'id' => '',
                ),
                'layout' => 'block',
                'sub_fields' => array(
                    array(
                        'key' => 'field_61c5193427274',
                        'label' => 'phone',
                        'name' => 'phone',
                        'type' => 'number',
                        'instructions' => '',
                        'required' => 0,
                        'conditional_logic' => 0,
                        'wrapper' => array(
                            'width' => '',
                            'class' => '',
                            'id' => '',
                        ),
                        'show_in_graphql' => 1,
                        'default_value' => '',
                        'placeholder' => '',
                        'prepend' => '',
                        'append' => '',
                        'min' => '',
                        'max' => '',
                        'step' => '',
                    ),
                    array(
                        'key' => 'field_61c5193b27275',
                        'label' => 'mobile',
                        'name' => 'mobile',
                        'type' => 'number',
                        'instructions' => '',
                        'required' => 0,
                        'conditional_logic' => 0,
                        'wrapper' => array(
                            'width' => '',
                            'class' => '',
                            'id' => '',
                        ),
                        'show_in_graphql' => 1,
                        'default_value' => '',
                        'placeholder' => '',
                        'prepend' => '',
                        'append' => '',
                        'min' => '',
                        'max' => '',
                        'step' => '',
                    ),
                    array(
                        'key' => 'field_61c5194127276',
                        'label' => 'email',
                        'name' => 'email',
                        'type' => 'email',
                        'instructions' => '',
                        'required' => 0,
                        'conditional_logic' => 0,
                        'wrapper' => array(
                            'width' => '',
                            'class' => '',
                            'id' => '',
                        ),
                        'show_in_graphql' => 1,
                        'default_value' => '',
                        'placeholder' => '',
                        'prepend' => '',
                        'append' => '',
                    ),
                ),
            ),
            array(
                'key' => 'field_61c5195927277',
                'label' => 'social',
                'name' => 'social',
                'type' => 'repeater',
                'instructions' => '',
                'required' => 0,
                'conditional_logic' => 0,
                'wrapper' => array(
                    'width' => '',
                    'class' => '',
                    'id' => '',
                ),
                'collapsed' => '',
                'min' => 0,
                'max' => 0,
                'layout' => 'table',
                'button_label' => 'Add more',
                'sub_fields' => array(
                    array(
                        'key' => 'field_61c5197a27278',
                        'label' => 'Social media name',
                        'name' => 'name',
                        'type' => 'text',
                        'instructions' => '',
                        'required' => 0,
                        'conditional_logic' => 0,
                        'wrapper' => array(
                            'width' => '',
                            'class' => '',
                            'id' => '',
                        ),
                        'default_value' => '',
                        'placeholder' => '',
                        'prepend' => '',
                        'append' => '',
                        'maxlength' => '',
                    ),
                    array(
                        'key' => 'field_61c5198a27279',
                        'label' => 'link',
                        'name' => 'link',
                        'type' => 'url',
                        'instructions' => '',
                        'required' => 0,
                        'conditional_logic' => 0,
                        'wrapper' => array(
                            'width' => '',
                            'class' => '',
                            'id' => '',
                        ),
                        'show_in_graphql' => 1,
                        'default_value' => '',
                        'placeholder' => '',
                    ),
                ),
            ),
        ),
        'location' => array(
            array(
                array(
                    'param' => 'options_page',
                    'operator' => '==',
                    'value' => 'acf-options-config-panel',
                ),
            ),
        ),
        'menu_order' => 0,
        'position' => 'normal',
        'style' => 'default',
        'label_placement' => 'top',
        'instruction_placement' => 'label',
        'hide_on_screen' => '',
        'active' => true,
        'description' => '',
        'show_in_graphql' => 1,
        'graphql_field_name' => 'utils',
        'map_graphql_types_from_location_rules' => 0,
        'graphql_types' => '',
    ));

endif;

/*
 query {
  wp {
    acfOptionsConfigPanel {
      utils {
        social {
          link
          name
        }
        location {
          street
          npa
          country
        }
        contact {
          email
          mobile
          phone
        }
      }
    }
  }
}
*/
