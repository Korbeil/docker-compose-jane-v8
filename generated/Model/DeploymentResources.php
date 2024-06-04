<?php

namespace JoliCode\Compose\Model;

class DeploymentResources
{
    public function __construct(public DeploymentResourcesLimits $limits, public DeploymentResourcesReservations $reservations)
    {
    }
}