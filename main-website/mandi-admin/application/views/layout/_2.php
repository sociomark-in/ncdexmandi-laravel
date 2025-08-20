<!-- partial:partials/_footer.html -->
<?php $this->load->view('components/partials/_footer'); ?>
<!-- partial -->

</div>
</div>

<?php $this->load->view('components/partials/_js') ?>

<?php
if ($this->session->userdata('first_user')) :
?>

<?php endif ?>
<script>
    $(document).ready(function() {
        <?php if (isset($_SESSION['post_status'])): ?>
            <?php switch ($_SESSION['post_status']['status']):
                case 'success': ?>
                    toastr.success("<?= $_SESSION['post_status']['message'] ?>");
                    <?php break; ?>
                <?php
                case 'warning': ?>
                    toastr.warning("<?= $_SESSION['post_status']['message'] ?>");
                    <?php break; ?>
                <?php
                case 'error': ?>
                    toastr.error("<?= $_SESSION['post_status']['message'] ?>");
                    <?php break; ?>
                <?php
                default: ?>
                    toastr.info("<?= $_SESSION['post_status']['message'] ?>");
                    <?php break; ?>
            <?php endswitch ?>
            <?php unset($_SESSION['post_status']) ?>
        <?php endif ?>
    });
</script>
</body>

</html>