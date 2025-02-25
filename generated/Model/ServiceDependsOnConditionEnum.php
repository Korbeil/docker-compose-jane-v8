<?php

namespace JoliCode\Compose\Model;

enum ServiceDependsOnConditionEnum : string
{
    case SERVICE_STARTED = 'service_started';
    case SERVICE_HEALTHY = 'service_healthy';
    case SERVICE_COMPLETED_SUCCESSFULLY = 'service_completed_successfully';
}