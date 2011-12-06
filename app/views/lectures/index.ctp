<div class="lectures index">
	<h2><?php __('Lectures');?></h2>
	<table cellpadding="0" cellspacing="0">
	<tr>
			<th><?php echo $this->Paginator->sort('id');?></th>
			<th><?php echo $this->Paginator->sort('name');?></th>
			<th><?php echo $this->Paginator->sort('created');?></th>
			<th><?php echo $this->Paginator->sort('modified');?></th>
			<th><?php echo $this->Paginator->sort('speechmaker');?></th>
			<th><?php echo $this->Paginator->sort('time');?></th>
			<th><?php echo $this->Paginator->sort('place');?></th>
			<th><?php echo $this->Paginator->sort('description');?></th>
			<th class="actions"><?php __('Actions');?></th>
	</tr>
	<?php
	$i = 0;
	foreach ($lectures as $lecture):
		$class = null;
		if ($i++ % 2 == 0) {
			$class = ' class="altrow"';
		}
	?>
	<tr<?php echo $class;?>>
		<td><?php echo $lecture['Lecture']['id']; ?>&nbsp;</td>
		<td><?php echo $lecture['Lecture']['name']; ?>&nbsp;</td>
		<td><?php echo $lecture['Lecture']['created']; ?>&nbsp;</td>
		<td><?php echo $lecture['Lecture']['modified']; ?>&nbsp;</td>
		<td><?php echo $lecture['Lecture']['speechmaker']; ?>&nbsp;</td>
		<td><?php echo $lecture['Lecture']['time']; ?>&nbsp;</td>
		<td><?php echo $lecture['Lecture']['place']; ?>&nbsp;</td>
		<td><?php echo $lecture['Lecture']['description']; ?>&nbsp;</td>
		<td class="actions">
			<?php echo $this->Html->link(__('View', true), array('action' => 'view', $lecture['Lecture']['id'])); ?>
			<?php echo $this->Html->link(__('Edit', true), array('action' => 'edit', $lecture['Lecture']['id'])); ?>
			<?php echo $this->Html->link(__('Delete', true), array('action' => 'delete', $lecture['Lecture']['id']), null, sprintf(__('Are you sure you want to delete # %s?', true), $lecture['Lecture']['id'])); ?>
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
		<li><?php echo $this->Html->link(__('New Lecture', true), array('action' => 'add')); ?></li>
	</ul>
</div>