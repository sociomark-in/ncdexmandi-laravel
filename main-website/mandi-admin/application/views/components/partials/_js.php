<!-- core:js -->
<!-- <script src="<?= base_url("assets") ?>/vendors/core/core.js"></script> -->
<!-- endinject -->

<!-- Plugin js for this page -->
<script src="<?= base_url("assets") ?>/vendors/flatpickr/flatpickr.min.js"></script>
<!-- End plugin js for this page -->

<!-- inject:js -->
<script src="<?= base_url("assets") ?>/vendors/feather-icons/feather.min.js"></script>
<script src="<?= base_url("assets") ?>/js/template.js"></script>
<!-- endinject -->

<!-- Custom js for this page -->

<script src="<?= base_url("assets") ?>/js/custom.js"></script>
<!-- End custom js for this page -->

<script>
    $('main select.form-select').each((index, elem) => {
        $(elem).select2();
    })
    $('main input[data-type=date]').each((index, elem) => {
        $(elem).datepicker({
            changeMonth: true,
            changeYear: true,
            showButtonPanel: true,
            dateFormat: 'dd/mm/yy',
            maxDate: "+1D",
            yearRange: "-100:+0"
        });
    })
</script>
