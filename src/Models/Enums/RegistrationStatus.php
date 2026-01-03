<?php

namespace Spatie\UptimeMonitor\Models\Enums;

class RegistrationStatus
{
    public const NOT_YET_CHECKED = 'not yet checked';
    public const ACTIVE = 'active';
    public const INACTIVE = 'inactive';
    public const PENDING = 'pending';
    public const SUSPENDED = 'suspended';
    public const EXPIRED = 'expired';
    public const RESERVED = 'reserved';
    public const LOCKED = 'locked';
    public const PENDING_DELETE = 'pending delete';
    public const REDEMPTION_PERIOD = 'redemption period';
    public const PENDING_RESTORE = 'pending restore';
}
