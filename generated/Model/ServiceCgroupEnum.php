<?php

namespace JoliCode\Compose\Model;

enum ServiceCgroupEnum : string
{
    case HOST = 'host';
    case PRIVATE = 'private';
}