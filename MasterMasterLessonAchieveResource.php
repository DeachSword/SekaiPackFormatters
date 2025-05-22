<?php

namespace App\Models\pjsk\PackFormatters;

class MasterMasterLessonAchieveResource extends AbstractMasterFormatter
{
    public static $FORMATTER = [
        [0, 'masterRank'],
        [1, 'resources', ['UserResourceFormatter']],
    ];
}
