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
    <?= form_open_multipart('api/v2/episode/new', ['id' => ""]) ?>
    <div class="d-flex justify-content-between align-items-center flex-wrap grid-margin">
        <div class="d-flex gap-2">
            <div class="nav-item">
                <a href="<?= base_url("episodes") ?>" class="nav-link"><i class="link-arrow" data-feather="chevron-left"></i></a>
            </div>
            <div>
                <h4 class="mb-3 mb-md-0">New Episode</h4>
            </div>
        </div>
        <div class="">
            <button type="submit" class="btn me-2 btn-primary btn-icon-text"><i class="link-arrow btn-icon-prepend" data-feather="save"></i>Save Episode</button>
            <button type="reset" class="btn btn-outline-secondary">Discard</button>
        </div>
    </div>
    <div class="row">
        <div class="col-xl-9 col-lg-8 col-12 grid-margin">
            <div class="row">
                <div class="col-12 grid-margin stretch-card">
                    <div class="card">
                        <div class="card-body">
                            <div class="mb-3">
                                <label for="inputTitle" class="form-label">Post Title</label>
                                <input type="text" name="post_title" class="form-control" maxlength="100" id="inputTitle">
                            </div>
                            <div class="mb-3">
                                <label for="inputTitle" class="form-label">YouTube Video URL</label>
                                <input type="url" name="post_video" class="form-control" maxlength="100" id="inputYouTube">
                            </div>
                            <div class="mb-3">
                                <label for="fpoJourney" class="form-label">FPO Journey</label>
                                <textarea class="form-control full-editor" id="fpoJourney" rows="10" name="post_content"></textarea>
                            </div>
                            <div class="mb-3">
                                <label for="aboutFPOContent" class="form-label">About FPO</label>
                                <textarea class="form-control full-editor" id="aboutFPOContent" rows="10" name="post_content"></textarea>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-12 grid-margin stretch-card">
                    <div class="card">
                        <div class="card-body">
                            <div class="d-flex justify-content-between align-items-baseline mb-3">
                                <div class="">
                                    <h6 class="card-title mb-0">Post Exerpt</h6>
                                    <p>Add a summary of the post to appear on your home page or blog.</p>
                                </div>
                            </div>
                            <div class="mb-3">
                                <textarea class="form-control mini-editor" maxlength="300" id="inputExerpt" name="post_except"></textarea>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-12 grid-margin stretch-card">
                    <div class="card">
                        <div class="card-body">
                            <div class="d-flex justify-content-between align-items-baseline mb-3">
                                <div class="">
                                    <h6 class="card-title mb-0">Search engine listing preview</h6>
                                    <p>Add a title and description to see how this Blog post might appear in a search engine listing</p>
                                </div>
                            </div>
                            <div class="mb-3">
                                <label for="inputSEOPageTitle" class="form-label">Page Title</label>
                                <input type="text" class="form-control" id="inputSEOPageTitle" name="seo[title]" maxlength="100" />
                            </div>
                            <div class="mb-3">
                                <label for="inputSEOPageDesc" class="form-label">Description</label>
                                <textarea class="form-control mini-editor" maxlength="160" name="seo[description]" id="inputSEOPageDesc"></textarea>
                            </div>
                            <div class="mb-3">
                                <label for="inputSEOPageURL" class="form-label">Page URL</label>
                                <input type="text" class="form-control" id="inputSEOPageURL" name="seo[slug]" maxlength="150" />
                            </div>
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
                <div class="col-12 grid-margin stretch-card">
                    <div class="card">
                        <div class="card-body">
                            <div class="d-flex justify-content-between align-items-baseline mb-3">
                                <h6 class="card-title mb-0">Featured Image</h6>
                            </div>
                            <div class="mb-3">
                                <img id="videoThumb" src="https://dummyimage.com/600x400&text=Updating the YouTube URL updates this Image" class="w-100" alt="">
                                <script>
                                    $("#inputYouTube").on('change', () => {
                                        var urlVal = $("#inputYouTube");
                                        var videoID = "";
                                        if (urlVal.val() != "") {
                                            videoID = urlVal.val().split('https://')[1].split('/')[1].split('?')[0];
                                            if(videoID){
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
                        </div>
                    </div>
                </div>
                <div class="col-12 grid-margin stretch-card">
                    <div class="card">
                        <div class="card-body">
                            <div class="d-flex justify-content-between align-items-baseline mb-3">
                                <h6 class="card-title mb-0">Organization</h6>
                            </div>
                            <div class="mb-3">
                                <label for="inputBlogAuthor" class="form-label">Author</label>
                                <select name="post_author" class="form-select" id="inputBlogAuthor">
                                    <option value="">Select an Author</option>
                                    <?php foreach ($authors as $key => $author): ?>
                                        <?php if ($author['id'] == $active_user['id']) : ?>
                                            <option selected value="<?= $author['id'] ?>"><?= $author['name'] ?></option>
                                        <?php else: ?>
                                            <option value="<?= $author['id'] ?>"><?= $author['name'] ?></option>
                                        <?php endif ?>
                                    <?php endforeach ?>
                                </select>
                            </div>
                            <div class="mb-3">
                                <label for="blogCategorySelect" class="form-label">Blog Category</label>
                                <select name="post_category" class="form-select" id="blogCategorySelect">
                                    <option value="">Select a Category</option>
                                    <?php foreach ($categories as $key => $category): ?>
                                        <option value="<?= $category['id'] ?>"><?= $category['name'] ?></option>
                                    <?php endforeach ?>
                                </select>
                            </div>
                            <div class="mb-3">
                                <label for="inputBlogFPO" class="form-label">Select an FPO</label>
                                <select name="post_fpo" class="form-select" id="inputBlogFPO">
                                    <?php for ($i = 0; $i < 10; $i++) : ?>
                                        <option value="<?= $i ?>">Select <?= $i ?></option>
                                    <?php endfor ?>
                                </select>
                            </div>
                            <div class="mb-3">
                                <label for="inputBlogTags" class="form-label">Tags</label>
                                <select name="post_tags[]" class="form-select" id="inputBlogTags" multiple>
                                    <?php for ($i = 0; $i < 10; $i++) : ?>
                                        <option value="<?= $i ?>">Select <?= $i ?></option>
                                    <?php endfor ?>
                                </select>
                                <script>
                                    $('#inputBlogTags').select2({
                                        tags: true, // Enables the tagging feature
                                        tokenSeparators: [','] // Defines separators for new tags (comma and space)
                                    });
                                </script>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-12 grid-margin stretch-card d-none">
                    <div class="card">
                        <div class="card-body">
                            <div class="d-flex justify-content-between align-items-baseline mb-3">
                                <h6 class="card-title mb-0">Languages & Localization</h6>
                            </div>
                            <div class="mb-3">
                                <label for="inputPostLanguage" class="form-label">Post Language</label>
                                <select name="lang" id="inputPostLanguage" class="form-control">
                                    <option value="en-IN" data-origin="en">English</option>
                                    <option value="hi-IN" data-origin="hi">Hindi</option>
                                    <option value="mr-IN" data-origin="mr">Marathi</option>
                                    <option value="gu-IN" data-origin="gj">Gujarati</option>
                                    <!-- <option value="wyj496iThHwgfU6w" data-origin="Sociomark">Sociomark - Digital Marketing Agency</option> -->
                                </select>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <div class="col-12">
            <button type="submit" class="btn me-2 btn-primary btn-icon-text"><i class="link-arrow btn-icon-prepend" data-feather="save"></i>Save Blog Post</button>
            <button type="reset" class="btn btn-outline-secondary">Discard</button>
        </div>
    </div>
    <?= form_close() ?>
</main>
<script src="https://cdnjs.cloudflare.com/ajax/libs/speakingurl/14.0.1/speakingurl.min.js"></script>
<script src="https://cdn.jsdelivr.net/npm/jquery-slugify@1.2.5/dist/slugify.min.js"></script>
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
        $('#fpoJourney').summernote({
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
        $('#aboutFPOContent').summernote({
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
        var drEvent = $('.dropify').dropify({
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

        /* Slugify: Change text to URL */
        var $titleInput = $("#inputTitle");
        var $titleSEOInput = $("#inputSEOPageTitle");
        $titleInput.on("input", () => {
            $("#inputSEOPageURL").slugify($titleInput)
        })
        $titleSEOInput.on("input", () => {
            $("#inputSEOPageURL").slugify($titleSEOInput)
        })
    });
</script>