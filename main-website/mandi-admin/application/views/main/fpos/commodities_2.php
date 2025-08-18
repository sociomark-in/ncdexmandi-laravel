<link rel="stylesheet" href="<?= base_url("assets/css/") ?>select2-custom.min.css">
<main class="page-content">
    <div class="d-flex justify-content-between align-items-center flex-wrap grid-margin">
        <div>
            <h4 class="mb-3 mb-md-0">Commodities List</h4>
        </div>
    </div>

    <!-- row -->
    <div class="row">
        <div class="col-xl-8 col-lg-6 col-12 grid-margin stretch-card">
            <div class="card">
                <div class="card-body">
                    <div class="d-flex justify-content-between align-items-baseline mb-2">
                        <h6 class="card-title">All Commodities</h6>
                        <button type="button" class="btn btn-icon-text btn-primary">
                        <i class="btn-icon-prepend" data-feather="refresh-cw"></i>Refresh Commodities</button>
                    </div>
                    <div class="row">
                        <?php foreach ($commodities as $key => $product) : ?>
                            <div class="col-auto">
                                <div class="alert alert-light text-black border-light fade show" role="alert">
                                    <span class=""><?= $product['name'] ?></span>
                                </div>
                            </div>
                        <?php endforeach ?>
                    </div>
                </div>
            </div>
        </div>
    </div>
</main>