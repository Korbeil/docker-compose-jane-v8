<?php

namespace JoliCode\Compose\Model;

class ServiceExtends
{
    public function __construct(public string $service, public string|null $file)
    {
    }
}