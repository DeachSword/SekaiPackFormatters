<?php

namespace App\Models\pjsk\PackFormatters;

class MasterCardFormatter extends AbstractMasterFormatter
{
    public static $FORMATTER = [
        [0, 'id'],
        [1, 'seq'],
        [2, 'characterId'],
        [3, 'cardRarityType'],
        [4, 'specialTrainingPower1BonusFixed'],
        [5, 'specialTrainingPower2BonusFixed'],
        [6, 'specialTrainingPower3BonusFixed'],
        [7, 'attr'],
        [8, 'supportUnit'],
        [9, 'skillId'],
        [10, 'cardSkillName'],
        [11, 'prefix'],
        [12, 'assetbundleName'],
        [13, 'gachaPhrase'],
        [14, 'archiveDisplayType'],
        [15, 'archivePublishedAt'],
        [16, 'cardParameters', 'MasterCardParametersFormatter'],
        [17, 'specialTrainingCosts', ['MasterSpecialTrainingCostFormatter']],
        [18, 'masterLessonAchieveResources', ['MasterMasterLessonAchieveResource']],
        [19, 'releaseAt'],
    ];
}