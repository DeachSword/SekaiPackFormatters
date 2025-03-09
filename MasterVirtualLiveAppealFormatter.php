<?php

namespace App\Models\pjsk\PackFormatters;

class MasterVirtualLiveAppealFormatter extends AbstractMasterFormatter
{
    public static $FORMATTER = [
        [0, 'id'],
        [1, 'virtualLiveId'],
        [2, 'virtualLiveStageStatus'],
        [3, 'appealText'],
    ];
}
