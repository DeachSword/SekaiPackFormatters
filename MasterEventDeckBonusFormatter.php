<?php

namespace App\Models\pjsk\PackFormatters;

class MasterEventDeckBonusFormatter extends AbstractMasterFormatter
{
    public static $FORMATTER = [
        [0, 'id'],
        [1, 'eventId'],
        [2, 'gameCharacterUnitId'],
        [3, 'cardAttr'],
        [4, 'bonusRate'],
    ];
}
