<?php

namespace JoliCode\Compose\Model;

class EnvFileItem
{
    public function __construct(public string $path, public bool|null $required = true)
    {
    }
}