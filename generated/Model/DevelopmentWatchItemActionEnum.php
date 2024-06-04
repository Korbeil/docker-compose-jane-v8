<?php

namespace JoliCode\Compose\Model;

enum DevelopmentWatchItemActionEnum : string
{
    case REBUILD = 'rebuild';
    case SYNC = 'sync';
    case SYNC_RESTART = 'sync+restart';
}