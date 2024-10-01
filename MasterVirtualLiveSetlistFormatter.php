<?php

namespace App\Models\pjsk\PackFormatters;

class MasterVirtualLiveSetlistFormatter extends AbstractMasterFormatter
{
    const FORMATTER = [
        [0, 'id'],
        [1, 'seq'],
        [2, 'virtualLiveSetlistType'],
        [3, 'assetbundleName'],
        [4, 'virtualLiveStageId'],
        [5, 'musicVocalId'],
        [6, 'character3dId1'],
        [7, 'character3dId2'],
        [8, 'character3dId3'],
        [9, 'character3dId4'],
        [10, 'character3dId5'],
        [11, 'character3dId6'],
        [12, 'virtualLiveId'],
        [13, 'musicId'],
    ];
}
