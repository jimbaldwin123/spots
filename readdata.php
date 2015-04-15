<?php
require_once('../dbconfig.php');

$q = $dbh->prepare("select * from cloudone");
if(!$q->execute()) {
    require_once('netlist.php');

}else{
    while ($row = $q->fetch(PDO::FETCH_ASSOC)) {
        $tv_spots[$row['air_date']] = array('network'=>$row['network'],'spot_cost'=>$row['spot_cost'],'duration'=>$row['duration'],'program'=>$row['program']);
    }
    // var_dump($tv_spots);
}
?>