<?php

namespace JoliCode\Compose\Model;

class ServiceBlkioConfig
{
    public function __construct(
        /** @var BlkioLimit1[] */
        public array $deviceReadBps,
        /** @var BlkioLimit2[] */
        public array $deviceReadIops,
        /** @var BlkioLimit3[] */
        public array $deviceWriteBps,
        /** @var BlkioLimit4[] */
        public array $deviceWriteIops,
        public int $weight,
        /** @var BlkioWeight1[] */
        public array $weightDevice
    )
    {
    }
}