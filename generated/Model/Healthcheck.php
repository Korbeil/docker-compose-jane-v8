<?php

namespace JoliCode\Compose\Model;

class Healthcheck
{
    public function __construct(
        public bool $disable,
        public string $interval,
        public float $retries,
        /** @var string|string[] */
        public string|array $test,
        public string $timeout,
        public string $startPeriod,
        public string $startInterval
    )
    {
    }
}