<div class="lectureHeads index">
	<h2><?php __('Lecture Heads');?></h2>
	<table cellpadding="0" cellspacing="0">
	<tr>
			<th><?php echo $this->Paginator->sort('id');?></th>
			<th><?php echo $this->Paginator->sort('lecture_id');?></th>
			<th><?php echo $this->Paginator->sort('src');?></th>
			<th class="actions"><?php __('Actions');?></th>
	</tr>
	<?php
	$i = 0;
	foreach ($lectureHeads as $lectureHead):
		$class = null;
		if ($i++ % 2 == 0) {
			$class = ' class="altrow"';
		}
	?>
	<tr<?php echo $class;?>>
		<td><?php echo $lectureHead['LectureHead']['id']; ?>&nbsp;</td>
		<td>
			<?php echo $this->Html->link($lectureHead['Lecture']['name'], array('controller' => 'lectures', 'action' => 'view', $lectureHead['Lecture']['id'])); ?>
		</td>
		<td><?php echo $lectureHead['LectureHead']['src']; ?>&nbsp;</td>
		<td class="actions">
			<?php echo $this->Html->link(__('View', true), array('action' => 'view', $lectureHead['LectureHead']['id'])); ?>
			<?php echo $this->Html->link(__('Edit', true), array('action' => 'edit', $lectureHead['LectureHead']['id'])); ?>
			<?php echo $this->Html->link(__('Delete', true), array('action' => 'delete', $lectureHead['LectureHead']['id']), null, sprintf(__('Are you sure you want to delete # %s?', true), $lectureHead['LectureHead']['id'])); ?>
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
		<li><?php echo $this->Html->link(__('New Lecture Head', true), array('action' => 'add')); ?></li>
		<li><?php echo $this->Html->link(__('List Lectures', true), array('controller' => 'lectures', 'action' => 'index')); ?> </li>
		<li><?php echo $this->Html->link(__('New Lecture', true), array('controller' => 'lectures', 'action' => 'add')); ?> </li>
	</ul>
</div>