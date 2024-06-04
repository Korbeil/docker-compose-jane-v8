<?php

namespace JoliCode\Compose\Model;

class DeploymentResourcesReservations
{
    public function __construct(public float|string $cpus, public string $memory)
    {
    }
}