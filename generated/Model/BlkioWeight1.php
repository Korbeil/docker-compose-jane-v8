<?php

namespace JoliCode\Compose\Model;

class BlkioWeight1
{
    public function __construct(public string $path, public int $weight)
    {
    }
}