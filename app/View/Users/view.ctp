<div class="users view">
<h2><?php  echo __('User'); ?></h2>
	<dl>
		<dt><?php echo __('Id'); ?></dt>
		<dd>
			<?php echo h($user['User']['id']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Username'); ?></dt>
		<dd>
			<?php echo h($user['User']['username']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Password'); ?></dt>
		<dd>
			<?php echo h($user['User']['password']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('First Name'); ?></dt>
		<dd>
			<?php echo h($user['User']['first_name']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Last Name'); ?></dt>
		<dd>
			<?php echo h($user['User']['last_name']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Gender'); ?></dt>
		<dd>
			<?php echo h($user['User']['gender']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Birthday'); ?></dt>
		<dd>
			<?php echo h($user['User']['birthday']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Status'); ?></dt>
		<dd>
			<?php echo h($user['User']['status']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Major'); ?></dt>
		<dd>
			<?php echo h($user['User']['major']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Kosen'); ?></dt>
		<dd>
			<?php echo h($user['User']['kosen']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Fb Acc'); ?></dt>
		<dd>
			<?php echo h($user['User']['fb_acc']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Email1'); ?></dt>
		<dd>
			<?php echo h($user['User']['email1']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Email2'); ?></dt>
		<dd>
			<?php echo h($user['User']['email2']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('High School'); ?></dt>
		<dd>
			<?php echo h($user['User']['high_school']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('University1'); ?></dt>
		<dd>
			<?php echo h($user['User']['university1']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('University2'); ?></dt>
		<dd>
			<?php echo h($user['User']['university2']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('University3'); ?></dt>
		<dd>
			<?php echo h($user['User']['university3']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Work1'); ?></dt>
		<dd>
			<?php echo h($user['User']['work1']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Work2'); ?></dt>
		<dd>
			<?php echo h($user['User']['work2']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Address'); ?></dt>
		<dd>
			<?php echo h($user['User']['address']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Country'); ?></dt>
		<dd>
			<?php echo h($user['User']['country']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('City'); ?></dt>
		<dd>
			<?php echo h($user['User']['city']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Phone Number1'); ?></dt>
		<dd>
			<?php echo h($user['User']['phone_number1']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Phone Number2'); ?></dt>
		<dd>
			<?php echo h($user['User']['phone_number2']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Profile Pic'); ?></dt>
		<dd>
			<?php echo h($user['User']['profile_pic']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Last Login'); ?></dt>
		<dd>
			<?php echo h($user['User']['last_login']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Created'); ?></dt>
		<dd>
			<?php echo h($user['User']['created']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Modified'); ?></dt>
		<dd>
			<?php echo h($user['User']['modified']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Deleted'); ?></dt>
		<dd>
			<?php echo h($user['User']['deleted']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Group'); ?></dt>
		<dd>
			<?php echo $this->Html->link($user['Group']['id'], array('controller' => 'groups', 'action' => 'view', $user['Group']['id'])); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Extra1'); ?></dt>
		<dd>
			<?php echo h($user['User']['extra1']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Extra2'); ?></dt>
		<dd>
			<?php echo h($user['User']['extra2']); ?>
			&nbsp;
		</dd>
	</dl>
</div>
<div class="actions">
	<h3><?php echo __('Actions'); ?></h3>
	<ul>
		<li><?php echo $this->Html->link(__('Edit User'), array('action' => 'edit', $user['User']['id'])); ?> </li>
		<li><?php echo $this->Form->postLink(__('Delete User'), array('action' => 'delete', $user['User']['id']), null, __('Are you sure you want to delete # %s?', $user['User']['id'])); ?> </li>
		<li><?php echo $this->Html->link(__('List Users'), array('action' => 'index')); ?> </li>
		<li><?php echo $this->Html->link(__('New User'), array('action' => 'add')); ?> </li>
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
<div class="related">
	<h3><?php echo __('Related Comments'); ?></h3>
	<?php if (!empty($user['Comment'])): ?>
	<table cellpadding = "0" cellspacing = "0">
	<tr>
		<th><?php echo __('Id'); ?></th>
		<th><?php echo __('Message'); ?></th>
		<th><?php echo __('Type'); ?></th>
		<th><?php echo __('Created'); ?></th>
		<th><?php echo __('Modified'); ?></th>
		<th><?php echo __('Deleted'); ?></th>
		<th><?php echo __('Type Num'); ?></th>
		<th><?php echo __('User Id'); ?></th>
		<th><?php echo __('Extra1'); ?></th>
		<th><?php echo __('Extra2'); ?></th>
		<th class="actions"><?php echo __('Actions'); ?></th>
	</tr>
	<?php
		$i = 0;
		foreach ($user['Comment'] as $comment): ?>
		<tr>
			<td><?php echo $comment['id']; ?></td>
			<td><?php echo $comment['message']; ?></td>
			<td><?php echo $comment['type']; ?></td>
			<td><?php echo $comment['created']; ?></td>
			<td><?php echo $comment['modified']; ?></td>
			<td><?php echo $comment['deleted']; ?></td>
			<td><?php echo $comment['type_num']; ?></td>
			<td><?php echo $comment['user_id']; ?></td>
			<td><?php echo $comment['extra1']; ?></td>
			<td><?php echo $comment['extra2']; ?></td>
			<td class="actions">
				<?php echo $this->Html->link(__('View'), array('controller' => 'comments', 'action' => 'view', $comment['id'])); ?>
				<?php echo $this->Html->link(__('Edit'), array('controller' => 'comments', 'action' => 'edit', $comment['id'])); ?>
				<?php echo $this->Form->postLink(__('Delete'), array('controller' => 'comments', 'action' => 'delete', $comment['id']), null, __('Are you sure you want to delete # %s?', $comment['id'])); ?>
			</td>
		</tr>
	<?php endforeach; ?>
	</table>
<?php endif; ?>

	<div class="actions">
		<ul>
			<li><?php echo $this->Html->link(__('New Comment'), array('controller' => 'comments', 'action' => 'add')); ?> </li>
		</ul>
	</div>
</div>
<div class="related">
	<h3><?php echo __('Related Events'); ?></h3>
	<?php if (!empty($user['Event'])): ?>
	<table cellpadding = "0" cellspacing = "0">
	<tr>
		<th><?php echo __('Id'); ?></th>
		<th><?php echo __('Title'); ?></th>
		<th><?php echo __('Description'); ?></th>
		<th><?php echo __('Picture'); ?></th>
		<th><?php echo __('Start Time'); ?></th>
		<th><?php echo __('End Time'); ?></th>
		<th><?php echo __('Country'); ?></th>
		<th><?php echo __('City'); ?></th>
		<th><?php echo __('Address'); ?></th>
		<th><?php echo __('Modified'); ?></th>
		<th><?php echo __('Created'); ?></th>
		<th><?php echo __('Deleted'); ?></th>
		<th><?php echo __('User Id'); ?></th>
		<th><?php echo __('Extra1'); ?></th>
		<th><?php echo __('Extra2'); ?></th>
		<th class="actions"><?php echo __('Actions'); ?></th>
	</tr>
	<?php
		$i = 0;
		foreach ($user['Event'] as $event): ?>
		<tr>
			<td><?php echo $event['id']; ?></td>
			<td><?php echo $event['title']; ?></td>
			<td><?php echo $event['description']; ?></td>
			<td><?php echo $event['picture']; ?></td>
			<td><?php echo $event['start_time']; ?></td>
			<td><?php echo $event['end_time']; ?></td>
			<td><?php echo $event['country']; ?></td>
			<td><?php echo $event['city']; ?></td>
			<td><?php echo $event['address']; ?></td>
			<td><?php echo $event['modified']; ?></td>
			<td><?php echo $event['created']; ?></td>
			<td><?php echo $event['deleted']; ?></td>
			<td><?php echo $event['user_id']; ?></td>
			<td><?php echo $event['extra1']; ?></td>
			<td><?php echo $event['extra2']; ?></td>
			<td class="actions">
				<?php echo $this->Html->link(__('View'), array('controller' => 'events', 'action' => 'view', $event['id'])); ?>
				<?php echo $this->Html->link(__('Edit'), array('controller' => 'events', 'action' => 'edit', $event['id'])); ?>
				<?php echo $this->Form->postLink(__('Delete'), array('controller' => 'events', 'action' => 'delete', $event['id']), null, __('Are you sure you want to delete # %s?', $event['id'])); ?>
			</td>
		</tr>
	<?php endforeach; ?>
	</table>
<?php endif; ?>

	<div class="actions">
		<ul>
			<li><?php echo $this->Html->link(__('New Event'), array('controller' => 'events', 'action' => 'add')); ?> </li>
		</ul>
	</div>
</div>
<div class="related">
	<h3><?php echo __('Related Photos'); ?></h3>
	<?php if (!empty($user['Photo'])): ?>
	<table cellpadding = "0" cellspacing = "0">
	<tr>
		<th><?php echo __('Id'); ?></th>
		<th><?php echo __('Title'); ?></th>
		<th><?php echo __('Description'); ?></th>
		<th><?php echo __('Path'); ?></th>
		<th><?php echo __('Height'); ?></th>
		<th><?php echo __('Width'); ?></th>
		<th><?php echo __('Created'); ?></th>
		<th><?php echo __('Modified'); ?></th>
		<th><?php echo __('Deleted'); ?></th>
		<th><?php echo __('User Id'); ?></th>
		<th><?php echo __('Extra1'); ?></th>
		<th><?php echo __('Extra2'); ?></th>
		<th class="actions"><?php echo __('Actions'); ?></th>
	</tr>
	<?php
		$i = 0;
		foreach ($user['Photo'] as $photo): ?>
		<tr>
			<td><?php echo $photo['id']; ?></td>
			<td><?php echo $photo['title']; ?></td>
			<td><?php echo $photo['description']; ?></td>
			<td><?php echo $photo['path']; ?></td>
			<td><?php echo $photo['height']; ?></td>
			<td><?php echo $photo['width']; ?></td>
			<td><?php echo $photo['created']; ?></td>
			<td><?php echo $photo['modified']; ?></td>
			<td><?php echo $photo['deleted']; ?></td>
			<td><?php echo $photo['user_id']; ?></td>
			<td><?php echo $photo['extra1']; ?></td>
			<td><?php echo $photo['extra2']; ?></td>
			<td class="actions">
				<?php echo $this->Html->link(__('View'), array('controller' => 'photos', 'action' => 'view', $photo['id'])); ?>
				<?php echo $this->Html->link(__('Edit'), array('controller' => 'photos', 'action' => 'edit', $photo['id'])); ?>
				<?php echo $this->Form->postLink(__('Delete'), array('controller' => 'photos', 'action' => 'delete', $photo['id']), null, __('Are you sure you want to delete # %s?', $photo['id'])); ?>
			</td>
		</tr>
	<?php endforeach; ?>
	</table>
<?php endif; ?>

	<div class="actions">
		<ul>
			<li><?php echo $this->Html->link(__('New Photo'), array('controller' => 'photos', 'action' => 'add')); ?> </li>
		</ul>
	</div>
</div>
<div class="related">
	<h3><?php echo __('Related Posts'); ?></h3>
	<?php if (!empty($user['Post'])): ?>
	<table cellpadding = "0" cellspacing = "0">
	<tr>
		<th><?php echo __('Id'); ?></th>
		<th><?php echo __('Title'); ?></th>
		<th><?php echo __('Text'); ?></th>
		<th><?php echo __('Path'); ?></th>
		<th><?php echo __('Height'); ?></th>
		<th><?php echo __('Width'); ?></th>
		<th><?php echo __('Created'); ?></th>
		<th><?php echo __('Modified'); ?></th>
		<th><?php echo __('Deleted'); ?></th>
		<th><?php echo __('User Id'); ?></th>
		<th><?php echo __('Extra1'); ?></th>
		<th><?php echo __('Extra2'); ?></th>
		<th class="actions"><?php echo __('Actions'); ?></th>
	</tr>
	<?php
		$i = 0;
		foreach ($user['Post'] as $post): ?>
		<tr>
			<td><?php echo $post['id']; ?></td>
			<td><?php echo $post['title']; ?></td>
			<td><?php echo $post['text']; ?></td>
			<td><?php echo $post['path']; ?></td>
			<td><?php echo $post['height']; ?></td>
			<td><?php echo $post['width']; ?></td>
			<td><?php echo $post['created']; ?></td>
			<td><?php echo $post['modified']; ?></td>
			<td><?php echo $post['deleted']; ?></td>
			<td><?php echo $post['user_id']; ?></td>
			<td><?php echo $post['extra1']; ?></td>
			<td><?php echo $post['extra2']; ?></td>
			<td class="actions">
				<?php echo $this->Html->link(__('View'), array('controller' => 'posts', 'action' => 'view', $post['id'])); ?>
				<?php echo $this->Html->link(__('Edit'), array('controller' => 'posts', 'action' => 'edit', $post['id'])); ?>
				<?php echo $this->Form->postLink(__('Delete'), array('controller' => 'posts', 'action' => 'delete', $post['id']), null, __('Are you sure you want to delete # %s?', $post['id'])); ?>
			</td>
		</tr>
	<?php endforeach; ?>
	</table>
<?php endif; ?>

	<div class="actions">
		<ul>
			<li><?php echo $this->Html->link(__('New Post'), array('controller' => 'posts', 'action' => 'add')); ?> </li>
		</ul>
	</div>
</div>
<div class="related">
	<h3><?php echo __('Related Videos'); ?></h3>
	<?php if (!empty($user['Video'])): ?>
	<table cellpadding = "0" cellspacing = "0">
	<tr>
		<th><?php echo __('Id'); ?></th>
		<th><?php echo __('Title'); ?></th>
		<th><?php echo __('Description'); ?></th>
		<th><?php echo __('Path'); ?></th>
		<th><?php echo __('Created'); ?></th>
		<th><?php echo __('Modified'); ?></th>
		<th><?php echo __('Deleted'); ?></th>
		<th><?php echo __('User Id'); ?></th>
		<th><?php echo __('Extra1'); ?></th>
		<th><?php echo __('Extra2'); ?></th>
		<th class="actions"><?php echo __('Actions'); ?></th>
	</tr>
	<?php
		$i = 0;
		foreach ($user['Video'] as $video): ?>
		<tr>
			<td><?php echo $video['id']; ?></td>
			<td><?php echo $video['title']; ?></td>
			<td><?php echo $video['description']; ?></td>
			<td><?php echo $video['path']; ?></td>
			<td><?php echo $video['created']; ?></td>
			<td><?php echo $video['modified']; ?></td>
			<td><?php echo $video['deleted']; ?></td>
			<td><?php echo $video['user_id']; ?></td>
			<td><?php echo $video['extra1']; ?></td>
			<td><?php echo $video['extra2']; ?></td>
			<td class="actions">
				<?php echo $this->Html->link(__('View'), array('controller' => 'videos', 'action' => 'view', $video['id'])); ?>
				<?php echo $this->Html->link(__('Edit'), array('controller' => 'videos', 'action' => 'edit', $video['id'])); ?>
				<?php echo $this->Form->postLink(__('Delete'), array('controller' => 'videos', 'action' => 'delete', $video['id']), null, __('Are you sure you want to delete # %s?', $video['id'])); ?>
			</td>
		</tr>
	<?php endforeach; ?>
	</table>
<?php endif; ?>

	<div class="actions">
		<ul>
			<li><?php echo $this->Html->link(__('New Video'), array('controller' => 'videos', 'action' => 'add')); ?> </li>
		</ul>
	</div>
</div>
