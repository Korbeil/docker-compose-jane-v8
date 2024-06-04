<?php

namespace JoliCode\Compose\Model;

class ServiceExtends1
{
    public function __construct(public string $service, public string|null $file)
    {
    }
}