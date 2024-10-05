<?php

namespace App\Models\pjsk\PackFormatters;

class MasterShopItemFormatter extends AbstractMasterFormatter
{
    const FORMATTER = [
        [0, 'id'],
        [1, 'shopId'],
        [2, 'seq'],
        [3, 'releaseConditionId'],
        [4, 'resourceBoxId'],
        [5, 'costs', ['MasterShopItemCostFormatter']],
        [6, 'startAt'],
        [7, 'endAt'],
    ];
}
