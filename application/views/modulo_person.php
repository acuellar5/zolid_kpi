<button id="button_add_person" type="button" class="btn btn-success btn-sm"><?= $this->lang->line('person_add') ?></button>
<br><br>
<table class="table table-bordered table-striped table-hover" id="table_information">
	<thead class="th_mod_person">
		<tr>
			<th><?= $this->lang->line('person_id') ?></th>
			<th><?= $this->lang->line('person_name') ?></th>
			<th><?= $this->lang->line('person_lastname') ?></th>
			<th><?= $this->lang->line('person_start_day') ?></th>
			<th><?= $this->lang->line('person_end_day') ?></th>
			<th><?= $this->lang->line('person_time_worked') ?></th>
			<th><?= $this->lang->line('person_trial_time') ?></th>
			<th><?= $this->lang->line('person_position') ?></th>
			<th><?= $this->lang->line('person_project') ?></th>
			<th><?= $this->lang->line('person_calculate_method') ?></th>
			<th><?= $this->lang->line('person_role') ?></th>
			<th><?= $this->lang->line('person_state') ?></th>
			<th><i class="glyphicon glyphicon-eye-open"></i></th>

		</tr>
	</thead>
	<tbody>
			<?php for ($i=0; $i < count($information); $i++) { 	?>
			<tr>
				<td><?php  if (isset($information[$i]->documento)) { echo $information[$i]->documento;}else echo ""; ?></td>
				<td><?php  if (isset($information[$i]->nombre)) { echo $information[$i]->nombre;}else echo ""; ?></td>
				<td><?php  if (isset($information[$i]->apellido)) { echo $information[$i]->apellido;}else echo ""; ?></td>
				<td><?php  if (isset($information[$i]->dia_de_inicio)) { echo $information[$i]->dia_de_inicio;}else echo ""; ?></td>
				<td><?php  if (isset($information[$i]->fecha_fin)) { echo $information[$i]->fecha_fin;}else echo ""; ?></td>
				<td><?php  if (isset($information[$i]->tiempo_trabajado)) { echo $information[$i]->tiempo_trabajado;}else echo ""; ?></td>
				<td><?php  if (isset($information[$i]->tiempo_de_prueba)) { echo $information[$i]->tiempo_de_prueba;}else echo ""; ?></td>
				<td><?php  if (isset($information[$i]->cargo)) { echo $information[$i]->cargo;}else echo ""; ?></td>
				<td><?php  if (isset($information[$i]->proyecto)) { echo $information[$i]->proyecto;}else echo ""; ?></td>
				<td><?php  if (isset($information[$i]->metodo_de_calculo)) { echo $information[$i]->metodo_de_calculo;}else echo ""; ?></td>
				<td><?php  if (isset($information[$i]->role)) { echo $information[$i]->role;}else echo ""; ?></td>
				<td><?php  if (isset($information[$i]->ESTADO)) { echo $information[$i]->ESTADO;}else echo ""; ?></td>
				
	            <td><button id="button_mod_person" type="button" class="btn btn-primary button_des_person btn-xs" data-toggle="modal" data-target="#modal_edit_person"><i class="glyphicon glyphicon-check"></i></button></td>
			</tr>
		<?php  } ?>
	</tbody>
</table>


