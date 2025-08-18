<link rel="stylesheet" href="<?= base_url("assets/css/") ?>select2-custom.min.css">
<main class="page-content">
    <div class="d-flex justify-content-between align-items-center flex-wrap grid-margin">
        <div>
            <h4 class="mb-3 mb-md-0">FPOs List</h4>
        </div>
    </div>

    <!-- row -->
    <div class="row">
        <div class="col-xl-8 col-lg-6 col-12 grid-margin stretch-card">
            <div class="card">
                <div class="card-body">
                    <div class="d-flex justify-content-between align-items-baseline mb-2">
                        <h6 class="card-title">All FPOs</h6>
                    </div>
                    <div class="row mb-3">
                        <div class="w-100">
                            <input type="text" class="form-control form-control-sm" id="myCustomSearch" placeholder="Search FPOs" aria-label="Search FPOs">
                            <script>
                                $(document).ready(function() {
                                    $('#myCustomSearch').on('keyup', function() {
                                        dataTable.search(this.value).draw();
                                    });
                                });
                            </script>
                        </div>
                    </div>
                    <div class="table-responsive">
                        <table class="table table-hover mb-0" id="FPOsDataTable">
                            <thead>
                                <tr>
                                    <th class="pt-0">Name of FPO</th>
                                    <th class="pt-0">Establishment</th>
                                    <th class="pt-0">State</th>
                                    <th class="pt-0">Status</th>
                                </tr>
                            </thead>
                            <tbody>
                                <?php for ($i = 0; $i < 20; $i++) : ?>
                                    <tr>
                                        <td>
                                            <div class="row g-3">
                                                <div class="col-auto pt-1">
                                                    <button type="button" id="editFPOButton<?= $i ?>" class="btn btn-sm btn-icon" data-bs-toggle="modal" data-bs-target="#editFPOModal">
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
                                                        <button type="button" id="deleteFPOButton<?= $i ?>" class="btn btn-sm btn-danger btn-icon" data-bs-toggle="modal" data-bs-target="#deleteConfirmModal">
                                                            <i data-feather="trash"></i>
                                                        </button>
                                                        <script>
                                                            $("#deleteFAQButton<?= $i ?>").on('click', () => {
                                                                $("#deleteConfirmModal input[name=id]").val(<?= $i ?>)
                                                                $("#deleteConfirmModal input[name=type]").val('faq')
                                                            })
                                                        </script>
                                                </div>
                                                <div class="col">
                                                    <a target="_blank" href=""><span class="clipped-content line-1 d-block" style="width: 400px;">Lorem ipsum dolor sit amet consectetur adipisicing elit. Non et odio atque magnam perspiciatis ducimus.</span></a>
                                                </div>
                                            </div>
                                        </td>
                                        <td><?= date('F j, Y') ?></td>
                                        <td>Maharashtra</td>
                                        <td><span class="badge bg-success">Active</span></td>
                                    </tr>
                                <?php endfor ?>
                            </tbody>
                        </table>
                        <script>
                            $.extend($.fn.dataTable.ext.classes, {
                                sFilterInput: "form-control w-100"
                            });
                            dataTable = new DataTable('#FPOsDataTable', {
                                paging: false,
                                dom: 'rtip'
                            });
                            $('#myCustomSearch').on('keyup', function() {
                                // Use the .search() API to set the search term
                                dataTable.search(this.value).draw();
                            });
                        </script>
                    </div>
                </div>
            </div>
        </div>
        <div class="col-xl-4 col-lg-6 col-12 grid-margin">
            <div class="card">
                <div class="card-body">
                    <div class="d-flex justify-content-between align-items-baseline mb-2">
                        <h6 class="card-title">Add A New FPO</h6>
                    </div>
                    <?= form_open() ?>
                    <div class="row g-3">
                        <div class="col-12">
                            <label for="" class="form-label">Name of the FPO</label>
                            <input type="text" class="form-control text-counter" maxlength="80">
                        </div>
                        <div class="col-lg-6 col-12">
                            <label for="" class="form-label">State</label>
                            <select class="form-select" name="" data-placeholder="Select A State" id="" style="width: 100%;">
                                <option value="">Select A State</option>
                            </select>
                        </div>
                        <!-- <div class="col-lg-6 col-12">
                            <label for="" class="form-label">City</label>
                            <select class="form-select" name="" id="">
                                <option value="">Select A City</option>
                            </select>
                        </div> -->
                        <div class="col-lg-6 col-12">
                            <label for="" class="form-label">Date of Establishment</label>
                            <input type="date" class="form-control">
                        </div>
                        <div class="col-12">
                            <label for="" class="form-label">FPO Details</label>
                            <table class="table table-bordered">
                                <tr>
                                    <td>No. of Locations</td>
                                    <td>
                                        <input type="number" min="0" max="999" class="form-control">
                                    </td>
                                </tr>
                                <tr>
                                    <td>No. of Members</td>
                                    <td>
                                        <input type="number" min="0" max="999" class="form-control">
                                    </td>
                                </tr>
                                <tr>
                                    <td>Commodities</td>
                                    <td>
                                        <select name="commodities[]" class="form-select" data-placeholder="Select Comodity" id="inputBlogTags" multiple>
                                            <?php for ($i = 0; $i < 10; $i++) : ?>
                                                <option value="<?= $i ?>">Select <?= $i ?></option>
                                            <?php endfor ?>
                                        </select>
                                        <!-- <input type="number" min="0" max="999" class="form-control"> -->
                                    </td>
                                </tr>
                                <tr>
                                    <td>Turnover</td>
                                    <td>
                                        <div class="input-group mb-3">
                                            <input type="number" min="0" max="9999" class="form-control" placeholder="Revenue Turnover" aria-label="Revenue Turnover" aria-describedby="basic-addon2">
                                            <span class="input-group-text" id="basic-addon2">in &#8377; Lakhs</span>
                                        </div>

                                    </td>
                                </tr>
                            </table>
                        </div>
                        <div class="col-12">
                            <button type="submit" class="btn me-2 btn-primary btn-icon-text"><i class="link-arrow btn-icon-prepend" data-feather="save"></i>Save FPO Details</button>
                            <button type="reset" class="btn btn-outline-secondary">Discard</button>
                        </div>
                    </div>
                    <?= form_close() ?>
                </div>
            </div>
        </div>
    </div>
