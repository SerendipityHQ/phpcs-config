<p align="center">
    <a href="http://www.serendipityhq.com" target="_blank">
        <img style="max-width: 350px" src="http://www.serendipityhq.com/assets/open-source-projects/Logo-SerendipityHQ-Icon-Text-Purple.png">
    </a>
</p>

<h1 align="center">Serendipity HQ PHP CS Fixer Configuration</h1>
<p align="center">A predefined configuration used in Serendipity HQ's projects.</p>
<p align="center">
    <a href="https://github.com/SerendipityHQ/phpcs-config/releases"><img src="https://img.shields.io/packagist/v/serendipity_hq/phpcs-config.svg?style=flat-square"></a>
    <a href="https://opensource.org/licenses/MIT"><img src="https://img.shields.io/badge/license-MIT-brightgreen.svg?style=flat-square"></a>
    <a href="https://github.com/SerendipityHQ/phpcs-config/releases"><img src="https://img.shields.io/packagist/php-v/serendipity_hq/phpcs-config?color=%238892BF&style=flat-square&logo=php" /></a>
</p>

## Current Status

[![Phan](https://github.com/SerendipityHQ/phpcs-config/workflows/Phan/badge.svg)](https://github.com/SerendipityHQ/phpcs-config/actions?query=branch%3Adev)
[![PHPStan](https://github.com/SerendipityHQ/phpcs-config/workflows/PHPStan/badge.svg)](https://github.com/SerendipityHQ/phpcs-config/actions?query=branch%3Adev)
[![PSalm](https://github.com/SerendipityHQ/phpcs-config/workflows/PSalm/badge.svg)](https://github.com/SerendipityHQ/phpcs-config/actions?query=branch%3Adev)
[![PHPUnit](https://github.com/SerendipityHQ/phpcs-config/workflows/PHPunit/badge.svg)](https://github.com/SerendipityHQ/phpcs-config/actions?query=branch%3Adev)
[![Composer](https://github.com/SerendipityHQ/phpcs-config/workflows/Composer/badge.svg)](https://github.com/SerendipityHQ/phpcs-config/actions?query=branch%3Adev)
[![PHP CS Fixer](https://github.com/SerendipityHQ/phpcs-config/workflows/PHP%20CS%20Fixer/badge.svg)](https://github.com/SerendipityHQ/phpcs-config/actions?query=branch%3Adev)

<hr />
<h3 align="center">
    <b>Do you like this library?</b><br />
    <b><a href="#js-repo-pjax-container">LEAVE A &#9733;</a></b>
</h3>
<p align="center">
    or run<br />
    <code>composer global require symfony/thanks && composer thanks</code><br />
    to say thank you to all libraries you use in your current project, this included!
</p>
<hr />

## Install monolog-html-line-formatter via Composer

    $ composer require serendipity_hq/phpcs-config

This library follows the http://semver.org/ versioning conventions.

## How to use Serendipity HQ PHP CS Fixer Config

```php
<?php

// WARNING: This variable is fundamental as the rules array sets the `header_comment` rule and expects the variable exists.
$header = <<<EOF
This file is part of the Serendipity HQ PHP CS Fixer Config.

Copyright (c) Adamo Aerendir Crespi <aerendir@serendipityhq.com>.

For the full copyright and license information, please view the LICENSE
file that was distributed with this source code.
EOF;

$rules = include \SerendipityHQ\Integration\PhpCsFixer\SerendipityHQ::SHQ_LIBRARY;

$finder = PhpCsFixer\Finder::create()
->in([
    __DIR__.'/src',
    __DIR__.'/tests'
]);

$config = new PhpCsFixer\Config();
return $config
    ->setFinder($finder)
    ->setUsingCache(true)
    ->setCacheFile(__DIR__.'/var/cache/.php_cs.cache')
    ->setRiskyAllowed(true)
    ->setRules($rules);

```

To change the rules or their configuration on a per-project basis, simply edit the `$rule` variable and then pass it to the `Config::setRues()` method.

<hr />
<h3 align="center">
    <b>Do you like this library?</b><br />
    <b><a href="#js-repo-pjax-container">LEAVE A &#9733;</a></b>
</h3>
<p align="center">
    or run<br />
    <code>composer global require symfony/thanks && composer thanks</code><br />
    to say thank you to all libraries you use in your current project, this included!
</p>
<hr />
