<?php

namespace App\Models\pjsk\PackFormatters;

class MasterHonorLevelFormatter extends AbstractMasterFormatter
{
    public static $FORMATTER = [
        [0, 'level'],
        [1, 'bonus'],
        [2, 'description'],
        [3, 'startAt'],
        [4, 'assetbundleName'],
        [5, 'honorRarity'],
    ];
}
