<main class="page-content">
    <div class="d-flex justify-content-between align-items-center flex-wrap grid-margin">
        <div>
            <h4 class="mb-3 mb-md-0">All Tags</h4>
        </div>
    </div>

    <!-- row -->
    <div class="row">
        <div class="col-xl-8 col-12 grid-margin stretch-card">
            <div class="card">
                <div class="card-body">
                    <div class="d-flex justify-content-between align-items-baseline mb-2 mb-md-3">
                        <h6 class="card-title mb-0">List All Tags</h6>
                    </div>
                    <div class="row justify-content-between">
                        <div class="col-md-auto col-12">
                            <!-- Alternative - Isotope.js -->
                            <ul class="nav nav-underline">
                                <li class="nav-item">
                                    <a class="nav-link <?= (in_array($this->input->get('status'), [NULL, ""])) ? "active" : "" ?>" aria-current="page" href="<?= current_url() ?>">All&nbsp;<span class="badge bg-dark">200</span></a>
                                </li>
                                <li class="nav-item">
                                    <a class="nav-link <?= ($this->input->get('status') == "1") ? "active" : "" ?>" href="<?= current_url() ?>?status=1">Active&nbsp;<span class="badge bg-dark">200</span></a>
                                </li>
                                <li class="nav-item">
                                    <a class="nav-link <?= ($this->input->get('status') == "0") ? "active" : "" ?>" href="<?= current_url() ?>?status=0">Inactive&nbsp;<span class="badge bg-dark">200</span></a>
                                </li>
                            </ul>
                        </div>
                    </div>
                    <div class="table-responsive">
                        <table class="table table-hover mb-0 w-100" id="leadsDataTable">
                            <thead>
                                <tr>
                                    <th class="pt-0"></th>
                                    <th class="pt-0">Tag Name</th>
                                    <th class="pt-0">Status</th>
                                    <th class="pt-0">Date</th>
                                </tr>
                            </thead>
                            <tbody>
                                <?php foreach ($tags as $key => $tag) : ?>
                                    <tr>
                                        <td>
                                            <a target="_blank" href="<?= base_url('user/profile/' . $key . '/edit') ?>"><i class="link-icon px-1 mb-1" data-feather="edit-2"></i></a>
                                            <button id="deleteButton<?= $key ?>" class="btn btn-danger link-icon p-0" data-bs-toggle="modal" data-bs-target="#deleteConfirmModal">
                                                <i class="link-icon px-1 mb-1" data-feather="trash"></i>
                                            </button>
                                            <a target="_blank" href="<?= base_url('user/profile/' . $key . '/edit') ?>"><i class="link-icon px-1 mb-1" data-feather="external-link"></i></a>
                                        </td>
                                        <td><?= $tag['name'] ?><br><small class="text-muted">(<?= $tag['slug'] ?>)</small></td>
                                        <td>
                                            <?php if ($tag['status'] == 1) : ?>
                                                <span class="badge bg-success">Active</span>
                                            <?php else : ?>
                                                <span class="badge bg-danger">Inactive</span>
                                            <?php endif ?>
                                        </td>
                                        <td><?= date('F j, Y') ?></td>
                                    </tr>
                                    <script>
                                        $("#deleteButton<?= $key ?>").on('click', () => {
                                            $("#deleteConfirmModal input[name=post_id]").val(<?= $key ?>)
                                        })
                                    </script>
                                <?php endforeach ?>
                            </tbody>
                        </table>
                        <script>
                            let table = new DataTable('#leadsDataTable', {
                                scrollX: true,
                                paging: false,
                                order: [
                                    [8, 'desc']
                                ],
                            });
                        </script>
                    </div>
                </div>
            </div>
        </div>
        <div class="col-xl-4 col-12 grid-margin">
            <div class="card">
                <div class="card-body">
                    <div class="d-flex justify-content-between align-items-baseline mb-2 mb-md-3">
                        <h6 class="card-title mb-0">Add A New Tag</h6>
                    </div>
                    <?= form_open() ?>
                    <div class="row g-3">
                        <div class="col-12">
                            <label for="" class="form-label">Tag Name</label>
                            <input type="text" class="form-control text-counter" maxlength="100" id="inputTitle">
                        </div>
                        <div class="col-12">
                            <label for="" class="form-label">Tag Slug</label>
                            <input type="text" class="form-control" id="inputSlug">
                        </div>
                        <div class="col-12">
                            <button type="submit" class="btn me-2 btn-primary btn-icon-text"><i class="link-arrow btn-icon-prepend" data-feather="save"></i>Save Tag</button>
                            <button type="reset" class="btn btn-outline-secondary">Discard</button>
                        </div>
                    </div>
                    <?= form_close() ?>
                </div>
            </div>
        </div>
    </div>
</main>
<script src="https://cdnjs.cloudflare.com/ajax/libs/speakingurl/14.0.1/speakingurl.min.js"></script>
<script src="https://cdn.jsdelivr.net/npm/jquery-slugify@1.2.5/dist/slugify.min.js"></script>
<script>
    /* Slugify: Change text to URL */
    var $titleInput = $("#inputTitle");
    $titleInput.on("input", () => {
        $("#inputSlug").slugify($titleInput)
    })
</script>

<div class="modal fade" id="deleteConfirmModal" tabindex="-1" aria-labelledby="deleteConfirmModalLabel" aria-hidden="true">
    <div class="modal-dialog">
        <div class="modal-content">
            <div class="modal-header">
                <h1 class="modal-title fs-5" id="deleteConfirmModalLabel">Confirm Delete</h1>
                <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
            </div>
            <div class="modal-body">
                <p>Are you sure to delete this?</p>
                <?= form_open() ?>
                <input type="hidden" name="post_id">
                <input type="hidden" name="redirect_url" value="<?= current_url() ?>">
                <?= form_close() ?>
            </div>
            <div class="modal-footer">
                <button type="button" class="btn btn-secondary">Yes. delete it</button>
                <button type="button" class="btn btn-primary" data-bs-dismiss="modal">No, don't delete</button>
            </div>
        </div>
    </div>
</div>