<div class="projectHeads view">
<h2><?php  __('Project Head');?></h2>
	<dl><?php $i = 0; $class = ' class="altrow"';?>
		<dt<?php if ($i % 2 == 0) echo $class;?>><?php __('Id'); ?></dt>
		<dd<?php if ($i++ % 2 == 0) echo $class;?>>
			<?php echo $projectHead['ProjectHead']['id']; ?>
			&nbsp;
		</dd>
		<dt<?php if ($i % 2 == 0) echo $class;?>><?php __('Project'); ?></dt>
		<dd<?php if ($i++ % 2 == 0) echo $class;?>>
			<?php echo $this->Html->link($projectHead['Project']['name'], array('controller' => 'projects', 'action' => 'view', $projectHead['Project']['id'])); ?>
			&nbsp;
		</dd>
		<dt<?php if ($i % 2 == 0) echo $class;?>><?php __('Src'); ?></dt>
		<dd<?php if ($i++ % 2 == 0) echo $class;?>>
			<?php echo $projectHead['ProjectHead']['src']; ?>
			&nbsp;
		</dd>
	</dl>
</div>
<div class="actions">
	<h3><?php __('Actions'); ?></h3>
	<ul>
		<li><?php echo $this->Html->link(__('Edit Project Head', true), array('action' => 'edit', $projectHead['ProjectHead']['id'])); ?> </li>
		<li><?php echo $this->Html->link(__('Delete Project Head', true), array('action' => 'delete', $projectHead['ProjectHead']['id']), null, sprintf(__('Are you sure you want to delete # %s?', true), $projectHead['ProjectHead']['id'])); ?> </li>
		<li><?php echo $this->Html->link(__('List Project Heads', true), array('action' => 'index')); ?> </li>
		<li><?php echo $this->Html->link(__('New Project Head', true), array('action' => 'add')); ?> </li>
		<li><?php echo $this->Html->link(__('List Projects', true), array('controller' => 'projects', 'action' => 'index')); ?> </li>
		<li><?php echo $this->Html->link(__('New Project', true), array('controller' => 'projects', 'action' => 'add')); ?> </li>
	</ul>
</div>
