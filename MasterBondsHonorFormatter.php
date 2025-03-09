<?php

namespace App\Models\pjsk\PackFormatters;

class MasterBondsHonorFormatter extends AbstractMasterFormatter
{
    public static $FORMATTER = [
        [0, 'id'],
        [1, 'seq'],
        [2, 'bondsGroupId'],
        [3, 'gameCharacterUnitId1'],
        [4, 'gameCharacterUnitId2'],
        [5, 'honorRarity'],
        [6, 'name'],
        [7, 'description'],
        [8, 'levels', ['MasterBondsHonorLevelFormatter']],
        [9, 'configurableUnitVirtualSinger'],
    ];
}
