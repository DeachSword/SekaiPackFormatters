<?php

namespace App\Models\pjsk\PackFormatters;

class MasterSpecialTrainingCostFormatter extends AbstractMasterFormatter
{
    public static $FORMATTER = [
        [0, 'cardId'],
        [1, 'seq'],
        [2, 'cost', 'UserResourceFormatter']
    ];
}
