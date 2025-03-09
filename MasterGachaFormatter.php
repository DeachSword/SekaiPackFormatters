<?php

namespace App\Models\pjsk\PackFormatters;

class MasterGachaFormatter extends AbstractMasterFormatter
{
    public static $FORMATTER = [
        [0, 'id'],
        [1, 'gachaType'],
        [2, 'name'],
        [3, 'seq'],
        [4, 'assetbundleName'],
        [5, 'startAt'],
        [6, 'endAt'],
        [7, 'isShowPeriod'],
        [8, 'spinLimit'],
        [9, 'gachaCeilItemId'],
        [10, 'wishSelectCount'],
        [11, 'wishFixedSelectCount'],
        [12, 'wishLimitedSelectCount'],
        [13, 'gachaBonusId'],
        [14, 'drawableGachaHour'],
        [15, 'gachaCardRarityRates', ['MasterGachaCardRarityRateFormatter']],
        [16, 'gachaDetails', ['MasterGachaDetailFormatter']],
        [17, 'gachaBehaviors', ['MasterGachaBehaviorFormatter']],
        [18, 'gachaPickups', ['MasterGachaPickupFormatter']],
        [19, 'gachaInformation', 'MasterGachaInformationFormatter']
    ];
}
