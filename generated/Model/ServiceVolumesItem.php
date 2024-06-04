<?php

namespace JoliCode\Compose\Model;

class ServiceVolumesItem
{
    public function __construct(public string $type, public string|null $source, public string|null $target, public bool|null $readOnly, public string|null $consistency, public ServiceVolumesItemBind|null $bind, public ServiceVolumesItemVolume|null $volume, public ServiceVolumesItemTmpfs|null $tmpfs)
    {
    }
}