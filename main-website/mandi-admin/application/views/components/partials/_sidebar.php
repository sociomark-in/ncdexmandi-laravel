<nav class="sidebar">
    <div class="sidebar-header">
        <a href="#" class="sidebar-brand">
            <img src="https://placehold.co/160x40" alt="">
            <!-- <img src="<?= base_url('assets/logo.png') ?>" alt="" width="160"> -->
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

            <li class="nav-item <?= link_is_active(['leads', 'leads/all-queries', 'leads/all-enquiries'], $group = true)['active'] ? "active" : ""  ?>">
                <a class="nav-link" disabled data-bs-toggle="collapse" href="#leads" role="button" aria-expanded="<?= link_is_active(['blogs', 'blog/new-post'], $group = true)['expand'] ? "true" : "false" ?>" aria-controls="blogs">
                    <i class="link-icon" data-feather="database"></i>
                    <span class="link-title">Leads</span>
                    <i class="link-arrow" data-feather="chevron-down"></i>
                </a>
                <div class="collapse <?= link_is_active(['leads', 'leads/all-queries', 'leads/all-enquiries'], $group = true)['show'] ? "show" : "" ?>" id="leads">
                    <ul class="nav sub-menu">
                        <li class="nav-item">
                            <a href="<?= base_url("leads") ?>" class="nav-link <?= link_is_active('leads')['active'] ? "active" : ""  ?>">All Leads</a>
                        </li>
                        <li class="nav-item">
                            <a href="<?= base_url('leads/all-queries') ?>" target="_blank" class="nav-link <?= link_is_active('leads/all-queries')['active'] ? "active" : "" ?>">FAQ Queries</a>
                        </li>
                        <li class="nav-item">
                            <a href="<?= base_url('leads/all-enquiries') ?>" target="_blank" class="nav-link <?= link_is_active('leads/all-enquiries')['active'] ? "active" : "" ?>">Enquiries</a>
                        </li>
                    </ul>
                </div>
            </li>

            <!-- Content Management -->
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

            <!-- News -->
            <li class="nav-item <?= link_is_active(['news', 'news/new-article'], $group = true)['active'] ? "active" : ""  ?>">
                <a class="nav-link" data-bs-toggle="collapse" href="#news" role="button" aria-expanded="<?= link_is_active(['news', 'news/new-article'], $group = true)['expand'] ? "true" : "false" ?>" aria-controls="news">
                    <i class="link-icon" data-feather="database"></i>
                    <span class="link-title">News Articles</span>
                    <i class="link-arrow" data-feather="chevron-down"></i>
                </a>
                <div class="collapse <?= link_is_active(['news', 'news/new-article'], $group = true)['show'] ? "show" : "" ?>" id="news">
                    <ul class="nav sub-menu">
                        <li class="nav-item">
                            <a href="<?= base_url("news") ?>" class="nav-link <?= link_is_active('news')['active'] ? "active" : ""  ?>">All Articles</a>
                        </li>
                        <li class="nav-item">
                            <a href="<?= base_url('news/new-article') ?>" target="_blank" class="nav-link <?= link_is_active('news/new-article')['active'] ? "active" : "" ?>">Add News Article</a>
                        </li>
                    </ul>
                </div>
            </li>
            <!-- News -->

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
                            <a href="<?= base_url('episode/new-post') ?>" target="_blank" class="nav-link <?= link_is_active('episode/new-post')['active'] ? "active" : "" ?>">Add New Episode</a>
                        </li>
                    </ul>
                </div>
            </li>
            <!-- Episodes -->

            <!-- FAQs -->
            <li class="nav-item <?= link_is_active(['faqs', 'faqs/new-question'], $group = true)['active'] ? "active" : ""  ?>">
                <a class="nav-link" data-bs-toggle="collapse" href="#faqs" role="button" aria-expanded="<?= link_is_active(['faqs', 'faqs/new-question'], $group = true)['expand'] ? "true" : "false" ?>" aria-controls="reports">
                    <i class="link-icon" data-feather="database"></i>
                    <span class="link-title">FAQs</span>
                    <i class="link-arrow" data-feather="chevron-down"></i>
                </a>
                <div class="collapse <?= link_is_active(['faqs', 'faqs/new-question'], $group = true)['show'] ? "show" : "" ?>" id="faqs">
                    <ul class="nav sub-menu">
                        <li class="nav-item">
                            <a href="<?= base_url("faqs") ?>" class="nav-link <?= link_is_active('faqs')['active'] ? "active" : ""  ?>">All FAQs</a>
                        </li>
                        <li class="nav-item">
                            <a href="<?= base_url('faqs/new-question') ?>" target="_blank" class="nav-link <?= link_is_active('faqs/new-question')['active'] ? "active" : "" ?>">Add New Post</a>
                        </li>
                    </ul>
                </div>
            </li>
            <!-- FAQs -->

            <!-- Podcasts -->
            <li class="nav-item <?= link_is_active(['podcasts', 'podcast/new-post'], $group = true)['active'] ? "active" : ""  ?>">
                <a class="nav-link" disabled data-bs-toggle="collapse" href="#podcasts" role="button" aria-expanded="<?= link_is_active(['podcasts', 'podcast/new-post'], $group = true)['expand'] ? "true" : "false" ?>" aria-controls="podcasts">
                    <i class="link-icon" data-feather="disc"></i>
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
            <li class="d-none nav-item <?= link_is_active(['reports', 'report/new-post'], $group = true)['active'] ? "active" : ""  ?>">
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

            <li class="nav-item <?= link_is_active(['gallery', 'infographics'], $group = true)['active'] ? "active" : ""  ?>">
                <a class="nav-link" disabled data-bs-toggle="collapse" href="#gallery" role="button" aria-expanded="<?= link_is_active(['gallery', 'infographics'], $group = true)['expand'] ? "true" : "false" ?>" aria-controls="gallery">
                    <i class="link-icon" data-feather="image"></i>
                    <span class="link-title">Media</span>
                    <i class="link-arrow" data-feather="chevron-down"></i>
                </a>
                <div class="collapse <?= link_is_active(['gallery', 'infographics'], $group = true)['show'] ? "show" : "" ?>" id="gallery">
                    <ul class="nav sub-menu">
                        <li class="nav-item">
                            <a href="<?= base_url("gallery") ?>" class="nav-link <?= link_is_active('gallery')['active'] ? "active" : ""  ?>">Media Gallery</a>
                        </li>
                        <li class="nav-item">
                            <a href="<?= base_url('infographics') ?>" target="_blank" class="nav-link <?= link_is_active('infographics')['active'] ? "active" : "" ?>">CTA Infographics</a>
                        </li>
                    </ul>
                </div>
            </li>

            <!-- All Comments -->
            <li class="nav-item">
                <a href="<?= base_url('') ?>" class="nav-link" disabled>
                    <i class="link-icon" data-feather="message-square"></i>
                    <span class="link-title">Comments</span>
                </a>
            </li>

            <li class="nav-item nav-category">Miscellaneous</li>
            <li class="nav-item <?= link_is_active("fpos")['active'] ? "active" : "" ?>">
                <a href="<?= base_url('fpos') ?>" class="nav-link">
                    <i class="link-icon" data-feather="bookmark"></i>
                    <span class="link-title">FPOs</span>
                </a>
            </li>
            <li class="nav-item <?= link_is_active('commodities')['active'] ? "active" : "" ?>">
                <a href="<?= base_url('commodities') ?>" class="nav-link">
                    <i class="link-icon" data-feather="bookmark"></i>
                    <span class="link-title">Commodities</span>
                </a>
            </li>
            <li class="nav-item <?= link_is_active('misc/categories')['active'] ? "active" : "" ?>">
                <a href="<?= base_url('misc/categories') ?>" class="nav-link">
                    <i class="link-icon" data-feather="bookmark"></i>
                    <span class="link-title">Categories</span>
                </a>
            </li>
            <li class="nav-item <?= link_is_active('misc/tags')['active'] ? "active" : "" ?>">
                <a href="<?= base_url('misc/tags') ?>" class="nav-link">
                    <i class="link-icon" data-feather="bookmark"></i>
                    <span class="link-title">Tags</span>
                </a>
            </li>


            <!-- Access Level: admin -->

            <li class="nav-item nav-category">User Management</li>
            <li class="nav-item <?= link_is_active(['users', 'users/new-user'], $group = true)['active'] ? "active" : ""  ?>">
                <a class="nav-link" disabled data-bs-toggle="collapse" href="#users" role="button" aria-expanded="<?= link_is_active(['users', 'users/new-user'], $group = true)['expand'] ? "true" : "false"  ?>" aria-controls="users">
                    <i class="link-icon" data-feather="users"></i>
                    <span class="link-title">Users</span>
                    <i class="link-arrow" data-feather="chevron-down"></i>
                </a>
                <div class="collapse <?= link_is_active(['users', 'users/new-user'], $group = true)['show'] ? "show" : ""  ?>" id="users">
                    <ul class="nav sub-menu">
                        <li class="nav-item">
                            <a href="<?= base_url('users') ?>" class="nav-link <?= link_is_active("users")['active'] ? "active" : "" ?>">All Users</a>
                        </li>
                        <li class="nav-item">
                            <a href="<?= base_url('users/new-user') ?>" class="nav-link <?= link_is_active("users/new-user")['active'] ? "active" : "" ?>">Add New User</a>
                        </li>
                    </ul>
                </div>
            </li>
            <li class="nav-item <?= link_is_active("settings")['active'] ? "active" : "" ?>">
                <a href="<?= base_url('settings') ?>" class="nav-link" disabled>
                    <i class="link-icon" data-feather="settings"></i>
                    <span class="link-title">Settings</span>
                </a>
            </li>

            <li class="nav-item nav-category">Apps</li>
            <li class="nav-item">
                <a href="dashboard.html" class="nav-link" disabled>
                    <i class="link-icon" data-feather="tool"></i>
                    <span class="link-title">Developer Tools</span>
                </a>
            </li>

            <li class="nav-item nav-category">Docs</li>
            <li class="nav-item">
                <a href="https://www.nobleui.com/html/documentation/docs.html" target="_blank" class="nav-link" disabled>
                    <i class="link-icon" data-feather="hash"></i>
                    <span class="link-title">Documentation</span>
                </a>
            </li>
        </ul>
    </div>
</nav>