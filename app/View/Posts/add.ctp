		<?php echo $this->element('Default/header') ?>

<body style="padding-top: 60px;
padding-left: 30px;
padding-bottom: 30px;
padding-right: 30px">

<h1 style="text-align: center; color:red">Add Post</h1>

<?php
	echo $this->Form->create('Post',array('enctype'=>'multipart/form-data'));
?>
<head>
  <link href="/ckeditor/samples/css/samples.css" rel="stylesheet">
  <script src="/ckeditor/samples/js/samples.js"></script>
<script src="/ckeditor/ckeditor.js"></script>
</head>

<form action="/posts/add" enctype="multipart/form-data" id="PostAddForm" method="post">
<h2>UpFile</h2>
<input type="file" name="data[Post][fileUpload]" id="PostfileUpload">
<h2>Title</h2>
<textarea rows="10" cols="10" class="ckeditor" id="editorxz" name="data[Post][title]"></textarea>
<h2>Body</h2>
<textarea rows="20" cols="70" class="ckeditor" id="editorxz" name="data[Post][body]"></textarea>
<div class="submit"><input type="submit" value="Save Post"></div>
</form>
