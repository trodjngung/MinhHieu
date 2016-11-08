<!DOCTYPE html>
<html>
<head>
	    	<?php echo $this->Html->charset(); ?>
	<title>
		 <?php echo $this->fetch('title'); ?>
	</title>

		<?php echo $this->Html->meta('icon'); ?>
		<?php echo $this->Html->css('xzouserr'); ?>
		<?php echo $this->fetch('meta'); ?>
		<?php echo $this->fetch('css'); ?>
		<?php echo $this->fetch('script'); ?>
		<?php echo $this->Flash->render(); ?>	
		<?php echo $this->Flash->render('auth'); ?>	
</head>


<body>
		<?php  echo $this->Flash->render();?>
	 	<?php echo $this->fetch('content'); ?>

</body>


<footer > 

</footer>
	<?php  echo $this->element('Admin/css/css') ?>
	<?php  echo $this->element('Admin/js/js') ?>
	<?php echo $this->element('backtop'); ?>
</html>















 