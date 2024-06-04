<?php

namespace JoliCode\Compose\Model;

class GenericResourcesItemDiscreteResourceSpec
{
    public function __construct(public string $kind, public float $value)
    {
    }
}