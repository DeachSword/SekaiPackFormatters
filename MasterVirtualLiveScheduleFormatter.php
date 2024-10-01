<?php

namespace App\Models\pjsk\PackFormatters;

class MasterVirtualLiveScheduleFormatter extends AbstractMasterFormatter
{
    const FORMATTER = [
        [0, 'id'],
        [1, 'virtualLiveId'],
        [2, 'seq'],
        [3, 'startAt'],
        [4, 'endAt'],
        [5, 'noticeGroupId'],
    ];
}
