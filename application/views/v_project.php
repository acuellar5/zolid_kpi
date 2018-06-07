<button class="btn btn-info" id="btn_new_project"><i class="glyphicon glyphicon-plus"></i>&nbsp; Nuevo</button><br><br><br>

<table id="table_project" class="table table-bordered table-striped table-hover"></table>

<!-- Modal Cierre -->
<div id="modal_project" class="modal fade" role="dialog">
  <div class="modal-dialog modal-lg">
    <div class="modal-content">
      <div class="modal-header">
        <button type="button" class="close" data-dismiss="modal" aria-label="Close">X</button>
        <h3 class="modal-title" id="myModalLabel"></h3>
      </div>
      <div class="modal-body">
        <div>
          <form class="well form-horizontal" id="formModal" action=""  method="post" data-action="FOR_UPDATE" novalidate="novalidate">
            <fieldset>
              <div class="widget bg_white m-t-25 display-block">
                <fieldset class="col-md-6 control-label">
                  <!-- valores ocultos -->
                  <input type="hidden" id="mtxtTicket" value="">

                  <div class="form-group">
                    <label for="mdl_name" class="col-md-3 control-label">Nombre: &nbsp;</label>
                    <div class="col-md-8 selectContainer">
                      <div class="input-group">
                        <span class="input-group-addon"><i class="glyphicon glyphicon-home"></i></span>
                        <input name="N_PROJECT_NAME" id="mdl_name" class="form-control" type="text">
                      </div>
                    </div>
                  </div>

                  <div class="form-group">
                    <label for="mtxtProgramado" class="col-md-3 control-label">Programado: &nbsp;</label>
                    <div class="col-md-8 selectContainer">
                      <div class="input-group">
                        <span class="input-group-addon"><i class="glyphicon glyphicon-dashboard"></i></span>
                        <input name="mtxtProgramado" id="mtxtProgramado" class="form-control" type="text" disabled="true">
                      </div>
                    </div>
                  </div>

                  <div class="form-group">
                    <label for="mtxtIniMant" class="col-md-3 control-label">Ini Manten: &nbsp;</label>
                    <div class="col-md-8 selectContainer">
                      <div class="input-group">
                        <span class="input-group-addon"><i class="glyphicon glyphicon-calendar"></i></span>
                        <input name="mtxtIniMant" id="mtxtIniMant" class="form-control" type="text" disabled="true">
                      </div>
                    </div>
                  </div>
                </fieldset>
                <!--  fin seccion izquierda form-->
                <!--  inicio seccion derecha form-->
                <fieldset>

                  <div class="form-group">
                    <label for="mtxtEstado" class="col-md-3 control-label">Estado: &nbsp;</label>
                    <div class="col-md-8 selectContainer">
                      <div class="input-group">
                        <span class="input-group-addon" id="statusColor"><i class="glyphicon glyphicon-hand-right"></i></span>
                        <select name="mtxtEstado" id="mtxtEstado" class="form-control"> <!-- onchange="realizarCalificacion()" -->
                          <option value="1">Abierto</option>
                          <option value="2">En Progreso</option>
                          <option value="3">Cancelado</option>
                          <!-- <option value="4">En Espera Interventoria</option> -->
                          <option value="5">Ejecutado</option>
                        </select>
                      </div>
                    </div>
                  </div>

                  <div class="form-group">
                    <label for="mtxtDuracion" class="col-md-3 control-label">Duración: &nbsp;</label>
                    <div class="col-md-8 selectContainer">
                      <div class="input-group">
                        <span class="input-group-addon"><i class="glyphicon glyphicon-time"></i></span>
                        <input name="mtxtDuracion" id="mtxtDuracion" class="form-control" type="text" disabled="true">
                      </div>
                    </div>
                  </div>

                  <div class="form-group">
                    <label for="mtxtFinMant" class="col-md-3 control-label">Fin Manten: &nbsp;</label>
                    <div class="col-md-8 selectContainer">
                      <div class="input-group">
                        <span class="input-group-addon"><i class="glyphicon glyphicon-calendar"></i></span>
                        <input name="mtxtFinMant" id="mtxtFinMant" class="form-control" type="text" disabled="true">
                      </div>
                    </div>
                  </div>                 
                </fieldset>
                <!--  fin seccion derecha form---->
              </div>

              <div class="widget bg_white m-t-25 display-block">
                <h2 class="h4 mp">
                  <i class="fa fa-fw fa-question-circle"></i>IT
                </h2>
                <fieldset class="col-md-6 control-label">
                  <div class="form-group">
                    <label for="mtxtTecIT" class="col-md-3 control-label">Téc IT: &nbsp;</label>
                    <div class="col-md-8 selectContainer">
                      <div class="input-group">
                        <span class="input-group-addon"><i class='glyphicon glyphicon-user'></i></span>
                        <select name="mtxtTecIT" id="mtxtTecIT" class="form-control mtxtTecnico"> <!-- onchange="realizarCalificacion()" -->
                          <option value=""></option>
                        </select>
                      </div>
                    </div>
                  </div>

                  <div class="form-group">
                    <label for="mtxtIniIT" class="col-md-3 control-label">Inicio IT: &nbsp;</label>
                    <div class="col-md-8 selectContainer">
                      <div class="input-group">
                        <span class="input-group-addon"><i class='glyphicon glyphicon-calendar'></i></span>
                        <input name="mtxtIniIT" id="mtxtIniIT" class="form-control" type="date">
                      </div>
                    </div>
                  </div>
                </fieldset>
                <!--  fin seccion izquierda form---->

                <!--  inicio seccion derecha form---->
                <fieldset>
                  <div class="form-group">
                    <label for="mtxtAuxIT" class="col-md-3 control-label">Aux IT: &nbsp;</label>
                    <div class="col-md-8 selectContainer">
                      <div class="input-group">
                        <span class="input-group-addon"><i class='glyphicon glyphicon-user'></i></span>
                        <select name="mtxtAuxIT" id="mtxtAuxIT" class="form-control mtxtTecnico"> <!-- onchange="realizarCalificacion()" -->
                          <option value=""></option>
                        </select>
                      </div>
                    </div>
                  </div>

                  <div class="form-group">
                    <label for="mtxtFinIT" class="col-md-3 control-label">Fin IT: &nbsp;</label>
                    <div class="col-md-8 selectContainer">
                      <div class="input-group">
                        <span class="input-group-addon"><i class='glyphicon glyphicon-calendar'></i></span>
                        <input name="mtxtFinIT" id="mtxtFinIT" class="form-control" type="date">
                      </div>
                    </div>
                  </div>
                </fieldset>
              </div>

              <div class="widget bg_white m-t-25 display-block">
                <h2 class="h4 mp">
                  <i class="fa fa-fw fa-question-circle"></i>&nbsp;&nbsp; AA
                </h2>
                <fieldset class="col-md-6 control-label">

                  <div class="form-group">
                    <label for="mtxtTecAA" class="col-md-3 control-label">Téc AA: &nbsp;</label>
                    <div class="col-md-8 selectContainer">
                      <div class="input-group">
                        <span class="input-group-addon"><i class='glyphicon glyphicon-user'></i></span>
                        <select name="mtxtTecAA" id="mtxtTecAA" class="form-control mtxtTecnico"> <!-- onchange="realizarCalificacion()" -->
                          <option value=""></option>
                        </select>
                      </div>
                    </div>
                  </div>

                  <div class="form-group">
                    <label for="mtxtIniAA" class="col-md-3 control-label">Inicio AA: &nbsp;</label>
                    <div class="col-md-8 selectContainer">
                      <div class="input-group">
                        <span class="input-group-addon"><i class='glyphicon glyphicon-calendar'></i></span>
                        <input name="mtxtIniAA" id="mtxtIniAA" class="form-control" type="date">
                      </div>
                    </div>
                  </div>
                </fieldset>
                <!--  fin seccion izquierda form---->

                <!--  inicio seccion derecha form---->
                <fieldset>

                  <div class="form-group">
                    <label for="mtxtAuxAA" class="col-md-3 control-label">Aux AA: &nbsp;</label>
                    <div class="col-md-8 selectContainer">
                      <div class="input-group">
                        <span class="input-group-addon"><i class='glyphicon glyphicon-user'></i></span>
                        <select name="mtxtAuxAA" id="mtxtAuxAA" class="form-control mtxtTecnico"> <!-- onchange="realizarCalificacion()" -->
                          <option value=""></option>
                        </select>
                      </div>
                    </div>
                  </div>

                  <div class="form-group">
                    <label for="mtxtFinAA" class="col-md-3 control-label">Fin AA: &nbsp;</label>
                    <div class="col-md-8 selectContainer">
                      <div class="input-group">
                        <span class="input-group-addon"><i class='glyphicon glyphicon-calendar'></i></span>
                        <input name="mtxtFinAA" id="mtxtFinAA" class="form-control" type="date">
                      </div>
                    </div>
                  </div>
                </fieldset>
              </div>

              <div class="widget bg_white m-t-25 display-block">
                <div class="form-group" id="formCenter">
                  <!-- <label for="mtxtObservaciones" class="col-md-3 control-label">Observaciones: &nbsp;</label> -->
                  <div class="col-md-10 selectContainer">
                    <div class="input-group">
                      <span class="input-group-addon"><i class='glyphicon glyphicon-edit'></i></span>
                      <input name="mtxtObservaciones" id="mtxtObservaciones" class="form-control" type="text" placeholder="Observaciones">
                    </div>
                  </div>
                </div>                
              </div>




              <!-- espacio para adicionar tecnicos -->
              <div class="widget bg_white m-t-25 display-block">

                <fieldset class="col-md-6 control-label" id="fieldsetIT">
                  <div id="newItSeccion"></div>

                </fieldset>
                <!--  fin seccion izquierda form---->

                <!--  inicio seccion derecha form---->
                <fieldset id="fieldsetAA">
                  <span class="mg-20"><b> Añadir Técnico </b></span>
                  <div id="newAASeccion"></div>
                </fieldset>

              </div>

            </fieldset>
          </form>
        </div>
      </div>

      <div class="modal-footer">
        <button type="button" class="btn btn-default" id="mbtnCerrarModal" data-dismiss="modal"><i class='glyphicon glyphicon-remove'></i>&nbsp;Cancelar</button>
        <button type="button" class="btn btn-info" id="mbtnUpdticket"><i class='glyphicon glyphicon-save'></i>&nbsp;Actualizar</button>
      </div>
    </div>
  </div>
</div>

