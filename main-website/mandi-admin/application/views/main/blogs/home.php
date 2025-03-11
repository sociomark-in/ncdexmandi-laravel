<main class="page-content">
    <div class="d-flex justify-content-between align-items-center flex-wrap grid-margin">
        <div>
            <h4 class="mb-3 mb-md-0">Blog Posts</h4>
        </div>
        <div class="">
            <a href="" class="btn btn-icon-text btn-primary">
                <i class="btn-icon-prepend" data-feather="plus"></i>
                Add New Post</a>
        </div>
    </div>

    <!-- row -->
    <div class="row">
        <div class="col-12 grid-margin stretch-card">
            <div class="card">
                <div class="card-body">
                    <div class="d-flex justify-content-between align-items-baseline mb-2">
                        <h6 class="card-title mb-0">All Posts</h6>
                        <div class="dropdown mb-2">
                            <a type="button" id="dropdownMenuButton7" data-bs-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                                <i class="icon-lg text-muted pb-3px" data-feather="more-horizontal"></i>
                            </a>
                        </div>
                    </div>
                    <div class="row mb-3">
                        <div class="col-12">
                            <form action="<?= base_url("blogs/search") ?>" method="get">
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
                                        <select name="post_tags" class="form-select" id="">
                                            <option value="">Select Tags</option>
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
                                    <a class="nav-link active" aria-current="page" href="#">All Posts <span class="badge bg-dark">200</span></a>
                                </li>
                                <li class="nav-item">
                                    <a class="nav-link" href="#">Released <span class="badge bg-dark">200</span></a>
                                </li>
                                <li class="nav-item">
                                    <a class="nav-link" href="#">Draft <span class="badge bg-dark">200</span></a>
                                </li>
                            </ul>
                        </div>
                    </div>
                    <div class="table-responsive">
                        <table class="table table-hover mb-0 w-100" id="leadsDataTable">
                            <thead>
                                <tr>
                                    <th class="pt-0"></th>
                                    <th class="pt-0">Blog Title</th>
                                    <th class="pt-0">Categories</th>
                                    <th class="pt-0">Tags</th>
                                    <th class="pt-0">Lang</th>
                                    <th class="pt-0">Lang</th>
                                    <th class="pt-0">Lang</th>
                                    <th class="pt-0">Comments</th>
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
                                        <td><a target="_blank" href="<?= base_url('blogs/post/' . $i . '/view') ?>" class="blog-title">Lorem ipsum, dolor sit amet consectetur adipisicing elit. Expedita, praesentium.</a></td>
                                        <td>
                                            <span class="badge">Released</span>
                                            <span class="badge">Released</span>
                                        </td>
                                        <td>
                                            <div class="d-flex gap-1">
                                                <span class="badge">Released</span>
                                                <span class="badge">Released</span>
                                                <span class="badge">+4 More</span>
                                            </div>
                                        </td>
                                        <td>
                                            <a href="<?= base_url('') ?>">
                                                <i class="link-icon px-1 mb-1" data-feather="plus"></i>
                                            </a>
                                        </td>
                                        <td>
                                            <a href="javascript:void(0)">
                                                <i class="link-icon px-1 mb-1 text-success" data-feather="check"></i>
                                            </a>
                                        </td>
                                        <td>
                                            <a href="<?= base_url('') ?>">
                                                <i class="link-icon px-1 mb-1" data-feather="plus"></i>
                                            </a>
                                        </td>
                                        <td>-</td>
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
        <div class="col-lg-5 col-xl-3 grid-margin stretch-card d-none">
            <div class="card">
                <div class="card-body">
                    <div class="d-flex justify-content-between align-items-baseline mb-2">
                        <h6 class="card-title mb-0">Comments</h6>
                        <div class="dropdown mb-2">
                            <a type="button" id="dropdownMenuButton6" data-bs-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                                <i class="icon-lg text-muted pb-3px" data-feather="more-horizontal"></i>
                            </a>
                        </div>
                    </div>
                    <div class="row" style="height: 640px; overflow-y:scroll;">
                        <?php for ($i = 0; $i < 20; $i++) : ?>
                            <a href="javascript:;" class="d-flex align-items-center border-bottom p-2">
                                <div class="me-3">
                                    <img src="https://ui-avatars.com/api/?name=Leonardo+Payne" class="rounded-circle wd-35" alt="user">
                                </div>
                                <div class="w-100">
                                    <div class="d-flex justify-content-between">
                                        <h6 class="text-body mb-2">Leonardo Payne</h6>
                                        <p class="text-muted tx-12">12.30 PM</p>
                                    </div>
                                    <p class="text-muted tx-13">Hey! there I'm available...</p>
                                </div>
                            </a>
                        <?php endfor ?>
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
