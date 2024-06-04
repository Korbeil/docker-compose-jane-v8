<?php

namespace JoliCode\Compose\Model;

class Compose
{
    public function __construct(
        public string $version,
        public string $name,
        /** @var string|_Include1[] */
        public array $include,
        public mixed $services,
        public mixed $networks,
        public mixed $volumes,
        public mixed $secrets,
        public mixed $configs
    )
    {
    }
}