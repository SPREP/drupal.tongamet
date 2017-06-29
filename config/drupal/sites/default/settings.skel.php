<?php

$databases['default']['default'] = array (
   'database' => 'databasename',
   'username' => 'sqlusername',
   'password' => 'sqlpassword',
   'host' => 'localhost',
   'port' => '3306',
   'driver' => 'mysql',
   'prefix' => '',
   'collation' => 'utf8mb4_general_ci',
);
/**
 * Disable CSS and JS aggregation.
 */
# $config['system.performance']['css']['preprocess'] = FALSE;
# $config['system.performance']['js']['preprocess'] = FALSE;
/**
 * Skip file system permissions hardening.
 *
 * The system module will periodically check the permissions of your site's
 * site directory to ensure that it is not writable by the website user. For
 * sites that are managed with a version control system, this can cause problems
 * when files in that directory such as settings.php are updated, because the
 * user pulling in the changes won't have permissions to modify files in the
 * directory.
 */
$settings['skip_permissions_hardening'] = TRUE;