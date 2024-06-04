<?php

namespace JoliCode\Compose\Model;

class NetworkIpamConfigItem1
{
    public function __construct(public string $subnet, public string $ipRange, public string $gateway, public mixed $auxAddresses)
    {
    }
}