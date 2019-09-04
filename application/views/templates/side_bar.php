<link rel="stylesheet" href="assets/css/sideBar.css">
<nav class="col-md-2 col-lg-2 d-none d-md-block sidebar" id="sidebar">
	<div class="sidebar-sticky">
		<ul class="nav flex-column">
			<?php
			get_instance()->config->load("side_bar_navigation");
			$navigation = get_instance()->config->item("navigation");
			?>

			<?php foreach($navigation as $navigationItem): ?>
				<li class="nav-item">
					<a class="nav-link" href="<?php echo base_url($navigationItem["url"]); ?>">
						<i class="fas fa-<?php echo $navigationItem["faIcon"]; ?>"></i>
						<?php echo $navigationItem["name"]; ?>
					</a>
				</li>
			<?php endforeach; ?>
		</ul>
	</div>
</nav>
