<div class="groups view">
<h2><?php  echo __('Group'); ?></h2>
	<dl>
		<dt><?php echo __('Id'); ?></dt>
		<dd>
			<?php echo h($group['Group']['id']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Group Name'); ?></dt>
		<dd>
			<?php echo h($group['Group']['group_name']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Created'); ?></dt>
		<dd>
			<?php echo h($group['Group']['created']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Modified'); ?></dt>
		<dd>
			<?php echo h($group['Group']['modified']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Deleted'); ?></dt>
		<dd>
			<?php echo h($group['Group']['deleted']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Extra1'); ?></dt>
		<dd>
			<?php echo h($group['Group']['extra1']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Extra2'); ?></dt>
		<dd>
			<?php echo h($group['Group']['extra2']); ?>
			&nbsp;
		</dd>
	</dl>
</div>
<div class="actions">
	<h3><?php echo __('Actions'); ?></h3>
	<ul>
		<li><?php echo $this->Html->link(__('Edit Group'), array('action' => 'edit', $group['Group']['id'])); ?> </li>
		<li><?php echo $this->Form->postLink(__('Delete Group'), array('action' => 'delete', $group['Group']['id']), null, __('Are you sure you want to delete # %s?', $group['Group']['id'])); ?> </li>
		<li><?php echo $this->Html->link(__('List Groups'), array('action' => 'index')); ?> </li>
		<li><?php echo $this->Html->link(__('New Group'), array('action' => 'add')); ?> </li>
		<li><?php echo $this->Html->link(__('List Users'), array('controller' => 'users', 'action' => 'index')); ?> </li>
		<li><?php echo $this->Html->link(__('New User'), array('controller' => 'users', 'action' => 'add')); ?> </li>
	</ul>
</div>
<div class="related">
	<h3><?php echo __('Related Users'); ?></h3>
	<?php if (!empty($group['User'])): ?>
	<table cellpadding = "0" cellspacing = "0">
	<tr>
		<th><?php echo __('Id'); ?></th>
		<th><?php echo __('Username'); ?></th>
		<th><?php echo __('Password'); ?></th>
		<th><?php echo __('First Name'); ?></th>
		<th><?php echo __('Last Name'); ?></th>
		<th><?php echo __('Gender'); ?></th>
		<th><?php echo __('Birthday'); ?></th>
		<th><?php echo __('Status'); ?></th>
		<th><?php echo __('Major'); ?></th>
		<th><?php echo __('Kosen'); ?></th>
		<th><?php echo __('Fb Acc'); ?></th>
		<th><?php echo __('Email1'); ?></th>
		<th><?php echo __('Email2'); ?></th>
		<th><?php echo __('High School'); ?></th>
		<th><?php echo __('University1'); ?></th>
		<th><?php echo __('University2'); ?></th>
		<th><?php echo __('University3'); ?></th>
		<th><?php echo __('Work1'); ?></th>
		<th><?php echo __('Work2'); ?></th>
		<th><?php echo __('Address'); ?></th>
		<th><?php echo __('Country'); ?></th>
		<th><?php echo __('City'); ?></th>
		<th><?php echo __('Phone Number1'); ?></th>
		<th><?php echo __('Phone Number2'); ?></th>
		<th><?php echo __('Profile Pic'); ?></th>
		<th><?php echo __('Last Login'); ?></th>
		<th><?php echo __('Created'); ?></th>
		<th><?php echo __('Modified'); ?></th>
		<th><?php echo __('Deleted'); ?></th>
		<th><?php echo __('Group Id'); ?></th>
		<th><?php echo __('Extra1'); ?></th>
		<th><?php echo __('Extra2'); ?></th>
		<th class="actions"><?php echo __('Actions'); ?></th>
	</tr>
	<?php
		$i = 0;
		foreach ($group['User'] as $user): ?>
		<tr>
			<td><?php echo $user['id']; ?></td>
			<td><?php echo $user['username']; ?></td>
			<td><?php echo $user['password']; ?></td>
			<td><?php echo $user['first_name']; ?></td>
			<td><?php echo $user['last_name']; ?></td>
			<td><?php echo $user['gender']; ?></td>
			<td><?php echo $user['birthday']; ?></td>
			<td><?php echo $user['status']; ?></td>
			<td><?php echo $user['major']; ?></td>
			<td><?php echo $user['kosen']; ?></td>
			<td><?php echo $user['fb_acc']; ?></td>
			<td><?php echo $user['email1']; ?></td>
			<td><?php echo $user['email2']; ?></td>
			<td><?php echo $user['high_school']; ?></td>
			<td><?php echo $user['university1']; ?></td>
			<td><?php echo $user['university2']; ?></td>
			<td><?php echo $user['university3']; ?></td>
			<td><?php echo $user['work1']; ?></td>
			<td><?php echo $user['work2']; ?></td>
			<td><?php echo $user['address']; ?></td>
			<td><?php echo $user['country']; ?></td>
			<td><?php echo $user['city']; ?></td>
			<td><?php echo $user['phone_number1']; ?></td>
			<td><?php echo $user['phone_number2']; ?></td>
			<td><?php echo $user['profile_pic']; ?></td>
			<td><?php echo $user['last_login']; ?></td>
			<td><?php echo $user['created']; ?></td>
			<td><?php echo $user['modified']; ?></td>
			<td><?php echo $user['deleted']; ?></td>
			<td><?php echo $user['group_id']; ?></td>
			<td><?php echo $user['extra1']; ?></td>
			<td><?php echo $user['extra2']; ?></td>
			<td class="actions">
				<?php echo $this->Html->link(__('View'), array('controller' => 'users', 'action' => 'view', $user['id'])); ?>
				<?php echo $this->Html->link(__('Edit'), array('controller' => 'users', 'action' => 'edit', $user['id'])); ?>
				<?php echo $this->Form->postLink(__('Delete'), array('controller' => 'users', 'action' => 'delete', $user['id']), null, __('Are you sure you want to delete # %s?', $user['id'])); ?>
			</td>
		</tr>
	<?php endforeach; ?>
	</table>
<?php endif; ?>

	<div class="actions">
		<ul>
			<li><?php echo $this->Html->link(__('New User'), array('controller' => 'users', 'action' => 'add')); ?> </li>
		</ul>
	</div>
</div>
