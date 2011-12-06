<div id="nav">
    	<ul class="sf-menu dropdown">
        	<li class="selected"><?php echo $this->Html->link(__("DashBoard",true),array('controller'=>'users','action'=>'homepage'));?></li>
        	<li><a href="faculty.html" class="has_submenu"><?php echo __("Projects");?></a>
			    <ul>
                	<li><?php echo $this->Html->link(__("Post  A project",true),array('controller'=>'projects','action'=>'add'));?></li>
                    <li><?php echo $this->Html->link(__("View project",true),array('controller'=>'projects','action'=>'index'));?></li>
                </ul>
			</li>
            <li><a class="has_submenu" href="#"><?php echo __("Matches");?></a>
            	<ul>
                	<li><?php echo $this->Html->link(__("Post  A Match",true),array('controller'=>'matches','action'=>'add'));?></li>
                    <li><?php echo $this->Html->link(__("View Matches",true),array('controller'=>'matches','action'=>'index'));?></li>
                    <li><?php echo $this->Html->link(__("Add Match Awards",true),array('controller'=>'Matchawards','action'=>'add'));?></li>
                    <li><?php echo $this->Html->link(__("View Match Awards",true),array('controller'=>'Matchawards','action'=>'index'));?></li>
                </ul>
            </li>
            <li><a class="has_submenu" href="#"><?php echo __("Lectures");?></a>
            	<ul>
                	<li><?php echo $this->Html->link(__("Post  A Lecture",true),array('controller'=>'lectures','action'=>'add'));?></li>
                    <li><?php echo $this->Html->link(__("View Lectures",true),array('controller'=>'lectures','action'=>'index'));?><</li>
                </ul>
           </li>
            <li><?php echo $this->Html->link(__("Apply System",true),array('controller'=>'matches','action'=>'matchpeople'));?></li>
            <li><?php echo $this->Html->link(__("About",true),array('controller'=>'projects','action'=>'about'));?></a></li>
           <li style='float:right'><a href="#" onclick='checkl()'>language</a><li>
           <li style='float:right'><?php  
		                      echo $this->Html->link(__('Logout',true),array('controller'=>'users','action'=>'logout'));
		       ?><li>
		</ul>
    </div>	