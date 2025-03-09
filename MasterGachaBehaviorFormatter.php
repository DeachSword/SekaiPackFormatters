<?php

namespace App\Models\pjsk\PackFormatters;

class MasterGachaBehaviorFormatter extends AbstractMasterFormatter
{
    public static $FORMATTER = [
        [0, 'id'],
        [1, 'gachaId'],
        [2, 'gachaBehaviorType'],
        [3, 'costResourceType'],
        [4, 'costResourceId'],
        [5, 'costResourceQuantity'],
        [6, 'spinCount'],
        [7, 'executeLimit'],
        [8, 'gachaExtraId'],
        [9, 'groupId'],
        [10, 'priority'],
        [11, 'resourceCategory'],
        [12, 'gachaSpinnableType'],
    ];
}
