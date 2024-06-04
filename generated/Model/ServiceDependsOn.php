<?php

namespace JoliCode\Compose\Model;

class ServiceDependsOn
{
    public function __construct(public bool|null $restart, public ServiceDependsOnConditionEnum $condition, public bool|null $required = true)
    {
    }
}