		<?php echo $this->element('home/home') ?>

<body pagexz style="padding-left: 30px; top: 30px; padding-right: 30px;">
<div class="body" style="background-color:white">
<h1><?php echo $post['Post']['title'] ?></h1>

<small>Created: <?php echo $post['Post']['created']; ?></small>
<br>
<?php echo ($post['Post']['body']); ?>
</div>



<div id="fb-root"></div>
<script>(function(d, s, id) {
  var js, fjs = d.getElementsByTagName(s)[0];
  if (d.getElementById(id)) return;
  js = d.createElement(s); js.id = id;
  js.src = "//connect.facebook.net/vi_VN/sdk.js#xfbml=1&version=v2.8&appId=1141533782598158";
  fjs.parentNode.insertBefore(js, fjs);
}(document, 'script', 'facebook-jssdk'));</script>
<div class="fb-comments" data-numposts="5" data-width=100% ></div>

</body>