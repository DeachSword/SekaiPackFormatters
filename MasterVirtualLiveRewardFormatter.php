<?php

namespace App\Models\pjsk\PackFormatters;

class MasterVirtualLiveRewardFormatter extends AbstractMasterFormatter
{
    public static $FORMATTER = [
        [0, 'virtualLiveType'],
        [1, 'resourceBoxId'],
    ];
}
