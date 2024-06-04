<?php

namespace JoliCode\Compose\Model;

class Secret1
{
    public function __construct(
        public string $name,
        public string $environment,
        public string $file,
        public bool|SecretExternal1 $external,
        /** @var mixed|string[] */
        public mixed|array $labels,
        public string $driver,
        public mixed $driverOpts,
        public string $templateDriver
    )
    {
    }
}