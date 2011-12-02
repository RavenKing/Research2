<div class="teacherHeads form">
<?php echo $this->Form->create('TeacherHead');?>
	<fieldset>
		<legend><?php __('Edit Teacher Head'); ?></legend>
	<?php
		echo $this->Form->input('id');
		echo $this->Form->input('teacher_id');
		echo $this->Form->input('src');
	?>
	</fieldset>
<?php echo $this->Form->end(__('Submit', true));?>
</div>
<div class="actions">
	<h3><?php __('Actions'); ?></h3>
	<ul>

		<li><?php echo $this->Html->link(__('Delete', true), array('action' => 'delete', $this->Form->value('TeacherHead.id')), null, sprintf(__('Are you sure you want to delete # %s?', true), $this->Form->value('TeacherHead.id'))); ?></li>
		<li><?php echo $this->Html->link(__('List Teacher Heads', true), array('action' => 'index'));?></li>
		<li><?php echo $this->Html->link(__('List Teachers', true), array('controller' => 'teachers', 'action' => 'index')); ?> </li>
		<li><?php echo $this->Html->link(__('New Teacher', true), array('controller' => 'teachers', 'action' => 'add')); ?> </li>
	</ul>
</div>