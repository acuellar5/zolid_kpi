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
      <div id="modal_project" class="modal fade" role="dialog">
        <div class="modal-dialog modal-md">
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
                      <fieldset class="col-md-12 control-label">
                        <!-- valores ocultos -->
                        <input type="hidden" id="newproject" value="">
          
                        <div class="form-group">
                          <label for="mdl_name" class="col-md-3 control-label">Nombre: &nbsp;</label>
                          <div class="col-md-8 selectContainer">
                            <div class="input-group">
                              <span class="input-group-addon"><i class="glyphicon glyphicon-home"></i></span>
                              <input name="N_PROJECT_NAME" id="PROJECT_NAME" class="form-control" type="text">
                            </div>
                          </div>
                        </div>

                        <div class="form-group">
                          <label for="mtxtEstado" class="col-md-3 control-label">Métodos de cálculo: &nbsp;</label>
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
                              <label for="mdl_name" class="col-md-3 control-label">Descripción del proyecto: &nbsp;</label>
                              <div class="col-md-8 selectContainer">
                                    <div class="input-group">
                                      <span class="input-group-addon"><i class="glyphicon glyphicon-edit"></i></span>
                                      <textarea class="form-control" rows="5" id="comment"></textarea>
                                    </div>
                              </div>
                            </div>

                      </fieldset>
                      <!--  fin seccion izquierda form-->

                    </div>
                    <!-- espacio para adicionar tecnicos -->
                    <div class="widget bg_white m-t-25 display-block">

                    </div>

                  </fieldset>
                </form>
              </div>
            </div>

            <div class="modal-footer">
              <button type="button" class="btn btn-default" id="mbtnCerrarModal" data-dismiss="modal"><i class='glyphicon glyphicon-remove'></i>&nbsp;Cancelar</button>
              <button type="button" class="btn btn-info" id="mbtnUpdticket"><i class='glyphicon glyphicon-save'></i>&nbsp;Crear</button>
            </div>
          </div>
        </div>
      </div> 


  </div>

  <div id="Metodo_calculo" class="tab-pane fade">
     <h3>Metodo de Calculo</h3>
      <!--  cuerpo    -->

  </div>




</div>








