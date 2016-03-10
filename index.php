<?php

/**
 * Sectorr - The simplified PHP framework for creative architects.
 *
 * @package  Sectorr
 * @author   Mirko Kroese <mirkokroese@gmail.com>
 * @author   Janyk Steenbeek <janyksteenbeek@gmail.com>
 */

require_once(__DIR__.'/vendor/autoload.php');
define('PATH', realpath(__DIR__));

echo(new \Sectorr\Core\App())->boot();
