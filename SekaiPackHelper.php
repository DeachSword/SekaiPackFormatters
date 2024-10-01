<?php

namespace App\Models\pjsk\PackFormatters;

class SekaiPackHelper
{
    const VERSION = "v1.0.1";
    const MAP_FORMATTERS = [
        'MasterMusicFormatter' => MasterMusicFormatter::class,
        'MusicCategorieFormatter' => MusicCategorieFormatter::class,
        'MasterTranslateMusicInfoFormatter' => MasterTranslateMusicInfoFormatter::class,
        'MasterVirtualLiveFormatter' => MasterVirtualLiveFormatter::class,
        'MasterVirtualLiveSetlistFormatter' => MasterVirtualLiveSetlistFormatter::class,
        'MasterVirtualLiveScheduleFormatter' => MasterVirtualLiveScheduleFormatter::class,
        'MasterVirtualLiveBeginnerScheduleFormatter' => MasterVirtualLiveBeginnerScheduleFormatter::class,
        'MasterVirtualLiveCharacterFormatter' => MasterVirtualLiveCharacterFormatter::class,
        'MasterVirtualLiveRewardFormatter' => MasterVirtualLiveRewardFormatter::class,
        'VirtualLiveWaitingRoomFormatter' => VirtualLiveWaitingRoomFormatter::class,
        'MasterVirtualItemFormatter' => MasterVirtualItemFormatter::class,
        'MasterVirtualLiveAppealFormatter' => MasterVirtualLiveAppealFormatter::class,
        'MasterVirtualLiveBackgroundMusicFormatter' => MasterVirtualLiveBackgroundMusicFormatter::class,
        'MasterVirtualLiveInformationFormatter' => MasterVirtualLiveInformationFormatter::class,
        'MasterMusicDifficultyFormatter' => MasterMusicDifficultyFormatter::class,
    ];

    public static function getFormatterByName(string $name)
    {
        $formatter = self::MAP_FORMATTERS[$name] ?? null;
        if (!is_subclass_of($formatter, AbstractMasterFormatter::class)) {
            throw new \InvalidArgumentException("Invalid formatter: $name");
        }

        return new $formatter;
    }

    public static function serializeDatas(?array $data, AbstractMasterFormatter $formatter)
    {
        return collect($data)->map(function ($item) use ($formatter) {
            return self::serializeData($item, $formatter);
        })->toArray();
    }

    public static function serializeData(array $data, AbstractMasterFormatter $formatter)
    {
        return collect($formatter::FORMATTER)->mapWithKeys(function ($item) use ($data) {
            $_data = $data[$item[0]] ?? null;
            if (isset($item[2])) {
                if (is_array($item[2])){
                    $_formatter = self::getFormatterByName($item[2][0]);
                    $_data = self::serializeDatas($_data, $_formatter);
                }else{
                    $_formatter = self::getFormatterByName($item[2]);
                    $_data = self::serializeData($_data, $_formatter);
                }

            }
            return [$item[1] => $_data];
        })->toArray();
    }

    public static function serializeDataByName(array $data, string $formatter_name)
    {
        $formatter = self::getFormatterByName($formatter_name);
        if ($formatter != null) {
            return self::serializeDatas($data, $formatter);
        }
        return [];
    }
}
