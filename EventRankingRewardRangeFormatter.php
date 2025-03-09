<?php

namespace App\Models\pjsk\PackFormatters;

class EventRankingRewardRangeFormatter extends AbstractMasterFormatter
{
    public static $FORMATTER = [
        [0, 'fromRank'],
        [1, 'toRank'],
        [2, 'eventRankingRewards', ['EventRankingRewardFormatter']],
    ];
}
