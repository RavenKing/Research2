<div class="matchawards form">
<?php echo $this->Form->create('Matchaward');?>
	<fieldset>
		<legend><?php __('Edit Matchaward'); ?></legend>
	<?php
		echo $this->Form->input('id');
		echo $this->Form->input('match_id');
		echo $this->Form->input('description');
		echo $this->Form->input('src');
	?>
	</fieldset>
<?php echo $this->Form->end(__('Submit', true));?>
</div>
<div class="actions">
	<h3><?php __('Actions'); ?></h3>
	<ul>

		<li><?php echo $this->Html->link(__('Delete', true), array('action' => 'delete', $this->Form->value('Matchaward.id')), null, sprintf(__('Are you sure you want to delete # %s?', true), $this->Form->value('Matchaward.id'))); ?></li>
		<li><?php echo $this->Html->link(__('List Matchawards', true), array('action' => 'index'));?></li>
		<li><?php echo $this->Html->link(__('List Matches', true), array('controller' => 'matches', 'action' => 'index')); ?> </li>
		<li><?php echo $this->Html->link(__('New Match', true), array('controller' => 'matches', 'action' => 'add')); ?> </li>
	</ul>
</div>