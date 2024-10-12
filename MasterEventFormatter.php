<?php

namespace App\Models\pjsk\PackFormatters;

class MasterEventFormatter extends AbstractMasterFormatter
{
    const FORMATTER = [
        [0, 'id'],
        [1, 'eventType'],
        [2, 'name'],
        [3, 'assetbundleName'],
        [4, 'bgmAssetbundleName'],
        [5, 'eventPointAssetbundleName'],
        [6, 'eventOnlyComponentDisplayStartAt'],
        [7, 'startAt'],
        [8, 'aggregateAt'],
        [9, 'rankingAnnounceAt'],
        [10, 'distributionStartAt'],
        [11, 'eventOnlyComponentDisplayEndAt'],
        [12, 'closedAt'],
        [13, 'virtualLiveId'],
        [14, 'unit'],
        [15, 'eventRankingRewardRanges', ['EventRankingRewardRangeFormatter']],
        
    ];
}
