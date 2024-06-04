<?php

namespace JoliCode\Compose\Model;

class Network
{
    public function __construct(
        public string $name,
        public string $driver,
        public mixed $driverOpts,
        public NetworkIpam $ipam,
        public bool|NetworkExternal $external,
        public bool $internal,
        public bool $enableIpv6,
        public bool $attachable,
        /** @var mixed|string[] */
        public mixed|array $labels
    )
    {
    }
}