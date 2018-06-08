<div class="footer">
	<p>©1998-2018 ZTE Corporation - ZTE Colombia. All rights reserved</p>
</div>
<!-- scripts del footer -->
<script src="<?= base_url('assets/plugins/jquery/jquery.min.js')?>"></script>
<script src="<?= base_url('assets/plugins/Bootstrap/js/bootstrap3.3.7.min.js')?>"></script>
<script type="text/javascript" src="<?= base_url('assets/plugins/datatables/DataTables-1.10.16/js/jquery.dataTables.min.js')?>"></script>
<!-- ********************************************************************************** -->
<script> var baseurl = "<?php echo base_url(); ?>";</script>
<?php if ($this->uri->segment(1) == 'project'): ?>
	<script src="<?= base_url('assets/js/project.js')?>"></script>	
<?php endif ?>


</body>
</html>