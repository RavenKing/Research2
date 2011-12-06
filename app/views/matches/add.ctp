<div class="matches form">
<?php echo $this->Form->create('Match',array('type'=>'file'));?>
	<fieldset>
		<legend><?php __('Add Match'); ?></legend>
	<?php
		echo $this->Form->input('name');
		echo $this->Form->input('time');
		echo $this->Form->input('theme');
		echo $this->Form->input('requirement');
		
		echo $this->Form->input('issignable');
		echo $this->Form->input('user_id',array('type'=>'hidden','value'=>$_SESSION['Auth']['User']['id']));
		echo $this->Form->input('description');
		$option=$this->requestAction(array('controller'=>'Techniques','action'=>'getlist'));
		echo $this->Form->input('technique_id',array('options'=>$option,'multiple'=>'checkbox','type'=>'select','label'=>'techniques'));
		echo $this->Form->input('src',array('type'=>'file'));
		//print_r($option);
		
	?>
	</fieldset>
<?php echo $this->Form->end(__('Submit', true));?>
</div>
<div class="actions">
	<h3><?php __('Actions'); ?></h3>
	<ul>

		<li><?php echo $this->Html->link(__('List Matches', true), array('action' => 'index'));?></li>
		<li><?php echo $this->Html->link(__('List Users', true), array('controller' => 'users', 'action' => 'index')); ?> </li>
		<li><?php echo $this->Html->link(__('New User', true), array('controller' => 'users', 'action' => 'add')); ?> </li>
		<li><?php echo $this->Html->link(__('List Match Teches', true), array('controller' => 'match_teches', 'action' => 'index')); ?> </li>
		<li><?php echo $this->Html->link(__('New Match Tech', true), array('controller' => 'match_teches', 'action' => 'add')); ?> </li>
	</ul>
</div>