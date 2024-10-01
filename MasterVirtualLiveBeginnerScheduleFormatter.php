<?php

namespace App\Models\pjsk\PackFormatters;

class MasterVirtualLiveBeginnerScheduleFormatter extends AbstractMasterFormatter
{
    const FORMATTER = [
        [0, 'id'],
        [1, 'virtualLiveId'],
        [2, 'dayOfWeek'],
        [3, 'startTime'],
        [4, 'endTime'],
    ];
}
