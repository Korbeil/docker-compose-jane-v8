<?php

namespace JoliCode\Compose\Model;

class ServiceVolumesItemVolume
{
    public function __construct(public bool $nocopy, public string $subpath)
    {
    }
}