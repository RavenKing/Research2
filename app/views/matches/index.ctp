<div class="matches index">
	<h2><?php __('Matches');?></h2>
	<table cellpadding="0" cellspacing="0">
	<tr>
			<th><?php echo $this->Paginator->sort('id');?></th>
			<th><?php echo $this->Paginator->sort('name');?></th>
			<th><?php echo $this->Paginator->sort('created');?></th>
			<th><?php echo $this->Paginator->sort('modified');?></th>
			<th><?php echo $this->Paginator->sort('time');?></th>
			<th><?php echo $this->Paginator->sort('issignable');?></th>
			<th><?php echo $this->Paginator->sort('user_id');?></th>
			<th><?php echo $this->Paginator->sort('description');?></th>
			<th class="actions"><?php __('Actions');?></th>
	</tr>
	<?php
	$i = 0;
	foreach ($matches as $match):
		$class = null;
		if ($i++ % 2 == 0) {
			$class = ' class="altrow"';
		}
	?>
	<tr<?php echo $class;?>>
		<td><?php echo $match['Match']['id']; ?>&nbsp;</td>
		<td><?php echo $match['Match']['name']; ?>&nbsp;</td>
		<td><?php echo $match['Match']['created']; ?>&nbsp;</td>
		<td><?php echo $match['Match']['modified']; ?>&nbsp;</td>
		<td><?php echo $match['Match']['time']; ?>&nbsp;</td>
		<td><?php echo $match['Match']['issignable']; ?>&nbsp;</td>
		<td>
			<?php echo $this->Html->link($match['User']['name'], array('controller' => 'users', 'action' => 'view', $match['User']['id'])); ?>
		</td>
		<td><?php echo $match['Match']['description']; ?>&nbsp;</td>
		<td class="actions">
			<?php echo $this->Html->link(__('View', true), array('action' => 'view', $match['Match']['id'])); ?>
			<?php echo $this->Html->link(__('Edit', true), array('action' => 'edit', $match['Match']['id'])); ?>
			<?php echo $this->Html->link(__('Delete', true), array('action' => 'delete', $match['Match']['id']), null, sprintf(__('Are you sure you want to delete # %s?', true), $match['Match']['id'])); ?>
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
		<li><?php echo $this->Html->link(__('New Match', true), array('action' => 'add')); ?></li>
		<li><?php echo $this->Html->link(__('List Users', true), array('controller' => 'users', 'action' => 'index')); ?> </li>
		<li><?php echo $this->Html->link(__('New User', true), array('controller' => 'users', 'action' => 'add')); ?> </li>
		<li><?php echo $this->Html->link(__('List Match Teches', true), array('controller' => 'match_teches', 'action' => 'index')); ?> </li>
		<li><?php echo $this->Html->link(__('New Match Tech', true), array('controller' => 'match_teches', 'action' => 'add')); ?> </li>
	</ul>
</div>