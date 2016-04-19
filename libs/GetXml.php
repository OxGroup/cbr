<?php
/**
 * Created by OxGroup.
 * User: Aliaxander
 * Date: 27.11.15
 * Time: 13:19
 */

namespace Ox\Cbr;

abstract class GetXml
{
    protected static function getXML($dateReq = "")
    {
        $url = "http://www.cbr.ru/scripts/XML_daily.asp";
        $curl = curl_init();
        if (!empty($dateReq)) {
            $url .= "?date_req=" . $dateReq;//02/03/2002
        }
        curl_setopt($curl, CURLOPT_URL, $url);
        curl_setopt($curl, CURLOPT_TIMEOUT, 20);
        curl_setopt($curl, CURLOPT_RETURNTRANSFER, 1);
        $result = curl_exec($curl);
        curl_close($curl);
        
        
        $result = @new \SimpleXMLElement($result);
        if (!$result) {
            $result = false;
        }
        
        return $result;
    }
}
