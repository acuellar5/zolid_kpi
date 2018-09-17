	<!-- MODULO PERSONA  -->
<ul class="nav nav-tabs">
    <li class="active"><a data-toggle="tab" href="#person_tab">Personas</a></li>
    <li class=""><a data-toggle="tab" href="#report_tap">Informes</a></li>
</ul>

<!--*********************  Contendio de la pestaña de control de cambios  *********************-->
<div class="tab-content" id=" ">
	<!--*********************  Contendio de la pestaña OTP por sedes *********************-->
    <div id="person_tab" class="tab-pane fade in active">
        <h3>Personal</h3>

        <button type="button" class="btn btn-success btnnuevapersona" id="new_person_btn">
      		<span class="glyphicon glyphicon-plus"></span>Agregar Persona
    	</button>
        <table id="listPersonTable" class="table table-hover table-bordered table-striped dataTable_camilo">            
            <tfoot>
                <tr>
                    <th></th>
                    <th></th>
                    <th></th>
                    <th></th>
                    <th></th>
                    <th></th>                    
                </tr>
            </tfoot>
        </table>
    </div>

    <!--*********************  Contendio de la pestaña de OTP *********************-->
    <div id="report_tap" class="tab-pane fade">
        <h3>Informes</h3>
        <!-- <table id="trackChanges_OTP" class="table table-hover table-bordered table-striped dataTable_camilo" width="100%">
            <tfoot>
                <tr>
                    <th></th>
                    <th></th>
                    <th></th>
                    <th></th>
                    <th></th>
                    <th></th>
                    <th></th>
                                       
                </tr>
            </tfoot>
        </table> -->
    </div>
</div>

<!--*********************  MODAL PARA CREAR UN NUEVO USUARIO  *********************-->

<div id="modal_new_person" class="modal fade" data-backdrop="static" data-keyboard="false" role="dialog">
        <div class="modal-dialog modal-md">
          <div class="modal-content">
            <div class="modal-header">
              <button type="button" class="close" data-dismiss="modal" aria-label="Close">X</button>
              <h3 class="modal-title" id="myModalLabel"></h3>
            </div>
            <div class="modal-body">
              <div>
                <form class="well form-horizontal" id="formModal_project" action="<?= base_url('Project/c_saveProject'); ?>"  method="post">
                  <fieldset>
                    <div class="widget bg_white m-t-25 display-block">
                      <fieldset class="col-md-12 control-label">
                        <!-- valores ocultos -->
                        <input type="hidden" id="K_ID_PROJECT" name="K_ID_PROJECT" value="">
          				
          				<!-- campo para ingresar el numero de cedula -->
                        <div class="form-group">
                          <label for="K_ID_DOCUMENT" class="col-md-3 control-label">Cedula: &nbsp;</label>
                          <div class="col-md-8 selectContainer">
                            <div class="input-group">
                              <span class="input-group-addon"><i class="glyphicon glyphicon-edit"></i></span>
                              <input name="K_ID_DOCUMENT" id="mdl_cedula" class="form-control" minlength="3" type="number" required>
                            </div>
                          </div>
                        </div>

                        <!-- campo para ingresar el nombre -->
                        <div class="form-group">
                          <label for="N_NAME" class="col-md-3 control-label">Nombre: &nbsp;</label>
                          <div class="col-md-8 selectContainer">
                            <div class="input-group">
                              <span class="input-group-addon"><i class="glyphicon glyphicon-user"></i></span>
                              <input name="N_NAME" id="mdl_nombre" class="form-control" minlength="3" type="text" required>
                            </div>
                          </div>
                        </div>

                        <!-- campo para ingresar el apellido -->
                        <div class="form-group">
                          <label for="N_LAST_NAME" class="col-md-3 control-label">Apellido: &nbsp;</label>
                          <div class="col-md-8 selectContainer">
                            <div class="input-group">
                              <span class="input-group-addon"><i class="glyphicon glyphicon-user"></i></span>
                              <input name="N_LAST_NAME" id="mdl_apellido" class="form-control" minlength="3" type="text" required>
                            </div>
                          </div>
                        </div>

                        <!-- campo para ingresar el apellido -->
                        <div class="form-group">
                          <label for="persona_correo" class="col-md-3 control-label">Email: &nbsp;</label>
                          <div class="col-md-8 selectContainer">
                            <div class="input-group">
                              <span class="input-group-addon"><i class="glyphicon glyphicon-edit"></i></span>
                              <input name="persona_correo" id="mdl_email" class="form-control" minlength="3" type="mail" required>
                            </div>
                          </div>
                        </div>
						
						<!-- seleccionar el cargo -->
						<div class="form-group">
                        <label for="Cargo" class="col-md-3 control-label">Cargo:</label>
                        <div class="col-md-8 selectContainer">
                        	<div class="input-group">
                        	<span class="input-group-addon"><i class="glyphicon glyphicon-edit"></i></span>
						    <select class="form-control" id="sel1">
						        <option>Administrador</option>
						        <option>Empleado</option>
						    </select>
						    </div>
						</div>
						</div>

						<!-- campo para ingresar la contraseña -->
                        <div class="form-group">
                          <label for="N_PASSWORD" class="col-md-3 control-label">Contraseña: &nbsp;</label>
                          <div class="col-md-8 selectContainer">
                            <div class="input-group">
                              <span class="input-group-addon"><i class="glyphicon glyphicon-edit"></i></span>
                              <input name="N_PASSWORD" id="mdl_contrasena" class="form-control" minlength="3" type="text" required>
                            </div>
                          </div>
                        </div>

                      </fieldset>
                      <!--  fin seccion izquierda form-->

                    </div>
                    <div class="widget bg_white m-t-25 display-block">

                    </div>

                  </fieldset>
                </form>
              </div>
            </div>

            <div class="modal-footer">
              <button type="button" class="btn btn-default" id="mbtnCerrarModal" data-dismiss="modal"><i class='glyphicon glyphicon-remove'></i>&nbsp;Cancelar</button>
              <button type="submit" class="btn btn-success" id="mbtnUpdticket" form="formModal_project"><i class='glyphicon glyphicon-save'></i>&nbsp;Guardar</button>
            </div>
          </div>
        </div>
      </div> 