<?php

namespace App\Models\pjsk\PackFormatters;

class MasterMusicDifficultyFormatter extends AbstractMasterFormatter
{
    const FORMATTER = [
        [0, 'id'],
        [1, 'musicId'],
        [2, 'musicDifficulty'],
        [3, 'playLevel'],
        [4, 'releaseConditionId'],
        [5, 'totalNoteCount'],
    ];
}
