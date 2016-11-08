        <?php echo $this->element('Default/header') ?>

<form action="/posts" enctype="multipart/form-data" id="PostAddForm" method="post">
<h2>UpFile</h2>
<input type="file" name="data[Post][fileUpload]" id="PostfileUpload">
<div class="submit"><input type="submit" value="Save Post"></div>
</form>

<table>
    <tr>
        <th>Image</th>
     </tr>
    <?php foreach ($posts as $post) : ?>
    
    <tr>
    <td>
<?php echo $post['Post']['fileUpload'] ?>

    </td>
    <td>
         <?php echo $this->Html->link('Edit', array('action' => 'edit', $post['Post']['id']));?>
         <?php echo $this->Form->postLink('Delete',array('action' => 'delete', $post['Post']['fileUpload']),array('confirm' => 'Are you sure?'));?>
    </td>
    </tr>
    
    <?php endforeach; ?>
<!--  -->
</table>