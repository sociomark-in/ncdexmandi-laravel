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
                                    <a class="nav-link <?= (in_array($this->input->get('post_status'), [NULL, ""])) ? "active" : "" ?>" aria-current="page" href="<?= current_url() ?>">All Tags&nbsp;<span class="badge bg-dark">200</span></a>
                                </li>
                                <li class="nav-item">
                                    <a class="nav-link <?= ($this->input->get('post_status') == "active") ? "active" : "" ?>" href="<?= current_url() ?>?post_status=active">Active Tags&nbsp;<span class="badge bg-dark">200</span></a>
                                </li>
                                <li class="nav-item">
                                    <a class="nav-link <?= ($this->input->get('post_status') == "inactive") ? "active" : "" ?>" href="<?= current_url() ?>?post_status=inactive">Inactive Tags&nbsp;<span class="badge bg-dark">200</span></a>
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
                                <?php for ($i=0; $i < 20; $i++) : ?>
                                    <tr>
                                        <td>
                                            <a target="_blank" href="<?= base_url('user/profile/' . $i . '/edit') ?>"><i class="link-icon px-1 mb-1" data-feather="edit-2"></i></a>
                                            <button id="deleteButton<?= $i ?>" class="btn link-icon p-0" data-bs-toggle="modal" data-bs-target="#deleteConfirmModal">
                                                <i class="link-icon px-1 mb-1" data-feather="trash-2"></i>
                                            </button>
                                            <a target="_blank" href="<?= base_url('user/profile/' . $i . '/edit') ?>"><i class="link-icon px-1 mb-1" data-feather="external-link"></i></a>
                                        </td>
                                        <td>Lorem ipsum dolor sit.</td>
                                        <td><span class="badge bg-success">Active</span></td>
                                        <td><?= date('F j, Y') ?></td>
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
        <div class="col-xl-4 col-12 grid-margin">
            <div class="card">
                <div class="card-body">
                <div class="d-flex justify-content-between align-items-baseline mb-2 mb-md-3">
                        <h6 class="card-title mb-0">Add A New Tag</h6>
                    </div>
                </div>
            </div>
        </div>
    </div>
</main>
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