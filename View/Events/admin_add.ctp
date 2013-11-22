<h1>Add Event</h1>
<?php
echo $this->Form->create('Event',array('type'=>'file'));
echo $this->Form->input('image',array('type'=>'file'));
echo $this->Form->input('title');
echo $this->Form->input('artists',array('label'=>'Featured Artists'));
echo $this->Form->input('venue');
echo $this->Form->input('location',array('label'=>'City/State'));
echo $this->Form->input('event_date');
echo $this->Form->input('buy_now',array('label'=>'Buy Now Link'));
echo $this->Form->input('flyer',array('type'=>'file'));
echo $this->Form->input('audio',array('type'=>'file'));
echo $this->Form->input('video',array('type'=>'file'));
echo $this->Form->end('Save Event');
?>
