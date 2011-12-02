<div class="matchHeads view">
<h2><?php  __('Match Head');?></h2>
	<dl><?php $i = 0; $class = ' class="altrow"';?>
		<dt<?php if ($i % 2 == 0) echo $class;?>><?php __('Id'); ?></dt>
		<dd<?php if ($i++ % 2 == 0) echo $class;?>>
			<?php echo $matchHead['MatchHead']['id']; ?>
			&nbsp;
		</dd>
		<dt<?php if ($i % 2 == 0) echo $class;?>><?php __('Match'); ?></dt>
		<dd<?php if ($i++ % 2 == 0) echo $class;?>>
			<?php echo $this->Html->link($matchHead['Match']['name'], array('controller' => 'matches', 'action' => 'view', $matchHead['Match']['id'])); ?>
			&nbsp;
		</dd>
		<dt<?php if ($i % 2 == 0) echo $class;?>><?php __('Src'); ?></dt>
		<dd<?php if ($i++ % 2 == 0) echo $class;?>>
			<?php echo $matchHead['MatchHead']['src']; ?>
			&nbsp;
		</dd>
	</dl>
</div>
<div class="actions">
	<h3><?php __('Actions'); ?></h3>
	<ul>
		<li><?php echo $this->Html->link(__('Edit Match Head', true), array('action' => 'edit', $matchHead['MatchHead']['id'])); ?> </li>
		<li><?php echo $this->Html->link(__('Delete Match Head', true), array('action' => 'delete', $matchHead['MatchHead']['id']), null, sprintf(__('Are you sure you want to delete # %s?', true), $matchHead['MatchHead']['id'])); ?> </li>
		<li><?php echo $this->Html->link(__('List Match Heads', true), array('action' => 'index')); ?> </li>
		<li><?php echo $this->Html->link(__('New Match Head', true), array('action' => 'add')); ?> </li>
		<li><?php echo $this->Html->link(__('List Matches', true), array('controller' => 'matches', 'action' => 'index')); ?> </li>
		<li><?php echo $this->Html->link(__('New Match', true), array('controller' => 'matches', 'action' => 'add')); ?> </li>
	</ul>
</div>
