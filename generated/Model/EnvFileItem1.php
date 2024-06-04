<?php

namespace JoliCode\Compose\Model;

class EnvFileItem1
{
    public function __construct(public string $path, public bool|null $required = true)
    {
    }
}