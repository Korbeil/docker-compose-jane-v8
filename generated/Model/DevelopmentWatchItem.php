<?php

namespace JoliCode\Compose\Model;

class DevelopmentWatchItem
{
    public function __construct(
        /** @var string[]|null */
        public array|null $ignore,
        public string $path,
        public DevelopmentWatchItemActionEnum $action,
        public string|null $target
    )
    {
    }
}