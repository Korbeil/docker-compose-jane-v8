<?php

namespace JoliCode\Compose\Model;

class Ulimits
{
    public function __construct(public int $hard, public int $soft)
    {
    }
}