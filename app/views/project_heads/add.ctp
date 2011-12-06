<div class="projectHeads form">
<?php echo $this->Form->create('ProjectHead',array('type'=>'file'));?>
	<fieldset>
		<legend><?php __('Add Project Head'); ?></legend>
	<?php
		echo $this->Form->input('project_id');
	//echo $this->Form->input('src',array('type'=>'file'));
		echo $form->input('src', array('type' => 'file'));
	?>
	</fieldset>
<?php echo $this->Form->end(__('Submit', true));?>
</div>
<div class="actions">
	<h3><?php __('Actions'); ?></h3>
	<ul>

		<li><?php echo $this->Html->link(__('List Project Heads', true), array('action' => 'index'));?></li>
		<li><?php echo $this->Html->link(__('List Projects', true), array('controller' => 'projects', 'action' => 'index')); ?> </li>
		<li><?php echo $this->Html->link(__('New Project', true), array('controller' => 'projects', 'action' => 'add')); ?> </li>
	</ul>
</div>