<div class="users index">
	<h2><?php echo __('Users'); ?></h2>
	<table cellpadding="0" cellspacing="0">
	<tr>
			
			<th><?php echo $this->Paginator->sort('username'); ?></th>
			
			<th><?php echo $this->Paginator->sort('first_name'); ?></th>
			<th><?php echo $this->Paginator->sort('last_name'); ?></th>
			<th><?php echo $this->Paginator->sort('gender'); ?></th>
			
			<th><?php echo $this->Paginator->sort('status'); ?></th>
			<th><?php echo $this->Paginator->sort('kosen_year'); ?></th>
			<th><?php echo $this->Paginator->sort('major'); ?></th>
			<th><?php echo $this->Paginator->sort('kosen'); ?></th>
			<th><?php echo $this->Paginator->sort('fb_acc'); ?></th>
			<th><?php echo $this->Paginator->sort('email1'); ?></th>
			<th><?php echo $this->Paginator->sort('email2'); ?></th>
			<th><?php echo $this->Paginator->sort('high_school'); ?></th>
			<th><?php echo $this->Paginator->sort('university1'); ?></th>
			<th><?php echo $this->Paginator->sort('university2'); ?></th>
			<th><?php echo $this->Paginator->sort('university3'); ?></th>
			<th><?php echo $this->Paginator->sort('work1'); ?></th>
			<th><?php echo $this->Paginator->sort('work2'); ?></th>
			
			<th><?php echo $this->Paginator->sort('country'); ?></th>
			<th><?php echo $this->Paginator->sort('city'); ?></th>
			<th><?php echo $this->Paginator->sort('phone_number1'); ?></th>
			<th><?php echo $this->Paginator->sort('phone_number2'); ?></th>
			
			
			<th class="actions"><?php echo __('Actions'); ?></th>
	</tr>
	<?php foreach ($users as $user): ?>
	<tr>
		
		<td><?php echo h($user['User']['username']); ?>&nbsp;</td>
		
		<td><?php echo h($user['User']['first_name']); ?>&nbsp;</td>
		<td><?php echo h($user['User']['last_name']); ?>&nbsp;</td>
		<td><?php echo h($user['User']['gender']); ?>&nbsp;</td>
		
		<td><?php echo h($user['User']['status']); ?>&nbsp;</td>
		<td><?php echo h($user['User']['major']); ?>&nbsp;</td>
		<td><?php echo h($user['User']['kosen']); ?>&nbsp;</td>
		<td><?php echo h($user['User']['fb_acc']); ?>&nbsp;</td>
		<td><?php echo h($user['User']['email1']); ?>&nbsp;</td>
		<td><?php echo h($user['User']['email2']); ?>&nbsp;</td>
		<td><?php echo h($user['User']['high_school']); ?>&nbsp;</td>
		<td><?php echo h($user['User']['university1']); ?>&nbsp;</td>
		<td><?php echo h($user['User']['university2']); ?>&nbsp;</td>
		<td><?php echo h($user['User']['university3']); ?>&nbsp;</td>
		<td><?php echo h($user['User']['work1']); ?>&nbsp;</td>
		<td><?php echo h($user['User']['work2']); ?>&nbsp;</td>
		
		<td><?php echo h($user['User']['country']); ?>&nbsp;</td>
		<td><?php echo h($user['User']['city']); ?>&nbsp;</td>
		<td><?php echo h($user['User']['phone_number1']); ?>&nbsp;</td>
		<td><?php echo h($user['User']['phone_number2']); ?>&nbsp;</td>
		
		<td class="actions">
			<?php echo $this->Html->link(__('View'), array('action' => 'view', $user['User']['id'])); ?>
			<?php echo $this->Html->link(__('Edit'), array('action' => 'edit', $user['User']['id'])); ?>
			<?php echo $this->Form->postLink(__('Delete'), array('action' => 'delete', $user['User']['id']), null, __('Are you sure you want to delete # %s?', $user['User']['id'])); ?>
		</td>
	</tr>
<?php endforeach; ?>
	</table>
	<p>
	<?php
	echo $this->Paginator->counter(array(
	'format' => __('Page {:page} of {:pages}, showing {:current} records out of {:count} total, starting on record {:start}, ending on {:end}')
	));
	?>	</p>
	<div class="paging">
	<?php
		echo $this->Paginator->prev('< ' . __('previous'), array(), null, array('class' => 'prev disabled'));
		echo $this->Paginator->numbers(array('separator' => ''));
		echo $this->Paginator->next(__('next') . ' >', array(), null, array('class' => 'next disabled'));
	?>
	</div>
</div>
<div class="actions">
	<h3><?php echo __('Actions'); ?></h3>
	<ul>
		<li><?php echo $this->Html->link(__('New User'), array('action' => 'add')); ?></li>
		<li><?php echo $this->Html->link(__('List Groups'), array('controller' => 'groups', 'action' => 'index')); ?> </li>
		<li><?php echo $this->Html->link(__('New Group'), array('controller' => 'groups', 'action' => 'add')); ?> </li>
		<li><?php echo $this->Html->link(__('List Comments'), array('controller' => 'comments', 'action' => 'index')); ?> </li>
		<li><?php echo $this->Html->link(__('New Comment'), array('controller' => 'comments', 'action' => 'add')); ?> </li>
		<li><?php echo $this->Html->link(__('List Events'), array('controller' => 'events', 'action' => 'index')); ?> </li>
		<li><?php echo $this->Html->link(__('New Event'), array('controller' => 'events', 'action' => 'add')); ?> </li>
		<li><?php echo $this->Html->link(__('List Photos'), array('controller' => 'photos', 'action' => 'index')); ?> </li>
		<li><?php echo $this->Html->link(__('New Photo'), array('controller' => 'photos', 'action' => 'add')); ?> </li>
		<li><?php echo $this->Html->link(__('List Posts'), array('controller' => 'posts', 'action' => 'index')); ?> </li>
		<li><?php echo $this->Html->link(__('New Post'), array('controller' => 'posts', 'action' => 'add')); ?> </li>
		<li><?php echo $this->Html->link(__('List Videos'), array('controller' => 'videos', 'action' => 'index')); ?> </li>
		<li><?php echo $this->Html->link(__('New Video'), array('controller' => 'videos', 'action' => 'add')); ?> </li>
	</ul>
</div>
