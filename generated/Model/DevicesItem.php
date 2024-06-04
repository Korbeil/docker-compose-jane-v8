<?php

namespace JoliCode\Compose\Model;

class DevicesItem
{
    public function __construct(
        /** @var string[] */
        public array $capabilities,
        public string|int $count,
        /** @var string[] */
        public array $deviceIds,
        public string $driver,
        /** @var mixed|string[] */
        public mixed|array $options
    )
    {
    }
}