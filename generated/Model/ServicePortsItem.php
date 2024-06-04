<?php

namespace JoliCode\Compose\Model;

class ServicePortsItem
{
    public function __construct(public string $name, public string $mode, public string $hostIp, public int $target, public string|int $published, public string $protocol, public string $appProtocol)
    {
    }
}