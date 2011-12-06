<div class="matches view">
<h2><?php  __('Match');?></h2>
	<dl><?php $i = 0; $class = ' class="altrow"';?>
		<dt<?php if ($i % 2 == 0) echo $class;?>><?php __('Id'); ?></dt>
		<dd<?php if ($i++ % 2 == 0) echo $class;?>>
			<?php echo $match['Match']['id']; ?>
			&nbsp;
		</dd>
		<dt<?php if ($i % 2 == 0) echo $class;?>><?php __('Name'); ?></dt>
		<dd<?php if ($i++ % 2 == 0) echo $class;?>>
			<?php echo $match['Match']['name']; ?>
			&nbsp;
		</dd>
		<dt<?php if ($i % 2 == 0) echo $class;?>><?php __('Created'); ?></dt>
		<dd<?php if ($i++ % 2 == 0) echo $class;?>>
			<?php echo $match['Match']['created']; ?>
			&nbsp;
		</dd>
		<dt<?php if ($i % 2 == 0) echo $class;?>><?php __('Modified'); ?></dt>
		<dd<?php if ($i++ % 2 == 0) echo $class;?>>
			<?php echo $match['Match']['modified']; ?>
			&nbsp;
		</dd>
		<dt<?php if ($i % 2 == 0) echo $class;?>><?php __('Time'); ?></dt>
		<dd<?php if ($i++ % 2 == 0) echo $class;?>>
			<?php echo $match['Match']['time']; ?>
			&nbsp;
		</dd>
		<dt<?php if ($i % 2 == 0) echo $class;?>><?php __('Issignable'); ?></dt>
		<dd<?php if ($i++ % 2 == 0) echo $class;?>>
			<?php echo $match['Match']['issignable']; ?>
			&nbsp;
		</dd>
		<dt<?php if ($i % 2 == 0) echo $class;?>><?php __('User'); ?></dt>
		<dd<?php if ($i++ % 2 == 0) echo $class;?>>
			<?php echo $this->Html->link($match['User']['name'], array('controller' => 'users', 'action' => 'view', $match['User']['id'])); ?>
			&nbsp;
		</dd>
		<dt<?php if ($i % 2 == 0) echo $class;?>><?php __('Description'); ?></dt>
		<dd<?php if ($i++ % 2 == 0) echo $class;?>>
			<?php echo $match['Match']['description']; ?>
			&nbsp;
		</dd>
	</dl>
</div>
<div class="actions">
	<h3><?php __('Actions'); ?></h3>
	<ul>
		<li><?php echo $this->Html->link(__('Edit Match', true), array('action' => 'edit', $match['Match']['id'])); ?> </li>
		<li><?php echo $this->Html->link(__('Delete Match', true), array('action' => 'delete', $match['Match']['id']), null, sprintf(__('Are you sure you want to delete # %s?', true), $match['Match']['id'])); ?> </li>
		<li><?php echo $this->Html->link(__('List Matches', true), array('action' => 'index')); ?> </li>
		<li><?php echo $this->Html->link(__('New Match', true), array('action' => 'add')); ?> </li>
		<li><?php echo $this->Html->link(__('List Users', true), array('controller' => 'users', 'action' => 'index')); ?> </li>
		<li><?php echo $this->Html->link(__('New User', true), array('controller' => 'users', 'action' => 'add')); ?> </li>
		<li><?php echo $this->Html->link(__('List Match Teches', true), array('controller' => 'match_teches', 'action' => 'index')); ?> </li>
		<li><?php echo $this->Html->link(__('New Match Tech', true), array('controller' => 'match_teches', 'action' => 'add')); ?> </li>
	</ul>
</div>
<div class="related">
	<h3><?php __('Related Match Teches');?></h3>
	<?php if (!empty($match['MatchTech'])):?>
	<table cellpadding = "0" cellspacing = "0">
	<tr>
		<th><?php __('Id'); ?></th>
		<th><?php __('Match Id'); ?></th>
		<th><?php __('Technique Id'); ?></th>
		<th class="actions"><?php __('Actions');?></th>
	</tr>
	<?php
		$i = 0;
		foreach ($match['MatchTech'] as $matchTech):
			$class = null;
			if ($i++ % 2 == 0) {
				$class = ' class="altrow"';
			}
		?>
		<tr<?php echo $class;?>>
			<td><?php echo $matchTech['id'];?></td>
			<td><?php echo $matchTech['match_id'];?></td>
			<td><?php echo $matchTech['technique_id'];?></td>
			<td class="actions">
				<?php echo $this->Html->link(__('View', true), array('controller' => 'match_teches', 'action' => 'view', $matchTech['id'])); ?>
				<?php echo $this->Html->link(__('Edit', true), array('controller' => 'match_teches', 'action' => 'edit', $matchTech['id'])); ?>
				<?php echo $this->Html->link(__('Delete', true), array('controller' => 'match_teches', 'action' => 'delete', $matchTech['id']), null, sprintf(__('Are you sure you want to delete # %s?', true), $matchTech['id'])); ?>
			</td>
		</tr>
	<?php endforeach; ?>
	</table>
<?php endif; ?>

	<div class="actions">
		<ul>
			<li><?php echo $this->Html->link(__('New Match Tech', true), array('controller' => 'match_teches', 'action' => 'add'));?> </li>
		</ul>
	</div>
</div>
