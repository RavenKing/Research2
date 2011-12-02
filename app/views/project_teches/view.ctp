<div class="projectTeches view">
<h2><?php  __('Project Tech');?></h2>
	<dl><?php $i = 0; $class = ' class="altrow"';?>
		<dt<?php if ($i % 2 == 0) echo $class;?>><?php __('Id'); ?></dt>
		<dd<?php if ($i++ % 2 == 0) echo $class;?>>
			<?php echo $projectTech['ProjectTech']['id']; ?>
			&nbsp;
		</dd>
		<dt<?php if ($i % 2 == 0) echo $class;?>><?php __('Project'); ?></dt>
		<dd<?php if ($i++ % 2 == 0) echo $class;?>>
			<?php echo $this->Html->link($projectTech['Project']['name'], array('controller' => 'projects', 'action' => 'view', $projectTech['Project']['id'])); ?>
			&nbsp;
		</dd>
		<dt<?php if ($i % 2 == 0) echo $class;?>><?php __('Technique'); ?></dt>
		<dd<?php if ($i++ % 2 == 0) echo $class;?>>
			<?php echo $this->Html->link($projectTech['Technique']['name'], array('controller' => 'techniques', 'action' => 'view', $projectTech['Technique']['id'])); ?>
			&nbsp;
		</dd>
	</dl>
</div>
<div class="actions">
	<h3><?php __('Actions'); ?></h3>
	<ul>
		<li><?php echo $this->Html->link(__('Edit Project Tech', true), array('action' => 'edit', $projectTech['ProjectTech']['id'])); ?> </li>
		<li><?php echo $this->Html->link(__('Delete Project Tech', true), array('action' => 'delete', $projectTech['ProjectTech']['id']), null, sprintf(__('Are you sure you want to delete # %s?', true), $projectTech['ProjectTech']['id'])); ?> </li>
		<li><?php echo $this->Html->link(__('List Project Teches', true), array('action' => 'index')); ?> </li>
		<li><?php echo $this->Html->link(__('New Project Tech', true), array('action' => 'add')); ?> </li>
		<li><?php echo $this->Html->link(__('List Projects', true), array('controller' => 'projects', 'action' => 'index')); ?> </li>
		<li><?php echo $this->Html->link(__('New Project', true), array('controller' => 'projects', 'action' => 'add')); ?> </li>
		<li><?php echo $this->Html->link(__('List Techniques', true), array('controller' => 'techniques', 'action' => 'index')); ?> </li>
		<li><?php echo $this->Html->link(__('New Technique', true), array('controller' => 'techniques', 'action' => 'add')); ?> </li>
	</ul>
</div>
