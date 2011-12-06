<div class="messageboards view">
<h2><?php  __('Messageboard');?></h2>
	<dl><?php $i = 0; $class = ' class="altrow"';?>
		<dt<?php if ($i % 2 == 0) echo $class;?>><?php __('Id'); ?></dt>
		<dd<?php if ($i++ % 2 == 0) echo $class;?>>
			<?php echo $messageboard['Messageboard']['id']; ?>
			&nbsp;
		</dd>
		<dt<?php if ($i % 2 == 0) echo $class;?>><?php __('Username'); ?></dt>
		<dd<?php if ($i++ % 2 == 0) echo $class;?>>
			<?php echo $messageboard['Messageboard']['username']; ?>
			&nbsp;
		</dd>
		<dt<?php if ($i % 2 == 0) echo $class;?>><?php __('Text'); ?></dt>
		<dd<?php if ($i++ % 2 == 0) echo $class;?>>
			<?php echo $messageboard['Messageboard']['text']; ?>
			&nbsp;
		</dd>
		<dt<?php if ($i % 2 == 0) echo $class;?>><?php __('Created'); ?></dt>
		<dd<?php if ($i++ % 2 == 0) echo $class;?>>
			<?php echo $messageboard['Messageboard']['created']; ?>
			&nbsp;
		</dd>
	</dl>
</div>
<div class="actions">
	<h3><?php __('Actions'); ?></h3>
	<ul>
		<li><?php echo $this->Html->link(__('Edit Messageboard', true), array('action' => 'edit', $messageboard['Messageboard']['id'])); ?> </li>
		<li><?php echo $this->Html->link(__('Delete Messageboard', true), array('action' => 'delete', $messageboard['Messageboard']['id']), null, sprintf(__('Are you sure you want to delete # %s?', true), $messageboard['Messageboard']['id'])); ?> </li>
		<li><?php echo $this->Html->link(__('List Messageboards', true), array('action' => 'index')); ?> </li>
		<li><?php echo $this->Html->link(__('New Messageboard', true), array('action' => 'add')); ?> </li>
	</ul>
</div>
