<?php

namespace JoliCode\Compose\Model;

class ServiceVolumesItemTmpfs
{
    public function __construct(public int|string $size, public float $mode)
    {
    }
}