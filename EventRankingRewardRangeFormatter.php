<?php

namespace App\Models\pjsk\PackFormatters;

class EventRankingRewardRangeFormatter extends AbstractMasterFormatter
{
    const FORMATTER = [
        [0, 'fromRank'],
        [1, 'toRank'],
        [2, 'eventRankingRewards', ['EventRankingRewardFormatter']],
    ];
}
