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

<script src="https://cdnjs.cloudflare.com/ajax/libs/mark.js/8.11.1/mark.min.js" integrity="sha512-5CYOlHXGh6QpOFA/TeTylKLWfB3ftPsde7AnmhuitiTX4K5SqCLBeKro6sPS8ilsz1Q4NRx3v8Ko2IBiszzdww==" crossorigin="anonymous" referrerpolicy="no-referrer"></script>

<script src="<?= base_url('node_modules/jquery-text-counter/textcounter.min.js') ?>"></script>

<!-- Custom js for this page -->
<script src="<?= base_url("assets") ?>/js/custom.js"></script>
<!-- End custom js for this page -->

<script>
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

    $('input[type=password]').each((index, element) => {
        var button = $(element).next();
        var type = $(element).attr('type');
        var icon = $(element).next().children('svg').attr('data-feather');
        button.on('click', () => {
            console.log(type);
            if (type === 'password') {
                type = 'text';
            } else {
                type = 'password';
            }
            $(element).attr('type', type);
        })
    })

    $('.text-counter').each((index, element) => {
        $(element).textcounter({
            type: "character",
            max: $(element).attr('maxlength'),
            min: $(element).attr('minlength') || 0,
            stopInputAtMaximum: true,
            textCountMessageClass: "form-text",
            textCountClass: "fw-bold",
            countDown: true,
            countSpaces: true,
            countDownText: "%d characters left.",
        });
    })
</script>