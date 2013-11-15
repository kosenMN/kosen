<div class="posts form">
<?php 

	echo $this->Html->script('ckeditor/ckeditor', array('inline' => false));

	echo $this->Form->create('Post'); ?>
	<fieldset>
		<legend><?php echo __('Add Post'); ?></legend>
		
		<?php
	
		echo $this->Form->input('title');
		echo $this->Form->input('text', array(
			'class' => 'ckeditor',
			'id' => 'textarea_id'));
		

		?>
	</fieldset>
<?php echo $this->Form->end(__('Post')); ?>
</div>
<div class="actions">
	<h3><?php echo __('Actions'); ?></h3>
	<ul>

		<li><?php echo $this->Html->link(__('List Posts'), array('action' => 'index')); ?></li>
		<li><?php echo $this->Html->link(__('List Users'), array('controller' => 'users', 'action' => 'index')); ?> </li>
		<li><?php echo $this->Html->link(__('New User'), array('controller' => 'users', 'action' => 'add')); ?> </li>
	</ul>
</div>


