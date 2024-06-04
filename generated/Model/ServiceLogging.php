<?php

namespace JoliCode\Compose\Model;

class ServiceLogging
{
    public function __construct(public string $driver, public mixed $options)
    {
    }
}