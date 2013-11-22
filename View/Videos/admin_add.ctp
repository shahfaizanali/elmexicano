<h1>Add Next Event Video</h1>
<?php
echo $this->Form->create('Video',array('type'=>'file'));
echo $this->Form->input('video',array('type'=>'file'));
echo $this->Form->input('created',array('type'=>'hidden'));
echo $this->Form->end('Upload');
?>