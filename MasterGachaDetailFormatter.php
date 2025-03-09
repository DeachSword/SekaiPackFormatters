<?php

namespace App\Models\pjsk\PackFormatters;

class MasterGachaDetailFormatter extends AbstractMasterFormatter
{
    public static $FORMATTER = [
        [0, 'id'],
        [1, 'gachaId'],
        [2, 'cardId'],
        [3, 'weight'],
        [4, 'fixedBonusWeight'],
        [5, 'isWish'],
        [6, 'gachaDetailWishType'],
    ];
}
