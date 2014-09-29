<script src="<?php echo base_url();?>admin-panel/js/jquery-1.11.0.js"></script>
<script src="<?php echo base_url();?>admin-panel/js/bootstrap.min.js"></script>
<script src="<?php echo base_url();?>admin-panel/js/plugins/metisMenu/metisMenu.min.js"></script>
<script src="<?php echo base_url();?>admin-panel/js/plugins/dataTables/jquery.dataTables.js"></script>
<script src="<?php echo base_url();?>admin-panel/js/plugins/dataTables/dataTables.bootstrap.js"></script>
<script src="<?php echo base_url();?>admin-panel/js/sb-admin-2.js"></script>
<script src="<?php echo base_url();?>admin-panel/datetimepicker/js/bootstrap-datetimepicker.min.js"></script>
<script type="text/javascript">
    $(".form_datetime").datetimepicker({format: 'dd-mm-yyyy hh:ii'});
</script> 
<script>
    $(document).ready(function() {
        $('#dataTables-example').dataTable({
            "oLanguage": {
                "sProcessing": "Aguarde enquanto os dados são carregados ...",
                "sLengthMenu": "Mostrar _MENU_ registros por pagina",
                "sZeroRecords": "Nenhum registro correspondente ao criterio encontrado",
                "sInfoEmtpy": "Exibindo 0 a 0 de 0 registros",
                "sInfo": "Exibindo de _START_ a _END_ de _TOTAL_ registros",
                "sInfoFiltered": "",
                "sSearch": "Pesquisar:",
                "oPaginate": {
                   "sFirst":    "Primeiro",
                   "sPrevious": "Anterior",
                   "sNext":     "Próximo",
                   "sLast":     "Último"
                }
             } 
        });
    });
</script>