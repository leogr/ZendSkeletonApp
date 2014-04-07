<?php
/**
 * Global Configuration Override
 *
 * You can use this file for overriding configuration values from modules, etc.
 * You would place values in here that are agnostic to the environment and not
 * sensitive to security.
 *
 * @NOTE: In practice, this file will typically be INCLUDED in your source
 * control, so do not include passwords or other sensitive information in this
 * file.
 */

return array(
    'assetic_configuration' => array(
        'debug'          => true,
        'buildOnRequest' => true,
    ),
    'sphinxql' => array(
        'driver'    => 'pdo_mysql',
        'hostname'  => '127.0.0.1',
        'port'      => 9306,
        'charset'   => 'UTF8'
    ),
    'ga' => array(
        'monitoring_id' => 'UA-XXXXXXXX-X',
        'domain'        => 'yourdomain.com'
    ),
    'facebook' => array(
        'appId' => '',
    ),
    'session' => array(
        'config' => array(
            'class' => 'Zend\Session\Config\SessionConfig',
            'options' => array(
                'name' => 'myapp',
            ),
        ),
        'storage' => 'Zend\Session\Storage\SessionArrayStorage',
    ),
);
