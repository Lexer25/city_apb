<?php
// MODPATH/APB/init.php
defined('APB_VERSION') OR define('APB_VERSION', '2.0.2');


Kohana::$config->load('menu')
    ->set('apb', array(
        'title' => 'APB',
        'url' => '/apb',
        'icon' => 'fa-cog',
        'order' => 300,
		'disabled' => false, 

    ));