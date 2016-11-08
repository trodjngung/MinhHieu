		<?php echo $this->element('Default/header') ?>

<body style="padding-top: 60px;
padding-left: 30px;
padding-bottom: 30px;
padding-right: 30px">

<h1 style="text-align: center; color:red">Edit Post</h1>
<?php
echo $this->Form->create('Post',array('enctype'=>'multipart/form-data'));
echo $this->Form->input('id', array('type' => 'hidden'));
?>

<head>
  <link href="/ckeditor/samples/css/samples.css" rel="stylesheet">
  <script src="/ckeditor/samples/js/samples.js"></script>
<script src="/ckeditor/ckeditor.js"></script>
</head>

<form id="PostEditForm" method="post" action="/posts/add.ctp" enctype="multipart/form-data">
<h2>Image</h2>
    <?php echo $post['Post']['fileUpload'] ?>
<h2>UpFile</h2>
<input type="file" name="data[Post][fileUpload]" id="PostfileUpload">
<h2>Title</h2>
<textarea name="data[Post][title]" class="ckeditor" id="PostBody">
<?php echo ($post['Post']['title']); ?>
</textarea>
<h2>Body</h2>
<textarea name="data[Post][body]" class="ckeditor" id="PostBody">
<?php echo ($post['Post']['body']); ?>
</textarea>
</div>



<div class="submit"><input type="submit" value="Save Post">

</form>

</div>