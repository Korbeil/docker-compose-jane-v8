<?php

namespace JoliCode\Compose\Model;

class ServiceBlkioConfig1
{
    public function __construct(
        /** @var BlkioLimit5[] */
        public array $deviceReadBps,
        /** @var BlkioLimit6[] */
        public array $deviceReadIops,
        /** @var BlkioLimit7[] */
        public array $deviceWriteBps,
        /** @var BlkioLimit8[] */
        public array $deviceWriteIops,
        public int $weight,
        /** @var BlkioWeight2[] */
        public array $weightDevice
    )
    {
    }
}