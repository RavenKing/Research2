<div class="teachers form">
<?php echo $this->Form->create('Teacher',array('type'=>'file'));?>
	<fieldset>
		<legend><?php __('Add Teacher'); ?></legend>
	<?php
		echo $this->Form->input('name');
		echo $this->Form->input('email');
		echo $this->Form->input('tel');
		echo $this->Form->input('office');
		echo $this->Form->input('faculty_id');
		echo $this->Form->input('url',array('type'=>'hidden'));
		echo $this->Form->input('description');
		echo $this->Form->input('src',array('type'=>'file'));
	?>
	</fieldset>
<?php echo $this->Form->end(__('Submit', true));?>
</div>
<div class="actions">
	<h3><?php __('Actions'); ?></h3>
	<ul>

		<li><?php echo $this->Html->link(__('List Teachers', true), array('action' => 'index'));?></li>
		<li><?php echo $this->Html->link(__('List Faculties', true), array('controller' => 'faculties', 'action' => 'index')); ?> </li>
		<li><?php echo $this->Html->link(__('New Faculty', true), array('controller' => 'faculties', 'action' => 'add')); ?> </li>
		<li><?php echo $this->Html->link(__('List Projects', true), array('controller' => 'projects', 'action' => 'index')); ?> </li>
		<li><?php echo $this->Html->link(__('New Project', true), array('controller' => 'projects', 'action' => 'add')); ?> </li>
	</ul>
</div><script type="text/javascript">
document.getElementById('TeacherUrl').value=document.referrer;
</script>