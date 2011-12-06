<div class="faculties view">
<h2><?php  __('Faculty');?></h2>
	<dl><?php $i = 0; $class = ' class="altrow"';?>
		<dt<?php if ($i % 2 == 0) echo $class;?>><?php __('Name'); ?></dt>
		<dd<?php if ($i++ % 2 == 0) echo $class;?>>
			<?php echo $faculty['Faculty']['name']; ?>
			&nbsp;
		</dd>
		<dt><?php 
		  echo __('Description');
		  ?>
		<dd>
	  <?php echo $faculty['Faculty']['description'];?>
	  </dd>
	</dl>
</div>
<h2>Action</h2>
<?php
    echo $this->Html->link(__('Edit Faculty',true),array('action'=>'edit',$faculty['Faculty']['id']));
?>
<div class="related">
	<h2><?php echo __('Related Teachers');?></h2>
	<?php if (!empty($faculty['Teacher'])):?>
	<table cellpadding = "0" cellspacing = "0">
	<tr>
		<th><?php __('Name'); ?></th>
		<th><?php __('Email'); ?></th>
		<th><?php __('Tel'); ?></th>
		<th><?php __('Office'); ?></th>
		<th><?php __('Created'); ?></th>
		<th class="actions"><?php __('Actions');?></th>
	</tr>
	<?php
		$i = 0;
		foreach ($faculty['Teacher'] as $teacher):
			$class = null;
			if ($i++ % 2 == 0) {
				$class = ' class="altrow"';
			}
		?>
		<tr<?php echo $class;?>>
			<td><?php echo $teacher['name'];?></td>
			<td><?php echo $teacher['email'];?></td>
			<td><?php echo $teacher['tel'];?></td>
			<td><?php echo $teacher['office'];?></td>
			<td><?php echo $teacher['created'];?></td>
			<td class="actions">
				<?php echo $this->Html->link(__('View', true), array('controller' => 'teachers', 'action' => 'view', $teacher['id'])); ?>
				<?php echo $this->Html->link(__('Edit', true), array('controller' => 'teachers', 'action' => 'edit', $teacher['id'])); ?>
				<?php echo $this->Html->link(__('Delete', true), array('controller' => 'teachers', 'action' => 'delete', $teacher['id']), null, sprintf(__('Are you sure you want to delete # %s?', true), $teacher['id'])); ?>
			</td>
		</tr>
	<?php endforeach; ?>
	</table>
<?php endif; ?>

	<div class="actions">
		<ul>
			<li><?php echo $this->Html->link(__('New Teacher', true), array('controller' => 'teachers', 'action' => 'add'));?> </li>
		</ul>
	</div>
</div>
