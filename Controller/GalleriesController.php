<?php

class GalleriesController extends AppController
{
    public $scaffold="admin";
public function index_json()
{
   $this->layout= 'ajax';
   
    $this->set('gallery',$this->Gallery->find('all',array('conditions'=>array('album_name !='=>'None'))));
    $this->set('_serialize', array('gallery'));


}


    public function admin_add()
{
$parents = $this->Gallery->find('list');
 $this->set(compact('parents'));
if($this->request->is('post'))
{
   
    $uploads_dir=WWW_ROOT.'files/galleries/';
    $this->Gallery->create();
    $Gallery = $this->Gallery->save($this->request->data);




if($Gallery)
{

    $path=$uploads_dir.$Gallery['Gallery']['album_name'];
    if (!is_dir($path))
       if( !mkdir($path))
           echo "Fail";


    for($i=0; $i<count($this->data['Gallery']['Image']);$i++)
    {

        $data['Image']=$this->data['Gallery']['Image'][$i];
        $tmp_name =$data['Image']['tmp_name'];
        $name=$data['Image']['name'];
            move_uploaded_file($tmp_name,$path."/".$name);
        $data['Image']['gallery_id']=$this->Gallery->id;
        $data['Image']['img_url']=$path."/".$name;
        $data['Image']['date']=$Gallery['Gallery']['date'];
      
        $this->Gallery->Image->create();
        $this->Gallery->Image->save($data);

    }



}


    debug($this->Gallery->Image->validationErrors);
}

}







}