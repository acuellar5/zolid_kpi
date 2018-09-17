<!-- cierre container -->
</div>
<!-- inicio footer -->
<div class="footer">
	<p>©1998-2018 BestandVet Corporation - BestandVet Colombia. All rights reserved</p>
</div>
<script> var baseurl = "<?php echo base_url(); ?>";</script>

<!-- scripts del footer -->
<script src="<?= base_url('assets/plugins/jquery/jquery.min.js')?>"></script>
<script src="<?= base_url('assets/plugins/Bootstrap/js/bootstrap3.3.7.min.js')?>"></script>
<!-- SWEET ALERT -->
<script src="<?= base_url('assets/plugins/sweet-alert/sweetalert.min.js')?>"></script>
<!-- DATATABLES -->
<script type="text/javascript" src="<?= base_url('assets/plugins/datatables/DataTables-1.10.16/js/jquery.dataTables.min.js')?>"></script>
<!-- ********************************************************************************** -->

<?php if ($this->uri->segment(1) == 'person'): ?>
<!-- **********************************************VISTA PERSONA *********************************************-->
	<script src="<?= base_url('assets/js/person.js') ?>"></script>
	<!-- <script type="text/javascript" src="https://cdn.datatables.net/buttons/1.5.2/js/dataTables.buttons.min.js"></script> -->
	<script src="<?= base_url('assets/plugins/datatables/js/dataTables.buttons.min.js') ?>"></script>
	<!-- <script type="text/javascript" src="https://cdnjs.cloudflare.com/ajax/libs/jszip/3.1.3/jszip.min.js"></script> -->
	<script src="<?= base_url('assets/plugins/datatables/js/jszip.min.js') ?>"></script>
	<!-- <script type="text/javascript" src="https://cdnjs.cloudflare.com/ajax/libs/pdfmake/0.1.36/pdfmake.min.js"></script> -->
	<script src="<?= base_url('assets/plugins/datatables/js/pdfmake.min.js') ?>"></script>
	<!-- <script type="text/javascript" src="https://cdnjs.cloudflare.com/ajax/libs/pdfmake/0.1.36/vfs_fonts.js"></script> -->
	<script src="<?= base_url('assets/plugins/datatables/js/vfs_fonts.js') ?>"></script>
	<!-- <script type="text/javascript" src="https://cdn.datatables.net/buttons/1.5.2/js/buttons.html5.min.js"></script> -->
	<script src="<?= base_url('assets/plugins/datatables/js/buttons.html5.min.js') ?>"></script>
	<!-- <script type="text/javascript" src="https://cdn.datatables.net/buttons/1.5.2/js/buttons.print.min.js"></script> -->
	<script src="<?= base_url('assets/plugins/datatables/js/buttons.print.min.js') ?>"></script>
	<!-- <script type="text/javascript" src="https://cdn.datatables.net/select/1.2.7/js/dataTables.select.min.js"></script> -->
	<script src="<?= base_url('assets/plugins/datatables/js/dataTables.select.min.js') ?>"></script>
	<!-- COLVIs PARA MOSTRAR U OCULTAR COLUMNAS -->
	<!-- <script type="text/javascript" src="https://cdn.datatables.net/buttons/1.5.2/js/buttons.colVis.min.js"></script> -->
	<script src="<?= base_url('assets/plugins/datatables/js/buttons.colVis.min.js') ?>"></script>
	

<?php endif ?>

 <!-- **********************************************datatables plus (excel ... ) *********************************************-->
<script src="<?= base_url('assets/plugins/select2/select2.js') ?>"></script>

</body>
</html>