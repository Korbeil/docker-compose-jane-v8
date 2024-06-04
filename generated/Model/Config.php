<?php

namespace JoliCode\Compose\Model;

class Config
{
    public function __construct(
        public string $name,
        public string $content,
        public string $environment,
        public string $file,
        public bool|ConfigExternal $external,
        /** @var mixed|string[] */
        public mixed|array $labels,
        public string $templateDriver
    )
    {
    }
}