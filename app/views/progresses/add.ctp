<div class="progresses form">
<?php echo $this->Form->create('Progress');?>
	<fieldset>
		<legend><?php __('Add Progress'); ?></legend>
	<?php
		echo $this->Form->input('name');
		echo $this->Form->input('url',array('type'=>'hidden'));
	?>
	</fieldset>
<?php echo $this->Form->end(__('Submit', true));?>
</div>
<div class="actions">
	<h3><?php __('Actions'); ?></h3>
	<ul>

		<li><?php echo $this->Html->link(__('List Progresses', true), array('action' => 'index'));?></li>
		<li><?php echo $this->Html->link(__('List Projects', true), array('controller' => 'projects', 'action' => 'index')); ?> </li>
		<li><?php echo $this->Html->link(__('New Project', true), array('controller' => 'projects', 'action' => 'add')); ?> </li>
	</ul>
</div>
<script type="text/javascript">
document.getElementById('ProgressUrl').value=document.referrer;
</script>