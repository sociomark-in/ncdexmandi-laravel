<link rel="stylesheet" href="<?= base_url("assets/css/") ?>select2-custom.min.css">
<main class="page-content">
    <div class="d-flex justify-content-between align-items-center flex-wrap grid-margin">
        <div>
            <h4 class="mb-3 mb-md-0">Media Galleries</h4>
        </div>
    </div>
    <!-- row -->
    <div class="row">
        <div class="col-12">
            <div class="row">
                <?php for ($i = 0; $i < 4; $i++) : ?>
                    <div class="col-xl-3 col-lg-4 col-12 grid-margin stretch-card">
                        <div class="card">
                            <div class="card-body">
                                <div class="d-flex justify-content-between align-items-baseline">
                                    <h6 class="card-title mb-0">All Blogs</h6>
                                    <div>
                                        <a class="btn p-0 btn-icon-text text-dark" href="<?= base_url("blogs") ?>">View All<i data-feather="arrow-right" class="icon-sm mb-1 btn-icon-append"></i></a>
                                    </div>
                                </div>
                                <div class="row">
                                    <div class="col-12">
                                        <h3 class="mb-2">3,897</h3>
                                        <div class="d-flex align-items-baseline">
                                            <p class="text-success">
                                                <span>+3.3%</span>
                                                <i data-feather="arrow-up" class="icon-sm mb-1"></i>
                                            </p>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                <?php endfor ?>
            </div>
        </div>
        <div class="col-12">
            <div class="card">
                <div class="card-body"></div>
            </div>
        </div>
    </div>
</main>