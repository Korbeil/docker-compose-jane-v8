<?php

require_once __DIR__ . '/vendor/autoload.php';

use Jane\Component\JsonSchemaGenerator\Configuration;
use Jane\Component\JsonSchemaGenerator\Generator;

$generator = new Generator(new Configuration(
  outputDirectory: __DIR__.'/generated/',
  baseNamespace: 'JoliCode\\Compose',
));

$generator->fromPath(__DIR__ . '/compose-spec.json', 'Compose');
