<div class="matchawards view">
<h2><?php  __('Matchaward');?></h2>
	<dl><?php $i = 0; $class = ' class="altrow"';?>
		<dt<?php if ($i % 2 == 0) echo $class;?>><?php __('Id'); ?></dt>
		<dd<?php if ($i++ % 2 == 0) echo $class;?>>
			<?php echo $matchaward['Matchaward']['id']; ?>
			&nbsp;
		</dd>
		<dt<?php if ($i % 2 == 0) echo $class;?>><?php __('Match'); ?></dt>
		<dd<?php if ($i++ % 2 == 0) echo $class;?>>
			<?php echo $this->Html->link($matchaward['Match']['name'], array('controller' => 'matches', 'action' => 'view', $matchaward['Match']['id'])); ?>
			&nbsp;
		</dd>
		<dt<?php if ($i % 2 == 0) echo $class;?>><?php __('Description'); ?></dt>
		<dd<?php if ($i++ % 2 == 0) echo $class;?>>
			<?php echo $matchaward['Matchaward']['description']; ?>
			&nbsp;
		</dd>
		<dt<?php if ($i % 2 == 0) echo $class;?>><?php __('Src'); ?></dt>
		<dd<?php if ($i++ % 2 == 0) echo $class;?>>
			<?php echo $matchaward['Matchaward']['src']; ?>
			&nbsp;
		</dd>
	</dl>
</div>
<div class="actions">
	<h3><?php __('Actions'); ?></h3>
	<ul>
		<li><?php echo $this->Html->link(__('Edit Matchaward', true), array('action' => 'edit', $matchaward['Matchaward']['id'])); ?> </li>
		<li><?php echo $this->Html->link(__('Delete Matchaward', true), array('action' => 'delete', $matchaward['Matchaward']['id']), null, sprintf(__('Are you sure you want to delete # %s?', true), $matchaward['Matchaward']['id'])); ?> </li>
		<li><?php echo $this->Html->link(__('List Matchawards', true), array('action' => 'index')); ?> </li>
		<li><?php echo $this->Html->link(__('New Matchaward', true), array('action' => 'add')); ?> </li>
		<li><?php echo $this->Html->link(__('List Matches', true), array('controller' => 'matches', 'action' => 'index')); ?> </li>
		<li><?php echo $this->Html->link(__('New Match', true), array('controller' => 'matches', 'action' => 'add')); ?> </li>
	</ul>
</div>
