<div class="teacherHeads view">
<h2><?php  __('Teacher Head');?></h2>
	<dl><?php $i = 0; $class = ' class="altrow"';?>
		<dt<?php if ($i % 2 == 0) echo $class;?>><?php __('Id'); ?></dt>
		<dd<?php if ($i++ % 2 == 0) echo $class;?>>
			<?php echo $teacherHead['TeacherHead']['id']; ?>
			&nbsp;
		</dd>
		<dt<?php if ($i % 2 == 0) echo $class;?>><?php __('Teacher'); ?></dt>
		<dd<?php if ($i++ % 2 == 0) echo $class;?>>
			<?php echo $this->Html->link($teacherHead['Teacher']['name'], array('controller' => 'teachers', 'action' => 'view', $teacherHead['Teacher']['id'])); ?>
			&nbsp;
		</dd>
		<dt<?php if ($i % 2 == 0) echo $class;?>><?php __('Src'); ?></dt>
		<dd<?php if ($i++ % 2 == 0) echo $class;?>>
			<?php echo $teacherHead['TeacherHead']['src']; ?>
			&nbsp;
		</dd>
	</dl>
</div>
<div class="actions">
	<h3><?php __('Actions'); ?></h3>
	<ul>
		<li><?php echo $this->Html->link(__('Edit Teacher Head', true), array('action' => 'edit', $teacherHead['TeacherHead']['id'])); ?> </li>
		<li><?php echo $this->Html->link(__('Delete Teacher Head', true), array('action' => 'delete', $teacherHead['TeacherHead']['id']), null, sprintf(__('Are you sure you want to delete # %s?', true), $teacherHead['TeacherHead']['id'])); ?> </li>
		<li><?php echo $this->Html->link(__('List Teacher Heads', true), array('action' => 'index')); ?> </li>
		<li><?php echo $this->Html->link(__('New Teacher Head', true), array('action' => 'add')); ?> </li>
		<li><?php echo $this->Html->link(__('List Teachers', true), array('controller' => 'teachers', 'action' => 'index')); ?> </li>
		<li><?php echo $this->Html->link(__('New Teacher', true), array('controller' => 'teachers', 'action' => 'add')); ?> </li>
	</ul>
</div>
