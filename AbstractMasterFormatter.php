<?php

namespace App\Models\pjsk\PackFormatters;

abstract class AbstractMasterFormatter
{
    public static $FORMATTER = [];
    private $__headers__;

    function __construct()
    {
        $this->__headers__ = collect();
        $this->pre_read_heads();
    }

    function pre_read_heads()
    {
        foreach (static::$FORMATTER as $key => $value) {
            $this->__headers__[$key] = self::read_head($value);
        }
    }

    function headers()
    {
        return $this->__headers__;
    }

    static function read_head($head_data)
    {
        $fid = $head_data[0];
        $fn = $head_data[1];
        if (isset($head_data[2])) {
            if (is_array($head_data[2])) {
                $_formatter = [SekaiPackHelper::getFormatterByName($head_data[2][0])];
            } else {
                $_formatter = SekaiPackHelper::getFormatterByName($head_data[2]);
            }
            return [$fid, $fn, $_formatter];
        }
        return [$fid, $fn];
    }
}
