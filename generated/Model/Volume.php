<?php

namespace JoliCode\Compose\Model;

class Volume
{
    public function __construct(
        public string $name,
        public string $driver,
        public mixed $driverOpts,
        public bool|VolumeExternal $external,
        /** @var mixed|string[] */
        public mixed|array $labels
    )
    {
    }
}