<nav class="sidebar">
	<div class="sidebar-header">
		<a href="#" class="sidebar-brand">
			<img src="<?= base_url('assets/logo.png') ?>" alt="" width="160">
		</a>
		<div class="sidebar-toggler not-active">
			<span></span>
			<span></span>
			<span></span>
		</div>
	</div>
	<div class="sidebar-body">
		<ul class="nav">
			<li class="nav-item <?= link_is_active("") ?>">
				<a href="<?= base_url() ?>" class="nav-link">
					<i class="link-icon" data-feather="box"></i>
					<span class="link-title">Dashboard</span>
				</a>
			</li>

			<!-- Nominations -->
			<li class="nav-item nav-category d-none">Events Management</li>
			<!-- Access Level: jury -->
			<li class="nav-item d-none">
				<a href="<?= base_url('events') ?>" class="nav-link">
					<i class="link-icon" data-feather="database"></i>
					<span class="link-title">All Events</span>
				</a>
			</li>
			<li class="nav-item">
				<a href="<?= base_url('nominations') ?>" class="nav-link">
					<i class="link-icon" data-feather="book"></i>
					<span class="link-title">New Event</span>
				</a>
			</li>

			<!-- Nominations -->
			<li class="nav-item nav-category">Content Management</li>
			<!-- Access Level: jury -->
            <li class="nav-item <?= link_is_active("blogs") ?>">
				<a class="nav-link" data-bs-toggle="collapse" href="#blogs" role="button" aria-expanded="false" aria-controls="blogs">
					<i class="link-icon" data-feather="database"></i>
					<span class="link-title">Blogs</span>
					<i class="link-arrow" data-feather="chevron-down"></i>
				</a>
				<div class="collapse" id="blogs">
					<ul class="nav sub-menu">
						<li class="nav-item">
							<a href="<?= base_url("blogs") ?>" class="nav-link <?= link_is_active("blogs") ?>">All Blogs</a>
						</li>
						<li class="nav-item">
							<a href="#" class="nav-link">Add New Blog</a>
						</li>
					</ul>
				</div>
			</li>
            <li class="nav-item <?= link_is_active("podcasts") ?>">
				<a class="nav-link" data-bs-toggle="collapse" href="#podcasts" role="button" aria-expanded="false" aria-controls="podcasts">
					<i class="link-icon" data-feather="database"></i>
					<span class="link-title">Podcasts</span>
					<i class="link-arrow" data-feather="chevron-down"></i>
				</a>
				<div class="collapse" id="podcasts">
					<ul class="nav sub-menu">
						<li class="nav-item">
							<a href="<?= base_url("podcasts") ?>" class="nav-link <?= link_is_active("podcasts") ?>">All Podcasts</a>
						</li>
						<li class="nav-item">
							<a href="#" class="nav-link">Broadcast New Podcast</a>
						</li>
					</ul>
				</div>
			</li>
            <li class="nav-item <?= link_is_active("events") ?>">
				<a class="nav-link" data-bs-toggle="collapse" href="#events" role="button" aria-expanded="false" aria-controls="events">
					<i class="link-icon" data-feather="database"></i>
					<span class="link-title">Events</span>
					<i class="link-arrow" data-feather="chevron-down"></i>
				</a>
				<div class="collapse" id="events">
					<ul class="nav sub-menu">
						<li class="nav-item">
							<a href="<?= base_url("events") ?>" class="nav-link <?= link_is_active("events") ?>">All Events</a>
						</li>
						<li class="nav-item">
							<a href="#" class="nav-link">Add New Event</a>
						</li>
					</ul>
				</div>
			</li>
            <li class="nav-item <?= link_is_active("episodes") ?>">
				<a class="nav-link" data-bs-toggle="collapse" href="#kkp_episodes" role="button" aria-expanded="false" aria-controls="kkp_episodes">
					<i class="link-icon" data-feather="database"></i>
					<span class="link-title">Episodes</span>
					<i class="link-arrow" data-feather="chevron-down"></i>
				</a>
				<div class="collapse" id="kkp_episodes">
					<ul class="nav sub-menu">
						<li class="nav-item">
							<a href="<?= base_url('episodes') ?>" class="nav-link <?= link_is_active("episodes") ?>">All Episodes</a>
						</li>
						<li class="nav-item">
							<a href="#" class="nav-link">Broadcast New Episode</a>
						</li>
					</ul>
				</div>
			</li>
            <li class="nav-item <?= link_is_active("fpos") ?>">
				<a class="nav-link" data-bs-toggle="collapse" href="#fpos" role="button" aria-expanded="false" aria-controls="fpos">
					<i class="link-icon" data-feather="database"></i>
					<span class="link-title">FPOs</span>
					<i class="link-arrow" data-feather="chevron-down"></i>
				</a>
				<div class="collapse" id="fpos">
					<ul class="nav sub-menu">
						<li class="nav-item">
							<a href="<?= base_url('fpos') ?>" class="nav-link <?= link_is_active("fpos") ?>">All FPOs</a>
						</li>
						<li class="nav-item">
							<a href="#" class="nav-link">Add New FPO</a>
						</li>
					</ul>
				</div>
			</li>
            <li class="nav-item <?= link_is_active("reports") ?>">
				<a class="nav-link" data-bs-toggle="collapse" href="#reports" role="button" aria-expanded="false" aria-controls="reports">
					<i class="link-icon" data-feather="database"></i>
					<span class="link-title">Reports</span>
					<i class="link-arrow" data-feather="chevron-down"></i>
				</a>
				<div class="collapse" id="reports">
					<ul class="nav sub-menu">
						<li class="nav-item">
							<a href="<?= base_url('reports') ?>" class="nav-link <?= link_is_active("reports") ?>">All Reports</a>
						</li>
						<li class="nav-item">
							<a href="#" class="nav-link">Publish New Report</a>
						</li>
					</ul>
				</div>
			</li>
			<li class="nav-item">
				<a href="<?= base_url('') ?>" class="nav-link">
					<i class="link-icon" data-feather="bookmark"></i>
					<span class="link-title">Categories</span>
				</a>
			</li>
			<li class="nav-item">
				<a href="<?= base_url('') ?>" class="nav-link">
					<i class="link-icon" data-feather="bookmark"></i>
					<span class="link-title">Tags</span>
				</a>
			</li>
			<li class="nav-item">
				<a href="<?= base_url('') ?>" class="nav-link">
					<i class="link-icon" data-feather="message-square"></i>
					<span class="link-title">Comments</span>
				</a>
			</li>

			<!-- Access Level: admin -->

			<li class="nav-item nav-category">User Management</li>
			<li class="nav-item">
				<a class="nav-link" data-bs-toggle="collapse" href="#emails" role="button" aria-expanded="false" aria-controls="emails">
					<i class="link-icon" data-feather="users"></i>
					<span class="link-title">Users</span>
					<i class="link-arrow" data-feather="chevron-down"></i>
				</a>
				<div class="collapse" id="emails">
					<ul class="nav sub-menu">
						<li class="nav-item">
							<a href="#" class="nav-link">All Users</a>
						</li>
						<li class="nav-item">
							<a href="#" class="nav-link">Add New User</a>
						</li>
					</ul>
				</div>
			</li>
			<li class="nav-item">
				<a href="<?= base_url('settings') ?>" class="nav-link">
					<i class="link-icon" data-feather="settings"></i>
					<span class="link-title">Settings</span>
				</a>
			</li>

			<li class="nav-item nav-category">Apps</li>
			<li class="nav-item">
				<a href="dashboard.html" class="nav-link">
					<i class="link-icon" data-feather="settings"></i>
					<span class="link-title">App Settings</span>
				</a>
			</li>

			<li class="nav-item nav-category">Docs</li>
			<li class="nav-item">
				<a href="https://www.nobleui.com/html/documentation/docs.html" target="_blank" class="nav-link">
					<i class="link-icon" data-feather="hash"></i>
					<span class="link-title">Documentation</span>
				</a>
			</li>
		</ul>
	</div>
</nav>
