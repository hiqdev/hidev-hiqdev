<?php

/*
 * HiQDev vendor configuration for HiDev
 *
 * @link      https://github.com/hiqdev/hidev-vendor
 * @package   hidev-vendor
 * @license   BSD-3-Clause
 * @copyright Copyright (c) 2015-2016, HiQDev (http://hiqdev.com/)
 */

return [
    'components' => [
        'config' => [
            'include' => [
                '@hidev/hiqdev/config.yml',
            ],
            'views' => [
                '@hidev/hiqdev/views',
            ],
        ],
    ],
];
