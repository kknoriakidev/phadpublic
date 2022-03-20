<?php
use xPaw\SourceQuery\SourceQuery;

define( 'SQ_TIMEOUT',     1 );
define( 'SQ_ENGINE',      SourceQuery::SOURCE );

$Query = new SourceQuery();
$information = array();

for ($i=0;$i<sizeof($servers);$i++) {
    try
    {
        $Query->Connect($servers[$i]['ip'], $servers[$i]['port'], SQ_TIMEOUT, SQ_ENGINE);
        foreach ($Query->GetInfo() as $infoKey => $infoValue) {
            $information[$i][$infoKey] = $infoValue;
        }
        $information[$i]['GameIp'] = $servers[$i]['ip'];
        $information[$i]['Online'] = round($information[$i]['Players']*100/$information[$i]['MaxPlayers']);

        $map_name = $information[$i]['Map'];
        if (strpos($map_name, 'workshop') !== false) {
            $arr = explode('/', $map_name);
            $map_file = $arr[2] . '.jpg';
        } else {
            $map_file = $map_name . '.jpg';
        }
        $information[$i]['Image'] = (file_exists('assets/images/maps/' . $map_file)) ? $map_file : 'de_dust2.jpg';
    }
    catch (Exception $e)
    {
        $information[$i]['Error'] = $e->getMessage();
        $information[$i]['GameIp'] = $servers[$i]['ip'];
        $information[$i]['GamePort'] = $servers[$i]['port'];
    }
    finally
    {
        $Query->Disconnect( );
    }
}
