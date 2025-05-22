<?php

namespace App\Models\pjsk\PackFormatters;

class MasterStampFormatter extends AbstractMasterFormatter
{
    public static $FORMATTER = [
        [0, 'id'],
        [1, 'stampType'],
        [2, 'seq'],
        [3, 'name'],
        [4, 'assetbundleName'],
        [5, 'balloonAssetbundleName'],
        [6, 'characterId1'],
        [7, 'characterId2'],
        [8, 'characterId3'],
        [9, 'characterId4'],
        [10, 'characterId5'],
        [11, 'gameCharacterUnitId'],
        [12, 'archiveDisplayType'],
        [13, 'archivePublishedAt'],
        [14, 'description'],
    ];
}
