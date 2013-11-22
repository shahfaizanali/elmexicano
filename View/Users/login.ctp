<h1>Login Here</h1>
<?php
echo $this->Form->create('User');
echo $this->Form->input('user_name');
echo $this->Form->input('password');
echo $this->Form->end('Login');
?>
