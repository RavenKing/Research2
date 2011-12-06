<div class="applytables form">
<?php echo $this->Form->create('Applytable',array('type'=>'file'));?>
	<fieldset>
		<legend><?php __('申请表'); ?></legend>
	<?php
		echo $this->Form->input('name');
		echo $this->Form->input('tel');
		echo $this->Form->input('email');
		echo $this->Form->input('src',array('type'=>'file','label'=>'上传申请资料（文件名用英文）'));?>		
<?php
		echo $this->Form->input('match_id');
	?>
	</fieldset>
<div style="float:right">
<?php echo $this->Form->end(__('Submit', true));?>
</div>
</div>
