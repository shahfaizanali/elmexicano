<?php
/*
 * To change this template, choose Tools | Templates
 * and open the template in the editor.
 */
for($i=0; $i<count($events);$i++)
{
$ev[$i]=$events[$i]['Event'];
}
echo json_encode($ev);
?>
