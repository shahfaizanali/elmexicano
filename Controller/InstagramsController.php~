<?php
App::uses('ConnectionManager', 'Model');

class InstagramsController extends AppController {
    public $helpers = array('Html', 'Form', 'Session');
    public $components = array('Session','Instagram');

    public function index() {
$code = $this->request->query['code'];
$instagram = ConnectionManager::getDataSource('instagram');
if(!$code)
{       

$url = $instagram->authenticate();
//$this->redirect($url);
}

$response = $instagram->authenticate($code);
$token = $response->access_token;
$user = $response->user;
$media=$this->Instagram->get('/tags/spring/media/recent');
$this->set('media',$media);
  $this->set('user', $user);
    }
}
?>
