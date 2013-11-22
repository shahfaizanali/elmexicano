<?php

class PromotionsController extends AppController
{
public $scaffold='admin';

    public function index_json()
    {
        $this->loadModel('Event');
        $this->layout= 'ajax';
 $this->Event->recursive = -1;
        $this->set('events', $this->Event->find('all', array('limit' => 2,'fields' => array('title', 'location'))));
                   $this->set('_serialize', array('events'));
    }
    public function  add_json()
    {
        if($this->request->is('post'))
        {
           $data['Promotion']=$this->request->data;
           debug($data);
            $this->Promotion->create();
            if ($this->Promotion->save($data)) {
                $this->set('err_code','0');
            }
            else
                $this->set('err_code','1');
            }
        $this->set('_serialize',array('err_code'));

        }




}
?>
