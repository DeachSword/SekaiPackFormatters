<?php

namespace App\Models\pjsk\PackFormatters;

class MasterGachaInformationFormatter extends AbstractMasterFormatter
{
    public static $FORMATTER = [
        [0, 'gachaId'],
        [1, 'summary'],
        [2, 'description'],
    ];
}
