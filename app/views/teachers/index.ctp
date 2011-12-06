<div class="teachers index">
	<h2><?php __('Teachers');?></h2>
	<table cellpadding="0" cellspacing="0">
	<tr>
			<th><?php echo $this->Paginator->sort('id');?></th>
			<th><?php echo $this->Paginator->sort('name');?></th>
			<th><?php echo $this->Paginator->sort('email');?></th>
			<th><?php echo $this->Paginator->sort('tel');?></th>
			<th><?php echo $this->Paginator->sort('office');?></th>
			<th><?php echo $this->Paginator->sort('faculty_id');?></th>
			<th><?php echo $this->Paginator->sort('created');?></th>
			<th><?php echo $this->Paginator->sort('modified');?></th>
			<th class="actions"><?php __('Actions');?></th>
	</tr>
	<?php
	$i = 0;
	foreach ($teachers as $teacher):
		$class = null;
		if ($i++ % 2 == 0) {
			$class = ' class="altrow"';
		}
	?>
	<tr<?php echo $class;?>>
		<td><?php echo $teacher['Teacher']['id']; ?>&nbsp;</td>
		<td><?php echo $teacher['Teacher']['name']; ?>&nbsp;</td>
		<td><?php echo $teacher['Teacher']['email']; ?>&nbsp;</td>
		<td><?php echo $teacher['Teacher']['tel']; ?>&nbsp;</td>
		<td><?php echo $teacher['Teacher']['office']; ?>&nbsp;</td>
		<td>
			<?php echo $this->Html->link($teacher['Faculty']['name'], array('controller' => 'faculties', 'action' => 'view', $teacher['Faculty']['id'])); ?>
		</td>
		<td><?php echo $teacher['Teacher']['created']; ?>&nbsp;</td>
		<td><?php echo $teacher['Teacher']['modified']; ?>&nbsp;</td>
		<td class="actions">
			<?php echo $this->Html->link(__('View', true), array('action' => 'view', $teacher['Teacher']['id'])); ?>
			<?php echo $this->Html->link(__('Edit', true), array('action' => 'edit', $teacher['Teacher']['id'])); ?>
			<?php echo $this->Html->link(__('Delete', true), array('action' => 'delete', $teacher['Teacher']['id']), null, sprintf(__('Are you sure you want to delete # %s?', true), $teacher['Teacher']['id'])); ?>
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
		<li><?php echo $this->Html->link(__('New Teacher', true), array('action' => 'add')); ?></li>
		<li><?php echo $this->Html->link(__('List Faculties', true), array('controller' => 'faculties', 'action' => 'index')); ?> </li>
		<li><?php echo $this->Html->link(__('New Faculty', true), array('controller' => 'faculties', 'action' => 'add')); ?> </li>
		<li><?php echo $this->Html->link(__('List Projects', true), array('controller' => 'projects', 'action' => 'index')); ?> </li>
		<li><?php echo $this->Html->link(__('New Project', true), array('controller' => 'projects', 'action' => 'add')); ?> </li>
	</ul>
</div>