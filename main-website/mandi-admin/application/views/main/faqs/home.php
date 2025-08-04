<main class="page-content">
    <div class="d-flex justify-content-between align-items-center flex-wrap grid-margin">
        <div>
            <h4 class="mb-3 mb-md-0">All FAQs</h4>
        </div>
        <div class="">
            <a href="<?= base_url('faqs/new-question') ?>" target="_blank" class="btn btn-icon-text btn-primary">
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
                                            <h4 class="mb-1">Add A New Category</h4>
                                            <!-- <p class="tx-18">You have <a href=""><u>4 categories</u></a> left,</p> -->
                                        </div>
                                        <button class="btn btn-primary btn-icon-text" data-bs-toggle="modal" data-bs-target="#newFAQCat"><i data-feather="plus" class="icon-sm mb-1 btn-icon-prepend"></i>Create</button>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <?php if (count($categories)): ?>
                    <?php foreach ($categories as $key => $category) : ?>
                        <div class="col-xl-3 col-lg-4 col-md-6 grid-margin stretch-card">
                            <div class="card">
                                <div class="card-body">
                                    <div class="d-flex justify-content-between align-items-baseline">
                                        <h6 class="card-title mb-0"><?= $category['name'] ?></h6>
                                        <div class="dropdown mb-2">
                                            <a type="button" id="dropdownMenuButton1" data-bs-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                                                <i class="icon-lg text-secondary pb-3px" data-feather="more-horizontal"></i>
                                            </a>
                                            <div class="dropdown-menu" aria-labelledby="dropdownMenuButton1">
                                                <!-- <a class="dropdown-item d-flex align-items-center" href="<?= base_url("faqs?post_category=" . $category['id']) ?>"><i data-feather="eye" class="icon-sm me-2"></i> <span class="">View</span></a> -->
                                                <a class="dropdown-item d-flex align-items-center" id="editCatButton<?= $key ?>" href="javascript:;" data-bs-toggle="modal" data-bs-target="#editFAQCat"><i data-feather="edit-2" class="icon-sm me-2"></i> <span class="">Edit</span></a>
                                                <a class="dropdown-item d-flex align-items-center" id="deleteCatButton<?= $key ?>" data-category="<?= $category['id'] ?>" href="javascript:;" data-bs-toggle="modal" data-bs-target="#deleteConfirmModal"><i data-feather="trash" class="icon-sm me-2"></i> <span class="">Delete</span></a>
                                            </div>
                                            <script>
                                                $("#deleteCatButton<?= $key ?>").on('click', () => {
                                                    $("#deleteConfirmModal input[name=id]").val(<?= $category['id'] ?>)
                                                    $("#deleteConfirmModal input[name=type]").val('category')
                                                })
                                                $("#editCatButton<?= $key ?>").on('click', () => {
                                                    $.ajax({
                                                        url:"<?= base_url('api/v2/faq/api_get') ?>",
                                                        method: "POST",
                                                        data: {
                                                            id: <?= $category['id'] ?>,
                                                            type: "category",
                                                        },
                                                        success: (data)=>{
                                                            console.log(data);
                                                            $("#editFAQCat input[name=id]").val(data.id)
                                                            $("#editFAQCat input[name=name]").val(data.name)
                                                            $("#editFAQCat textarea[name=description]").text(data.description)
                                                        }
                                                    })
                                                })
                                            </script>
                                        </div>
                                    </div>
                                    <div class="row">
                                        <div class="col-12">
                                            <h3 class="mb-2"><?= $category['count'] ?></h3>
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
                    <?php endforeach ?>
                <?php endif ?>
            </div>
        </div>
    </div>
    <div class="row">
        <div class="col-12">
            <?php foreach ($categories as $key => $category) : ?>
                <div class="row">
                    <div class="col-12 grid-margin">
                        <div class="card">
                            <div class="card-body">
                                <h6 class="card-title"><?= $category['name'] ?> (<?= $category['count'] ?>)</h6>
                                <div class="accordion" id="faqAccordionExample">
                                    <?php foreach ($category['posts'] as $key => $post) : ?>
                                        <div class="accordion-item overflow-hidden">
                                            <h2 class="accordion-header" id="heading<?= $key . $post['id'] ?>">
                                                <div class="row g-3">
                                                    <div class="col-auto pt-1">
                                                        <a href="<?= base_url("faqs/{$post['id']}/edit") ?>" class="btn btn-sm btn-icon">
                                                            <i data-feather="edit"></i>
                                                        </a>
                                                        <!-- <?php if ($post['status']) : ?>
                                                            <button type="button" class="btn btn-sm btn-icon">
                                                                <i data-feather="eye"></i>
                                                            </button>
                                                        <?php else : ?>
                                                            <button type="button" class="btn btn-sm btn-icon" title="This FAQ is Disabled. Click to Enable">
                                                                <i data-feather="eye-off"></i>
                                                            </button>
                                                        <?php endif ?> -->
                                                        <button type="button" id="deleteFAQButton<?= $key ?>" class="btn btn-sm btn-danger btn-icon" data-bs-toggle="modal" data-bs-target="#deleteConfirmModal">
                                                            <i data-feather="trash"></i>
                                                        </button>
                                                        <script>
                                                            $("#deleteFAQButton<?= $key ?>").on('click', () => {
                                                                $("#deleteConfirmModal input[name=id]").val(<?= $post['id'] ?>)
                                                                $("#deleteConfirmModal input[name=type]").val('faq')
                                                            })
                                                        </script>
                                                    </div>
                                                    <div class="col">
                                                        <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#collapse<?= $key . $post['id'] ?>" aria-expanded="false" aria-controls="collapse<?= $key . $post['id'] ?>">
                                                            <?php if ($post['status']) : ?>
                                                                <?= $post['id'] ?>. &nbsp;<?= $post['post_title'] ?>
                                                            <?php else : ?>
                                                                <strike><?= $post['id'] ?>. &nbsp;<?= $post['post_title'] ?></strike>
                                                            <?php endif ?>
                                                        </button>
                                                    </div>
                                                </div>
                                            </h2>
                                            <div id="collapse<?= $key . $post['id'] ?>" class="accordion-collapse collapse" aria-labelledby="heading<?= $key . $post['id'] ?>" data-bs-parent="#faqAccordionExample">
                                                <div class="accordion-body">
                                                    <div class="row flex-row-reverse">
                                                        <div class="col-xl-4 col-lg-5 col-md-6 col-12"></div>
                                                        <div class="col-xl-8 col-lg-7 col-md-6 col-12">
                                                            <div class="card text-black bg-light">
                                                                <div class="card-body">
                                                                    <?= $post['post_content'] ?>
                                                                </div>
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    <?php endforeach ?>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            <?php endforeach ?>
        </div>
    </div>
