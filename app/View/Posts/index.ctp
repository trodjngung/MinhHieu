        <?php echo $this->element('Default/header') ?>


<h1 style="text-align: center; font-size: 600%;font-family:fantasy;color: red">List Post</h1>
<?php echo "Anh Trung thay doi dong nay";?>
<div class="users index">
<table>
    <tr>
        <th>ID</th>
        <th>Title</th>
        <th>Image</th>
        <th>Body</th>
        <th>User ID</th>
        <th style="padding-left: 10px">Actions</th>
    </tr>
    <?php foreach ($posts as $post) : ?>
    
    <tr>
    <td>
        <?php echo $post['Post']['id']; ?>        
    </td>
    <td>
        <h1 class="titleh1"><?php  echo html_entity_decode($this->Html->link($post['Post']['title'], array('action' => 'view', $post['Post']['id']))); ?></h1>

    </td>
    <td>
    <a href="/posts/view/ <?php echo $post['Post']['id'] ?>"><img class="imgp" src= "<?php echo $post['Post']['fileUpload'] ?>"></a>
    </td>
    <td>
        <h2 class="bodyh2"><?php echo substr($post['Post']['body'],0,234) ?>...</h2>
    </td>
    <td>
        <?php echo $post['Post']['user_id']; ?>
    </td>
    <td>
         <?php echo $this->Html->link('Edit', array('action' => 'edit', $post['Post']['id']));?>
         <?php echo $this->Form->postLink('Delete',array('action' => 'delete', $post['Post']['id']),array('confirm' => 'Are you sure?'));?>
    </td>
    </tr>
    
    <?php endforeach; ?>
<!--  -->
</table>


<footer>
       <a href="/admin"> <footer class="footer">Quỷ sứ hà =))) </footer></a>
</footer>
</div>
<div class="actions">
    <h3><?php echo __('Actions'); ?></h3>
    <ul>
        <li><?php echo $this->Html->link(__('New User'), array('action' => '../users/add')); ?></li>
        <li><?php echo $this->Html->link(__('List User'), array('action' => '../users')); ?></li>
        <li><?php echo $this->Html->link(__('New Post'), array('action' => '../posts/add')); ?></li>
        <li><?php echo $this->Html->link(__('Upload'), array('action' => '../posts/uploads')); ?></li>

    </ul>
</div>







<style type="text/css">
    .imgp{
        width: 150px;
        height: auto;
    }
    .titleh1 h1{
        font-size:28px;
        color: black;

    }
    .titleh1 h1:hover{
        color: red;
    }
    h2.bodyh2{
        font-size:16px;
        color: initial;
    }
    .bodyh2 h2{
        font-size:16px;
        color: initial;
    }
</style>























<br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br>
