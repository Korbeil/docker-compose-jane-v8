<?php

namespace JoliCode\Compose\Model;

class ServiceConfigOrSecretItem4
{
    public function __construct(public string $source, public string $target, public string $uid, public string $gid, public float $mode)
    {
    }
}