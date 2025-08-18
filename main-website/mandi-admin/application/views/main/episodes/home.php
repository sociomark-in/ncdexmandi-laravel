<main class="page-content">
    <div class="d-flex justify-content-between align-items-center flex-wrap grid-margin">
        <div>
            <h4 class="mb-3 mb-md-0">Episodes List</h4>
        </div>
        <div class="">
            <a href="<?= base_url('episode/new-post') ?>" target="_blank" class="btn btn-icon-text btn-primary">
                <i class="btn-icon-prepend" data-feather="plus"></i>
                Create A New Episode</a>
        </div>
    </div>

    <!-- row -->
    <div class="row">
        <div class="col-xl-8 col-12 grid-margin stretch-card">
            <div class="card">
                <div class="card-body">
                    <div class="d-flex justify-content-between align-items-baseline mb-2">
                        <h6 class="card-title">All Episodes</h6>
                    </div>
                    <div class="row mb-3">
                        <div class="col-12">
                            <form action="<?= base_url("episodes") ?>" method="get">
                                <div class="row g-2">
                                    <div class="col-xl-3 col-lg-2 col-md-3 col-12">
                                        <select name="post_category" data-placeholder="Select FPO" class="form-select" id="">
                                            <option value="">Select FPO</option>
                                            <?php for ($i = 0; $i < 20; $i++): ?>
                                                <option value="Option <?= $i ?>">Option <?= $i ?></option>
                                            <?php endfor ?>
                                        </select>
                                    </div>
                                    <div class="col-xl-3 col-lg-2 col-md-3 col-12">
                                        <select name="post_status" data-placeholder="Select Status" class="form-select" id="">
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
                                    <a class="nav-link <?= (in_array($this->input->get('post_status'), [NULL, ""])) ? "active" : "" ?>" aria-current="page" href="<?= current_url() ?>">All Episodes <span class="badge bg-dark">200</span></a>
                                </li>
                                <li class="nav-item">
                                    <a class="nav-link <?= ($this->input->get('post_status') == "released" && $this->input->get('nominated') == 'no') ? "active" : "" ?>" href="<?= current_url() ?>?post_status=released&nominated=no">Nominations <span class="badge bg-dark">200</span></a>
                                </li>
                                <li class="nav-item">
                                    <a class="nav-link <?= ($this->input->get('post_status') == "released" && $this->input->get('nominated') == 'yes') ? "active" : "" ?>" href="<?= current_url() ?>?post_status=released&nominated=yes">FPOs of the Month <span class="badge bg-dark">200</span></a>
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
                                    <th class="pt-0">FPO Name</th>
                                    <th class="pt-0">Status</th>
                                </tr>
                            </thead>
                            <tbody>
                                <?php for ($i = 0; $i < 20; $i++) : ?>
                                    <tr>
                                        <td>
                                            <a target="_blank" href="<?= base_url('episodes/post/' . $i . '/edit') ?>"><i class="link-icon px-1 mb-1" data-feather="edit-2"></i></a>
                                            <button id="deleteButton<?= $i ?>" class="btn btn-danger p-0" data-bs-toggle="modal" data-bs-target="#deleteConfirmModal">
                                                <i class="link-icon px-1 mb-1" data-feather="trash-2"></i>
                                            </button>
                                        </td>
                                        <td><a target="_blank" href="<?= base_url('episodes/post/' . $i . '?post_preview=true') ?>"><span class="blog-title">Lorem ipsum, dolor sit amet consectetur adipisicing elit. Expedita, praesentium.</span><i class="link-icon px-1 mb-1" data-feather="external-link"></i></a></td>
                                        <td>
                                            <span>FPO Name</span>
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
        <div class="col-xl-4 col-12 grid-margin">
            <div class="card">
                <div class="card-body">
                    <div class="d-flex justify-content-between align-items-baseline mb-2">
                        <h6 class="card-title">Quick Launch A New Episode</h6>
                    </div>
                    <?= form_open() ?>
                    <div class="row g-3">
                        <div class="col-12">
                            <label for="" class="form-label">Episode Title</label>
                            <input type="text" maxlength="80" class="form-control text-counter">
                        </div>
                        <div class="col-12">
                            <label for="" class="form-label">Select An FPO</label>
                            <select class="form-select" name="" id="" data-placeholder="Select an FPO">
                                <option value=""></option>
                                <?php for ($i = 0; $i < 10; $i++) : ?>
                                    <option value="FPO <?= $i ?>">FPO <?= $i ?></option>
                                <?php endfor ?>
                            </select>
                        </div>
                        <div class="col-12">
                            <label for="" class="form-label">Episode YouTube URL</label>
                            <input type="url" class="form-control" id="inputYouTube">
                        </div>
                        <div class="col-12">
                            <label for="" class="form-label">Featured Image</label>
                            <img id="videoThumb" src="https://dummyimage.com/1600x900&text=Updating the YouTube URL updates this Image" class="w-100" alt="">
                            <script>
                                $("#inputYouTube").on('change', () => {
                                    var urlVal = $("#inputYouTube");
                                    var videoID = "";
                                    if (urlVal.val() != "") {
                                        videoID = urlVal.val().split('https://')[1].split('/')[1].split('?')[0];
                                        console.log(videoID);
                                        if (videoID) {
                                            $("#videoThumb").attr('src', "https://i3.ytimg.com/vi/" + videoID + "/hqdefault.jpg");
                                        } else {
                                            $("#videoThumb").attr('src', "https://dummyimage.com/600x400&text=Invalid YouTube URL");
                                        }
                                    } else {
                                        $("#videoThumb").attr('src', "https://dummyimage.com/600x400&text=Updating the YouTube URL updates this Image");
                                    }
                                })
                            </script>
                        </div>
                        <div class="col-12">
                            <button type="submit" class="btn me-2 btn-primary btn-icon-text"><i class="link-arrow btn-icon-prepend" data-feather="save"></i>Save & Launch Episode</button>
                            <button type="reset" class="btn btn-outline-secondary">Discard</button>
                        </div>
                    </div>
                    <?= form_close() ?>
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