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
    <div class="d-flex justify-content-between align-items-center flex-wrap grid-margin">
        <div>
            <h4 class="mb-3 mb-md-0">My Profile</h4>
        </div>
    </div>
    <div class="row">
        <div class="col-12">
            <div class="row">
                <div class="col-xl-6 col-12 grid-margin">
                    <div class="row">
                        <div class="col-12 grid-margin">
                            <div class="card">
                                <div class="card-body">
                                    <div class="row g-3 align-items-center">
                                        <div class="col-auto">
                                            <img src="https://ui-avatars.com/api/?name=<?= $active_user['name'] ?>&font-size=0.3347" class="rounded-circle" alt="">
                                        </div>
                                        <div class="col">
                                            <div class="">
                                                <h3><?= $active_user['name'] ?></h3>
                                                <p class="text-muted">(<?= $active_user['username'] ?>)</p>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="col-12 grid-margin">
                            <div class="card">
                                <div class="card-body">
                                    <div class="row g-3 align-items-center">
                                        <div class="col-12">
                                            <?php print_r($active_user) ?>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-xl-6 col-12 grid-margin stretch-card">
                    <div class="row">
                        <div class="col-12 grid-margin stretch-card">
                            <?= form_open_multipart('api/v2/blog/new', ['id' => ""]) ?>
                            <div class="card">
                                <div class="card-body">
                                    <h5 class="card-title">Update Profile Information</h5>
                                    <div class="row g-3 g-md-4">
                                        <div class="col-12 disabled">
                                            <label for="" class="form-label">Username</label>
                                            <input type="text" class="form-control mb-1" value="<?= $active_user['username'] ?>" disabled>
                                            <span class="form-text">The username cannot be changed once set.</span>
                                        </div>
                                        <div class="col-12">
                                            <label for="" class="form-label">First Name (required)</label>
                                            <input type="text" class="form-control">
                                        </div>
                                        <div class="col-12">
                                            <label for="" class="form-label">Last Name</label>
                                            <input type="text" class="form-control mb-1">
                                            <span class="form-text">You can include middle name with your last name.</span>
                                        </div>
                                        <div class="col-12">
                                            <button type="submit" class="btn me-2 btn-primary btn-icon-text"><i class="link-arrow btn-icon-prepend" data-feather="save"></i>Update Information</button>
                                            <button type="reset" class="btn btn-outline-secondary">Discard</button>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <?= form_close() ?>
                        </div>
                        <div class="col-lg-6 col-12 grid-margin">
                            <?= form_open_multipart('api/v2/blog/new', ['id' => ""]) ?>
                            <div class="card">
                                <div class="card-body">
                                    <h5 class="card-title">Update Email</h5>
                                    <div class="row g-3 g-md-4">
                                        <div class="col-12">
                                            <input type="text" class="form-control mb-1" required placeholder="Currently Active: <?= $active_user['email'] ?>">
                                            <span class="form-text">If you change this, an email will be sent at your new address to confirm it. <strong>The new address will not become active until confirmed.</strong></span>
                                        </div>
                                        <div class="col-12">
                                            <button type="submit" class="btn me-2 btn-primary btn-icon-text"><i class="link-arrow btn-icon-prepend" data-feather="save"></i>Update Information</button>
                                            <button type="reset" class="btn btn-outline-secondary">Discard</button>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <?= form_close() ?>
                        </div>
                        <div class="col-lg-6 col-12 grid-margin">
                            <?= form_open_multipart('api/v2/blog/new', ['id' => ""]) ?>
                            <div class="card">
                                <div class="card-body">
                                    <h5 class="card-title">Update Password</h5>
                                    <div class="row g-3 g-md-4">
                                        <div class="col-12 disabled">
                                            <label for="" class="form-label">New Password</label>
                                            <input type="text" class="form-control" required>
                                        </div>
                                        <div class="col-12 disabled">
                                            <label for="" class="form-label">Confirm New Password</label>
                                            <input type="text" class="form-control" required>
                                        </div>
                                        <div class="col-12">
                                            <button type="submit" class="btn me-2 btn-primary btn-icon-text"><i class="link-arrow btn-icon-prepend" data-feather="save"></i>Update Password</button>
                                            <button type="reset" class="btn btn-outline-secondary">Discard</button>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <?= form_close() ?>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</main>

<!-- <script src="https://cdn.jsdelivr.net/npm/generate-password@1.7.1/src/generate.min.js"></script> -->

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

        var generator = require('generate-password-browser');

        var password = generator.generate({
            length: 10,
            numbers: true
        });

        // 'uEyMTw32v9'
        console.log(password);

        $("input[type=password]").each((index, element) => {
            $(element).val(password);
        })

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
                'minWidth': 'The image width is too small ({{ value }}}px min).',
                'maxWidth': 'The image width is too big ({{ value }}}px max).',
                'minHeight': 'The image height is too small ({{ value }}}px min).',
                'maxHeight': 'The image height is too big ({{ value }}px max).',
                'imageFormat': 'The image format is not allowed ({{ value }} only).'
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