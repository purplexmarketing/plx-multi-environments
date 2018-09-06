<?php
/**
 * Note: If you decided to edit this template file you should also edit:
 *
 * /wp-content/plugins/plx-multienv/plx-multienv.php
 *
 * Change the Version number in the comment block at the top to 999.9.9
 * This will disable updates to the plugin from Wordpress.org and ensure
 * your changes don't get overwritten.
 *
 */

$plx_multienv_template_stage = <<<PLX
<?php
/**
 * AUTOGENERATED BY PLX MULTI-ENVIRONMENTS - DO NOT EDIT THIS FILE DIRECTLY
 *
 * Staging environment config settings
 *
 * @package    PLX Multi-Environments
 * @version    1.0
 * @author     Purplex <matt@plx.mk>
 */

define('DB_NAME', '$plx_multienv_config_stage_dbname');
define('DB_USER', '$plx_multienv_config_stage_dbuser');
define('DB_PASSWORD', '$plx_multienv_config_stage_dbpass');
define('DB_HOST', '$plx_multienv_config_stage_dbhost');
define('WP_DEBUG', '$plx_multienv_config_stage_wpdebug');
PLX;
