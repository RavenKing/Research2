<div class="applytables index">
	<h2><?php __('Applytables');?></h2>
	<table cellpadding="0" cellspacing="0">
	<tr>
			<th><?php echo $this->Paginator->sort('id');?></th>
			<th><?php echo $this->Paginator->sort('name');?></th>
			<th><?php echo $this->Paginator->sort('tel');?></th>
			<th><?php echo $this->Paginator->sort('email');?></th>
			<th><?php echo $this->Paginator->sort('src');?></th>
			<th><?php echo $this->Paginator->sort('match_id');?></th>
			<th class="actions"><?php __('Actions');?></th>
	</tr>
	<?php
	$i = 0;
	foreach ($applytables as $applytable):
		$class = null;
		if ($i++ % 2 == 0) {
			$class = ' class="altrow"';
		}
	?>
	<tr<?php echo $class;?>>
		<td><?php echo $applytable['Applytable']['id']; ?>&nbsp;</td>
		<td><?php echo $applytable['Applytable']['name']; ?>&nbsp;</td>
		<td><?php echo $applytable['Applytable']['tel']; ?>&nbsp;</td>
		<td><?php echo $applytable['Applytable']['email']; ?>&nbsp;</td>
		<td><?php echo $applytable['Applytable']['src']; ?>&nbsp;</td>
		<td>
			<?php echo $this->Html->link($applytable['Match']['name'], array('controller' => 'matches', 'action' => 'view', $applytable['Match']['id'])); ?>
		</td>
		<td class="actions">
			<?php echo $this->Html->link(__('View', true), array('action' => 'view', $applytable['Applytable']['id'])); ?>
			<?php echo $this->Html->link(__('Edit', true), array('action' => 'edit', $applytable['Applytable']['id'])); ?>
			<?php echo $this->Html->link(__('Delete', true), array('action' => 'delete', $applytable['Applytable']['id']), null, sprintf(__('Are you sure you want to delete # %s?', true), $applytable['Applytable']['id'])); ?>
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
		<li><?php echo $this->Html->link(__('New Applytable', true), array('action' => 'add')); ?></li>
		<li><?php echo $this->Html->link(__('List Matches', true), array('controller' => 'matches', 'action' => 'index')); ?> </li>
		<li><?php echo $this->Html->link(__('New Match', true), array('controller' => 'matches', 'action' => 'add')); ?> </li>
	</ul>
</div>