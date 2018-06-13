<!-- cierre container -->
</div>
<!-- inicio footer -->
<div class="footer">
	<p>©1998-2018 ZTE Corporation - ZTE Colombia. All rights reserved</p>
</div>
<!-- scripts del footer -->
<script src="<?= base_url('assets/plugins/jquery/jquery.min.js')?>"></script>
<script src="<?= base_url('assets/plugins/Bootstrap/js/bootstrap3.3.7.min.js')?>"></script>
<!-- SWEET ALERT -->
<script src="<?= base_url('assets/plugins/sweet-alert/sweetalert.min.js')?>"></script>
<!-- DATATABLES -->
<script type="text/javascript" src="<?= base_url('assets/plugins/datatables/DataTables-1.10.16/js/jquery.dataTables.min.js')?>">
</script>
<!-- ********************************************************************************** -->
<script> var baseurl = "<?php echo base_url(); ?>";</script>
<?php if ($this->uri->segment(1) == 'project'): ?>
	<script src="<?= base_url('assets/js/project.js')?>"></script>
	<script src="<?= base_url('assets/js/calculateMethod.js')?>"></script>	
<?php endif ?>
<!-- ************************************vista person ***********************************-->
<?php if ($this->uri->segment(1) == 'person'): ?>
	<script> var lenguage = [
								"<?= $this->lang->line('person_title_modals_edit') ?>",
								"<?= $this->lang->line('person_title_modals') ?>",
								"<?= $this->lang->line('person_title_edit_modals') ?>",
								"<?= $this->lang->line('person_title_add_modals') ?>"
								
							]; 
	</script>
	<script src="<?= base_url('assets/js/person.js')?>"></script>	
<?php endif ?>


</body>
</html>