<link rel="stylesheet" href="<?= base_url("assets/css/") ?>select2-custom.min.css">
<main class="page-content">
    <div class="d-flex justify-content-between align-items-center flex-wrap grid-margin">
        <div>
            <h4 class="mb-3 mb-md-0">Commodities List</h4>
        </div>
    </div>

    <!-- row -->
    <div class="row">
        <div class="col-lg-6 col-12 grid-margin stretch-card">
            <div class="card">
                <div class="card-body">
                    <div class="d-flex justify-content-between align-items-baseline mb-2">
                        <h6 class="card-title">All Commodities</h6>
                    </div>
                    <div class="row mb-3">
                        <div class="w-100">
                            <input type="text" class="form-control form-control-sm" id="myCustomSearch" placeholder="Search Commodities" aria-label="Search Commodities">
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
                        <table class="table table-hover mb-0" id="CommoditysDataTable">
                            <thead>
                                <tr>
                                    <th class="pt-0">Name</th>
                                    <th class="pt-0">Valid through</th>
                                    <th class="pt-0">Status</th>
                                </tr>
                            </thead>
                            <tbody>
                                <?php foreach ($commodities as $key => $product) : ?>
                                    <tr>
                                        <td>
                                            <div class="row g-3">
                                                <div class="col-auto pt-1">
                                                    <button type="button" id="editCommodityButton<?= $key ?>" class="btn btn-sm btn-icon" data-bs-toggle="modal" data-bs-target="#editCommodityModal">
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
                                                        <button type="button" id="deleteCommodityButton<?= $key ?>" class="btn btn-sm btn-danger btn-icon" data-bs-toggle="modal" data-bs-target="#deleteConfirmModal">
                                                            <i data-feather="trash"></i>
                                                        </button>
                                                        <script>
                                                            $("#deleteFAQButton<?= $key ?>").on('click', () => {
                                                                $("#deleteConfirmModal input[name=id]").val(<?= $key ?>)
                                                                $("#deleteConfirmModal input[name=type]").val('faq')
                                                            })
                                                        </script>
                                                </div>
                                                <div class="col">
                                                    <?= $product['name'] ?>
                                                </div>
                                            </div>
                                        </td>
                                        <td><?= $product['created_at'] ?></td>
                                        <td><span class="badge bg-success">Active</span></td>
                                    </tr>
                                <?php endforeach ?>
                            </tbody>
                        </table>
                        <script>
                            $.extend($.fn.dataTable.ext.classes, {
                                sFilterInput: "form-control w-100"
                            });
                            dataTable = new DataTable('#CommoditysDataTable', {
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
        <div class="col-lg-6 col-12 grid-margin">
            <div class="card">
                <div class="card-body">
                    <div class="d-flex justify-content-between align-items-baseline mb-2">
                        <h6 class="card-title">Add A New Comodity</h6>
                    </div>
                    <?= form_open() ?>
                    <div class="row g-3">
                        <div class="col-12">
                            <label for="" class="form-label">Commodity Name</label>
                            <input type="text" class="form-control text-counter" maxlength="80">
                        </div>

                        <div class="col-lg-6 col-12">
                            <label for="" class="form-label">Valid Through</label>
                            <input type="date" class="form-control">
                        </div>
                        <div class="col-12">
                            <button type="submit" class="btn me-2 btn-primary btn-icon-text"><i class="link-arrow btn-icon-prepend" data-feather="save"></i>Save Commodity Details</button>
                            <button type="reset" class="btn btn-outline-secondary">Discard</button>
                        </div>
                    </div>
                    <?= form_close() ?>
                </div>
            </div>
        </div>
    </div>
</main>
<div class="modal fade" id="editCommodityModal" tabindex="-1" aria-labelledby="editCommodityLabel" aria-hidden="true">
    <div class="modal-dialog">
        <div class="modal-content">
            <?= form_open("") ?>
            <input type="hidden" name="id">
            <div class="modal-header">
                <h1 class="modal-title fs-5" id="editCommodityLabel">Edit Commodity</h1>
                <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
            </div>
            <input type="hidden" name="redirect" value="<?= current_url() ?>">
            <div class="modal-body">
                <div class="row g-3">
                    <div class="col-12">
                        <label for="" class="form-label">Commodity Name</label>
                        <input type="text" class="form-control text-counter" maxlength="80">
                    </div>
                    <div class="col-12">
                        <label for="" class="form-label">Valid Through</label>
                        <input type="date" class="form-control">
                    </div>
                </div>
            </div>
            <div class="modal-footer">
                <button type="reset" class="btn btn-secondary" data-bs-dismiss="modal">Close</button>
                <button type="submit" class="btn btn-primary">Save Commodity</button>
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