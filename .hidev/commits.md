hiqdev/hidev-hiqdev commits history
-----------------------------------

## 0.4.0 2016-05-21

- Changed: redone to `composer-config-plugin`
    - 9fbe412 2016-05-21 fixed path to goals.yml (sol@hiqdev.com)
    - 66c46ae 2016-05-21 redoing to composer-config-plugin (sol@hiqdev.com)
    - e9d35d7 2016-05-21 redoing to composer-config-plugin (sol@hiqdev.com)

## 0.3.4 2016-04-15

- Fixed `hiqdev/composer-extension-plugin` version constraint
    - 2540dc2 2016-04-15 fixed `hiqdev/composer-extension-plugin` version constraint (sol@hiqdev.com)

## 0.3.3 2016-04-14

- Fixed build with asset-packagist
    - c81c33d 2016-04-14 fixed build with asset-packagist (sol@hiqdev.com)
- Changed to `hidev-config` <- `extension-config`
    - 5ef918a 2016-04-13 redone to `hidev-config` <- `extension-config` (sol@hiqdev.com)

## 0.3.2 2016-03-30

- Changed `extension-config` <- `yii2-extraconfig`
    - 06895d9 2016-03-30 redoing to `extension-config` <- `yii2-extraconfig` (sol@hiqdev.com)

## 0.3.1 2016-02-18

- Changed: disabled `phpdoc_to_comment` fixer
    - c1f2e77 2016-02-18 rehideved (sol@hiqdev.com)
    - b720283 2016-02-18 disabled `phpdoc_to_comment` fixer (sol@hiqdev.com)

## 0.3.0 2016-01-15

- Changed PluginManager -> yii2-extraconfig
    - c8f4ffa 2016-01-15 rehideved (sol@hiqdev.com)
    - 7a64a06 2016-01-15 fixed tests (sol@hiqdev.com)
    - 953dbe2 2016-01-08 Changed configs -> include (sol@hiqdev.com)
    - 5d85050 2016-01-06 changed config structure (sol@hiqdev.com)
    - dd2986d 2016-01-06 redoing with yii2-extraconfig (sol@hiqdev.com)
    - 5c4bb80 2016-01-06 + yii2-extraconfig (sol@hiqdev.com)
- Fixed config.yml to be Symfony YAML 3.0 compatible
    - 3042ae6 2016-01-02 + scrutinizer config for code rating and duplication checks (sol@hiqdev.com)
    - 983d7b3 2016-01-02 fixed config.yml, added quoting to be compatible with Symfony YAML 3.0 (sol@hiqdev.com)

## 0.2.0 2015-12-23

- Fixed build
    - 7b0806a 2015-12-23 + Travis `after_script` to upload coverage to Scrutinizer (sol@hiqdev.com)
- Added `-phpdoc_scalar` fixer option
    - bea3d5d 2015-12-21 + `-phpdoc_scalar` fixer option (sol@hiqdev.com)
    - 455d4e9 2015-12-21 + php-cs-fixer config (sol@hiqdev.com)
    - 19a84df 2015-12-21 Added `-phpdoc_scalar` option to the phpcs fixed config (d.naumenko.a@gmail.com)
- Changed: renamed to `hidev-vendor`
    - f54e930 2015-12-17 fixing build (sol@hiqdev.com)
    - 6c85a23 2015-12-10 renamed to `hidev-vendor` (sol@hiqdev.com)

## 0.1.3 2015-11-24

- Added tests and Travis CI
    - becfc3c 2015-11-24 added tests and Travis CI (sol@hiqdev.com)
    - 545ccf5 2015-11-21 doing travis (sol@hiqdev.com)

## 0.1.2 2015-11-18

- Changed: redone to `hidev-hiqdev`
    - a00dad5 2015-11-18 php-cs-fixed (sol@hiqdev.com)
    - 62c21cc 2015-11-17 fixed namespace to `hidev\hiqdev` (sol@hiqdev.com)
    - 81e547a 2015-11-17 redoing to `hidev-hiqdev` (sol@hiqdev.com)
- Fixed (improved) package description again
    - c90b172 2015-11-09 improved description (sol@hiqdev.com)
    - ef2fb86 2015-11-09 fixed package description (sol@hiqdev.com)

## 0.1.1 2015-11-06

