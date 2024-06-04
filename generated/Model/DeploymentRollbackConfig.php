<?php

namespace JoliCode\Compose\Model;

class DeploymentRollbackConfig
{
    public function __construct(public int $parallelism, public string $delay, public string $failureAction, public string $monitor, public float $maxFailureRatio, public DeploymentRollbackConfigOrderEnum $order)
    {
    }
}