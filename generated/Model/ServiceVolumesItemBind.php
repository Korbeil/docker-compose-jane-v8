<?php

namespace JoliCode\Compose\Model;

class ServiceVolumesItemBind
{
    public function __construct(public string $propagation, public bool $createHostPath, public ServiceVolumesItemBindSelinuxEnum $selinux)
    {
    }
}