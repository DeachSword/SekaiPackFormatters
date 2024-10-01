<?php

namespace App\Models\pjsk\PackFormatters;

class MasterVirtualItemFormatter extends AbstractMasterFormatter
{
    const FORMATTER = [
        [0, 'id'],
        [1, 'virtualItemCategory'],
        [2, 'seq'],
        [3, 'priority'],
        [4, 'name'],
        [5, 'assetbundleName'],
        [6, 'costVirtualCoin'],
        [7, 'costJewel'],
        [8, 'effectAssetbundleName'],
        [9, 'effectExpressionType'],
        [10, 'virtualItemLabelType'],
        [11, 'gameCharacterUnitId'],
        [12, 'unit'],
    ];
}
