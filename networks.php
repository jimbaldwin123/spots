<?php
require_once('readdata.php');

$result = array();
foreach($tv_spots as $key=>$spot){
    if($spot['network'] == $_GET['network'] || $_GET['network'] == ''){
        // This accomodates multiple shows per network
        $result[$key] = $spot;
        // $result[] = $spot['network'];
    }
}
$out="
            <tr>
                <th>Date</th>
                <th>Network</th>
                <th>Spot Cost</th>
                <th>Duration</th>
                <th>Program</th>
            </tr>
";
        foreach($result as $spotkey => $spot){

            $out.= "<tr>
                <td>$spotkey</td>
                <td>{$spot[network]}</td>
                <td><input class=\"spotcost\" id =\"$spotkey\" type=\"text\" name=\"spot_cost\" size=\"4\" value=\"{$spot['spot_cost']}\"></td>
                <td>{$spot['duration']}</td>
                <td>{$spot['program']}</td>
                </tr>
            ";
        }
        
        
echo $out;

?>