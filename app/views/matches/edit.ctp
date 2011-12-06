<div class="matches form">
<?php echo $this->Form->create('Match');?>
	<fieldset>
		<legend><?php __('Edit Match'); ?></legend>
	<?php
		echo $this->Form->input('id');
		echo $this->Form->input('name');
		echo $this->Form->input('time');
		echo $this->Form->input('issignable');
		echo $this->Form->input('user_id');
		echo $this->Form->input('description');
	?>
	</fieldset>
<?php echo $this->Form->end(__('Submit', true));?>
</div>
<div class="actions">
	<h3><?php __('Actions'); ?></h3>
	<ul>

		<li><?php echo $this->Html->link(__('Delete', true), array('action' => 'delete', $this->Form->value('Match.id')), null, sprintf(__('Are you sure you want to delete # %s?', true), $this->Form->value('Match.id'))); ?></li>
		<li><?php echo $this->Html->link(__('List Matches', true), array('action' => 'index'));?></li>
		<li><?php echo $this->Html->link(__('List Users', true), array('controller' => 'users', 'action' => 'index')); ?> </li>
		<li><?php echo $this->Html->link(__('New User', true), array('controller' => 'users', 'action' => 'add')); ?> </li>
		<li><?php echo $this->Html->link(__('List Match Teches', true), array('controller' => 'match_teches', 'action' => 'index')); ?> </li>
		<li><?php echo $this->Html->link(__('New Match Tech', true), array('controller' => 'match_teches', 'action' => 'add')); ?> </li>
	</ul>
</div>