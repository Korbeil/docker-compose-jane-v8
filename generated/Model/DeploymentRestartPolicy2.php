<?php

namespace JoliCode\Compose\Model;

class DeploymentRestartPolicy2
{
    public function __construct(public string $condition, public string $delay, public int $maxAttempts, public string $window)
    {
    }
}