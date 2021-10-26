<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Xml extends Model
{
    protected $guarded = [];

    public static function getFileHashXML($xml){
        $xmlData = null;
        $xml = (string) $xml;
        $xmlQuery = self::query();
        $xmlData = $xmlQuery->where('link_xml', $xml)->first();
        if ($xmlData !== null){
            $xmlData->toArray();
        }
        return $xmlData;
    }
}
