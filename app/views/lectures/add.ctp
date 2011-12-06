<div class="lectures form">
<?php echo $this->Form->create('Lecture',array('type'=>'file'));?>
	<fieldset>
		<legend><?php __('Add Lecture'); ?></legend>
	<?php
		echo $this->Form->input('name');
		echo $this->Form->input('speechmaker');
		echo $this->Form->input('time');
		echo $this->Form->input('place');
		echo $this->Form->input('user_id',array('type'=>'hidden','value'=>$_SESSION['Auth']['User']['id']));
		echo $this->Form->input('src',array('type'=>'file'));
		?>
		<?php $option=$this->requestAction(array('controller'=>'places','action'=>'getlist'));
		//print_r($option);
		echo $this->Form->input('commonplace',array('options'=>$option,'type'=>'radio','onclick'=>'addplace(this)'));
				$option=$this->requestAction(array('controller'=>'Techniques','action'=>'getlist'));
		//echo $this->Form->input('technique_id',array('options'=>$option,'multiple'=>'checkbox','type'=>'select'));
		echo $this->Form->input('description');
	    //echo $this->Form->input('src',array('type'=>'file'));
	?>
	</fieldset>
<?php echo $this->Form->end(__('Submit', true));?>
</div>
<div class="actions">
	<h3><?php __('Actions'); ?></h3>
	<ul>

		<li><?php echo $this->Html->link(__('List Lectures', true), array('action' => 'index'));?></li>
	</ul>
</div>
<script type="text/javascript">
  function addplace(obj)
  {
   var place=document.getElementById('LecturePlace');
   var label=obj.nextSibling;
   //place.text=label.innerHTML;
   place.value=label.innerHTML;
 // alert(place.text);
  
  var description=document.getElementById('LectureDescription');
  description.value="地点:"+place.value;
  
  }
</script>