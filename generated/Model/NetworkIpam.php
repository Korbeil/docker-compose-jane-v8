<?php

namespace JoliCode\Compose\Model;

class NetworkIpam
{
    public function __construct(
        public string $driver,
        /** @var NetworkIpamConfigItem[] */
        public array $config,
        public mixed $options
    )
    {
    }
}