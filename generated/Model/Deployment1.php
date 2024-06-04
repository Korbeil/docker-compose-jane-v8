<?php

namespace JoliCode\Compose\Model;

class Deployment1
{
    public function __construct(public string $mode, public string $endpointMode, public int $replicas, public DeploymentRollbackConfig1 $rollbackConfig, public DeploymentUpdateConfig1 $updateConfig, public DeploymentResources $resources, public DeploymentRestartPolicy1 $restartPolicy, public DeploymentPlacement $placement)
    {
    }
}