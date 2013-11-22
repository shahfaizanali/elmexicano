<?php
$temp=array();
for($i=0; $i<count($gallery);$i++)
{
    $temp[$i]=$gallery[$i]['Gallery'];
    $temp[$i]['Images']=$gallery[$i]['Image'];

}
echo json_encode($temp);

?>
