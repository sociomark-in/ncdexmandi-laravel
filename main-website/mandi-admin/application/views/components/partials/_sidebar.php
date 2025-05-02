<nav class="sidebar">
    <div class="sidebar-header">
        <a href="#" class="sidebar-brand">
            <img src="<?= base_url('assets/logo.png') ?>" alt="" width="160">
        </a>
        <div class="sidebar-toggler">
            <span></span>
            <span></span>
            <span></span>
        </div>
    </div>
    <div class="sidebar-body">
        <ul class="nav">
            <li class="nav-item <?= link_is_active("")['active'] ? "active" : "" ?>">
                <a href="<?= base_url() ?>" class="nav-link">
                    <i class="link-icon" data-feather="box"></i>
                    <span class="link-title">Dashboard</span>
                </a>
            </li>

            <!-- Nominations -->
            <li class="nav-item nav-category">Content Management</li>
            <!-- Access Level: jury -->
            <!-- Blogs -->
            <li class="nav-item <?= link_is_active(['blogs', 'blog/new-post'], $group = true)['active'] ? "active" : ""  ?>">
                <a class="nav-link" data-bs-toggle="collapse" href="#blogs" role="button" aria-expanded="<?= link_is_active(['blogs', 'blog/new-post'], $group = true)['expand'] ? "true" : "false" ?>" aria-controls="blogs">
                    <i class="link-icon" data-feather="database"></i>
                    <span class="link-title">Blogs</span>
                    <i class="link-arrow" data-feather="chevron-down"></i>
                </a>
                <div class="collapse <?= link_is_active(['blogs', 'blog/new-post'], $group = true)['show'] ? "show" : "" ?>" id="blogs">
                    <ul class="nav sub-menu">
                        <li class="nav-item">
                            <a href="<?= base_url("blogs") ?>" class="nav-link <?= link_is_active('blogs')['active'] ? "active" : ""  ?>">All Blogs</a>
                        </li>
                        <li class="nav-item">
                            <a href="<?= base_url('blog/new-post') ?>" target="_blank" class="nav-link <?= link_is_active('blog/new-post')['active'] ? "active" : "" ?>">Add New Post</a>
                        </li>
                    </ul>
                </div>
            </li>
            <!-- Blogs -->

            <!-- Episodes -->
            <li class="nav-item <?= link_is_active(['episodes', 'episode/new-post'], $group = true)['active'] ? "active" : ""  ?>">
                <a class="nav-link" data-bs-toggle="collapse" href="#episodes" role="button" aria-expanded="<?= link_is_active(['episodes', 'episode/new-post'], $group = true)['expand'] ? "true" : "false" ?>" aria-controls="episodes">
                    <i class="link-icon" data-feather="database"></i>
                    <span class="link-title">Episodes</span>
                    <i class="link-arrow" data-feather="chevron-down"></i>
                </a>
                <div class="collapse <?= link_is_active(['episodes', 'episode/new-post'], $group = true)['show'] ? "show" : "" ?>" id="episodes">
                    <ul class="nav sub-menu">
                        <li class="nav-item">
                            <a href="<?= base_url("episodes") ?>" class="nav-link <?= link_is_active('episodes')['active'] ? "active" : ""  ?>">All Episodes</a>
                        </li>
                        <li class="nav-item">
                            <a href="<?= base_url('episode/new-post') ?>" target="_blank" class="nav-link <?= link_is_active('episode/new-post')['active'] ? "active" : "" ?>">Add New Post</a>
                        </li>
                    </ul>
                </div>
            </li>
            <!-- Episodes -->

            <!-- Podcasts -->
            <li class="nav-item <?= link_is_active(['podcasts', 'podcast/new-post'], $group = true)['active'] ? "active" : ""  ?>">
                <a class="nav-link" data-bs-toggle="collapse" href="#podcasts" role="button" aria-expanded="<?= link_is_active(['podcasts', 'podcast/new-post'], $group = true)['expand'] ? "true" : "false" ?>" aria-controls="podcasts">
                    <i class="link-icon" data-feather="database"></i>
                    <span class="link-title">Podcasts</span>
                    <i class="link-arrow" data-feather="chevron-down"></i>
                </a>
                <div class="collapse <?= link_is_active(['podcasts', 'podcast/new-post'], $group = true)['show'] ? "show" : "" ?>" id="podcasts">
                    <ul class="nav sub-menu">
                        <li class="nav-item">
                            <a href="<?= base_url("podcasts") ?>" class="nav-link <?= link_is_active('podcasts')['active'] ? "active" : ""  ?>">All Podcasts</a>
                        </li>
                        <li class="nav-item">
                            <a href="<?= base_url('podcast/new-post') ?>" target="_blank" class="nav-link <?= link_is_active('podcast/new-post')['active'] ? "active" : "" ?>">Add New Post</a>
                        </li>
                    </ul>
                </div>
            </li>
            <!-- Podcasts -->

            <!-- Reports -->
            <li class="nav-item <?= link_is_active(['reports', 'report/new-post'], $group = true)['active'] ? "active" : ""  ?>">
                <a class="nav-link" data-bs-toggle="collapse" href="#reports" role="button" aria-expanded="<?= link_is_active(['reports', 'report/new-post'], $group = true)['expand'] ? "true" : "false" ?>" aria-controls="reports">
                    <i class="link-icon" data-feather="database"></i>
                    <span class="link-title">Reports</span>
                    <i class="link-arrow" data-feather="chevron-down"></i>
                </a>
                <div class="collapse <?= link_is_active(['reports', 'report/new-post'], $group = true)['show'] ? "show" : "" ?>" id="reports">
                    <ul class="nav sub-menu">
                        <li class="nav-item">
                            <a href="<?= base_url("reports") ?>" class="nav-link <?= link_is_active('reports')['active'] ? "active" : ""  ?>">All Reports</a>
                        </li>
                        <li class="nav-item">
                            <a href="<?= base_url('report/new-post') ?>" target="_blank" class="nav-link <?= link_is_active('report/new-post')['active'] ? "active" : "" ?>">Add New Post</a>
                        </li>
                    </ul>
                </div>
            </li>
            <!-- Reports -->
             
            <li class="nav-item">
                <a href="<?= base_url('') ?>" class="nav-link <?= link_is_active()['active'] ?>">
                    <i class="link-icon" data-feather="bookmark"></i>
                    <span class="link-title">Categories</span>
                </a>
            </li>
            <li class="nav-item">
                <a href="<?= base_url('') ?>" class="nav-link <?= link_is_active()['active'] ?>">
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