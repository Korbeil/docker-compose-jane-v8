<?php

namespace JoliCode\Compose\Model;

class ServiceVolumesItemBind1
{
    public function __construct(public string $propagation, public bool $createHostPath, public ServiceVolumesItemBindSelinuxEnum $selinux)
    {
    }
}