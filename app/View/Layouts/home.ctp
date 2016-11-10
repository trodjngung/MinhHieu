<!DOCTYPE html>
<html>
<body onload="myFunction()" style="margin:0;">
<div id="loader"></div>
<div style="display:none;" id="myDiv" class="animate-bottom">

<head>
	<title>
	</title>

		<?php echo $this->Html->css('xzouserr'); ?>

</head>


<body>
		<?php echo $this->element('home/home') ?>
	    <?php echo $this->element('home/sidebar') ?>
		<?php echo $this->element('home/footer') ?>


	 	<?php echo $this->fetch('content'); ?>


		<div class="push" style="height: 200px"></div>


</body>


<footer > 

</footer>
	<?php  echo $this->element('Admin/css/css') ?>
	<?php  echo $this->element('Admin/js/js') ?>
		<?php echo $this->element('home/css/home')?>
		<?php echo $this->element('home/js/home')?>
	<?php echo $this->element('backtop'); ?>
</div>
</body>
</html>















 