<?php

$databases['default']['default'] = array (
   'database' => 'tongamet',
   'username' => 'root',
   'password' => '123',
   'host' => 'localhost',
   'port' => '3306',
   'driver' => 'mysql',
   'prefix' => '',
   'collation' => 'utf8mb4_general_ci',
);

$settings['hash_salt'] = '9732ef008eec4a3e8eab317e2a322d9f';

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