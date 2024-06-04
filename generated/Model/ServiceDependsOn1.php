<?php

namespace JoliCode\Compose\Model;

class ServiceDependsOn1
{
    public function __construct(public bool|null $restart, public ServiceDependsOnConditionEnum $condition, public bool|null $required = true)
    {
    }
}