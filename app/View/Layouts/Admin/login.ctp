<?php

$this->start('css');
echo $this->Html->css('admin/silver/login');
$this->end();

?>

<?php echo $this->Html->docType('html5'); ?>
<html>
	<head>
		<?php echo $this->Html->charset(); ?>
		<title>
            <?php echo $title; ?>
		</title>
		<?php echo $this->Html->meta('icon');
              echo $this->fetch('meta');
              echo $this->fetch('css');
              echo $this->fetch('script');
        ?>
	</head>
	<body>
        <header class="login-header">
		</header>
		<section class="login">
			<article id="content">
			     <?php echo $this->fetch('content'); ?>
			</article>
		</section>
	</body>
</html>