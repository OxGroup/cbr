<?php
/**
 * Created by PhpStorm.
 * User: Aliaxander
 * Date: 27.11.15
 * Time: 13:18
 */

namespace Ox\Cbr;

class Cbr extends GetXml
{
    
    public static function getCourse($date = "")
    {
        return self::readXmlToJson(static::getXML($date));
    }
    
    private static function readXmlToJson($xml)
    {
        $result = array();
        foreach ($xml as $val) {
            $val = (array)$val;
            $result[$val['CharCode']] = array(
                "charCode" => $val['CharCode'],
                "nominal" => $val['Nominal'],
                "name" => $val['Nominal'],
                "value" => $val['Value'],
            );
        }
        
        return json_encode($result);
    }
}
