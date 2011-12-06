<div class="lectureHeads form">
<?php echo $this->Form->create('LectureHead');?>
	<fieldset>
		<legend><?php __('Add Lecture Head'); ?></legend>
	<?php
		echo $this->Form->input('lecture_id');
		echo $this->Form->input('src');
	?>
	</fieldset>
<?php echo $this->Form->end(__('Submit', true));?>
</div>
<div class="actions">
	<h3><?php __('Actions'); ?></h3>
	<ul>

		<li><?php echo $this->Html->link(__('List Lecture Heads', true), array('action' => 'index'));?></li>
		<li><?php echo $this->Html->link(__('List Lectures', true), array('controller' => 'lectures', 'action' => 'index')); ?> </li>
		<li><?php echo $this->Html->link(__('New Lecture', true), array('controller' => 'lectures', 'action' => 'add')); ?> </li>
	</ul>
</div>