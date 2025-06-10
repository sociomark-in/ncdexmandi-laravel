<main class="page-content">
    <div class="d-flex justify-content-between align-items-center flex-wrap grid-margin">
        <div>
            <h4 class="mb-3 mb-md-0">All Reports</h4>
        </div>
        <div class="">
            <a href="<?= base_url('report/new-post') ?>" target="_blank" class="btn btn-icon-text btn-primary">
                <i class="btn-icon-prepend" data-feather="plus"></i>
                Add New Report</a>
        </div>
    </div>

    <!-- row -->
    <div class="row">
        <div class="col-12 grid-margin">
            <div class="card">
                <div class="card-body">
                    <div class="d-flex justify-content-between align-items-baseline mb-2">
                        <h6 class="card-title mb-0">All Reports</h6>
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
    <div class="modal fade" id="addNewModal" tabindex="-1" aria-labelledby="addNewModalLabel" aria-hidden="true">
        <div class="modal-dialog">
            <div class="modal-content">
                <?= form_open() ?>
                <div class="modal-header">
                    <h1 class="modal-title fs-5" id="addNewModalLabel">Add New Post</h1>
                    <button type="reset" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                </div>
                <div class="modal-body">
                    <div class="row g-3">
                        
                    </div>
                </div>
                <div class="modal-footer">
                    <button type="submit" class="btn btn-primary">Add New</button>
                    <button type="reset" class="btn btn-secondary" data-bs-dismiss="modal">No</button>
                </div>
                <?= form_close() ?>
            </div>
        </div>
    </div>

    <div class="modal fade" id="deleteConfirmModal" tabindex="-1" aria-labelledby="deleteConfirmModalLabel" aria-hidden="true">
        <div class="modal-dialog">
            <div class="modal-content">
                <?= form_open() ?>
                <div class="modal-header">
                    <h1 class="modal-title fs-5" id="deleteConfirmModalLabel">Confirm Delete</h1>
                    <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                </div>
                <div class="modal-body">
                    <p>Are you sure to delete this post?</p>
                    <input type="hidden" name="post_id">
                    <input type="hidden" name="redirect_url" value="<?= current_url() ?>">
                </div>
                <div class="modal-footer">
                    <button type="submit" class="btn btn-secondary">Yes. delete it</button>
                    <button type="button" class="btn btn-primary" data-bs-dismiss="modal">No, don't delete</button>
                </div>
                <?= form_close() ?>
            </div>
        </div>
    </div>
</main>
<script src="https://cdnjs.cloudflare.com/ajax/libs/Dropify/0.2.2/js/dropify.min.js" integrity="sha512-8QFTrG0oeOiyWo/VM9Y8kgxdlCryqhIxVeRpWSezdRRAvarxVtwLnGroJgnVW9/XBRduxO/z1GblzPrMQoeuew==" crossorigin="anonymous" referrerpolicy="no-referrer"></script>

<script src="https://cdnjs.cloudflare.com/ajax/libs/pdf.js/2.6.347/pdf.min.js"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/pdf.js/2.6.347/pdf.worker.min.js"></script>

<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/Dropify/0.2.2/css/dropify.min.css" integrity="sha512-EZSUkJWTjzDlspOoPSpUFR0o0Xy7jdzW//6qhUkoZ9c4StFkVsp9fbbd0O06p9ELS3H486m4wmrCELjza4JEog==" crossorigin="anonymous" referrerpolicy="no-referrer" />
<link rel="stylesheet" href="<?= base_url("assets/css/") ?>dropify-custom.min.css">
<script>
    $('.dropify').dropify({
        error: {
            'fileSize': 'The file size is too big ({{ value }} max).',
            'minWidth': 'The image width is too small ({{ value }}}px min).',
            'maxWidth': 'The image width is too big ({{ value }}}px max).',
            'minHeight': 'The image height is too small ({{ value }}}px min).',
            'maxHeight': 'The image height is too big ({{ value }}px max).',
            'imageFormat': 'The image format is not allowed ({{ value }} only).'
        }
    });

    $("input[type='file']").each(function(index, element) {
        if ($(element).attr("data-default-file") == "" || $(element).attr("data-default-file") == null) {
            $(element).prop("required", true);
            console.log("Absent");

        } else {
            $(element).prop("required", false);
            console.log("Present");
        }
    });
    /* PDF.js - Run PDF Version Check */
    $('.dropify').each((index, elem) => {
        $(elem).on('change', function(event) {
            // Access the selected file directly from the event object
            const file = event.target.files[0];

            // Check if a file is actually selected
            if (!file) {
                console.warn('No file selected for dropify element:', this);
                return; // Exit the function if no file is selected
            }

            // Create a new FileReader object for each file
            const reader = new FileReader();

            reader.onload = (event) => {
                const arrayBuffer = event.target.result;
                console.log('ArrayBuffer:', arrayBuffer);

                // Assuming you have pdfjsLib loaded:
                pdfjsLib.getDocument(arrayBuffer).promise.then((pdfDoc) => {
                    pdfDoc.getMetadata().then((metadata) => {
                        console.log('Metadata:', metadata.info.PDFFormatVersion);
                        if (metadata.info.PDFFormatVersion > "1.7") {
                            alert('PDF Version not Supported!');
                        }
                    });
                }).catch((error) => {
                    console.error('Error getting PDF version:', error);
                });
            };

            // Read the file as an ArrayBuffer
            reader.readAsArrayBuffer(file);
        });
    });
</script>
