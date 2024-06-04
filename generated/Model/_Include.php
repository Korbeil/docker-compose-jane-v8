<?php

namespace JoliCode\Compose\Model;

class _Include
{
    public function __construct(public string $path, public string $envFile, public string $projectDirectory)
    {
    }
}