<?php

namespace JoliCode\Compose\Model;

class ServiceVolumesItem1
{
    public function __construct(public string $type, public string|null $source, public string|null $target, public bool|null $readOnly, public string|null $consistency, public ServiceVolumesItemBind1|null $bind, public ServiceVolumesItemVolume1|null $volume, public ServiceVolumesItemTmpfs1|null $tmpfs)
    {
    }
}