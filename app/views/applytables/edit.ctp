<div class="applytables form">
<?php echo $this->Form->create('Applytable');?>
	<fieldset>
		<legend><?php __('Edit Applytable'); ?></legend>
	<?php
		echo $this->Form->input('id');
		echo $this->Form->input('name');
		echo $this->Form->input('tel');
		echo $this->Form->input('email');
		echo $this->Form->input('src');
		echo $this->Form->input('match_id');
	?>
	</fieldset>
<?php echo $this->Form->end(__('Submit', true));?>
</div>
<div class="actions">
	<h3><?php __('Actions'); ?></h3>
	<ul>

		<li><?php echo $this->Html->link(__('Delete', true), array('action' => 'delete', $this->Form->value('Applytable.id')), null, sprintf(__('Are you sure you want to delete # %s?', true), $this->Form->value('Applytable.id'))); ?></li>
		<li><?php echo $this->Html->link(__('List Applytables', true), array('action' => 'index'));?></li>
		<li><?php echo $this->Html->link(__('List Matches', true), array('controller' => 'matches', 'action' => 'index')); ?> </li>
		<li><?php echo $this->Html->link(__('New Match', true), array('controller' => 'matches', 'action' => 'add')); ?> </li>
	</ul>
</div>