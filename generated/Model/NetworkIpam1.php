<?php

namespace JoliCode\Compose\Model;

class NetworkIpam1
{
    public function __construct(
        public string $driver,
        /** @var NetworkIpamConfigItem1[] */
        public array $config,
        public mixed $options
    )
    {
    }
}