<?php

namespace JoliCode\Compose\Model;

class Volume1
{
    public function __construct(
        public string $name,
        public string $driver,
        public mixed $driverOpts,
        public bool|VolumeExternal1 $external,
        /** @var mixed|string[] */
        public mixed|array $labels
    )
    {
    }
}