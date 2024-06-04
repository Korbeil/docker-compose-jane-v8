<?php

namespace JoliCode\Compose\Model;

class ServiceNetworks1
{
    public function __construct(
        /** @var string[] */
        public array $aliases,
        public string $ipv4Address,
        public string $ipv6Address,
        /** @var string[] */
        public array $linkLocalIps,
        public string $macAddress,
        public mixed $driverOpts,
        public float $priority
    )
    {
    }
}