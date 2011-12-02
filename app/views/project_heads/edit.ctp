<div class="projectHeads form">
<?php echo $this->Form->create('ProjectHead');?>
	<fieldset>
		<legend><?php __('Edit Project Head'); ?></legend>
	<?php
		echo $this->Form->input('id');
		echo $this->Form->input('project_id');
		echo $this->Form->input('src');
	?>
	</fieldset>
<?php echo $this->Form->end(__('Submit', true));?>
</div>
<div class="actions">
	<h3><?php __('Actions'); ?></h3>
	<ul>

		<li><?php echo $this->Html->link(__('Delete', true), array('action' => 'delete', $this->Form->value('ProjectHead.id')), null, sprintf(__('Are you sure you want to delete # %s?', true), $this->Form->value('ProjectHead.id'))); ?></li>
		<li><?php echo $this->Html->link(__('List Project Heads', true), array('action' => 'index'));?></li>
		<li><?php echo $this->Html->link(__('List Projects', true), array('controller' => 'projects', 'action' => 'index')); ?> </li>
		<li><?php echo $this->Html->link(__('New Project', true), array('controller' => 'projects', 'action' => 'add')); ?> </li>
	</ul>
</div>