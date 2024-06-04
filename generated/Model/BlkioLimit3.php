<?php

namespace JoliCode\Compose\Model;

class BlkioLimit3
{
    public function __construct(public string $path, public int|string $rate)
    {
    }
}