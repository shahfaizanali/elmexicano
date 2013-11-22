<?php
/**
 * Created by PhpStorm.
 * User: faizan
 * Date: 11/13/13
 * Time: 3:38 PM
 */
class Image extends AppModel
{

    public $belongsTo='Gallery';
    public function afterDelete() {
        debug($this->request->data);
    $file = new File($this->data['Gallery']['Image']['img_url']);
    $file->delete();
    
    }

}