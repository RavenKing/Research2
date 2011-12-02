<div class="techniques view">
<h2><?php  __('Technique');?></h2>
	<dl><?php $i = 0; $class = ' class="altrow"';?>
		<dt<?php if ($i % 2 == 0) echo $class;?>><?php __('Id'); ?></dt>
		<dd<?php if ($i++ % 2 == 0) echo $class;?>>
			<?php echo $technique['Technique']['id']; ?>
			&nbsp;
		</dd>
		<dt<?php if ($i % 2 == 0) echo $class;?>><?php __('Name'); ?></dt>
		<dd<?php if ($i++ % 2 == 0) echo $class;?>>
			<?php echo $technique['Technique']['name']; ?>
			&nbsp;
		</dd>
	</dl>
</div>
<div class="actions">
	<h3><?php __('Actions'); ?></h3>
	<ul>
		<li><?php echo $this->Html->link(__('Edit Technique', true), array('action' => 'edit', $technique['Technique']['id'])); ?> </li>
		<li><?php echo $this->Html->link(__('Delete Technique', true), array('action' => 'delete', $technique['Technique']['id']), null, sprintf(__('Are you sure you want to delete # %s?', true), $technique['Technique']['id'])); ?> </li>
		<li><?php echo $this->Html->link(__('List Techniques', true), array('action' => 'index')); ?> </li>
		<li><?php echo $this->Html->link(__('New Technique', true), array('action' => 'add')); ?> </li>
		<li><?php echo $this->Html->link(__('List Match Teches', true), array('controller' => 'match_teches', 'action' => 'index')); ?> </li>
		<li><?php echo $this->Html->link(__('New Match Tech', true), array('controller' => 'match_teches', 'action' => 'add')); ?> </li>
		<li><?php echo $this->Html->link(__('List Project Teches', true), array('controller' => 'project_teches', 'action' => 'index')); ?> </li>
		<li><?php echo $this->Html->link(__('New Project Tech', true), array('controller' => 'project_teches', 'action' => 'add')); ?> </li>
	</ul>
</div>
<div class="related">
	<h3><?php __('Related Match Teches');?></h3>
	<?php if (!empty($technique['MatchTech'])):?>
	<table cellpadding = "0" cellspacing = "0">
	<tr>
		<th><?php __('Id'); ?></th>
		<th><?php __('Match Id'); ?></th>
		<th><?php __('Technique Id'); ?></th>
		<th class="actions"><?php __('Actions');?></th>
	</tr>
	<?php
		$i = 0;
		foreach ($technique['MatchTech'] as $matchTech):
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
<div class="related">
	<h3><?php __('Related Project Teches');?></h3>
	<?php if (!empty($technique['ProjectTech'])):?>
	<table cellpadding = "0" cellspacing = "0">
	<tr>
		<th><?php __('Id'); ?></th>
		<th><?php __('Project Id'); ?></th>
		<th><?php __('Technique Id'); ?></th>
		<th class="actions"><?php __('Actions');?></th>
	</tr>
	<?php
		$i = 0;
		foreach ($technique['ProjectTech'] as $projectTech):
			$class = null;
			if ($i++ % 2 == 0) {
				$class = ' class="altrow"';
			}
		?>
		<tr<?php echo $class;?>>
			<td><?php echo $projectTech['id'];?></td>
			<td><?php echo $projectTech['project_id'];?></td>
			<td><?php echo $projectTech['technique_id'];?></td>
			<td class="actions">
				<?php echo $this->Html->link(__('View', true), array('controller' => 'project_teches', 'action' => 'view', $projectTech['id'])); ?>
				<?php echo $this->Html->link(__('Edit', true), array('controller' => 'project_teches', 'action' => 'edit', $projectTech['id'])); ?>
				<?php echo $this->Html->link(__('Delete', true), array('controller' => 'project_teches', 'action' => 'delete', $projectTech['id']), null, sprintf(__('Are you sure you want to delete # %s?', true), $projectTech['id'])); ?>
			</td>
		</tr>
	<?php endforeach; ?>
	</table>
<?php endif; ?>

	<div class="actions">
		<ul>
			<li><?php echo $this->Html->link(__('New Project Tech', true), array('controller' => 'project_teches', 'action' => 'add'));?> </li>
		</ul>
	</div>
</div>
