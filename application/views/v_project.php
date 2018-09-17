<ul class="nav nav-tabs">
  <li class="active"><a data-toggle="tab" href="#Proyecto">Proyecto</a></li>
  <li class=""><a data-toggle="tab" href="#Metodo_calculo">Metodo de calculo</a></li>
</ul>

<div class="tab-content">

  <div id="Proyecto" class="tab-pane fade in active">
    <h3>Proyecto</h3>
           
     <!-- BOTON PARA AGREGAR PROYECTO -->
      <button class="btn btn-info" id="btn_new_project" style="margin-bottom: 2%;"><i class="glyphicon glyphicon-plus"></i>&nbsp; Nuevo</button>

      <table id="table_project" class="table table-bordered table-striped table-hover"></table>

      <!-- CREACION DE MODAL -->
      <!-- data-backdrop=”static” para que no se cierre el modal al hacer clic afuera -->
      <!-- data-keyboard=”false” no se cierre con la tecla escape (“esc“)  -->
      <div id="modal_project" class="modal fade" data-backdrop="static" data-keyboard="false" role="dialog">
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
          
                        <div class="form-group">
                          <label for="N_PROJECT_NAME" class="col-md-3 control-label">Nombre: &nbsp;</label>
                          <div class="col-md-8 selectContainer">
                            <div class="input-group">
                              <span class="input-group-addon"><i class="glyphicon glyphicon-edit"></i></span>
                              <input name="N_PROJECT_NAME" id="mdl_nombre" class="form-control" minlength="3" type="text" required>
                            </div>
                          </div>
                        </div>

                        <div class="form-group">
                          <label for="K_ID_CALCULATE_METHOD" class="col-md-3 control-label">Métodos de cálculo: &nbsp;</label>
                          <div class="col-md-8 selectContainer">
                            <div class="input-group">
                              <span class="input-group-addon" id="statusColor"><i class="glyphicon glyphicon-hand-right"></i></span>
                              <select name="K_ID_CALCULATE_METHOD" id="mdl_metodo" class="form-control" required>
                                <option value="">seleccione</option>
                              </select>
                            </div>
                          </div>
                        </div>

                            <div class="form-group">
                              <label for="N_PROJECT_DESCRIPTION" class="col-md-3 control-label">Descripción del proyecto: &nbsp;</label>
                              <div class="col-md-8 selectContainer">
                                    <div class="input-group">
                                      <span class="input-group-addon"><i class="glyphicon glyphicon-edit"></i></span>
                                      <textarea class="form-control" rows="5" id="mdl_descripcion_proyecto" name="N_PROJECT_DESCRIPTION"></textarea>
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
  </div>

  <div id="Metodo_calculo" class="tab-pane fade">
     <h3>Metodo de Calculo</h3>
      <!--  cuerpo    -->
       <!-- BOTON PARA AGREGAR PROYECTO -->
      <button class="btn btn-info" id="btn_new_methodCalculate" style="margin-bottom: 2%;"><i class="glyphicon glyphicon-plus"></i>&nbsp; Nuevo</button>
      <!-- Pintar la tabla -->
      <table id="table_methodCalculate" class="table table-bordered table-striped table-hover"></table>

      <!-- CREACION DE MODAL DE METODO DE CALCULO -->
      <!-- data-backdrop=”static” para que no se cierre el modal al hacer clic afuera -->
      <!-- data-keyboard=”false” no se cierre con la tecla escape (“esc“)  -->
      <div id="modal_calculateMethod" class="modal fade" data-backdrop="static" data-keyboard="false" role="dialog">
        <div class="modal-dialog modal-lg">
          <div class="modal-content">
            <div class="modal-header">
              <button type="button" class="close" data-dismiss="modal" aria-label="Close">X</button>
              <h3 class="modal-title" id="title_mc"></h3>
            </div>
            <div class="modal-body">
              <div class="first-column">
                <form class="well form-horizontal" id="formModal_project" action="<?= base_url('Project/c_saveProject'); ?>"  method="post">
                  <fieldset>
                      <fieldset class="col-md-12 control-label cssetion">
                        <!-- valores ocultos -->
                        <input type="hidden" id="K_ID_CALCULATE_METHOD" name="K_ID_CALCULATE_METHOD" value="">
          
                        <div class="form-group">
                          <label for="N_CALCULATEMETHOD_NAME" class="col-md-3 control-label">Nombre del Método de cálculo: &nbsp;</label>
                          <div class="col-md-8 selectContainer"style="margin-top: 20px;">
                            <div class="input-group">
                              <span class="input-group-addon"><i class="glyphicon glyphicon-edit"></i></span>
                              <input name="N_CALCULATEMETHOD_NAME" id="mdl_nombre_calculateMethod" class="form-control" minlength="3" type="text" required>
                            </div>
                          </div>
                        </div>
                      </fieldset>
                      <!--  fin seccion izquierda form-->
                    <section class="col-md-12 cssetion">
                      <fieldset class="col-md-6">
                        <h4 align="center"><strong>Porcentage</strong></h4>
                        <div class="form-group">
                          <label for="kpi_a" class="col-md-3 control-label">KPI A: &nbsp;</label>
                          <div class="col-md-8 selectContainer">
                            <div class="input-group">
                              <span class="input-group-addon"><i class="glyphicon glyphicon-edit"></i></span>
                              <input name="kpi_a" id="mdl_nombre_calculateMethod" class="form-control" minlength="3" type="text" required>
                            </div>
                          </div>
                        </div>

                        <div class="form-group">
                          <label for="kpi_a" class="col-md-3 control-label">KPI B: &nbsp;</label>
                          <div class="col-md-8 selectContainer">
                            <div class="input-group">
                              <span class="input-group-addon"><i class="glyphicon glyphicon-edit"></i></span>
                              <input name="kpi_a" id="mdl_nombre_calculateMethod" class="form-control" minlength="3" type="text" required>
                            </div>
                          </div>
                        </div>

                        <div class="form-group">
                          <label for="kpi_a" class="col-md-3 control-label">KPI C: &nbsp;</label>
                          <div class="col-md-8 selectContainer">
                            <div class="input-group">
                              <span class="input-group-addon"><i class="glyphicon glyphicon-edit"></i></span>
                              <input name="kpi_a" id="mdl_nombre_calculateMethod" class="form-control" minlength="3" type="text" required>
                            </div>
                          </div>
                        </div>

                      </fieldset>

                      <fieldset class="col-md-6">
                        <h4 align="center"><strong>Bono</strong></h4>
                        <div class="form-group">
                          <label for="kpi_a" class="col-md-3 control-label">A: &nbsp;</label>
                          <div class="col-md-8 selectContainer">
                            <div class="input-group">
                              <span class="input-group-addon"><i class="glyphicon glyphicon-edit"></i></span>
                              <input name="kpi_a" id="mdl_nombre_calculateMethod" class="form-control" minlength="3" type="text" required>
                            </div>
                          </div>
                        </div>

                        <div class="form-group">
                          <label for="kpi_a" class="col-md-3 control-label">B: &nbsp;</label>
                          <div class="col-md-8 selectContainer">
                            <div class="input-group">
                              <span class="input-group-addon"><i class="glyphicon glyphicon-edit"></i></span>
                              <input name="kpi_a" id="mdl_nombre_calculateMethod" class="form-control" minlength="3" type="text" required>
                            </div>
                          </div>
                        </div>

                        <div class="form-group">
                          <label for="kpi_a" class="col-md-3 control-label">C: &nbsp;</label>
                          <div class="col-md-8 selectContainer">
                            <div class="input-group">
                              <span class="input-group-addon"><i class="glyphicon glyphicon-edit"></i></span>
                              <input name="kpi_a" id="mdl_nombre_calculateMethod" class="form-control" minlength="3" type="text" required>
                            </div>
                          </div>
                        </div>

                      </fieldset>
                    </section>
                  </fieldset>
                </form>
              </div>
              <div class="second">
                

              </div>
            </div>

            <div class="modal-footer">
              <button type="button" class="btn btn-default" id="mbtnCerrarModal" data-dismiss="modal"><i class='glyphicon glyphicon-remove'></i>&nbsp;Cancelar</button>
              <button type="submit" class="btn btn-success" id="mbtnUpdticket" form="formModal_project"><i class='glyphicon glyphicon-save'></i>&nbsp;Guardar</button>
            </div>
          </div>
        </div>
      </div> 
  </div>

</div>

<?php if (isset($_GET['msj'])): ?>
  <?php if ($_GET['msj'] == 'ok'): ?>
    <script> swal("OK!","La información se guardó correctamente!","success",); </script>
    <?php else: ?>
    <script> swal("ERROR!","La información no fue guardada correctamente!","error",); </script>
  <?php endif ?>
<?php endif ?>








