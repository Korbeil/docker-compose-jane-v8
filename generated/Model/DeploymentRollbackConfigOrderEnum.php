<?php

namespace JoliCode\Compose\Model;

enum DeploymentRollbackConfigOrderEnum : string
{
    case START_FIRST = 'start-first';
    case STOP_FIRST = 'stop-first';
}