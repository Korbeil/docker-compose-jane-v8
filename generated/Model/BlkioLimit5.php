<?php

namespace JoliCode\Compose\Model;

class BlkioLimit5
{
    public function __construct(public string $path, public int|string $rate)
    {
    }
}