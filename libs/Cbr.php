<?php
/**
 * Created by PhpStorm.
 * User: Aliaxander
 * Date: 27.11.15
 * Time: 13:18
 */

namespace Ox\Cbr;


class Cbr extends AbstractModel
{

    public static function getCourse()
    {
        return self::readXmlToJson(static::getXML());
    }

    private static function readXmlToJson($xml){
        $json=json_encode($xml);

        $result=array();
        foreach($xml as $val){
            $val=(array)$val;
            $result[$val['CharCode']]=array("charCode"=> $val['CharCode'],
                "nominal"=> $val['Nominal'],
                "name" => $val['Nominal'],
                "value" => $val['Value'],
                );
        }
        return json_encode($result);
    }

}