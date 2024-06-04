<?php

namespace JoliCode\Compose\Model;

class ServiceCredentialSpec
{
    public function __construct(public string $config, public string $file, public string $registry)
    {
    }
}