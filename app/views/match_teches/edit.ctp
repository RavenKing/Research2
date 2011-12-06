<div class="matchTeches form">
<?php echo $this->Form->create('MatchTech');?>
	<fieldset>
		<legend><?php __('Edit Match Tech'); ?></legend>
	<?php
		echo $this->Form->input('id');
		echo $this->Form->input('match_id');
		echo $this->Form->input('technique_id');
	?>
	</fieldset>
<?php echo $this->Form->end(__('Submit', true));?>
</div>
<div class="actions">
	<h3><?php __('Actions'); ?></h3>
	<ul>

		<li><?php echo $this->Html->link(__('Delete', true), array('action' => 'delete', $this->Form->value('MatchTech.id')), null, sprintf(__('Are you sure you want to delete # %s?', true), $this->Form->value('MatchTech.id'))); ?></li>
		<li><?php echo $this->Html->link(__('List Match Teches', true), array('action' => 'index'));?></li>
		<li><?php echo $this->Html->link(__('List Matches', true), array('controller' => 'matches', 'action' => 'index')); ?> </li>
		<li><?php echo $this->Html->link(__('New Match', true), array('controller' => 'matches', 'action' => 'add')); ?> </li>
		<li><?php echo $this->Html->link(__('List Techniques', true), array('controller' => 'techniques', 'action' => 'index')); ?> </li>
		<li><?php echo $this->Html->link(__('New Technique', true), array('controller' => 'techniques', 'action' => 'add')); ?> </li>
	</ul>
</div>