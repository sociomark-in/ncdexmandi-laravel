<link rel="stylesheet" href="https://code.jquery.com/ui/1.13.3/themes/base/jquery-ui.css">
<script src="https://code.jquery.com/ui/1.13.3/jquery-ui.js"></script>

<script src="https://cdn.jsdelivr.net/npm/inputmask@5.0.8/dist/jquery.inputmask.min.js"></script>

<script src="https://cdn.jsdelivr.net/npm/dropify@0.2.2/dist/js/dropify.min.js"></script>
<link href="https://cdn.jsdelivr.net/npm/dropify@0.2.2/dist/css/dropify.min.css" rel="stylesheet">

<!-- include summernote css/js -->
<link href="https://cdn.jsdelivr.net/npm/summernote@0.9.0/dist/summernote-lite.min.css" rel="stylesheet">
<script src="https://cdn.jsdelivr.net/npm/summernote@0.9.0/dist/summernote-lite.min.js"></script>

<link rel="stylesheet" href="<?= base_url("assets/css/") ?>dropify-custom.min.css">
<link rel="stylesheet" href="<?= base_url("assets/css/") ?>select2-custom.min.css">
<main class="page-content">
    <?= form_open_multipart('api/v2/blog/new', ['id' => ""]) ?>
    <div class="d-flex justify-content-between align-items-center flex-wrap grid-margin">
        <div class="d-flex gap-2">
            <div class="nav-item">
                <a href="<?= base_url("reports") ?>" class="nav-link"><i class="link-arrow" data-feather="chevron-left"></i></a>
            </div>
            <div>
                <h4 class="mb-3 mb-md-0">New Report</h4>
            </div>
        </div>
        <div class="">
            <button type="submit" class="btn me-2 btn-primary btn-icon-text"><i class="link-arrow btn-icon-prepend" data-feather="save"></i>Save Post</button>
            <button type="reset" class="btn btn-outline-secondary">Discard</button>
        </div>
    </div>
    <div class="row">
        <div class="col-12">
            <div class="row">
                <div class="col-lg col-12 grid-margin stretch-card">
                    <div class="card">
                        <div class="card-body">
                            <div class="row g-3 g-md-4">
                                <div class="col-12">
                                    <label for="" class="form-label">Name for the Document</label>
                                    <input type="text" class="form-control">
                                </div>
                                <div class="col-lg-6 col-12">
                                    <label for="" class="form-label">Upload Article Document</label>
                                    <input type="file" accept="application/pdf" name="doc1" class="dropify" data-default-file="" data-max-file-size-preview="2M" data-max-file-size="2M" data-allowed-file-extensions="pdf" />
                                    <span class="form-text">(PDF of Maximum Size 2MB)</span>
                                </div>
                                <div class="col-lg-6 col-12">
                                    <label for="" class="form-label">Upload Document Thumbnail</label>
                                    <input type="file" accept="image/jpg" name="doc1_thumb" class="dropify" data-default-file="" data-max-file-size-preview="2M" data-max-file-size="2M" data-allowed-file-extensions="jpg" />
                                    <span class="form-text">(JPG of Maximum Size 2MB)</span>
                                </div>
                                <div class="col-lg-6 col-12">
                                    <label for="categorySelect" class="form-label">Post Category</label>
                                    <select name="post_category" class="form-select" id="categorySelect">
                                        <?php for ($i = 0; $i < 10; $i++) : ?>
                                            <option value="<?= $i ?>">Select <?= $i ?></option>
                                        <?php endfor ?>
                                    </select>
                                </div>
                                <div class="col-lg-6 col-12">
                                    <label for="tagSelect" class="form-label">Tags</label>
                                    <select name="post_tags" class="form-select" id="tagSelect" multiple>
                                        <?php for ($i = 0; $i < 10; $i++) : ?>
                                            <option value="<?= $i ?>">Select <?= $i ?></option>
                                        <?php endfor ?>
                                    </select>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-xl-3 col-lg-4 col-12 grid-margin">
                    <div class="row">
                        <div class="col-12 grid-margin stretch-card">
                            <div class="card">
                                <div class="card-body">
                                    <div class="d-flex justify-content-between align-items-baseline mb-3">
                                        <h6 class="card-title mb-0">Visibility</h6>
                                    </div>
                                    <div class="mb-3">
                                        <div class="form-check">
                                            <input class="form-check-input" type="radio" name="status" value="2" id="flexCheckDefault">
                                            <label class="form-check-label" for="flexCheckDefault">
                                                Draft
                                            </label>
                                        </div>
                                    </div>
                                    <div class="mb-3">
                                        <div class="form-check">
                                            <input class="form-check-input" type="radio" name="status" value="1" id="flexCheckChecked" checked>
                                            <label class="form-check-label" for="flexCheckChecked">
                                                Published
                                            </label>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <div class="col-12">
            <button type="submit" class="btn me-2 btn-primary btn-icon-text"><i class="link-arrow btn-icon-prepend" data-feather="save"></i>Save Post</button>
            <button type="reset" class="btn btn-outline-secondary">Discard</button>
        </div>
    </div>
    <?= form_close() ?>
