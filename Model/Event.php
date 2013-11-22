<?php 
class Event extends AppModel {

public $validate = array(
        'title' => array(
            'rule' => 'notEmpty'
        ),
        'location' => array(
            'rule' => 'notEmpty'
        ),
        'event_date' => array(
            'rule' => 'notEmpty'

        )
    );
public $displayField = 'title';
    public $hasMany=array('Ticketoutlet' => array(
             'dependent'=> true));




public function afterDelete() {
     debug($this->request->data);
    $file = new File($this->data['Event']['image']);
    $file->delete();
    $file = new File($this->data['Event']['audio']);
    $file->delete();
    $file = new File($this->data['Event']['video']);
    $file->delete();
    $file = new File($this->data['Event']['flyer']);
    $file->delete();
    
    }
}
?>
