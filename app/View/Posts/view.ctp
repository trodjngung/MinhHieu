		<?php echo $this->element('home/home') ?>

<body pagexz style="padding-left: 30px; top: 30px; padding-right: 30px;">
<div class="body" style="background-color:white">
<h1><?php echo $post['Post']['title'] ?></h1>

<small>Created: <?php echo $post['Post']['created']; ?></small>
<br>
<?php echo ($post['Post']['body']); ?>
</div>











<!-- begin wwww.htmlcommentbox.com -->
 <div id="HCB_comment_box" class="commentbox"></div>
 <link rel="stylesheet" type="text/css" href="/css/twitter-bootstrap.css" />
 <script type="text/javascript" id="hcb"> /*<!--*/ if(!window.hcb_user){hcb_user={};} (function(){var s=document.createElement("script"), l=hcb_user.PAGE || (""+window.location).replace(/'/g,"%27"), h="//www.htmlcommentbox.com";s.setAttribute("type","text/javascript");s.setAttribute("src", h+"/jread?page="+encodeURIComponent(l).replace("+","%2B")+"&opts=16862&num=10&ts=1478187310945");if (typeof s!="undefined") document.getElementsByTagName("head")[0].appendChild(s);})(); /*-->*/ </script>
<!-- end www.htmlcommentbox.com -->
<style type="text/css">
	form div{
		background-color: white;
		color: red;
		padding:0px;
	}
</style>
</body>