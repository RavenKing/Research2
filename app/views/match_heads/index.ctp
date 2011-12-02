<div class="matchHeads index">
	<h2><?php __('Match Heads');?></h2>
	<table cellpadding="0" cellspacing="0">
	<tr>
			<th><?php echo $this->Paginator->sort('id');?></th>
			<th><?php echo $this->Paginator->sort('match_id');?></th>
			<th><?php echo $this->Paginator->sort('src');?></th>
			<th class="actions"><?php __('Actions');?></th>
	</tr>
	<?php
	$i = 0;
	foreach ($matchHeads as $matchHead):
		$class = null;
		if ($i++ % 2 == 0) {
			$class = ' class="altrow"';
		}
	?>
	<tr<?php echo $class;?>>
		<td><?php echo $matchHead['MatchHead']['id']; ?>&nbsp;</td>
		<td>
			<?php echo $this->Html->link($matchHead['Match']['name'], array('controller' => 'matches', 'action' => 'view', $matchHead['Match']['id'])); ?>
		</td>
		<td><?php echo $matchHead['MatchHead']['src']; ?>&nbsp;</td>
		<td class="actions">
			<?php echo $this->Html->link(__('View', true), array('action' => 'view', $matchHead['MatchHead']['id'])); ?>
			<?php echo $this->Html->link(__('Edit', true), array('action' => 'edit', $matchHead['MatchHead']['id'])); ?>
			<?php echo $this->Html->link(__('Delete', true), array('action' => 'delete', $matchHead['MatchHead']['id']), null, sprintf(__('Are you sure you want to delete # %s?', true), $matchHead['MatchHead']['id'])); ?>
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
		<li><?php echo $this->Html->link(__('New Match Head', true), array('action' => 'add')); ?></li>
		<li><?php echo $this->Html->link(__('List Matches', true), array('controller' => 'matches', 'action' => 'index')); ?> </li>
		<li><?php echo $this->Html->link(__('New Match', true), array('controller' => 'matches', 'action' => 'add')); ?> </li>
	</ul>
</div>