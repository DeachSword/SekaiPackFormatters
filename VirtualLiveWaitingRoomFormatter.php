<?php

namespace App\Models\pjsk\PackFormatters;

class VirtualLiveWaitingRoomFormatter extends AbstractMasterFormatter
{
    const FORMATTER = [
        [0, 'id'],
        [1, 'lobbyAssetbundleName'],
        [2, 'startAt'],
        [3, 'endAt'],
    ];
}
