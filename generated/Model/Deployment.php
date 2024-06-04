<?php

namespace JoliCode\Compose\Model;

class Deployment
{
    public function __construct(public string $mode, public string $endpointMode, public int $replicas, public DeploymentRollbackConfig $rollbackConfig, public DeploymentUpdateConfig $updateConfig, public DeploymentResources $resources, public DeploymentRestartPolicy $restartPolicy, public DeploymentPlacement $placement)
    {
    }
}