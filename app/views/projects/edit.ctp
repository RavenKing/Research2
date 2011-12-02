<div class="projects form">
<?php echo $this->Form->create('Project');?>
	<fieldset>
		<legend><?php __('Edit Project'); ?></legend>
	<?php
		echo $this->Form->input('id');
		echo $this->Form->input('name');
		echo $this->Form->input('teacher_id');
		echo $this->Form->input('direction_id');
		echo $this->Form->input('progress_id');
		echo $this->Form->input('isjoinable');
		echo $this->Form->input('starttime');
		echo $this->Form->input('endtime');
		echo $this->Form->input('description');
	?>
	</fieldset>
<?php echo $this->Form->end(__('Submit', true));?>
</div>
<div class="actions">
	<h3><?php __('Actions'); ?></h3>
	<ul>

		<li><?php echo $this->Html->link(__('Delete', true), array('action' => 'delete', $this->Form->value('Project.id')), null, sprintf(__('Are you sure you want to delete # %s?', true), $this->Form->value('Project.id'))); ?></li>
		<li><?php echo $this->Html->link(__('List Projects', true), array('action' => 'index'));?></li>
		<li><?php echo $this->Html->link(__('List Teachers', true), array('controller' => 'teachers', 'action' => 'index')); ?> </li>
		<li><?php echo $this->Html->link(__('New Teacher', true), array('controller' => 'teachers', 'action' => 'add')); ?> </li>
		<li><?php echo $this->Html->link(__('List Directions', true), array('controller' => 'directions', 'action' => 'index')); ?> </li>
		<li><?php echo $this->Html->link(__('New Direction', true), array('controller' => 'directions', 'action' => 'add')); ?> </li>
		<li><?php echo $this->Html->link(__('List Progresses', true), array('controller' => 'progresses', 'action' => 'index')); ?> </li>
		<li><?php echo $this->Html->link(__('New Progress', true), array('controller' => 'progresses', 'action' => 'add')); ?> </li>
		<li><?php echo $this->Html->link(__('List Project Teches', true), array('controller' => 'project_teches', 'action' => 'index')); ?> </li>
		<li><?php echo $this->Html->link(__('New Project Tech', true), array('controller' => 'project_teches', 'action' => 'add')); ?> </li>
	</ul>
</div>