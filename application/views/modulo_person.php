<button id="button_add_person" type="button" class="btn btn-success btn-lg" data-toggle="modal" data-target="#modal_new_person"><?= $this->lang->line('person_add') ?></button>
<br><br>
<table class="table table-bordered table-striped table-hover" id="information">
	<thead>
		<tr>
			<th><?= $this->lang->line('person_id') ?></th>
			<th><?= $this->lang->line('person_name') ?></th>
			<th><?= $this->lang->line('person_lastname') ?></th>
			<th><?= $this->lang->line('person_start_day') ?></th>
			<th><?= $this->lang->line('person_time_worked') ?></th>
			<th><?= $this->lang->line('person_trial_time') ?></th>
			<th><?= $this->lang->line('person_position') ?></th>
			<th><?= $this->lang->line('person_project') ?></th>
			<th><?= $this->lang->line('person_calculate_method') ?></th>
			<th><?= $this->lang->line('person_mod_person') ?></th>
		</tr>
	</thead>
	<tbody>
		<?php for ($i=0; $i < count($information); $i++) { 	?>
		<tr>
			<td><?php  if (isset($information[$i]->documento)) { echo $information[$i]->documento;}else echo ""; ?></td>
			<td><?php  if (isset($information[$i]->nombre)) { echo $information[$i]->nombre;}else echo ""; ?></td>
			<td><?php  if (isset($information[$i]->apellido)) { echo $information[$i]->apellido;}else echo ""; ?></td>
			<td><?php  if (isset($information[$i]->dia_de_inicio)) { echo $information[$i]->dia_de_inicio;}else echo ""; ?></td>
			<td><?php  if (isset($information[$i]->tiempo_trabajado)) { echo $information[$i]->tiempo_trabajado;}else echo ""; ?></td>
			<td><?php  if (isset($information[$i]->tiempo_de_prueba)) { echo $information[$i]->tiempo_de_prueba;}else echo ""; ?></td>
			<td><?php  if (isset($information[$i]->cargo)) { echo $information[$i]->cargo;}else echo ""; ?></td>
			<td><?php  if (isset($information[$i]->proyecto)) { echo $information[$i]->proyecto;}else echo ""; ?></td>
			<td><?php  if (isset($information[$i]->metodo_de_calculo)) { echo $information[$i]->metodo_de_calculo;}else echo ""; ?></td>
            <td><button id="button_des_person" type="button" class="btn btn-primary" data-toggle="modal" data-target="#modal_edit_person"><?= $this->lang->line('button_mod_person') ?></button></td>
		</tr>
		<?php  } ?>
	</tbody>
