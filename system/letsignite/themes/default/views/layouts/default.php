<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
	<head>
		<?php echo $template['partials']['metadata']; ?>
	</head>
	<body>
		<!-- Global container, 12 columns wide -->
		<div id="container" class="container_12 clearfix">
			<!-- Header -->
			<div id="header" class="grid_12">
				<?php echo $template['partials']['header']; ?>
			</div>
			<!-- Content -->
			<div id="content" class="grid_8 suffix_1">
				<?php echo $template['body']; ?>
			</div>
			<!-- Sidebar -->
			<div id="sidebar" class="grid_3">
				<?php echo $template['partials']['sidebar']; ?>
			</div>
			<!-- Footer -->
			<div id="footer" class="grid_12">
				<?php echo $template['partials']['footer']; ?>
			</div>
		</div>
	</body>
</html>