</main>
<div class="modal fade" id="editFAQCat" tabindex="-1" aria-labelledby="editFAQCatLabel" aria-hidden="true">
    <div class="modal-dialog">
        <div class="modal-content">
            <?= form_open("api/v2/faq/edit_category") ?>
            <input type="hidden" name="id">
            <div class="modal-header">
                <h1 class="modal-title fs-5" id="editFAQCatLabel">Edit FAQ Category</h1>
                <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
            </div>
            <input type="hidden" name="redirect" value="<?= current_url() ?>">
            <div class="modal-body">
                <div class="row g-3">
                    <div class="col-12">
                        <label for="" class="form-label">Name the Category</label>
                        <input type="text" name="name" class="form-control text-counter" maxlength="100" required>
                    </div>
                    <div class="col-12">
                        <label for="" class="form-label">Category Description</label>
                        <textarea name="description" class="form-control text-counter" maxlength="300" rows="5"></textarea>
                    </div>
                </div>
            </div>
            <div class="modal-footer">
                <button type="reset" class="btn btn-secondary" data-bs-dismiss="modal">Close</button>
                <button type="submit" class="btn btn-primary">Save Category</button>
            </div>
            <?= form_close() ?>
        </div>
    </div>
</div>
<div class="modal fade" id="newFAQCat" tabindex="-1" aria-labelledby="newFAQCatLabel" aria-hidden="true">
    <div class="modal-dialog">
        <div class="modal-content">
            <?= form_open("api/v2/faq/new_category") ?>
            <div class="modal-header">
                <h1 class="modal-title fs-5" id="newFAQCatLabel">Create FAQ Category</h1>
                <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
            </div>
            <input type="hidden" name="redirect" value="<?= current_url() ?>">
            <div class="modal-body">
                <div class="row g-3">
                    <div class="col-12">
                        <label for="" class="form-label">Name the Category</label>
                        <input type="text" name="name" class="form-control text-counter" maxlength="100" required>
                    </div>
                    <div class="col-12">
                        <label for="" class="form-label">Category Description</label>
                        <textarea name="description" class="form-control text-counter" maxlength="300" rows="5"></textarea>
                    </div>
                </div>
            </div>
            <div class="modal-footer">
                <button type="reset" class="btn btn-secondary" data-bs-dismiss="modal">Close</button>
                <button type="submit" class="btn btn-primary">Save Category</button>
            </div>
            <?= form_close() ?>
        </div>
    </div>
</div>
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
                <input type="hidden" name="id">
                <input type="hidden" name="type">
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