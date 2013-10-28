<?php defined('SYSPATH') or die('No direct access allowed.');

/**
 * Include Hybrid Auth classes
 */
require_once(dirname(__FILE__).'/vendor/hybridauth/hybridauth/Hybrid/Auth.php');

define('HYBRIDAUTH_PATH', realpath(__DIR__.'/vendor/hybridauth/') . DIRECTORY_SEPARATOR);

if (Kohana::$environment === Kohana::DEVELOPMENT)
{
    Route::set('hybridauth-install', 'hybridauth/install')
    ->defaults(array(
        'directory' => 'HybridAuth',
        'controller' => 'Index',
        'action' => 'install',
    ));
}

Route::set('hybridauth-endpoint', 'loginauth')
    ->defaults(array(
        'directory' => 'HybridAuth',
        'controller' => 'Index',
        'action' => 'endpoint',
    ));
