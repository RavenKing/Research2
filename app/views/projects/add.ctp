<div class="projects form">
<?php echo $this->Form->create('Project',array('type'=>'file'));?>
	<fieldset>
		<legend><?php __('Add Project'); ?></legend>
	<?php
		echo $this->Form->input('name');
		echo $this->Form->input('teacher_id');
		echo $this->Html->link(__('add teacher',true),array('controller'=>'teachers','action'=>'add'));
		echo $this->Form->input('direction_id');
		echo $this->Html->link(__('add direction',true),array('controller'=>'directions','action'=>'add'));
		echo $this->Form->input('progress_id');
		echo $this->Html->link(__('add progress',true),array('controller'=>'progresses','action'=>'add'));
		echo $this->Form->input('faculty_id',array('option'=>$xis));
		echo $this->Form->input('xi_id');
		echo $this->Form->input('isjoinable');
		echo $this->Form->input('starttime');
		echo $this->Form->input('endtime');
		echo $this->Form->input('description');
        echo $this->Form->input('user_id',array('type'=>'hidden','value'=>$_SESSION['Auth']['User']['id']));
        echo $this->Form->input('src',array('type'=>'file','label'=>'Upload poster'));
		?>
	</fieldset>
<?php echo $this->Form->end(__('Submit', true));?>
</div>