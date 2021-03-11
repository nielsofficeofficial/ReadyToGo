# WP-PluginGuide free references
WordPress Plugin Guide to extend WP Functionality without being interfering the core 

__WP Plugins header template | pluginName.php__
```PHP
<?php 
/*
Plugin Name:  WordPress Extend
Description:  This is a WordPress plugin template from wordpress website modified by nielsoffice to extend wp functionality
Plugin URI:   https://web.facebook.com/nielsofficeofficial
Author:       nielFernandez
Version:      1.0
Text Domain:  nielsoffice
Domain Path:  /languages
License:      GPL v3 
License URI:  https://www.gnu.org/licenses/gpl-2.0.txt
*/

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
