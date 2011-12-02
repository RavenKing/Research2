<div class="lectureHeads view">
<h2><?php  __('Lecture Head');?></h2>
	<dl><?php $i = 0; $class = ' class="altrow"';?>
		<dt<?php if ($i % 2 == 0) echo $class;?>><?php __('Id'); ?></dt>
		<dd<?php if ($i++ % 2 == 0) echo $class;?>>
			<?php echo $lectureHead['LectureHead']['id']; ?>
			&nbsp;
		</dd>
		<dt<?php if ($i % 2 == 0) echo $class;?>><?php __('Lecture'); ?></dt>
		<dd<?php if ($i++ % 2 == 0) echo $class;?>>
			<?php echo $this->Html->link($lectureHead['Lecture']['name'], array('controller' => 'lectures', 'action' => 'view', $lectureHead['Lecture']['id'])); ?>
			&nbsp;
		</dd>
		<dt<?php if ($i % 2 == 0) echo $class;?>><?php __('Src'); ?></dt>
		<dd<?php if ($i++ % 2 == 0) echo $class;?>>
			<?php echo $lectureHead['LectureHead']['src']; ?>
			&nbsp;
		</dd>
	</dl>
</div>
<div class="actions">
	<h3><?php __('Actions'); ?></h3>
	<ul>
		<li><?php echo $this->Html->link(__('Edit Lecture Head', true), array('action' => 'edit', $lectureHead['LectureHead']['id'])); ?> </li>
		<li><?php echo $this->Html->link(__('Delete Lecture Head', true), array('action' => 'delete', $lectureHead['LectureHead']['id']), null, sprintf(__('Are you sure you want to delete # %s?', true), $lectureHead['LectureHead']['id'])); ?> </li>
		<li><?php echo $this->Html->link(__('List Lecture Heads', true), array('action' => 'index')); ?> </li>
		<li><?php echo $this->Html->link(__('New Lecture Head', true), array('action' => 'add')); ?> </li>
		<li><?php echo $this->Html->link(__('List Lectures', true), array('controller' => 'lectures', 'action' => 'index')); ?> </li>
		<li><?php echo $this->Html->link(__('New Lecture', true), array('controller' => 'lectures', 'action' => 'add')); ?> </li>
	</ul>
</div>
