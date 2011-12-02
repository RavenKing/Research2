<div class="messageboards form">
<?php echo $this->Form->create('Messageboard');?>
	<fieldset>
		<legend><?php __('Edit Messageboard'); ?></legend>
	<?php
		echo $this->Form->input('id');
		echo $this->Form->input('username');
		echo $this->Form->input('text');
	?>
	</fieldset>
<?php echo $this->Form->end(__('Submit', true));?>
</div>
<div class="actions">
	<h3><?php __('Actions'); ?></h3>
	<ul>

		<li><?php echo $this->Html->link(__('Delete', true), array('action' => 'delete', $this->Form->value('Messageboard.id')), null, sprintf(__('Are you sure you want to delete # %s?', true), $this->Form->value('Messageboard.id'))); ?></li>
		<li><?php echo $this->Html->link(__('List Messageboards', true), array('action' => 'index'));?></li>
	</ul>
</div>