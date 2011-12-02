
<?php
if($_SESSION['Auth']['User']['group_id']==1)
{
?>
<div class="sidebar">
        	<h4><span><?php  echo __('Users Management');?></span></h4>
        		<ul class="styledlist" >
                    <li><?php  echo $this->Html->link(__('List Users',true),array('controller'=>'users','action'=>'index'));?></li>
                    <li><?php  echo $this->Html->link(__('Add a User',true),array('controller'=>'users','action'=>'add'));?></li>
                    <li><?php  echo $this->Html->link(__('Add a Usersgroup',true),array('controller'=>'groups','action'=>'add'));?></li>
                </ul>
      
            <h4><span><?php echo __('Faculty Management');?></span></h4> 
            	<ul class="styledlist" >
                    <li><?php  echo $this->Html->link(__('List Faculties',true),array('controller'=>'faculties','action'=>'index'));?></li>
                    <li><?php  echo $this->Html->link(__('Add a Faculty',true),array('controller'=>'faculties','action'=>'add'));?></li>
                    <li><?php  echo $this->Html->link(__('List teachers',true),array('controller'=>'teachers','action'=>'index'));?></li>
                    <li><?php  echo $this->Html->link(__('Add a teacher',true),array('controller'=>'teachers','action'=>'add'));?></li>
                    
                </ul>
                
                
            <h4><span>Other Management</span></h4>
            	<ul class="styledlist" >
                    <li><?php  echo $this->Html->link(__('List Research Directions',true),array('controller'=>'directions','action'=>'index'));?></li>
                    <li><?php  echo $this->Html->link(__('Add a Research Direction',true),array('controller'=>'directions','action'=>'add'));?></li>
                    <li><?php  echo $this->Html->link(__('List Common Place',true),array('controller'=>'places','action'=>'index'));?></li>
                    <li><?php  echo $this->Html->link(__('Add Common Place',true),array('controller'=>'places','action'=>'add'));?></li>
                    <li><?php  echo $this->Html->link(__('Add Progress',true),array('controller'=>'progresses','action'=>'add'));?></li>
                </ul>
        </div>
		<?php
		}
		?>