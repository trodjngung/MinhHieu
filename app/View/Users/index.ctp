		<?php echo $this->element('Default/header') ?>



<h1 style="text-align: center; font-size: 600%;font-family:fantasy;color: red">List User</h1>
<div class="users index">
     <table cellpadding="0" cellspacing="0">
	<tr>  					
		<th><?php echo $this->Paginator->sort('id');?></th>	
		<th><?php echo $this->Paginator->sort('name');?></th>	
		<th><?php echo $this->Paginator->sort('username');?></th>
		<th><?php echo $this->Paginator->sort('email');?></th>
		<th><?php echo $this->Paginator->sort('role');?></th>
		<th class="actions" style="padding-left: 40px"><?php echo __('Edit');?></th>
		<th class="actions" style="padding-left: 70px"><?php echo __('Delete');?></th>

	</tr>
	
<?php	$i = 0; 	foreach ($users as $user): ?>
	<tr>
		<td style="padding-left: 50px"><?php echo h($user['User']['id']); ?>&nbsp;</td>
		<td><?php echo $this->Html->link( $user['User']['name'], array('action' =>'view', h($user['User']['id']))); ?>&nbsp;</td>
		<td><?php echo h($user['User']['username']); ?>&nbsp;</td>
		<td><?php echo h($user['User']['email']); ?>&nbsp;</td>
		<td><?php echo h($user['User']['role']); ?>&nbsp;</td>

	<td class="actions"><?php echo $this->Html->link(__('Edit'), array('action' => 'edit', $user['User']['id'])); ?></td>
	<td class="actions"><?php echo $this->Form->postLink(__('Delete'), array('action' => 'delete', $user['User']['id']), null, 
				__('Are you sure you want to delete # %s?', $user['User']['id'])); ?></td>
	

	</tr>
<?php endforeach; ?>
	</table>

   <a href="/admin"> <footer class="footer">  Quỷ sứ hà :)) 	</footer></a>
</div>
<div class="actions">
	<h3><?php echo __('Actions'); ?></h3>
	<ul>
		<li><?php echo $this->Html->link(__('New User'), array('action' => 'add')); ?></li>
		<li><?php echo $this->Html->link(__('List Post'), array('action' => '../posts')); ?></li>
        		<li><?php echo $this->Html->link(__('New Post'), array('action' => '../posts/add')); ?></li>
	</ul>
</div>











































<br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br>