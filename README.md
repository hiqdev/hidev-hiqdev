# HiDev HiQDev

**HiDev plugin for HiQDev vendor configuration**

[![Latest Stable Version](https://poser.pugx.org/hiqdev/hidev-hiqdev/v/stable)](https://packagist.org/packages/hiqdev/hidev-hiqdev)
[![Total Downloads](https://poser.pugx.org/hiqdev/hidev-hiqdev/downloads)](https://packagist.org/packages/hiqdev/hidev-hiqdev)
[![Build Status](https://img.shields.io/travis/hiqdev/hidev-hiqdev.svg)](https://travis-ci.org/hiqdev/hidev-hiqdev)
[![Scrutinizer Code Coverage](https://img.shields.io/scrutinizer/coverage/g/hiqdev/hidev-hiqdev.svg)](https://scrutinizer-ci.com/g/hiqdev/hidev-hiqdev/)
[![Scrutinizer Code Quality](https://img.shields.io/scrutinizer/g/hiqdev/hidev-hiqdev.svg)](https://scrutinizer-ci.com/g/hiqdev/hidev-hiqdev/)
[![Dependency Status](https://www.versioneye.com/php/hiqdev:hidev-hiqdev/dev-master/badge.svg)](https://www.versioneye.com/php/hiqdev:hidev-hiqdev/dev-master)

[HiDev] is the automation tool mixed with code generator for easier continuous development.

This plugin provides [HiQDev] vendor configuration for HiDev.
Used for HiQDev packages. Can be used as template for configs of other vendors.

Provides HiQDev information and settings:

- general data: vendor name and company title
- contact data: email, forum, github page
- authors data: names, roles, emails, github and home pages
- default license: BSD-3-Clause

See [src/config/goals.yml].

[HiDev]:                https://github.com/hiqdev/hidev
[HiQDev]:               https://github.com/hiqdev
[src/config/goals.yml]: src/config/goals.yml

## Installation

The preferred way to install this yii2-extension is through [composer](http://getcomposer.org/download/).

Either run

```sh
php composer.phar require "hiqdev/hidev-hiqdev"
```

or add

```json
"hiqdev/hidev-hiqdev": "*"
```

to the require section of your composer.json.

## License

This project is released under the terms of the BSD-3-Clause [license](LICENSE).
Read more [here](http://choosealicense.com/licenses/bsd-3-clause).

Copyright © 2015-2018, HiQDev (http://hiqdev.com/)
