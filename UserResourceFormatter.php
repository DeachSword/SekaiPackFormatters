<?php

namespace App\Models\pjsk\PackFormatters;

class UserResourceFormatter extends AbstractMasterFormatter
{
    const FORMATTER = [
        [0, 'resourceId'],
        [1, 'resourceType'],
        [2, 'resourceLevel'],
        [3, 'quantity'],
    ];
}
