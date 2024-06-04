<?php

namespace JoliCode\Compose\Model;

class BlkioLimit4
{
    public function __construct(public string $path, public int|string $rate)
    {
    }
}