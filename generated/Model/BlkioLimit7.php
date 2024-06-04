<?php

namespace JoliCode\Compose\Model;

class BlkioLimit7
{
    public function __construct(public string $path, public int|string $rate)
    {
    }
}