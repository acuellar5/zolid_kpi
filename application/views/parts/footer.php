<div class="footer">
	<p>©1998-2018 ZTE Corporation - ZTE Colombia. All rights reserved</p>
</div>
<!-- scripts del footer -->
<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
<script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>
<script type="text/javascript" src="<?= base_url('assets/plugins/datatables/DataTables-1.10.16/js/jquery.dataTables.min.js')?>"></script>
<!-- ********************************************************************************** -->
<script> var baseurl = "<?php echo base_url(); ?>";</script>
<?php if ($this->uri->segment(1) == 'project'): ?>
	<script src="<?= base_url('assets/js/project.js')?>"></script>	
<?php endif ?>

<script>
$(document).ready(function() {
    $('.mdb-select').material_select();
});
</script>


</body>
</html>