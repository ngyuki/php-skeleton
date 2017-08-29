<?php
/* @var $loader Composer\Autoload\ClassLoader */
$loader = require __DIR__ . '/../vendor/autoload.php';
$loader->addPsr4('ngyuki\\Skeleton\\Tests\\', __DIR__);

$reflection = new ReflectionClass('PHPUnit_Framework_Assert');
/** @noinspection PhpIncludeInspection */
require_once dirname($reflection->getFileName()) . '/Assert/Functions.php';
