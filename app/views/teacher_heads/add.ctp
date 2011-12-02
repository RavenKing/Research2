<div class="teacherHeads form">
<?php echo $this->Form->create('TeacherHead',array('type'=>'file'));?>
	<fieldset>
		<legend><?php __('Add Teacher Head'); ?></legend>
	<?php
		echo $this->Form->input('teacher_id');
		echo $this->Form->input('src',array('type'=>'file'));
	?>
	</fieldset>
<?php echo $this->Form->end(__('Submit', true));?>
</div>
<div class="actions">
	<h3><?php __('Actions'); ?></h3>
	<ul>

		<li><?php echo $this->Html->link(__('List Teacher Heads', true), array('action' => 'index'));?></li>
		<li><?php echo $this->Html->link(__('List Teachers', true), array('controller' => 'teachers', 'action' => 'index')); ?> </li>
		<li><?php echo $this->Html->link(__('New Teacher', true), array('controller' => 'teachers', 'action' => 'add')); ?> </li>
	</ul>
</div>