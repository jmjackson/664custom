

</div>
</div>
<!--   Core JS Files   -->



<script src="https://code.jquery.com/jquery-3.4.1.slim.min.js"></script>
<script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.0/dist/umd/popper.min.js"></script>
<script src="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/js/bootstrap.min.js"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/jquery.perfect-scrollbar/1.5.0/perfect-scrollbar.min.js"></script>
<script src="https://cdn.datatables.net/1.10.22/js/jquery.dataTables.min.js" charset="utf-8"></script>
<!--  Notifications Plugin    -->
<script src="<?php echo base_url();?>resources/js/bootstrap-notify.js"></script>
<!-- Control Center for Now Ui Dashboard: parallax effects, scripts for the example pages etc -->
<script src="<?php echo base_url(); ?>resources/js/paper-dashboard.js" type="text/javascript"></script>
<script type="text/javascript" src="<?php echo base_url(); ?>resources/js/cleave.min.js"></script>
<script type="text/javascript" src="<?php echo base_url(); ?>resources/js/cleave-phone.us.js"></script>
<script type="text/javascript" src="<?php echo base_url(); ?>resources/js/script.js"></script>
<script type="text/javascript">
document.getElementById('doPrint').addEventListener("click", function () {
    var printContents = document.getElementById('printDiv').innerHTML;
    var originalContents = document.body.innerHTML;
    document.body.innerHTML = printContents;
    window.print();
    document.body.innerHTML = originalContents;
    window.location.replace('<?php echo base_url();?>');
});

// $('#deleteModal').on('show.bs.modal', function (event) {
//            var button = $(event.relatedTarget) // Button that triggered the modal
//            var recipient = button.data('whatever') // Extract info from data-* attributes
//            // If necessary, you could initiate an AJAX request here (and then do the updating in a callback).
//            // Update the modal's content. We'll use jQuery here, but you could use a data binding library or other methods instead.
//            var modal = $(this)
//            modal.find('#MDId').val(recipient)
//        })
</script>

</html>
