<?php
/*
 * db connect string here
 */

require_once('../dbconfig.php');

$spot_cost = $_POST['spot_cost'];
$air_date = $_POST['fldid'];
$sql = "UPDATE cloudone 
        SET spot_cost=?
        WHERE air_date=?";
try {
   $q = $dbh->prepare($sql);
   $q->execute(array($spot_cost,$air_date));
   echo 'Update complete.';
}
catch( PDOException $Exception ) {
    echo "Database error.";
}

?>