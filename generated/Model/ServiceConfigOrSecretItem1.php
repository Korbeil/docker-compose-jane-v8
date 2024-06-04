<?php

namespace JoliCode\Compose\Model;

class ServiceConfigOrSecretItem1
{
    public function __construct(public string $source, public string $target, public string $uid, public string $gid, public float $mode)
    {
    }
}