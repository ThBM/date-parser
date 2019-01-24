<?php

require_once __DIR__ . '/../vendor/autoload.php'; // Autoload files using Composer autoload

use \DateParser\DateParser;

var_dump(DateParser::parseFromFrString("4/12/20"));