<!------------------------------------------------------------------ Modal ----------------------------------------------->
<div id="modal_person" class="modal fade" data-backdrop="static" data-keyboard="false" role="dialog">
	<div class="modal-dialog modal-lg">
		<div class="modal-content">
			<div class="modal-header">
				<button type="button" class="close close_mod_pers" data-dismiss="modal" aria-label="Close"><i class=" glyphicon glyphicon-remove "></i></button>
				<h3 class="modal-title" id="modal_title_person"><i class="glyphicon glyphicon-user"></i></h3>
			</div>
			<div class="modal-body">
				<form class="well form-horizontal" id="formModal" action="<?= base_url('User/insert_new_user') ?>"   method="post">
					<fieldset>
						<div class="widget bg_white m-t-25 display-block">
							<h2 class="h4 mp" id="person_title_modals">
								<i class="fa fa-fw fa-question-circle"></i>&nbsp;&nbsp;
							</h2>
							<fieldset class="col-md-6 control-label">
								<div class="form-group gorups_person">
									<label for="K_ID_DOCUMENT" class="col-md-3 control-label"><?= $this->lang->line('person_id') ?>: &nbsp;</label>
									<div class="col-md-8 selectContainer">
										<div class="input-group">
											<span class="input-group-addon"><i class="glyphicon glyphicon-user"></i></span>
											<input name="K_ID_DOCUMENT" id="K_ID_DOCUMENT" required  maxlength="11" minlength="5" class="form-control" type="text">
										</div>
									</div>
								</div>

								<div class="form-group">
									<label for="N_NAME" class="col-md-3 control-label"><?= $this->lang->line('person_name') ?>: &nbsp;</label>
									<div class="col-md-8 selectContainer">
										<div class="input-group">
											<span class="input-group-addon"><i class="glyphicon glyphicon-user"></i></span>
											<input name="N_NAME" id="N_NAME" required maxlength="20" minlength="3" class="form-control" type="text">
										</div>
									</div>
								</div>

								<div class="form-group">
									<label for="N_LAST_NAME" class="col-md-3 control-label"><?= $this->lang->line('person_lastname') ?>: &nbsp;</label>
									<div class="col-md-8 selectContainer">
										<div class="input-group">
											<span class="input-group-addon"><i class="glyphicon glyphicon-user"></i></span>
											<input name="N_LAST_NAME" id="N_LAST_NAME" required maxlength="20" minlength="4" class="form-control" type="text">
										</div>
									</div>
								</div>


								<div class="form-group">
									<label for="D_START_DAY" class="col-md-3 control-label"><?= $this->lang->line('person_start_day') ?>: &nbsp;</label>
									<div class="col-md-8 selectContainer">
										<div class="input-group">
											<span class="input-group-addon"><i class="glyphicon glyphicon-calendar"></i></span>
											<input name="D_START_DAY" id="D_START_DAY" required class="form-control" type="date">
										</div>
									</div>
								</div>


								<div class="form-group gorups_person">
									<label for="I_TIME_WORKED" class="col-md-3 control-label"><?= $this->lang->line('person_time_worked') ?>: &nbsp;</label>
									<div class="col-md-8 selectContainer">
										<div class="input-group">
											<span class="input-group-addon"><i class="glyphicon glyphicon-calendar"></i></span>
											<input name="I_TIME_WORKED" id="I_TIME_WORKED" class="form-control" type="text">
										</div>
									</div>
								</div>

							</fieldset>
							<!--  fin seccion izquierda form-->
							<!--  inicio seccion derecha form-->
							<fieldset>

								<div class="form-group">
									<label for="K_ID_PROJECT" class="col-md-3 control-label"><?= $this->lang->line('person_project') ?>: &nbsp;</label>
									<div class="col-md-8 selectContainer">
										<div class="input-group">
											<span class="input-group-addon" id="statusColor"><i class="glyphicon glyphicon-hand-right"></i></span>
											<select name="K_ID_PROJECT" id="K_ID_PROJECT" class="form-control" required > <!-- onchange="realizarCalificacion()" -->
												<option>Select...</option>
												<option  value="1">Proyecto A</option>
												<option  value="2">Proyecto B</option>
												<option  value="3">Proyecto C</option>
												<option  value="4">Proyecto D</option>
												<option  value="5">Proyecto E</option>
											</select>
										</div>
									</div>
								</div>


								<div class="form-group ">
									<label for="K_ID_POSITION" class="col-md-3 control-label"><?= $this->lang->line('person_position') ?>: &nbsp;</label>
									<div class="col-md-8 selectContainer">
										<div class="input-group">
											<span class="input-group-addon" id=""><i class="glyphicon glyphicon-hand-right"></i></span>
											<select name="K_ID_POSITION" id="K_ID_POSITION" required  class="form-control">
												<option></option>Select...</option>
												<option value="1">Jefe</option>
												<option value="2">Coordinador</option>
												<option value="3">Esclavo</option>
											</select>
										</div>
									</div>
								</div>	


								<div class="form-group">
									<label for="D_TRIAL_PERIOD" class="col-md-3 control-label"><?= $this->lang->line('person_trial_time') ?>: &nbsp;</label>
									<div class="col-md-8 selectContainer">
										<div class="input-group">
											<span class="input-group-addon"><i class="glyphicon glyphicon-calendar"></i></span>
											<input name="D_TRIAL_PERIOD" id="D_TRIAL_PERIOD" class="form-control" required maxlength="20" minlength="3" type="text">
										</div>
									</div>
								</div> 

								<!-- <div class="form-group" id="group_cm"> 
									<label for="N_NAME_ROLE" class="col-md-3 control-label"><?= $this->lang->line('person_role') ?>: &nbsp;</label>
									<div class="col-md-8 selectContainer">
										<div class="input-group">
											<span class="input-group-addon"><i class="glyphicon glyphicon-calendar"></i></span>
											<input name="N_NAME_ROLE" id="N_NAME_ROLE" class="form-control" type="text">
										</div>
									</div>
								</div>   -->

								<!-- <div class="form-group" id="group_cm_1">
									<label for="I_STATUS" class="col-md-3 control-label"><?= $this->lang->line('person_state') ?>: &nbsp;</label>
									<div class="col-md-8 selectContainer">
										<div class="input-group">
											<span class="input-group-addon"><i class="glyphicon glyphicon-calendar"></i></span>
											<select name="I_STATUS" id="I_STATUS" class="form-control" required >
												<option value="">Select...</option>
												<option value="1">Activo</option>
												<option value="0">Inactivo</option>
											</select>
										</div>
									</div>
								</div> 
								 -->
								<input type="hidden" id="I_STATUS" value="">

								<div class="form-group">
									<label for="D_END_DAY" class="col-md-3 control-label"><?= $this->lang->line('person_end_day') ?>: &nbsp;</label>
									<div class="col-md-8 selectContainer">
										<div class="input-group">
											<span class="input-group-addon"><i class="glyphicon glyphicon-calendar"></i></span>
											<input name="D_END_DAY" id="D_END_DAY" class="form-control" type="date" required >
										</div>
									</div>
								</div>

							</fieldset>
							<!--  fin seccion derecha form---->
						</div>

					</div>

					<div class="modal-footer">
				     <button type="button" class="btn btn-warning" id="button_eliminate" style="float: left;"><i class='glyphicon glyphicon-remove'></i>&nbsp;<?= $this->lang->line('button_eliminate') ?></button>
					 <button type="button" class="btn btn-default close_mod_pers" data-dismiss="modal"><i class='glyphicon glyphicon-chevron-up'></i>&nbsp;<?= $this->lang->line('button_cancel') ?></button>
				     <button type="button" class="btn btn-info" id="button_update"><i class='glyphicon glyphicon-save'></i>&nbsp;<?= $this->lang->line('button_update') ?></button>
						<button type="submit" class="btn btn-primary" id="button_insert" ><i class='glyphicon glyphicon-save'></i>&nbsp;<?= $this->lang->line('button_insert') ?></button>
					</form>
				</div>
			</div>
		</div>
	</div>



	<!-- **************SMALL MODAL ******************************************** -->.
<!-- Button trigger modal -->
<!-- <button type="button" class="btn btn-primary btn-lg" data-toggle="modal" data-target="#myModal">
  Launch demo modal
</button> -->

<div class="modal fade" id="smallModal" tabindex="-1" role="dialog" aria-labelledby="myModalLabel">
  <div class="modal-dialog modal-sm" role="document">
    <div class="modal-content">
      <div class="modal-header">
        <button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">&times;</span></button>
        <h4 class="modal-title" id="myModalLabel">Fechas</h4>
      </div>
      <div class="modal-body">
	        
			
		<label>Fecha inicio &nbsp;&nbsp;</label>
		<input type="date" name="" id="day_star">	
		
		<label>Fecha fin &nbsp;&nbsp;&nbsp;</label>
		<input type="date" name="" id="day_end">







      </div>
      <div class="modal-footer">
        <button type="button" class="btn btn-default" data-dismiss="modal">Close</button>
        <button type="button" class="btn btn-primary">Save changes</button>
      </div>
    </div>
  </div>
</div>