<?php

namespace JoliCode\Compose\Model;

class Deployment2
{
    public function __construct(public string $mode, public string $endpointMode, public int $replicas, public DeploymentRollbackConfig2 $rollbackConfig, public DeploymentUpdateConfig2 $updateConfig, public DeploymentResources $resources, public DeploymentRestartPolicy2 $restartPolicy, public DeploymentPlacement $placement)
    {
    }
}