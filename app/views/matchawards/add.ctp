<div class="matchawards form">
<?php echo $this->Form->create('Matchaward',array('type'=>'file'));?>
	<fieldset>
		<legend><?php __('Add Matchaward'); ?></legend>
	<?php
		echo $this->Form->input('match_id');
		echo $this->Form->input('title');
		echo $this->Form->input('description');
		echo $this->Form->input('src',array('type'=>'file'));
	?>
	</fieldset>
<?php echo $this->Form->end(__('Submit', true));?>
</div>
<div class="actions">
	<h3><?php __('Actions'); ?></h3>
	<ul>

		<li><?php echo $this->Html->link(__('List Matchawards', true), array('action' => 'index'));?></li>
		<li><?php echo $this->Html->link(__('List Matches', true), array('controller' => 'matches', 'action' => 'index')); ?> </li>
		<li><?php echo $this->Html->link(__('New Match', true), array('controller' => 'matches', 'action' => 'add')); ?> </li>
	</ul>
</div>