</main>
<div class="modal fade" id="editFPOModal" tabindex="-1" aria-labelledby="editFPOLabel" aria-hidden="true">
    <div class="modal-dialog modal-lg">
        <div class="modal-content">
            <?= form_open("") ?>
            <input type="hidden" name="id">
            <div class="modal-header">
                <h1 class="modal-title fs-5" id="editFPOLabel">Edit FAQ Category</h1>
                <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
            </div>
            <input type="hidden" name="redirect" value="<?= current_url() ?>">
            <div class="modal-body">
                <div class="row g-3">
                    <div class="col-12">
                        <label for="" class="form-label">Name of the FPO</label>
                        <input type="text" class="form-control text-counter" maxlength="80">
                    </div>
                    <div class="col-lg-6 col-12">
                        <label for="" class="form-label">State</label>
                        <select class="form-select" name="" data-placeholder="Select A State" id="" style="width: 100%;">
                            <option value="">Select A State</option>
                        </select>
                    </div>
                    <!-- <div class="col-lg-6 col-12">
                            <label for="" class="form-label">City</label>
                            <select class="form-select" name="" id="">
                                <option value="">Select A City</option>
                            </select>
                        </div> -->
                    <div class="col-lg-6 col-12">
                        <label for="" class="form-label">Date of Establishment</label>
                        <input type="date" class="form-control">
                    </div>
                    <div class="col-12">
                        <label for="" class="form-label">FPO Details</label>
                        <table class="table table-bordered">
                            <tr>
                                <td>Turnover</td>
                                <td>
                                    <div class="input-group mb-3">
                                        <input type="number" min="0" max="9999" class="form-control" placeholder="Revenue Turnover" aria-label="Revenue Turnover" aria-describedby="basic-addon2">
                                        <span class="input-group-text" id="basic-addon2">in &#8377; Lakhs</span>
                                    </div>

                                </td>
                            </tr>
                            <tr>
                                <td>Commodities</td>
                                <td>
                                    <select name="commodities[]" class="form-select" data-placeholder="Select Comodity" id="" multiple>
                                        <?php for ($i = 0; $i < 10; $i++) : ?>
                                            <option value="<?= $i ?>">Select <?= $i ?></option>
                                        <?php endfor ?>
                                    </select>
                                    <!-- <input type="number" min="0" max="999" class="form-control"> -->
                                </td>
                            </tr>
                            <tr>
                                <td>No. of Members</td>
                                <td>
                                    <input type="number" min="0" max="999" class="form-control">
                                </td>
                            </tr>
                            <tr>
                                <td>No. of Locations</td>
                                <td>
                                    <input type="number" min="0" max="999" class="form-control">
                                </td>
                            </tr>
                        </table>
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