
$('#deleteModal').on('show.bs.modal', function (event) {
           var button = $(event.relatedTarget) // Button that triggered the modal
           var recipient = button.data('whatever') // Extract info from data-* attributes
           // If necessary, you could initiate an AJAX request here (and then do the updating in a callback).
           // Update the modal's content. We'll use jQuery here, but you could use a data binding library or other methods instead.
           var modal = $(this)
           modal.find('#MDId').val(recipient)
       });

       $(document).ready( function () {
           $('#myTable').DataTable();
       } );

       var cleave = new Cleave('.input-element', {
         phone: true,
         phoneRegionCode: 'US'
       });
       var cleave = new Cleave('.input-phone', {
         phone: true,
         phoneRegionCode: 'US'
       });
       var cleave = new Cleave('.input-date', {
         date: true,
         delimiter: '-',
         datePattern: ['Y']
       });

       var money = new Cleave('.input-money', {
         numeral: true,
         numeralThousandsGroupStyle: 'thousand'
       });
