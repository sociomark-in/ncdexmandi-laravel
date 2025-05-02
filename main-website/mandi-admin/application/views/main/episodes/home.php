<main class="page-content">
    <div class="d-flex justify-content-between align-items-center flex-wrap grid-margin">
        <div>
            <h4 class="mb-3 mb-md-0">Episodes List</h4>
        </div>
    </div>

    <!-- row -->
    <div class="row">
        <div class="col-12 grid-margin">
            <div class="card">
                <div class="card-body">
                    <div class="d-flex justify-content-between align-items-baseline mb-2">
                        <h6 class="card-title mb-0">All Episodes</h6>
                    </div>
                    <div class="row mb-3">
                        <div class="col-12">
                            <form action="<?= base_url("episodes") ?>" method="get">
                                <div class="row g-2">
                                    <div class="col-lg-2 col-md-3 col-12">
                                        <select name="post_category" class="form-select" id="">
                                            <option value="">Select Category</option>
                                            <?php for ($i = 0; $i < 20; $i++): ?>
                                                <option value="Option <?= $i ?>">Option <?= $i ?></option>
                                            <?php endfor ?>
                                        </select>
                                    </div>
                                    <div class="col-lg-2 col-md-3 col-12">
                                        <select name="post_status" class="form-select" id="">
                                            <option value="">Select Visibility</option>
                                            <?php for ($i = 0; $i < 20; $i++): ?>
                                                <option value="Option <?= $i ?>">Option <?= $i ?></option>
                                            <?php endfor ?>
                                        </select>
                                    </div>
                                    <div class="col-auto">
                                        <button type="submit" class="btn btn-outline-primary">Apply Filter</button>
                                    </div>
                                </div>
                            </form>
                        </div>
                    </div>
                    <div class="row justify-content-between">
                        <div class="col-md-auto col-12">
                            <ul class="nav nav-underline">
                                <li class="nav-item">
                                    <a class="nav-link <?= (in_array($this->input->get('post_status'), [NULL, ""])) ? "active" : "" ?>" aria-current="page" href="<?= current_url() ?>">All Posts <span class="badge bg-dark">200</span></a>
                                </li>
                                <li class="nav-item">
                                    <a class="nav-link <?= ($this->input->get('post_status') == "released") ? "active" : "" ?>" href="<?= current_url() ?>?post_status=released">Released <span class="badge bg-dark">200</span></a>
                                </li>
                                <li class="nav-item">
                                    <a class="nav-link <?= ($this->input->get('post_status') == "draft") ? "active" : "" ?>" href="<?= current_url() ?>?post_status=draft">Draft <span class="badge bg-dark">200</span></a>
                                </li>
                            </ul>
                        </div>
                    </div>
                    <div class="table-responsive">
                        <table class="table table-hover mb-0 w-100" id="leadsDataTable">
                            <thead>
                                <tr>
                                    <th class="pt-0"></th>
                                    <th class="pt-0">Episode Title</th>
                                    <th class="pt-0">Categories</th>
                                    <th class="pt-0">Date</th>
                                </tr>
                            </thead>
                            <tbody>
                                <?php for ($i = 0; $i < 20; $i++) : ?>
                                    <tr>
                                        <td>
                                            <a target="_blank" href="<?= base_url('blogs/post/' . $i . '/edit') ?>"><i class="link-icon px-1 mb-1" data-feather="edit-2"></i></a>
                                            <button id="deleteButton<?= $i ?>" class="btn link-icon p-0" data-bs-toggle="modal" data-bs-target="#deleteConfirmModal">
                                                <i class="link-icon px-1 mb-1" data-feather="trash-2"></i>
                                            </button>
                                        </td>
                                        <td><a target="_blank" href="<?= base_url('blogs/post/' . $i . '?post_preview=true') ?>"><span class="blog-title">Lorem ipsum, dolor sit amet consectetur adipisicing elit. Expedita, praesentium.</span><i class="link-icon px-1 mb-1" data-feather="external-link"></i></a></td>
                                        <td>
                                            <span class="badge">Released</span>
                                            <span class="badge">Released</span>
                                        </td>
                                        <td>
                                            <span>Released</span><br>
                                            <span class="text-muted"><?= date("Y/m/d H:i A") ?></span>
                                        </td>
                                    </tr>
                                    <script>
                                        $("#deleteButton<?= $i ?>").on('click', () => {
                                            $("#deleteConfirmModal input[name=post_id]").val(<?= $i ?>)
                                        })
                                    </script>
                                <?php endfor ?>
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
    </div>
    <!-- row -->
    <div class="modal fade" id="deleteConfirmModal" tabindex="-1" aria-labelledby="deleteConfirmModalLabel" aria-hidden="true">
        <div class="modal-dialog">
            <div class="modal-content">
                <div class="modal-header">
                    <h1 class="modal-title fs-5" id="deleteConfirmModalLabel">Confirm Delete</h1>
                    <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                </div>
                <div class="modal-body">
                    <p>Are you sure to delete this post?</p>
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
</main>