<div class="user">
    <p><?php echo $this->session->userdata('username'); ?></p>
    <!-- <a class="logout_user" href="#" title="Logout">Logout</a> -->
</div>
<div class="breadcrumbs_container">
    <article class="breadcrumbs">
		<a href="index.html"><?php echo $this->config->item('site_title', 'ion_auth'); ?></a> 
		<div class="breadcrumb_divider"></div> <a class="current"><?php echo $template['title']; ?></a>
		<?php if(isset($template['breadcrumbs'][0]['name'])): ?>
			<div class="breadcrumb_divider"></div> <a class="current"><?php echo $template['breadcrumbs'][0]['name']; ?></a>
		<?php endif; ?>
		<?php if(isset($template['breadcrumbs'][1]['name'])): ?>
			<div class="breadcrumb_divider"></div> <a class="current"><?php echo $template['breadcrumbs'][1]['name']; ?></a>
		<?php endif; ?>
		<?php if(isset($template['breadcrumbs'][2]['name'])): ?>
			<div class="breadcrumb_divider"></div> <a class="current"><?php echo $template['breadcrumbs'][2]['name']; ?></a>
		<?php endif; ?>
    </article>
</div>
