     <div id="nav">
    	<ul class="sf-menu dropdown">
        	<li class="selected"><?php echo $this->Html->link(__('Home',true),array('controller'=>'projects','action'=>'home'))?></li>
        	<li><?php echo $this->Html->link(__("Faculty",true),array('controller'=>'faculties','action'=>'home'));?></a></li>
            <li><a class="has_submenu" href="#"><?php echo __("Research");?></a>
            	<ul>
                	<li><?php echo $this->Html->link(__("Search Project",true),array('controller'=>'projects','action'=>'searchpage'));?></a></li>
                    <li><?php echo $this->Html->link(__("Research Gallery",true),array('controller'=>'projects','action'=>'listproject'));?></li>
                    <li><?php echo $this->Html->link(__('Teachers',true),array('controller'=>'teachers','action'=>'listteacher'));?></li>
                </ul>
            </li>
            <li><a class="has_submenu" href="#"><?php echo __("Activity");?></a>
            	<ul>
                	<li><?php echo $this->Html->link(__("Lecture",true),array('controller'=>'lectures','action'=>'home'));?></a></li>
                    <li><?php echo $this->Html->link(__("Competition",true),array('controller'=>'matches','action'=>'home'));?></a></li>
                    <li><?php echo $this->Html->link(__("Register",true),array('controller'=>'Applytables','action'=>'add'));?></li>
                </ul>
           </li>
            <li><?php echo $this->Html->link(__("Message",true),array('controller'=>'Messageboards','action'=>'index'));?></a></li>
            <li><a href="about.html"><?php echo $this->Html->link(__("About",true),array('controller'=>'projects','action'=>'about'));?></a></li>
           <li style='float:right'><a href="#" onclick='checkl()'><?php echo __('language');?></a><li>
           <li style='float:right'><a href="#" onclick='check()'><?php echo __('login');?></a><li>
		</ul>
    </div>