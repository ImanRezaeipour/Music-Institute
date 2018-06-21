<?php echo $this->Html->docType('html5'); ?>
<html>
<head>
	<?php echo $this->Html->charset(); ?>
	<title>
		<?php echo __('Error'); ?>
	</title>
	<?php echo $this->Html->meta('icon');
	echo $this->fetch('meta');
	echo $this->Html->css('jquery/ui/wp-theme/jquery-ui-1.8.21.custom');
	?>
</head>
<body>
<section>
	<?php echo $this->fetch('content'); ?>
</section>
</body>
</html>