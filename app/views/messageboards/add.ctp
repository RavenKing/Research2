<div class="messageboards form">
<?php echo $this->Form->create('Messageboard');?>
	<fieldset>
		<legend><?php __('Add Messageboard'); ?></legend>
	<?php
		echo $this->Form->input('username');
		echo $this->Form->input('text');
	?>
	</fieldset>
<?php echo $this->Form->end(__('Submit', true));?>
</div>
<div class="actions">
	<h3><?php __('Actions'); ?></h3>
	<ul>

		<li><?php echo $this->Html->link(__('List Messageboards', true), array('action' => 'index'));?></li>
	</ul>
</div>