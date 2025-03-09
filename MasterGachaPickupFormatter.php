<?php

namespace App\Models\pjsk\PackFormatters;

class MasterGachaPickupFormatter extends AbstractMasterFormatter
{
    public static $FORMATTER = [
        [0, 'gachaId'],
        [1, 'cardId'],
    ];
}
