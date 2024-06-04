<?php

namespace JoliCode\Compose\Model;

class ServiceBuild
{
    public function __construct(
        public string $context,
        public string $dockerfile,
        public string $dockerfileInline,
        /** @var string[] */
        public array $entitlements,
        /** @var mixed|string[] */
        public mixed|array $args,
        /** @var mixed|string[] */
        public mixed|array $ssh,
        /** @var mixed|string[] */
        public mixed|array $labels,
        /** @var string[] */
        public array $cacheFrom,
        /** @var string[] */
        public array $cacheTo,
        public bool $noCache,
        /** @var mixed|string[] */
        public mixed|array $additionalContexts,
        public string $network,
        public bool $pull,
        public string $target,
        public int|string $shmSize,
        /** @var mixed|string[] */
        public mixed|array $extraHosts,
        public string $isolation,
        public bool $privileged,
        /** @var string|ServiceConfigOrSecretItem1[] */
        public array $secrets,
        /** @var string[] */
        public array $tags,
        public mixed $ulimits,
        /** @var string[] */
        public array $platforms
    )
    {
    }
}