<?php

namespace JoliCode\Compose\Model;

class DeploymentPlacement
{
    public function __construct(
        /** @var string[] */
        public array $constraints,
        /** @var DeploymentPlacementPreferencesItem[] */
        public array $preferences,
        public int $maxReplicasPerNode
    )
    {
    }
}