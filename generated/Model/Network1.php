<?php

namespace JoliCode\Compose\Model;

class Network1
{
    public function __construct(
        public string $name,
        public string $driver,
        public mixed $driverOpts,
        public NetworkIpam1 $ipam,
        public bool|NetworkExternal1 $external,
        public bool $internal,
        public bool $enableIpv6,
        public bool $attachable,
        /** @var mixed|string[] */
        public mixed|array $labels
    )
    {
    }
}