<?php

namespace JoliCode\Compose\Model;

class EnvFileItem2
{
    public function __construct(public string $path, public bool|null $required = true)
    {
    }
}