- Fixed (improved) package description
    - 5171457 2015-11-06 improved package description (sol@hiqdev.com)
    - 2fc8574 2015-11-06 changed headline to (sol@hiqdev.com)
- Changed structure of authors config and added nick and github
    - 35b6e90 2015-11-06 changed structure of authors config and added nick and github (sol@hiqdev.com)

## 0.1.0 2015-10-24

- Fixed badges
    - 474dfe4 2015-10-24 fixed badges (sol@hiqdev.com)

## 0.0.4 2015-10-23

- Changed package title to: HiQDev vendor hidev config
    - 0d5bd5f 2015-10-23 changed package title to: HiQDev vendor hidev config (sol@hiqdev.com)

## 0.0.3 2015-10-23

- Changed package title
    - 84925b8 2015-10-23 changed package title (sol@hiqdev.com)
- Changed urls to https <- https
    - 9b510d3 2015-10-23 changed authors homepage urls to http <- https (sol@hiqdev.com)
    - 2cb00f5 2015-10-23 changed homepage and forum urls to http <- https (sol@hiqdev.com)

## 0.0.2 2015-07-11

- Changed configuration: redone parent to plugins
    - dc30ce1 2015-07-11 simplified .hidev/config require to hidev-config-php only (sol@hiqdev.com)
    - 1977d08 2015-07-11 * package title (sol@hiqdev.com)
    - a4abba6 2015-07-10 moved back to .hidev (sol@hiqdev.com)
    - 6b4eb46 2015-07-10 + require (sol@hiqdev.com)
    - c485d8d 2015-07-10 - require from composer.json (sol@hiqdev.com)
    - 0da73e1 2015-07-10 - require-dev (sol@hiqdev.com)
    - b1377b8 2015-07-09 - parent from .hidev.yml (sol@hiqdev.com)
    - 7d8905f 2015-07-09 removed all but vendor config (sol@hiqdev.com)
    - c9badc4 2015-07-09 redoing parent to plugins (sol@hiqdev.com)
    - 459514f 2015-07-09 fixed composer.json typo (sol@hiqdev.com)
    - af6a93a 2015-07-09 splited into hidev-config-php moved to src (sol@hiqdev.com)
    - 12dd1b3 2015-07-05 many changes for redoing parent config (sol@hiqdev.com)
    - 5b78c93 2015-07-05 * composer.json: + require plugins (sol@hiqdev.com)
- Added different templates
    - 85d3b8b 2015-06-30 * Plugin template: - header comment (sol@hiqdev.com)
    - b4fa223 2015-07-02 first working variant of PHPUnitTest.twig (sol@hiqdev.com)
    - 504405b 2015-07-02 * default createObject without params (sol@hiqdev.com)
    - a3d3ffc 2015-07-01 + templates/tests/unit/PHPUnitTest.twig (sol@hiqdev.com)
- Added codeception
    - 2971599 2015-07-05 * codeception goal: + mkdir tests (sol@hiqdev.com)
    - 060fd5a 2015-06-30 + test goal & generate/once `tests/_bootstrap` (sol@hiqdev.com)
    - 9b429e5 2015-06-28 + codeception enable coverage (sol@hiqdev.com)

## 0.0.1 June 19, 2015

- Added php-cs-fixer
    - c3498bd 2015-06-19 + `fix` goal (sol@hiqdev.com)
    - aa7d042 2015-06-19 + php-cs-fixer (sol@hiqdev.com)
- Inited
    - d33e5f1 2015-06-06 preparing release (sol@hiqdev.com)
    - e042dd9 2015-06-02 + license: BSD-3-Clause (sol@hiqdev.com)
    - 5bdb1c7 2015-06-02 fixed typo (sol@hiqdev.com)
    - 3978b8e 2015-06-01 + templates/Plugin.twig (sol@hiqdev.com)
    - 7cc79d6 2015-06-01 Merge branch 'master' of github.com:hiqdev/hidev-config (sol@hiqdev.com)
    - 6ace331 2015-06-01 config.yml <- config.json (sol@hiqdev.com)
    - 06291c6 2015-05-30 Merge branch 'master' of github.com:hiqdev/hidev-config (sol@hiqdev.com)
    - 31ef851 2015-05-30 used parentConfig (sol@hiqdev.com)
    - 54a76ec 2015-05-29 + namespace (sol@hiqdev.com)
    - c656a27 2015-05-29 inited (sol@hiqdev.com)

## Development started May 29, 2015

