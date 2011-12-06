<div class="projectHeads index">
	<h2><?php __('Project Heads');?></h2>
	<table cellpadding="0" cellspacing="0">
	<tr>
			<th><?php echo $this->Paginator->sort('id');?></th>
			<th><?php echo $this->Paginator->sort('project_id');?></th>
			<th><?php echo $this->Paginator->sort('src');?></th>
			<th class="actions"><?php __('Actions');?></th>
	</tr>
	<?php
	$i = 0;
	foreach ($projectHeads as $projectHead):
		$class = null;
		if ($i++ % 2 == 0) {
			$class = ' class="altrow"';
		}
	?>
	<tr<?php echo $class;?>>
		<td><?php echo $projectHead['ProjectHead']['id']; ?>&nbsp;</td>
		<td>
			<?php echo $this->Html->link($projectHead['Project']['name'], array('controller' => 'projects', 'action' => 'view', $projectHead['Project']['id'])); ?>
		</td>
		<td><?php echo $projectHead['ProjectHead']['src']; ?>&nbsp;</td>
		<td class="actions">
			<?php echo $this->Html->link(__('View', true), array('action' => 'view', $projectHead['ProjectHead']['id'])); ?>
			<?php echo $this->Html->link(__('Edit', true), array('action' => 'edit', $projectHead['ProjectHead']['id'])); ?>
			<?php echo $this->Html->link(__('Delete', true), array('action' => 'delete', $projectHead['ProjectHead']['id']), null, sprintf(__('Are you sure you want to delete # %s?', true), $projectHead['ProjectHead']['id'])); ?>
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
		<li><?php echo $this->Html->link(__('New Project Head', true), array('action' => 'add')); ?></li>
		<li><?php echo $this->Html->link(__('List Projects', true), array('controller' => 'projects', 'action' => 'index')); ?> </li>
		<li><?php echo $this->Html->link(__('New Project', true), array('controller' => 'projects', 'action' => 'add')); ?> </li>
	</ul>
</div>