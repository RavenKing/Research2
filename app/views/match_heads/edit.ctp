<div class="matchHeads form">
<?php echo $this->Form->create('MatchHead');?>
	<fieldset>
		<legend><?php __('Edit Match Head'); ?></legend>
	<?php
		echo $this->Form->input('id');
		echo $this->Form->input('match_id');
		echo $this->Form->input('src');
	?>
	</fieldset>
<?php echo $this->Form->end(__('Submit', true));?>
</div>
<div class="actions">
	<h3><?php __('Actions'); ?></h3>
	<ul>

		<li><?php echo $this->Html->link(__('Delete', true), array('action' => 'delete', $this->Form->value('MatchHead.id')), null, sprintf(__('Are you sure you want to delete # %s?', true), $this->Form->value('MatchHead.id'))); ?></li>
		<li><?php echo $this->Html->link(__('List Match Heads', true), array('action' => 'index'));?></li>
		<li><?php echo $this->Html->link(__('List Matches', true), array('controller' => 'matches', 'action' => 'index')); ?> </li>
		<li><?php echo $this->Html->link(__('New Match', true), array('controller' => 'matches', 'action' => 'add')); ?> </li>
	</ul>
</div>