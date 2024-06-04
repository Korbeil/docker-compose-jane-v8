<?php

namespace JoliCode\Compose\Model;

class Config1
{
    public function __construct(
        public string $name,
        public string $content,
        public string $environment,
        public string $file,
        public bool|ConfigExternal1 $external,
        /** @var mixed|string[] */
        public mixed|array $labels,
        public string $templateDriver
    )
    {
    }
}