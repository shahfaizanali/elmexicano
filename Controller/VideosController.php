<?php
/**
 * Created by PhpStorm.
 * User: faizan
 * Date: 11/8/13
 * Time: 4:33 PM
 */

class VideosController extends AppController {

    public $scaffold='admin';
    public function index_json()// this will print json
    {
        $this->layout= 'ajax';//This will remove layout template
        $this->set('video', $this->Video->find('first', array(
            'order' => array('Video.created' => 'desc'))));
        $this->set('_serialize', array('video'));
    }
    public  function  admin_add()
    {
        $uploads_dir=WWW_ROOT.'files/videos/';
        if($this->request->is('post'))
        {
            $error=$this->data['Video']['video']['error'];
            if ($error == UPLOAD_ERR_OK)
            {
            $name=$this->data['Video']['video']['name'];
            $tmp_name=$this->data['Video']['video']['tmp_name'];
            $path=$uploads_dir.'/'.$name;
            move_uploaded_file($tmp_name,$path );
            $path=$this->webroot.'files/videos'.'/'.$name;
                $this->request->data['Video']['video']=$path;
                $this->request->data['Video']['created']= date("Y-m-d H:i:s");
                $this->Video->create();
                if(!$this->Video->save($this->data))
                {
                    debug($this->Video->validationErrors);


                }
            }
            else{
                echo $error;
            }
        }


    }

} 