<main class="page-content">
    <div class="d-flex justify-content-between align-items-center flex-wrap grid-margin">
        <div>
            <h4 class="mb-3 mb-md-0">All Settings</h4>
        </div>
    </div>

    <!-- row -->
    <?= form_open("api/v2/settings/update") ?>
    <div class="row">
        <div class="col-xl-8 col-12 grid-margin">
            <div class="row">
                <div class="col-12 grid-margin stretch-card">
                    <div class="card">
                        <div class="card-body">
                            <div class="d-flex justify-content-between align-items-baseline mb-3">
                                <h6 class="card-title mb-0">General Settings</h6>
                            </div>
                            <div class="row g-3">
                                <div class="col-12">
                                    <label for="" class="form-label">Website Title</label>
                                    <input type="text" name="website[title]" class="form-control" value="<?= $settings['website_name'] ?>">
                                </div>
                                <div class="col-12">
                                    <label for="" class="form-label">Website URL</label>
                                    <input type="url" name="website[url]" class="form-control" placeholder="https://www.website.com" value="<?= $settings['website_url'] ?>">
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-12 grid-margin stretch-card">
                    <div class="card">
                        <div class="card-body">
                            <div class="d-flex justify-content-between align-items-baseline mb-3">
                                <h6 class="card-title mb-0">Mail Client Settings</h6>
                            </div>
                            <div class="row g-3">
                                <div class="col-12">
                                    <label for="" class="form-label">Mail Client Name</label>
                                    <input type="text" name="mailservice[name]" class="form-control" value="<?= $settings['mail_client_name'] ?>">
                                </div>
                                <div class="col-12">
                                    <label for="" class="form-label">Mail Client Address</label>
                                    <input type="email" name="mailservice[address]" class="form-control" placeholder="info@mailaddress.com" value="<?= $settings['mail_client_address'] ?>">
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <div class="col-xl-4 col-lg-6 col-12 grid-margin stretch-card">
            <div class="card">
                <div class="card-body">
                    <div class="d-flex justify-content-between align-items-baseline mb-3">
                        <h6 class="card-title mb-0">Localization Settings</h6>
                    </div>
                    <div class="row g-3">
                        <div class="col-12">
                            <label for="" class="form-label">Installed Languages</label>
                            <select name="lang[]" id="langSelect" multiple class="form-select langSelector">
                                <?php
                                $lang = [
                                    "en" => "English",
                                    "hi" => "हिंदी",
                                    "mr" => "मराठी",
                                    "gu" => "ગુજરાતી",
                                    "bn" => "বাংলা",
                                    "ta" => "தமிழ்",
                                    "te" => "తెలుగు",
                                    "kn" => "ಕನ್ನಡ",
                                ];
                                foreach ($lang as $key => $value) : ?>
                                    <?php if (in_array($key, json_decode($settings['lang'], true))) : ?>
                                        <option selected value="<?= $key ?>" data-origin="<?= $key ?>"><?= $value ?></option>
                                    <?php else: ?>
                                        <option value="<?= $key ?>" data-origin="<?= $key ?>"><?= $value ?></option>
                                    <?php endif ?>
                                <?php endforeach ?>
                            </select>
                            <style>
                                .select2_option-icon {
                                    height: 20px;
                                }
                            </style>
                        </div>
                        <div class="col-12">
                            <label for="" class="form-label">Default Language</label>
                            <select class="form-select" name="default_lang">
                                <?php foreach (json_decode($settings['lang'], true) as $key => $l) : ?>
                                    <?php if ($l == $settings['site_language']) : ?>
                                        <option selected value="<?= $l ?>" data-origin="<?= $l ?>"><?= $lang[$l] ?></option>
                                    <?php else : ?>
                                        <option value="<?= $l ?>" data-origin="<?= $l ?>"><?= $lang[$l] ?></option>
                                    <?php endif ?>
                                <?php endforeach ?>
                            </select>
                        </div>
                        <div class="col-12">
                            <label for="" class="form-label">Timezone</label>
                            <select class="form-select" id="timezone_string" name="timezone_string">
                                <?php foreach (DateTimeZone::listIdentifiers(DateTimeZone::ALL) as $key => $timezone): ?>
                                    <?php if ($timezone == $settings['timezone']): ?>
                                        <option selected value="<?= $timezone ?>"><?= $timezone ?></option>
                                    <?php else: ?>
                                        <option value="<?= $timezone ?>"><?= $timezone ?></option>
                                    <?php endif ?>
                                <?php endforeach ?>
                            </select>
                        </div>
                        <div class="col-12">
                            <label for="" class="form-label">Select Date Format</label>
                            <div class="row g-1">
                                <div class="col-12 form-check">
                                    <input class="form-check-input" type="radio" name="date_format[default]" value="F j, Y" id="dateOption01" <?= ($settings['date_format'] == "F j, Y") ? "checked" : "" ?>>
                                    <label class="form-check-label w-100" for="dateOption01">
                                        <div class="row">
                                            <div class="col-4"><?= date("F j, Y") ?></div>
                                            <div class="col-8">
                                                <span class="badge">F j, Y</span>
                                            </div>
                                        </div>
                                    </label>
                                </div>
                                <div class="col-12 form-check">
                                    <input class="form-check-input" type="radio" name="date_format[default]" value="Y-m-d" id="dateOption02" <?= ($settings['date_format'] == "Y-m-d") ? "checked" : "" ?>>
                                    <label class="form-check-label w-100" for="dateOption02">
                                        <div class="row">
                                            <div class="col-4"><?= date("Y-m-d") ?></div>
                                            <div class="col-8">
                                                <span class="badge">Y-m-d</span>
                                            </div>
                                        </div>
                                    </label>
                                </div>
                                <div class="col-12 form-check">
                                    <input class="form-check-input" type="radio" name="date_format[default]" value="m/d/Y" id="dateOption03" <?= ($settings['date_format'] == "m/d/Y") ? "checked" : "" ?>>
                                    <label class="form-check-label w-100" for="dateOption03">
                                        <div class="row">
                                            <div class="col-4"><?= date("m/d/Y") ?></div>
                                            <div class="col-8">
                                                <span class="badge">m/d/Y</span>
                                            </div>
                                        </div>
                                    </label>
                                </div>
                                <div class="col-12 form-check">
                                    <input class="form-check-input" type="radio" name="date_format[default]" value="d/m/Y" id="dateOption04" <?= ($settings['date_format'] == "d/m/Y") ? "checked" : "" ?>>
                                    <label class="form-check-label w-100" for="dateOption04">
                                        <div class="row">
                                            <div class="col-4"><?= date("d/m/Y") ?></div>
                                            <div class="col-8">
                                                <span class="badge">d/m/Y</span>
                                            </div>
                                        </div>
                                    </label>
                                </div>
                                <div class="col-12 form-check">
                                    <input class="form-check-input" type="radio" name="date_format[other][]" value="" id="customDateFormatRadio">
                                    <label class="form-check-label w-100" for="customDateFormatRadio">
                                        <div class="row">
                                            <div class="col-4">Custom Format</div>
                                            <div class="col-6">
                                                <input class="form-control form-control-sm" id="customDateFormatInput" type="text" name="date_format[other][]" for="customDateFormatRadio">
                                            </div>
                                        </div>
                                    </label>
                                    <script>
                                        $("#customDateFormatInput").on("focusin", () => {
                                            ($("#customDateFormatRadio").attr("checked")) ? $("#customDateFormatRadio").attr("checked", false): $("#customDateFormatRadio").attr("checked", true)
                                        })
                                        $("#customDateFormatInput").on("focusout", () => {
                                            ($("#customDateFormatRadio").attr("checked")) ? $("#customDateFormatRadio").attr("checked", false): $("#customDateFormatRadio").attr("checked", true)
                                        })
                                    </script>
                                </div>
                            </div>
                        </div>
                        <div class="col-12">
                            <label for="" class="form-label">Select Time Format</label>
                            <div class="row g-1">
                                <div class="col-12 form-check">
                                    <input class="form-check-input" type="radio" name="time_format[default]" value="H:i:s" id="dateOption01" <?= ($settings['time_format'] == "H:i:s") ? "checked" : "" ?>>
                                    <label class="form-check-label w-100" for="dateOption01">
                                        <div class="row">
                                            <div class="col-4"><?= date("H:i:s") ?></div>
                                            <div class="col-8">
                                                <span class="badge">H:i:s</span>
                                            </div>
                                        </div>
                                    </label>
                                </div>
                                <div class="col-12 form-check">
                                    <input class="form-check-input" type="radio" name="time_format[default]" value="g:i A" id="dateOption02" <?= ($settings['time_format'] == "g:i A") ? "checked" : "" ?>>
                                    <label class="form-check-label w-100" for="dateOption02">
                                        <div class="row">
                                            <div class="col-4"><?= date("g:i A") ?></div>
                                            <div class="col-8">
                                                <span class="badge">g:i A</span>
                                            </div>
                                        </div>
                                    </label>
                                </div>
                                <div class="col-12 form-check">
                                    <input class="form-check-input" type="radio" name="time_format[default]" value="H:i" id="dateOption03" <?= ($settings['time_format'] == "H:i") ? "checked" : "" ?>>
                                    <label class="form-check-label w-100" for="dateOption03">
                                        <div class="row">
                                            <div class="col-4"><?= date("H:i") ?></div>
                                            <div class="col-8">
                                                <span class="badge">H:i</span>
                                            </div>
                                        </div>
                                    </label>
                                </div>
                                <div class="col-12 form-check">
                                    <input class="form-check-input" type="radio" name="time_format[other][]" value="" id="customTimeFormatRadio">
                                    <label class="form-check-label w-100" for="customTimeFormatRadio">
                                        <div class="row">
                                            <div class="col-4">Custom Format</div>
                                            <div class="col-6">
                                                <input class="form-control form-control-sm" id="customTimeFormatInput" type="text" name="time_format[other][]" for="customTimeFormatRadio">
                                            </div>
                                        </div>
                                    </label>
                                    <script>
                                        $("#customTimeFormatInput").on("focusin", () => {
                                            ($("#customTimeFormatRadio").attr("checked")) ? $("#customTimeFormatRadio").attr("checked", false): $("#customTimeFormatRadio").attr("checked", true)
                                        })
                                        $("#customTimeFormatInput").on("focusout", () => {
                                            ($("#customTimeFormatRadio").attr("checked")) ? $("#customTimeFormatRadio").attr("checked", false): $("#customTimeFormatRadio").attr("checked", true)
                                        })
                                    </script>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <div class="col-12">
            <div class="">
                <button type="button" data-bs-toggle="modal" data-bs-target="#exampleModal" class="btn me-2 btn-primary btn-icon-text"><i class="link-arrow btn-icon-prepend" data-feather="save"></i>Save Changes</button>
                <div class="modal fade" id="exampleModal" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
                    <div class="modal-dialog">
                        <div class="modal-content">
                            <div class="modal-header">
                                <h1 class="modal-title fs-5" id="exampleModalLabel">Application Settings</h1>
                                <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                            </div>
                            <div class="modal-body">
                                <p>You have made changes that haven't been saved yet. Do you want to save them?</p>
                            </div>
                            <div class="modal-footer">
                                <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Discard</button>
                                <button type="submit" class="btn me-2 btn-primary btn-icon-text"><i class="link-arrow btn-icon-prepend" data-feather="save"></i>Confirm Changes</button>
                            </div>
                        </div>
                    </div>
                </div>
                <button type="reset" class="btn btn-outline-secondary">Discard</button>
            </div>
        </div>
    </div>
    <?= form_close() ?>
</main>