<?php
/*
 * To change this template, choose Tools | Templates
 * and open the template in the editor.
 */

$ev=array();
for($i=0; $i<count($events);$i++)
{
    $ev[$i]=$events[$i]['Event'];
    $ev[$i]['tickets']=$events[$i]['Ticketoutlet'];

}

echo json_encode($ev);

?>
