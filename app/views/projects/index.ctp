<div class="projects index">
	<h2><?php __('Projects');?></h2>
	<table cellpadding="0" cellspacing="0">
	<tr>
			<th><?php echo $this->Paginator->sort('id');?></th>
			<th><?php echo $this->Paginator->sort('name');?></th>
			<th><?php echo $this->Paginator->sort('teacher_id');?></th>
			<th><?php echo $this->Paginator->sort('direction_id');?></th>
			<th><?php echo $this->Paginator->sort('progress_id');?></th>
			<th><?php echo $this->Paginator->sort('isjoinable');?></th>
			<th><?php echo $this->Paginator->sort('created');?></th>
			<th><?php echo $this->Paginator->sort('starttime');?></th>
			<th><?php echo $this->Paginator->sort('endtime');?></th>
			<th><?php echo $this->Paginator->sort('description');?></th>
			<th class="actions"><?php __('Actions');?></th>
	</tr>
	<?php
	$i = 0;
	foreach ($projects as $project):
		$class = null;
		if ($i++ % 2 == 0) {
			$class = ' class="altrow"';
		}
	?>
	<tr<?php echo $class;?>>
		<td><?php echo $project['Project']['id']; ?>&nbsp;</td>
		<td><?php echo $project['Project']['name']; ?>&nbsp;</td>
		<td>
			<?php echo $this->Html->link($project['Teacher']['name'], array('controller' => 'teachers', 'action' => 'view', $project['Teacher']['id'])); ?>
		</td>
		<td>
			<?php echo $this->Html->link($project['Direction']['name'], array('controller' => 'directions', 'action' => 'view', $project['Direction']['id'])); ?>
		</td>
		<td>
			<?php echo $this->Html->link($project['Progress']['name'], array('controller' => 'progresses', 'action' => 'view', $project['Progress']['id'])); ?>
		</td>
		<td><?php echo $project['Project']['isjoinable']; ?>&nbsp;</td>
		<td><?php echo $project['Project']['created']; ?>&nbsp;</td>
		<td><?php echo $project['Project']['starttime']; ?>&nbsp;</td>
		<td><?php echo $project['Project']['endtime']; ?>&nbsp;</td>
		<td><?php echo $project['Project']['description']; ?>&nbsp;</td>
		<td class="actions">
			<?php echo $this->Html->link(__('View', true), array('action' => 'view', $project['Project']['id'])); ?>
			<?php echo $this->Html->link(__('Edit', true), array('action' => 'edit', $project['Project']['id'])); ?>
			<?php echo $this->Html->link(__('Delete', true), array('action' => 'delete', $project['Project']['id']), null, sprintf(__('Are you sure you want to delete # %s?', true), $project['Project']['id'])); ?>
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
		<li><?php echo $this->Html->link(__('New Project', true), array('action' => 'add')); ?></li>
		<li><?php echo $this->Html->link(__('List Teachers', true), array('controller' => 'teachers', 'action' => 'index')); ?> </li>
		<li><?php echo $this->Html->link(__('New Teacher', true), array('controller' => 'teachers', 'action' => 'add')); ?> </li>
		<li><?php echo $this->Html->link(__('List Directions', true), array('controller' => 'directions', 'action' => 'index')); ?> </li>
		<li><?php echo $this->Html->link(__('New Direction', true), array('controller' => 'directions', 'action' => 'add')); ?> </li>
		<li><?php echo $this->Html->link(__('List Progresses', true), array('controller' => 'progresses', 'action' => 'index')); ?> </li>
		<li><?php echo $this->Html->link(__('New Progress', true), array('controller' => 'progresses', 'action' => 'add')); ?> </li>
		<li><?php echo $this->Html->link(__('List Project Teches', true), array('controller' => 'project_teches', 'action' => 'index')); ?> </li>
		<li><?php echo $this->Html->link(__('New Project Tech', true), array('controller' => 'project_teches', 'action' => 'add')); ?> </li>
	</ul>
</div>