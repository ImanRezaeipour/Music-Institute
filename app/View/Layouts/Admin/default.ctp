<?php @require_once('_initial.ctp'); ?>

<?php echo $this->Html->docType('html5'); ?>
<html>
<head>
	<?php echo $this->Html->charset(); ?>
	<title>
		<?php echo $level; ?>:
		<?php echo $title; ?>
	</title>
	<?php echo $this->Html->meta('icon');
	echo $this->fetch('meta');
	echo $this->fetch('css');
	echo $this->fetch('script');
	?>
</head>
<body>
<header class="admin-header">
	<?php @include_once('header.ctp'); ?>
</header>
<aside class="admin-sidebar">
	<?php   if ($level == __('Admin'))
	@include_once('administrator_menu.ctp');
	if ($level == __('Master'))
		@include_once('master_menu.ctp');
	if ($level == __('Student'))
		@include_once('student_menu.ctp');
	?>
</aside>
<section class="admin-content">
	<?php echo $this->Session->flash(); ?>
	<?php echo $this->fetch('content'); ?>
</section>
<footer class="admin-footer">
	<?php @include_once('footer.ctp'); ?>
</footer>
</body>
</html>