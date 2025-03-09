<?php

namespace App\Models\pjsk\PackFormatters;

class MusicCategorieFormatter extends AbstractMasterFormatter
{
    public static $FORMATTER = [
        [0, 'musicCategoryName'],
        [1, 'startAt'],
    ];
}
