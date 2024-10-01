<?php

namespace App\Models\pjsk\PackFormatters;

class MasterVirtualLiveFormatter extends AbstractMasterFormatter
{
    const FORMATTER = [
        [0, 'id'],
        [1, 'virtualLiveType'],
        [2, 'virtualLivePlatform'],
        [3, 'seq'],
        [4, 'name'],
        [5, 'assetbundleName'],
        [6, 'screenMvMusicVocalId'],
        [7, 'startAt'],
        [8, 'endAt'],
        [9, 'rankingAnnounceAt'],
        [10, 'archiveReleaseConditionId'],
        [11, 'virtualLiveSetlists', ['MasterVirtualLiveSetlistFormatter']],
        [12, 'virtualLiveBeginnerSchedules', ['MasterVirtualLiveBeginnerScheduleFormatter']],
        [13, 'virtualLiveSchedules', ['MasterVirtualLiveScheduleFormatter']],
        [14, 'virtualLiveCharacters', ['MasterVirtualLiveCharacterFormatter']],
        [15, 'virtualLiveRewards', ['MasterVirtualLiveRewardFormatter']],
        [16, 'virtualLiveWaitingRoom', 'VirtualLiveWaitingRoomFormatter'],
        [17, 'virtualItems', ['MasterVirtualItemFormatter']],
        [18, 'virtualLiveAppeals', ['MasterVirtualLiveAppealFormatter']],
        [19, 'virtualLiveBackgroundMusics', ['MasterVirtualLiveBackgroundMusicFormatter']],
        [20, 'virtualLiveInformation', 'MasterVirtualLiveInformationFormatter'],
    ];
}
