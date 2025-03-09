<?php

namespace App\Models\pjsk\PackFormatters;

class MasterHonorFormatter extends AbstractMasterFormatter
{
    public static $FORMATTER = [
        [0, 'id'],
        [1, 'seq'],
        [2, 'groupId'],
        [3, 'honorRarity'],
        [4, 'name'],
        [5, 'assetbundleName'],
        [6, 'honorTypeId'],
        [7, 'honorMissionType'],
        [8, 'startAt'],
        [9, 'levels', ['MasterHonorLevelFormatter']],
    ];
}
