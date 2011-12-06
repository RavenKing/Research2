
<?php
  $id=$getid;
  echo $id;
  
  $option=$this->requestAction(array('controller'=>'techniques','action'=>'getlist'));
echo  $this->Form->create('ProjectTeches');
?>
	<fieldset>
		<legend><?php __('Add Match'); ?></legend>
  <?php echo $this->Form->input('project_id',array('type'=>'hidden','value'=>$id));
  echo $this->Form->input('technique_id',array('options'=>$option,'multiple'=>'checkbox','type'=>'select','label'=>''));
  ?>
	</fieldset>
  <?php echo $this->Form->end(__('Submit', true))
  

?>