<?php 
class Gallery extends AppModel {
 public $displayField='album_name';
public $actsAs = array('Tree');
    public $hasMany=array('Image'=>array('dependent'=>true));
}
?>
