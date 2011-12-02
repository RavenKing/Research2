<div class="directions form">
<?php echo $this->Form->create('Direction');?>
	<fieldset>
		<legend><?php __('Add Direction'); ?></legend>
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

		<li><?php echo $this->Html->link(__('List Directions', true), array('action' => 'index'));?></li>
		<li><?php echo $this->Html->link(__('List Projects', true), array('controller' => 'projects', 'action' => 'index')); ?> </li>
		<li><?php echo $this->Html->link(__('New Project', true), array('controller' => 'projects', 'action' => 'add')); ?> </li>
	</ul>
</div>
<script type="text/javascript">
document.getElementById('DirectionUrl').value=document.referrer;
</script>