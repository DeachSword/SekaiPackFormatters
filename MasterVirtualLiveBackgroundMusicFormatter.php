<?php

namespace App\Models\pjsk\PackFormatters;

class MasterVirtualLiveBackgroundMusicFormatter extends AbstractMasterFormatter
{
    public static $FORMATTER = [
        [0, 'id'],
        [1, 'virtualLiveId'],
        [2, 'backgroundMusicId'],
    ];
}
