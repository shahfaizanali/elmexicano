<?php

class UsersController extends AppController
{
    public $scaffold;
    public function login()
    {
        $this->Auth->authenticate = array(
    'Form' => array('userModel' => 'User')
);
        if($this->request->is('post'))
        {
        
        if ($this->User->find('all',array('conditions'=>array('user_name'=>$this->data['User']['user_name'],'password'=>$this->data['User']['password'])))){
            //do something
            echo 'Yes';
            $this->redirect('/admin/events');
        }
           
            
            
        }
        
        
    }
    
    
}
?>