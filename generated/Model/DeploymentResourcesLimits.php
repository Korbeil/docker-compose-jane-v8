<?php

namespace JoliCode\Compose\Model;

class DeploymentResourcesLimits
{
    public function __construct(public float|string $cpus, public string $memory, public int $pids)
    {
    }
}