<div class="matchTeches view">
<h2><?php  __('Match Tech');?></h2>
	<dl><?php $i = 0; $class = ' class="altrow"';?>
		<dt<?php if ($i % 2 == 0) echo $class;?>><?php __('Id'); ?></dt>
		<dd<?php if ($i++ % 2 == 0) echo $class;?>>
			<?php echo $matchTech['MatchTech']['id']; ?>
			&nbsp;
		</dd>
		<dt<?php if ($i % 2 == 0) echo $class;?>><?php __('Match'); ?></dt>
		<dd<?php if ($i++ % 2 == 0) echo $class;?>>
			<?php echo $this->Html->link($matchTech['Match']['name'], array('controller' => 'matches', 'action' => 'view', $matchTech['Match']['id'])); ?>
			&nbsp;
		</dd>
		<dt<?php if ($i % 2 == 0) echo $class;?>><?php __('Technique'); ?></dt>
		<dd<?php if ($i++ % 2 == 0) echo $class;?>>
			<?php echo $this->Html->link($matchTech['Technique']['name'], array('controller' => 'techniques', 'action' => 'view', $matchTech['Technique']['id'])); ?>
			&nbsp;
		</dd>
	</dl>
</div>
<div class="actions">
	<h3><?php __('Actions'); ?></h3>
	<ul>
		<li><?php echo $this->Html->link(__('Edit Match Tech', true), array('action' => 'edit', $matchTech['MatchTech']['id'])); ?> </li>
		<li><?php echo $this->Html->link(__('Delete Match Tech', true), array('action' => 'delete', $matchTech['MatchTech']['id']), null, sprintf(__('Are you sure you want to delete # %s?', true), $matchTech['MatchTech']['id'])); ?> </li>
		<li><?php echo $this->Html->link(__('List Match Teches', true), array('action' => 'index')); ?> </li>
		<li><?php echo $this->Html->link(__('New Match Tech', true), array('action' => 'add')); ?> </li>
		<li><?php echo $this->Html->link(__('List Matches', true), array('controller' => 'matches', 'action' => 'index')); ?> </li>
		<li><?php echo $this->Html->link(__('New Match', true), array('controller' => 'matches', 'action' => 'add')); ?> </li>
		<li><?php echo $this->Html->link(__('List Techniques', true), array('controller' => 'techniques', 'action' => 'index')); ?> </li>
		<li><?php echo $this->Html->link(__('New Technique', true), array('controller' => 'techniques', 'action' => 'add')); ?> </li>
	</ul>
</div>
