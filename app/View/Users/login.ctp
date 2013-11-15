<h2>Login</h2>
<?php
echo $this->Form->create('User', array('url' => array('controller' => 'users', 'action' => 'login')));
echo $this->Form->input('User.username');
echo $this->Form->input('User.password');
echo $this->Form->end('Login');
?>
<div class="actions">
	<ul>
		
		<li><?php echo $this->Html->link(__('register'), array('action' => 'register')); ?></li>		
	</ul>
	
</div>


