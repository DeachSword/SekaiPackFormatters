<?php

namespace App\Models\pjsk\PackFormatters;

class MasterVirtualLiveInformationFormatter extends AbstractMasterFormatter
{
    const FORMATTER = [
        [0, 'virtualLiveId'],
        [1, 'summary'],
        [2, 'description'],
    ];
}
