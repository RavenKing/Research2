<div class="projectTeches form">
<?php echo $this->Form->create('ProjectTech');?>
	<fieldset>
		<legend><?php __('Add Project Tech'); ?></legend>
	<?php
		echo $this->Form->input('project_id');
		echo $this->Form->input('technique_id');
	?>
	</fieldset>
<?php echo $this->Form->end(__('Submit', true));?>
</div>
<div class="actions">
	<h3><?php __('Actions'); ?></h3>
	<ul>

		<li><?php echo $this->Html->link(__('List Project Teches', true), array('action' => 'index'));?></li>
		<li><?php echo $this->Html->link(__('List Projects', true), array('controller' => 'projects', 'action' => 'index')); ?> </li>
		<li><?php echo $this->Html->link(__('New Project', true), array('controller' => 'projects', 'action' => 'add')); ?> </li>
		<li><?php echo $this->Html->link(__('List Techniques', true), array('controller' => 'techniques', 'action' => 'index')); ?> </li>
		<li><?php echo $this->Html->link(__('New Technique', true), array('controller' => 'techniques', 'action' => 'add')); ?> </li>
	</ul>
</div>