<?php

namespace App\Models\pjsk\PackFormatters;

class MasterBondsHonorLevelFormatter extends AbstractMasterFormatter
{
    public static $FORMATTER = [
        [0, 'id'],
        [1, 'bondsHonorId'],
        [2, 'level'],
        [3, 'description'],
    ];
}
