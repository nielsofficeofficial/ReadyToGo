# WP-Plugin Ready to go
WordPress Plugin Guide to extend WP Functionality without being interfering the core 

__WP Plugins header template | pluginName.php__
```PHP
<?php 
/**
 *
 * @package           Extend WordPress functionality Ready to go!
 * @author            nielFernandez
 * @copyright         2021 nielsoffice
 * @license           GPL-3.0-or-later
 *
 * Plugin Name:       WordPress Extends
 * Plugin URI:        https://www.facebook.com/nielsofficeofficial
 * Description:       Extend WordPress core functionality without being interfer the core files such as Dashboard, Widget, Users, Settings etc...
 * Version:           v1.0
 * Requires at least: v5.2
 * Requires PHP:      v7++
 * Author:            Your Name
 * Author URI:        https://www.facebook.com/nielsofficeofficial
 * Text Domain:       nielsoffice
 * License:           GPL v3 or later
 * License URI:       http://www.gnu.org/licenses/gpl-2.0.txt
 *
**/

...

```

__Parent Slug for add_submenu_page__ <br />
Single plugin file functionality that integrate with the existing wordpress core such dashboard, themes, users, settings etc...
```
Dashboard menu => index.php 
Posts          => edit.php  
Page           => edit.php?post_type=page 
Media          => upload.php 
Comments       => edit-comments.php 
Theme          => themes.php  
Plugins        => plugins.php 
Users          => users.php   
Tools          => tools.php   
Settings       => options-general.php 
```
Adding file content admin submenu page

```PHP

// display the plugin settings page
function nielsoffice_plugins_settings() 
{
  // Validate user allowed access
  if ( !current_user_can( 'manage_options' ) ) return;

   require_once __DIR__ . '/file-one.php';
}

// add sub-level administrative menu
function nielsoffice_plugins_settings_sublevel_menu() 
{
	
  /** 
   * Default WP function add submenu page 
   * ( Source: https://developer.wordpress.org/reference/functions/add_submenu_page/ )
   * 
   * add_submenu_page(string  $parent_slug, string $page_title, string $menu_title, string $capability, string $menu_slug, callable $function = '');
   * 
   **/
  
  // Actual Submenu wp implementation 
  add_submenu_page(
    'options-general.php',
    'WordPress Extend Plugin Page Title',
    'WordPress Extend Plugin Menu Title',
    'manage_options', // given manage_options
    'wp-menu-plugin-slug',
    'nielsoffice_plugins_settings' // callable callback function
  );
	
}

// Add function 
add_action( 'admin_menu', 'nielsoffice_plugins_settings_sublevel_menu' );

```
