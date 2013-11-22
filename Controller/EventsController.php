<?php
App::uses('File', 'Utility');
class EventsController extends AppController
{

public $scaffold='admin';

    public function index_json()// this will print json
    {
        $this->layout= 'ajax';//This will remove layout template
      
        $this->set('events', $this->Event->find('all'));
        $this->set('_serialize', array('events'));


    }

    function next_json()
    {

        $this->layout= 'ajax';//This will remove layout template
        $this->set('video', $this->Event->find('first', array(
            'conditions' => array('Event.event_date >=' => date("Y-m-d H:i:s"))
        )));
        $this->set('_serialize', array('video'));


    }
   
function admin_add()
{
 if ($this->request->is('post')) {
 $uploads_dir=WWW_ROOT.'files/';
     debug($_FILES);
 foreach ($_FILES["data"]["error"]['Event'] as $key => $error) {
    if ($error == UPLOAD_ERR_OK) {

        $tmp_name = $_FILES["data"]["tmp_name"]['Event'][$key];

        $name = $_FILES["data"]["name"]['Event'][$key];
        $path=$uploads_dir.$key.'/'.$name;
        move_uploaded_file($tmp_name,$path );
        $path=$this->webroot.'files/'.$key.'/'.$name;

        $this->request->data['Event'][$key]=$path;

    }
}
            $this->Event->create();
            if ($this->Event->save($this->data)) {
                //$this->Session->setFlash(__('Your Event has been saved.'));
}
    else
        debug($this->Event->validationErrors);
//$this->Session->setFlash(__('Unable to add your Event.'));
}

}

}
