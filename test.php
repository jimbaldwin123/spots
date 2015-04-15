<?php
/***************************
 *
 * Jim Baldwin 2015-04-13
 * 
 *1. Build a drop down of networks based on the supplied array with all chosen by default 
 *2. Display all of the data from the array on a webpage by default
 *3. When the drop down is changed it should update the displayed data without refreshing the page using jquery.
 *4. The spot cost should be a input field where you can change the value.
 *5. If the value is changed it should do a database call to update that field.
 * Assume a MYSQL database and write some sudo code assuming the connection was already live to the database.
****************/


/** put this into networks.php file and include it here **/
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

<!DOCTYPE html>

<html>
<head>
    <title>CloudOne Test</title>
    <select name ="networks" id="networks">
        
    <?php
      foreach($tv_spots as $spotkey => $spot){
        echo "<option value=\"{$spot['network']}\">{$spot['network']}</option>\n";
      }
    ?>
     </select>
    <br>
    <form>
        <table border="1" id="networklist">
            <tr>
                <th>Date</th>
                <th>Network</th>
                <th>Spot Cost</th>
                <th>Duration</th>
                <th>Program</th>
            </tr>
        <?php
        foreach($tv_spots as $spotkey => $spot){

            echo "<tr>
                <td>$spotkey</td>
                <td>{$spot[network]}</td>
                <td><input class=\"spotcost\" id =\"$spotkey\" type=\"text\" name=\"spot_cost\" size=\"4\" value=\"{$spot['spot_cost']}\"></td>
                <td>{$spot['duration']}</td>
                <td>{$spot['program']}</td>
                </tr>
            ";
        }
        ?>
        </table>
    result
        <div class="result"></div>
    </form>
    
</head>

<body>

<script src="//code.jquery.com/jquery.min.js"></script>
<script>
    $(document).ready(function(){
        dom_setup();
    });
    // DOM needs to be refreshed after network selection
    function dom_setup(){
        $('.spotcost').blur(function(){
                var spotcost = $(this).val();
                var fldid = $(this).attr('id');
                var data =  {'spot_cost': spotcost,'fldid':fldid};
                $('.result').html('one moment please.');
                $.post( "update.php", data).done(function(data) {
                    $( ".result" ).html(data );
                    dom_setup();
                });     
        });
        $('#networks').change(function(){
            var reqdata = {'network':$(this).val()}
            $.get( "networks.php", reqdata).done(function( data ) {
                $( "#networklist" ).html(data);
                $( ".result" ).html('');
                dom_setup();
            });
            
        });
    }
</script>

</body>
</html>
