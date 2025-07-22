<link rel="stylesheet" href="<?= base_url("assets/css/") ?>select2-custom.min.css">
<main class="page-content">
    <div class="d-flex justify-content-between align-items-center flex-wrap grid-margin">
        <div>
            <h4 class="mb-3 mb-md-0">FPOs List</h4>
        </div>
    </div>

    <!-- row -->
    <div class="row">
        <div class="col-xl-6 col-12 grid-margin stretch-card">
            <div class="card">
                <div class="card-body">
                    <div class="d-flex justify-content-between align-items-baseline mb-2">
                        <h6 class="card-title">FPOs of the Months</h6>
                    </div>
                    <div class="table-responsive">
                        <table class="table table-hover mb-0" id="leadsDataTable">
                            <thead>
                                <tr>
                                    <th class="pt-0">#</th>
                                    <th class="pt-0">Name of FPO</th>
                                    <th class="pt-0">Declaration at</th>
                                    <th class="pt-0">Status</th>
                                </tr>
                            </thead>
                            <tbody>
                                <?php for ($i = 0; $i < 20; $i++) : ?>
                                    <tr>
                                        <td><?= $i + 1 ?></td>
                                        <td><a href="">Lorem ipsum dolor sit amet consectetur adipisicing elit.</a></td>
                                        <td><?= date('F, Y') ?></td>
                                        <td><span class="badge bg-success">Released</span></td>
                                    </tr>
                                <?php endfor ?>
                            </tbody>
                        </table>
                        <script>
                            new DataTable('#leadsDataTable');
                        </script>
                    </div>
                </div>
            </div>
        </div>
        <div class="col-xl-6 col-12 grid-margin stretch-card">
            <div class="card">
                <div class="card-body">
                    <div class="d-flex justify-content-between align-items-baseline mb-2">
                        <h6 class="card-title">Add A New FPO</h6>
                    </div>
                    <?= form_open() ?>
                    <div class="row g-3">
                        <div class="col-12">
                            <label for="" class="form-label">Name of the FPO</label>
                            <input type="text" class="form-control">
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
                                        <select name="commodities[]" class="form-select" data-placeholder="Select Comodity" id="inputBlogTags" multiple>
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
                        <div class="col-12">
                            <button type="submit" class="btn me-2 btn-primary btn-icon-text"><i class="link-arrow btn-icon-prepend" data-feather="save"></i>Save FPO Details</button>
                            <button type="reset" class="btn btn-outline-secondary">Discard</button>
                        </div>
                    </div>
                    <?= form_close() ?>
                </div>
            </div>
        </div>
        <div class="col-12 grid-margin stretch-card">
            <div class="card">
                <div class="card-body">
                    <div class="d-flex justify-content-between align-items-baseline mb-2">
                        <h6 class="card-title">All FPOs</h6>
                    </div>
                    <div class="table-responsive">
                        <table class="table table-hover mb-0" id="FPOsDataTable">
                            <thead>
                                <tr>
                                    <th class="pt-0">Name of FPO</th>
                                    <th class="pt-0">Date Created</th>
                                    <th class="pt-0">Head Location</th>
                                    <th class="pt-0">No. Of Episodes</th>
                                    <th class="pt-0">Status</th>
                                </tr>
                            </thead>
                            <tbody>
                                <?php for ($i = 0; $i < 20; $i++) : ?>
                                    <tr>
                                        <td>
                                            <a href="">
                                                Lorem ipsum dolor sit amet consectetur adipisicing elit.
                                            </a>
                                        </td>
                                        <td><?= date('F j, Y') ?></td>
                                        <td>Mumbai, Maharashtra</td>
                                        <td><?= rand($i, 10) ?></td>
                                        <td><span class="badge bg-success">Released</span></td>
                                    </tr>
                                <?php endfor ?>
                            </tbody>
                        </table>
                        <script>
                            new DataTable('#FPOsDataTable');
                        </script>
                    </div>
                </div>
            </div>
        </div>
    </div>
</main>