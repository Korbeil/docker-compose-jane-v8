<?php

namespace JoliCode\Compose\Model;

enum ServicePullPolicyEnum : string
{
    case ALWAYS = 'always';
    case NEVER = 'never';
    case IF_NOT_PRESENT = 'if_not_present';
    case BUILD = 'build';
    case MISSING = 'missing';
}