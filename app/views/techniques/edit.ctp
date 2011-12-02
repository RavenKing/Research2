<div class="techniques form">
<?php echo $this->Form->create('Technique');?>
	<fieldset>
		<legend><?php __('Edit Technique'); ?></legend>
	<?php
		echo $this->Form->input('id');
		echo $this->Form->input('name');
	?>
	</fieldset>
<?php echo $this->Form->end(__('Submit', true));?>
</div>
<div class="actions">
	<h3><?php __('Actions'); ?></h3>
	<ul>

		<li><?php echo $this->Html->link(__('Delete', true), array('action' => 'delete', $this->Form->value('Technique.id')), null, sprintf(__('Are you sure you want to delete # %s?', true), $this->Form->value('Technique.id'))); ?></li>
		<li><?php echo $this->Html->link(__('List Techniques', true), array('action' => 'index'));?></li>
		<li><?php echo $this->Html->link(__('List Match Teches', true), array('controller' => 'match_teches', 'action' => 'index')); ?> </li>
		<li><?php echo $this->Html->link(__('New Match Tech', true), array('controller' => 'match_teches', 'action' => 'add')); ?> </li>
		<li><?php echo $this->Html->link(__('List Project Teches', true), array('controller' => 'project_teches', 'action' => 'index')); ?> </li>
		<li><?php echo $this->Html->link(__('New Project Tech', true), array('controller' => 'project_teches', 'action' => 'add')); ?> </li>
	</ul>
</div>