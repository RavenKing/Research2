<div class="faculties form">
<?php echo $this->Form->create('Faculty');?>
	<fieldset>
		<legend><?php __('Add Faculty'); ?></legend>
	<?php
		echo $this->Form->input('name');
		echo $this->Form->input('url',array('type'=>'hidden'));
        echo $this->Form->input('description');    
	?>
	</fieldset>
<?php echo $this->Form->end(__('Submit', true));?>
</div>
<div class="actions">
	<h3><?php __('Actions'); ?></h3>
	<ul>

		<li><?php echo $this->Html->link(__('List Faculties', true), array('action' => 'index'));?></li>
		<li><?php echo $this->Html->link(__('List Teachers', true), array('controller' => 'teachers', 'action' => 'index')); ?> </li>
		<li><?php echo $this->Html->link(__('New Teacher', true), array('controller' => 'teachers', 'action' => 'add')); ?> </li>
	</ul>
</div>
<script type="text/javascript">
document.getElementById('FacultyUrl').value=document.referrer;
</script>