</table>
<!------------------------------------------------------------------ Modal ----------------------------------------------->
    <div id="modal_new_person" class="modal fade" role="dialog">
        <div class="modal-dialog modal-lg">
            <div class="modal-content">
                <div class="modal-header">
                    <button type="button" class="close" data-dismiss="modal" aria-label="Close">x</button>
                    <h3 class="modal-title" id="modal_title_person"><?= $this->lang->line('person_title_modals') ?></h3>
                </div>
                <div class="modal-body">
                    <form class="well form-horizontal" id="formModal" action=""  method="post" data-action="FOR_UPDATE" novalidate="novalidate">
            <fieldset>
              <div class="widget bg_white m-t-25 display-block">
                <h2 class="h4 mp">
                  <i class="fa fa-fw fa-question-circle"></i>&nbsp;&nbsp; <?= $this->lang->line('person_title_add_modals') ?>
                </h2>
                <fieldset class="col-md-6 control-label">
                  <div class="form-group">
                    <label for="" class="col-md-3 control-label"><?= $this->lang->line('person_id') ?>: &nbsp;</label>
                    <div class="col-md-8 selectContainer">
                      <div class="input-group">
                        <span class="input-group-addon"><i class="glyphicon glyphicon-home"></i></span>
                        <input name="" id="" class="form-control" type="text">
                      </div>
                    </div>
                  </div>

                  <div class="form-group">
                    <label for="" class="col-md-3 control-label"><?= $this->lang->line('person_name') ?>: &nbsp;</label>
                    <div class="col-md-8 selectContainer">
                      <div class="input-group">
                        <span class="input-group-addon"><i class="glyphicon glyphicon-dashboard"></i></span>
                        <input name="" id="" class="form-control" type="text">
                      </div>
                    </div>
                  </div>

                  <div class="form-group">
                    <label for="" class="col-md-3 control-label"><?= $this->lang->line('person_lastname') ?>: &nbsp;</label>
                    <div class="col-md-8 selectContainer">
                      <div class="input-group">
                        <span class="input-group-addon"><i class="glyphicon glyphicon-calendar"></i></span>
                        <input name="" id="" class="form-control" type="text">
                      </div>
                    </div>
                  </div>


                  <div class="form-group">
                    <label for="" class="col-md-3 control-label"><?= $this->lang->line('person_start_day') ?>: &nbsp;</label>
                    <div class="col-md-8 selectContainer">
                      <div class="input-group">
                        <span class="input-group-addon"><i class="glyphicon glyphicon-calendar"></i></span>
                        <input name="" id="" class="form-control" type="text">
                      </div>
                    </div>
                  </div>


                  <div class="form-group">
                    <label for="mtxtIniMant" class="col-md-3 control-label"><?= $this->lang->line('person_time_worked') ?>: &nbsp;</label>
                    <div class="col-md-8 selectContainer">
                      <div class="input-group">
                        <span class="input-group-addon"><i class="glyphicon glyphicon-calendar"></i></span>
                        <input name="" id="" class="form-control" type="text">
                      </div>
                    </div>
                  </div>

                </fieldset>
                <!--  fin seccion izquierda form-->
                <!--  inicio seccion derecha form-->
                <fieldset>

                  <div class="form-group">
                    <label for="mtxtEstado" class="col-md-3 control-label"><?= $this->lang->line('person_project') ?>: &nbsp;</label>
                    <div class="col-md-8 selectContainer">
                      <div class="input-group">
                        <span class="input-group-addon" id="statusColor"><i class="glyphicon glyphicon-hand-right"></i></span>
                        <select name="mtxtEstado" id="mtxtEstado" class="form-control"> <!-- onchange="realizarCalificacion()" -->
                          <option value="1">proyecto1</option>
                          <option value="2">proyecto2</option>
                          <option value="3">proyecto3</option>
                          <option value="4">proyecto4</option>
                        </select>
                      </div>
                    </div>
                  </div>


                  <div class="form-group">
                    <label for="" class="col-md-3 control-label"><?= $this->lang->line('person_position') ?>: &nbsp;</label>
                    <div class="col-md-8 selectContainer">
                      <div class="input-group">
                        <span class="input-group-addon" id=""><i class="glyphicon glyphicon-hand-right"></i></span>
                        <select name="" id="" class="form-control">
                          <option value="1">1</option>
                          <option value="2">2</option>
                          <option value="3">3</option>
                          <option value="4">4</option>
                        </select>
                      </div>
                    </div>
                  </div>



                  <div class="form-group">
                    <label for="mtxtEstado" class="col-md-3 control-label"><?= $this->lang->line('person_calculate_method') ?>: &nbsp;</label>
                    <div class="col-md-8 selectContainer">
                      <div class="input-group">
                        <span class="input-group-addon" id="statusColor"><i class="glyphicon glyphicon-hand-right"></i></span>
                        <select name="mtxtEstado" id="mtxtEstado" class="form-control">
                          <option value="1">1</option>
                          <option value="2">2</option>
                          <option value="3">3</option>
                          <option value="4">4</option>
                        </select>
                      </div>
                    </div>
                  </div>


                  <div class="form-group">
                    <label for="mtxtFinMant" class="col-md-3 control-label"><?= $this->lang->line('person_trial_time') ?>: &nbsp;</label>
                    <div class="col-md-8 selectContainer">
                      <div class="input-group">
                        <span class="input-group-addon"><i class="glyphicon glyphicon-calendar"></i></span>
                        <input name="mtxtFinMant" id="mtxtFinMant" class="form-control" type="text">
                      </div>
                    </div>
                  </div>                 
                </fieldset>
                <!--  fin seccion derecha form---->
              </div>

                </div>

                <div class="modal-footer">
                    <button type="button" class="btn btn-danger" id="mbtnDeleteComentario" style="float: left;"><i class='glyphicon glyphicon-remove'></i>&nbsp;<?= $this->lang->line('button_eliminate') ?></button>
                    <button type="button" class="btn btn-default" id="mbtnCerrarModal" data-dismiss="modal"><i class='glyphicon glyphicon-chevron-up'></i>&nbsp;<?= $this->lang->line('button_cancel') ?></button>
                    <button type="button" class="btn btn-info" id="mbtnUpdComentario"><i class='glyphicon glyphicon-save'></i>&nbsp;<?= $this->lang->line('button_update') ?></button>
                    <button type="button" class="btn btn-primary" id="mbtnNewComentario"><i class='glyphicon glyphicon-save'></i>&nbsp;<?= $this->lang->line('button_insert') ?></button>
                </div>
            </div>
        </div>
    </div>



























     <div id="modal_edit_person" class="modal fade" role="dialog">
        <div class="modal-dialog modal-lg">
            <div class="modal-content">
                <div class="modal-header">
                    <button type="button" class="close" data-dismiss="modal" aria-label="Close">x</button>
                    <h3 class="modal-title" id="modal_title_person"><?= $this->lang->line('person_title_modals') ?></h3>
                </div>
                <div class="modal-body">
                    <form class="well form-horizontal" id="formModal" action=""  method="post" data-action="FOR_UPDATE" novalidate="novalidate">
            <fieldset>
              <div class="widget bg_white m-t-25 display-block">
                <h2 class="h4 mp">
                  <i class="fa fa-fw fa-question-circle"></i>&nbsp;&nbsp; <?= $this->lang->line('person_title_add_modals') ?>
                </h2>
                <fieldset class="col-md-6 control-label">
                  <div class="form-group">
                    <label for="" class="col-md-3 control-label"><?= $this->lang->line('person_id') ?>: &nbsp;</label>
                    <div class="col-md-8 selectContainer">
                      <div class="input-group">
                        <span class="input-group-addon"><i class="glyphicon glyphicon-user"></i></span>
                        <input name="" id="" class="form-control" type="text">
                      </div>
                    </div>
                  </div>

                  <div class="form-group">
                    <label for="" class="col-md-3 control-label"><?= $this->lang->line('person_name') ?>: &nbsp;</label>
                    <div class="col-md-8 selectContainer">
                      <div class="input-group">
                        <span class="input-group-addon"><i class="glyphicon glyphicon-user"></i></span>
                        <input name="" id="" class="form-control" type="text">
                      </div>
                    </div>
                  </div>

                  <div class="form-group">
                    <label for="" class="col-md-3 control-label"><?= $this->lang->line('person_lastname') ?>: &nbsp;</label>
                    <div class="col-md-8 selectContainer">
                      <div class="input-group">
                        <span class="input-group-addon"><i class="glyphicon glyphicon-user"></i></span>
                        <input name="" id="" class="form-control" type="text">
                      </div>
                    </div>
                  </div>


                  <div class="form-group">
                    <label for="" class="col-md-3 control-label"><?= $this->lang->line('person_start_day') ?>: &nbsp;</label>
                    <div class="col-md-8 selectContainer">
                      <div class="input-group">
                        <span class="input-group-addon"><i class="glyphicon glyphicon-calendar"></i></span>
                        <input name="" id="" class="form-control" type="date">
                      </div>
                    </div>
                  </div>


                  <div class="form-group">
                    <label for="mtxtIniMant" class="col-md-3 control-label"><?= $this->lang->line('person_time_worked') ?>: &nbsp;</label>
                    <div class="col-md-8 selectContainer">
                      <div class="input-group">
                        <span class="input-group-addon"><i class="glyphicon glyphicon-calendar"></i></span>
                        <input name="" id="" class="form-control" type="text">
                      </div>
                    </div>
                  </div>

                </fieldset>
                <!--  fin seccion izquierda form-->
                <!--  inicio seccion derecha form-->
                <fieldset>

                  <div class="form-group">
                    <label for="mtxtEstado" class="col-md-3 control-label"><?= $this->lang->line('person_project') ?>: &nbsp;</label>
                    <div class="col-md-8 selectContainer">
                      <div class="input-group">
                        <span class="input-group-addon" id="statusColor"><i class="glyphicon glyphicon-hand-right"></i></span>
                        <select name="mtxtEstado" id="mtxtEstado" class="form-control"> <!-- onchange="realizarCalificacion()" -->
                          <option value="1">proyecto1</option>
                          <option value="2">proyecto2</option>
                          <option value="3">proyecto3</option>
                          <option value="4">proyecto4</option>
                        </select>
                      </div>
                    </div>
                  </div>


                  <div class="form-group">
                    <label for="" class="col-md-3 control-label"><?= $this->lang->line('person_position') ?>: &nbsp;</label>
                    <div class="col-md-8 selectContainer">
                      <div class="input-group">
                        <span class="input-group-addon" id=""><i class="glyphicon glyphicon-hand-right"></i></span>
                        <select name="" id="" class="form-control">
                          <option value="1">1</option>
                          <option value="2">2</option>
                          <option value="3">3</option>
                          <option value="4">4</option>
                        </select>
                      </div>
                    </div>
                  </div>



                  <div class="form-group">
                    <label for="mtxtEstado" class="col-md-3 control-label"><?= $this->lang->line('person_calculate_method') ?>: &nbsp;</label>
                    <div class="col-md-8 selectContainer">
                      <div class="input-group">
                        <span class="input-group-addon" id="statusColor"><i class="glyphicon glyphicon-hand-right"></i></span>
                        <select name="mtxtEstado" id="mtxtEstado" class="form-control">
                          <option value="1">1</option>
                          <option value="2">2</option>
                          <option value="3">3</option>
                          <option value="4">4</option>
                        </select>
                      </div>
                    </div>
                  </div>


                  <div class="form-group">
                    <label for="mtxtFinMant" class="col-md-3 control-label"><?= $this->lang->line('person_trial_time') ?>: &nbsp;</label>
                    <div class="col-md-8 selectContainer">
                      <div class="input-group">
                        <span class="input-group-addon"><i class="glyphicon glyphicon-calendar"></i></span>
                        <input name="mtxtFinMant" id="mtxtFinMant" class="form-control" type="text">
                      </div>
                    </div>
                  </div>                 
                </fieldset>
                <!--  fin seccion derecha form---->
              </div>

                </div>

                <div class="modal-footer">
                    <button type="button" class="btn btn-danger" id="mbtnDeleteComentario" style="float: left;"><i class='glyphicon glyphicon-remove'></i>&nbsp;<?= $this->lang->line('button_eliminate') ?></button>
                    <button type="button" class="btn btn-default" id="mbtnCerrarModal" data-dismiss="modal"><i class='glyphicon glyphicon-chevron-up'></i>&nbsp;<?= $this->lang->line('button_cancel') ?></button>
                    <button type="button" class="btn btn-info" id="mbtnUpdComentario"><i class='glyphicon glyphicon-save'></i>&nbsp;<?= $this->lang->line('button_update') ?></button>
                    <button type="button" class="btn btn-primary" id="mbtnNewComentario"><i class='glyphicon glyphicon-save'></i>&nbsp;<?= $this->lang->line('button_insert') ?></button>
                </div>
            </div>
        </div>
    </div>










