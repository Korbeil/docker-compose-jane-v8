<?php

namespace JoliCode\Compose\Model;

class BlkioWeight
{
    public function __construct(public string $path, public int $weight)
    {
    }
}