<?php

namespace App\Models\pjsk\PackFormatters;

class MasterMusicTagFormatter extends AbstractMasterFormatter
{
    public static $FORMATTER = [
        [0, 'musicId'],
        [1, 'musicTag'],
    ];
}
