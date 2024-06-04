<?php

namespace JoliCode\Compose\Model;

class BlkioLimit
{
    public function __construct(public string $path, public int|string $rate)
    {
    }
}