</main>
<script>
    $(document).ready(function() {
        hasUnsavedChanges = true;
        // --- Core `beforeunload` Event Listener ---
        window.addEventListener('beforeunload', (event) => {
            if (hasUnsavedChanges) {
                // Prevent the default navigation and trigger the browser's warning.
                event.preventDefault();
                // For older browsers, it might be necessary to set returnValue
                event.returnValue = '';
                console.log("`beforeunload` triggered: Prompting user about unsaved changes.");
            } else {
                console.log("`beforeunload` triggered: No unsaved changes, allowing navigation.");
            }
        });
        $('#inputPostContent').summernote({
            placeholder: 'Start typing your post',
            height: 300,
            toolbar: [
                ['style', ['style']],
                ['font', ['bold', 'underline', 'clear']],
                ['para', ['ul', 'ol', 'paragraph']],
                ['table', ['table']],
                ['insert', ['link', 'picture', 'video']],
                ['view', ['fullscreen', 'codeview', 'help']]
            ]
        });
        $('.dropify').dropify({
            error: {
                'fileSize': 'The file size is too big ({{ value }} max).',
                'imageFormat': 'The file format is not allowed ({{ value }} only).'
            }
        });

        $("#inputPostLanguage").select2({
            templateSelection: (state) => {
                if (!state.id) {
                    return state.text;
                }

                var baseUrl = "/user/pages/images/flags";
                var $state = $(
                    '<span><i class="flag-icon" title="us" id="us"></i><span class="ms-1 d-none d-md-inline"></span></span>'

                );

                // Use .text() instead of HTML string concatenation to avoid script injection issues
                $state.find("span").text(state.text);
                switch (state.element.getAttribute('data-origin').toLowerCase()) {
                    case 'hi':
                        $state.find("i").addClass("flag-icon-in");
                        $state.find("i").attr("title", "in");
                        $state.find("i").attr("id", "hi-in");
                        break;
                    case 'mr':
                        $state.find("i").addClass("flag-icon-in");
                        $state.find("i").attr("title", "in");
                        $state.find("i").attr("id", "mr-in");
                        break;
                    case 'gj':
                        $state.find("i").addClass("flag-icon-in");
                        $state.find("i").attr("title", "in");
                        $state.find("i").attr("id", "gj-in");
                        break;
                    default:
                        $state.find("i").addClass("flag-icon-us");
                        $state.find("i").attr("title", "us");
                        $state.find("i").attr("id", "us");
                        break;
                }
                return $state;
            }
        });

        /* URLize: Change text to URL */
        var $titleInput = $("#inputTitle");
        var $titleSEOInput = $("#inputSEOPageTitle");
        $titleInput.on("input", () => {
            $("#inputSEOPageURL").val(slugify($titleInput.val()))
        })
        $titleSEOInput.on("input", () => {
            $("#inputSEOPageURL").val(slugify($titleSEOInput.val()))
        })

    });
</script>