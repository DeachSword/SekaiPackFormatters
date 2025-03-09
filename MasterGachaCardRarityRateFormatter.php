<?php

namespace App\Models\pjsk\PackFormatters;

class MasterGachaCardRarityRateFormatter extends AbstractMasterFormatter
{
    public static $FORMATTER = [
        [0, 'cardRarityType'],
        [1, 'lotteryType'],  // 1
        [2, 'rate'],  // 2
    ];
}
