<div class="places view">
<h2><?php  __('Place');?></h2>
	<dl><?php $i = 0; $class = ' class="altrow"';?>
		<dt<?php if ($i % 2 == 0) echo $class;?>><?php __('Id'); ?></dt>
		<dd<?php if ($i++ % 2 == 0) echo $class;?>>
			<?php echo $place['Place']['id']; ?>
			&nbsp;
		</dd>
		<dt<?php if ($i % 2 == 0) echo $class;?>><?php __('Name'); ?></dt>
		<dd<?php if ($i++ % 2 == 0) echo $class;?>>
			<?php echo $place['Place']['name']; ?>
			&nbsp;
		</dd>
	</dl>
</div>
<div class="actions">
	<h3><?php __('Actions'); ?></h3>
	<ul>
		<li><?php echo $this->Html->link(__('Edit Place', true), array('action' => 'edit', $place['Place']['id'])); ?> </li>
		<li><?php echo $this->Html->link(__('Delete Place', true), array('action' => 'delete', $place['Place']['id']), null, sprintf(__('Are you sure you want to delete # %s?', true), $place['Place']['id'])); ?> </li>
	</ul>
</div>
