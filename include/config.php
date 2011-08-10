<?php

/**
 * We need the generic WPCSL plugin class, since that is the
 * foundation of much of our plugin.  So here we make sure that it has
 * not already been loaded by another plugin that may also be
 * installed, and if not then we load it.
 */
if (defined('MP_CAFEPRESS_PLUGINDIR')) {
    if (class_exists('wpCSL_plugin__mpcafe') === false) {
        require_once(MP_CAFEPRESS_PLUGINDIR.'WPCSL-generic/classes/CSL-plugin.php');
    }
    
    global $MP_cafepress_plugin;
    $MP_cafepress_plugin = new wpCSL_plugin__mpcafe(
        array(
            'use_obj_defaults'      => true,        
            'prefix'                => MP_CAFEPRESS_PREFIX,
            'css_prefix'            => 'csl_themes',            
            'name'                  => 'MoneyPress : CafePress LE',
            'url'                   => 'http://www.cybersprocket.com/products/wpquickcafepress/',
            'support_url'           => 'http://redmine.cybersprocket.com/projects/wpcafepress/wiki',
            'purchase_url'          => 'http://www.cybersprocket.com/products/wpquickcafepress/',            
            'basefile'              => MP_CAFEPRESS_BASENAME,
            'plugin_path'           => MP_CAFEPRESS_PLUGINDIR,
            'plugin_url'            => MP_CAFEPRESS_PLUGINURL,
            'cache_path'            => MP_CAFEPRESS_PLUGINDIR . 'cache',
            'driver_name'           => 'CafePress',
            'driver_type'           => 'Panhandler',
            'driver_args'           => array(
                    'api_key'   => get_option(MP_CAFEPRESS_PREFIX.'-api_key'),
                    'cj_pid'    => get_option(MP_CAFEPRESS_PREFIX.'-cj_pid'),
                    'return'    => get_option(MP_CAFEPRESS_PREFIX.'-return'),
                    'wait_for'  => get_option(MP_CAFEPRESS_PREFIX.'-wait_for')
                    ),
            'shortcodes'            => array('mp-cafepress','mp_cafepress','QuickCafe')
        )
    );

}

