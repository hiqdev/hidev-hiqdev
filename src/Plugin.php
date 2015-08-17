<?php

/*
 * HiQDev general hidev config
 *
 * @link      https://github.com/hiqdev/hidev-config
 * @package   hidev-config
 * @license   BSD-3-Clause
 * @copyright Copyright (c) 2015, HiQDev (https://hiqdev.com/)
 */

namespace hiqdev\hidev\config;

class Plugin extends \hiqdev\pluginmanager\Plugin
{
    protected $_items = [
        'configFiles' => [
            '@hiqdev/hidev/config/config.yml',
        ],
        'views' => [
            '@hiqdev/hidev/config/views',
        ],
    ];
}
