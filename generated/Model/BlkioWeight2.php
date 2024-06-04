<?php

namespace JoliCode\Compose\Model;

class BlkioWeight2
{
    public function __construct(public string $path, public int $weight)
    {
    }
}