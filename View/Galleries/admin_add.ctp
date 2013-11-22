<h1>Add Gallery</h1>
<?php
echo $this->Form->create('Gallery',array('type'=>'file'));
echo $this->Form->input('album_name',array('label'=>'Name'));
echo $this->Form->input('date');
echo $this->Form->input('website');
echo $this->Form->input('parent_id');
echo $this->Form->input('Image.', array('type' => 'file', 'multiple','label'=>'Select Photos'));

echo $this->Form->end('Save Album');
?>
