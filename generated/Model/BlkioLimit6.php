<?php

namespace JoliCode\Compose\Model;

class BlkioLimit6
{
    public function __construct(public string $path, public int|string $rate)
    {
    }
}