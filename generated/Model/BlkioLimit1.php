<?php

namespace JoliCode\Compose\Model;

class BlkioLimit1
{
    public function __construct(public string $path, public int|string $rate)
    {
    }
}