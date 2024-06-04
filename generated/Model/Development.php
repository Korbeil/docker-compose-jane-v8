<?php

namespace JoliCode\Compose\Model;

class Development
{
    public function __construct(
        /** @var DevelopmentWatchItem[] */
        public array $watch
    )
    {
    }
}