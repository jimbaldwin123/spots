<?php

$tv_spots = array(
'2014-04-01 5:29:00' =>
array('network' => 'MTV',
  'spot_cost' => 30,
      'duration' => 30,
      'program' => 'R&B Divas',),
'2014-04-02 14:15:00' =>
array('network' => 'MTV2',
  'spot_cost' => 1500,
      'duration' => 30,
      'program' => 'Living Single',),
'2014-04-03 8:01:00' =>
array('network' => 'BET',
  'spot_cost' => 300,
      'duration' => 30,
      'program' => 'Movie',));


print json_encode($tv_spots);

?>