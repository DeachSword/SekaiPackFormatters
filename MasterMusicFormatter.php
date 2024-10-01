<?php

namespace App\Models\pjsk\PackFormatters;

class MasterMusicFormatter extends AbstractMasterFormatter
{
    const FORMATTER = [
        [0, 'id'],
        [1, 'seq'],
        [2, 'releaseConditionId'],
        [3, 'categories', ['MusicCategorieFormatter']],
        [4, 'title'],
        [5, 'pronunciation'],
        [6, 'creatorArtistId'],
        [7, 'lyricist'],
        [8, 'composer'],
        [9, 'arranger'],
        [10, 'dancerCount'],
        [11, 'selfDancerPosition'],
        [12, 'assetbundleName'],
        [13, 'publishedAt'],
        [14, 'releasedAt'],
        [15, 'fillerSec'],
        [16, 'infos'],
        [17, 'musicCollaborationId'],
        [18, 'isNewlyWrittenMusic'],
        [19, 'isFullLength'],
    ];
}
