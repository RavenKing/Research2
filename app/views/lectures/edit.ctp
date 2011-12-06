<div class="lectures form">
<?php echo $this->Form->create('Lecture');?>
	<fieldset>
		<legend><?php __('Edit Lecture'); ?></legend>
	<?php
		echo $this->Form->input('id');
		echo $this->Form->input('name');
		echo $this->Form->input('speechmaker');
		echo $this->Form->input('time');
		echo $this->Form->input('place');
		echo $this->Form->input('description');
	?>
	</fieldset>
<?php echo $this->Form->end(__('Submit', true));?>
</div>
<div class="actions">
	<h3><?php __('Actions'); ?></h3>
	<ul>

		<li><?php echo $this->Html->link(__('Delete', true), array('action' => 'delete', $this->Form->value('Lecture.id')), null, sprintf(__('Are you sure you want to delete # %s?', true), $this->Form->value('Lecture.id'))); ?></li>
		<li><?php echo $this->Html->link(__('List Lectures', true), array('action' => 'index'));?></li>
	</ul>
</div>