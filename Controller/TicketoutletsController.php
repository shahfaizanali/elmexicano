<?php

class TicketoutletsController extends AppController
{
public $scaffold='admin';


    public function view_json($id)
    {
    if($id)
    {   $this->Ticketoutlet->recursive = -1;
        $this->set('tickets',$this->Ticketoutlet->findAllByEventId($id));
        $this->set('_serialize', array('tickets'));

    }


    }
}
?>
