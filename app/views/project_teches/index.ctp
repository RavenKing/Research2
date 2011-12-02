<div class="projectTeches index">
	<h2><?php __('Project Teches');?></h2>
	<table cellpadding="0" cellspacing="0">
	<tr>
			<th><?php echo $this->Paginator->sort('id');?></th>
			<th><?php echo $this->Paginator->sort('project_id');?></th>
			<th><?php echo $this->Paginator->sort('technique_id');?></th>
			<th class="actions"><?php __('Actions');?></th>
	</tr>
	<?php
	$i = 0;
	foreach ($projectTeches as $projectTech):
		$class = null;
		if ($i++ % 2 == 0) {
			$class = ' class="altrow"';
		}
	?>
	<tr<?php echo $class;?>>
		<td><?php echo $projectTech['ProjectTech']['id']; ?>&nbsp;</td>
		<td>
			<?php echo $this->Html->link($projectTech['Project']['name'], array('controller' => 'projects', 'action' => 'view', $projectTech['Project']['id'])); ?>
		</td>
		<td>
			<?php echo $this->Html->link($projectTech['Technique']['name'], array('controller' => 'techniques', 'action' => 'view', $projectTech['Technique']['id'])); ?>
		</td>
		<td class="actions">
			<?php echo $this->Html->link(__('View', true), array('action' => 'view', $projectTech['ProjectTech']['id'])); ?>
			<?php echo $this->Html->link(__('Edit', true), array('action' => 'edit', $projectTech['ProjectTech']['id'])); ?>
			<?php echo $this->Html->link(__('Delete', true), array('action' => 'delete', $projectTech['ProjectTech']['id']), null, sprintf(__('Are you sure you want to delete # %s?', true), $projectTech['ProjectTech']['id'])); ?>
		</td>
	</tr>
<?php endforeach; ?>
	</table>
	<p>
	<?php
	echo $this->Paginator->counter(array(
	'format' => __('Page %page% of %pages%, showing %current% records out of %count% total, starting on record %start%, ending on %end%', true)
	));
	?>	</p>

	<div class="paging">
		<?php echo $this->Paginator->prev('<< ' . __('previous', true), array(), null, array('class'=>'disabled'));?>
	 | 	<?php echo $this->Paginator->numbers();?>
 |
		<?php echo $this->Paginator->next(__('next', true) . ' >>', array(), null, array('class' => 'disabled'));?>
	</div>
</div>
<div class="actions">
	<h3><?php __('Actions'); ?></h3>
	<ul>
		<li><?php echo $this->Html->link(__('New Project Tech', true), array('action' => 'add')); ?></li>
		<li><?php echo $this->Html->link(__('List Projects', true), array('controller' => 'projects', 'action' => 'index')); ?> </li>
		<li><?php echo $this->Html->link(__('New Project', true), array('controller' => 'projects', 'action' => 'add')); ?> </li>
		<li><?php echo $this->Html->link(__('List Techniques', true), array('controller' => 'techniques', 'action' => 'index')); ?> </li>
		<li><?php echo $this->Html->link(__('New Technique', true), array('controller' => 'techniques', 'action' => 'add')); ?> </li>
	</ul>
</div>