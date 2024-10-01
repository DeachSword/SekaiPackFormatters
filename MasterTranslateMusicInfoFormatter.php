<?php

namespace App\Models\pjsk\PackFormatters;

class MasterTranslateMusicInfoFormatter extends AbstractMasterFormatter
{
    const FORMATTER = [
        [0, 'title'],
        [1, 'creator'],
        [2, 'lyricist'],
        [3, 'composer'],
        [4, 'arranger'],
    ];
}
