<?php

/*
 * HiQDev vendor configuration for HiDev
 *
 * @link      https://github.com/hiqdev/hidev-hiqdev
 * @package   hidev-hiqdev
 * @license   BSD-3-Clause
 * @copyright Copyright (c) 2015, HiQDev (http://hiqdev.com/)
 */

namespace hidev\hiqdev;

class Plugin extends \hiqdev\pluginmanager\Plugin
{
    protected $_items = [
        'configFiles' => [
            '@hidev/hiqdev/config.yml',
        ],
        'views' => [
            '@hidev/hiqdev/views',
        ],
    ];
}
