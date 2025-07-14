<main class="page-content">
    <div class="d-flex justify-content-between align-items-center flex-wrap grid-margin">
        <div>
            <h4 class="mb-3 mb-md-0">All FAQs</h4>
        </div>
        <div class="">
            <a href="<?= base_url('report/new-post') ?>" target="_blank" class="btn btn-icon-text btn-primary">
                <i class="btn-icon-prepend" data-feather="plus"></i>
                Add New FAQ</a>
        </div>
    </div>
    <div class="row">
        <div class="col-12">
            <div class="row">
                <div class="col-xl-3 col-lg-4 col-md-6 grid-margin stretch-card">
                    <div class="card">
                        <div class="card-body">
                            <div class="row m-0 h-100 align-items-center">
                                <div class="col-12">
                                    <div class="">
                                        <div class="mb-3">
                                            <h4 class="mb-1">Add A New Categories</h4>
                                            <!-- <p class="tx-18">You have <a href=""><u>4 categories</u></a> left,</p> -->
                                        </div>
                                        <button class="btn btn-primary btn-icon-text" data-bs-toggle="modal" data-bs-target="#newFAQCat"><i data-feather="plus" class="icon-sm mb-1 btn-icon-prepend"></i>Create</button>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <?php for ($i = 0; $i < 11; $i++) : ?>
                    <div class="col-xl-3 col-lg-4 col-md-6 grid-margin stretch-card">
                        <div class="card">
                            <div class="card-body">
                                <div class="d-flex justify-content-between align-items-baseline">
                                    <h6 class="card-title mb-0">Lorem, ipsum dolor. #<?= $i ?></h6>
                                    <div>
                                        <a class="btn p-0 btn-icon-text text-dark" href="<?= base_url("blogs") ?>">View<i data-feather="arrow-right" class="icon-sm mb-1 btn-icon-append"></i></a>
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
    </div>
</main>
<div class="modal fade" id="newFAQCat" tabindex="-1" aria-labelledby="newFAQCatLabel" aria-hidden="true">
  <div class="modal-dialog">
    <div class="modal-content">
      <div class="modal-header">
        <h1 class="modal-title fs-5" id="newFAQCatLabel">Create FAQ Category</h1>
        <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
      </div>
      <div class="modal-body">
        ...
      </div>
      <div class="modal-footer">
        <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Close</button>
        <button type="button" class="btn btn-primary">Save changes</button>
      </div>
    </div>
  </div>
</div>