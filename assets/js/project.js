$(function () {
    vista = {
        init: function () {
        	vista.getListProjects();
            vista.events();
            
        },

        //Eventos de la ventana.
        events: function () {
        	// al darle clic al boton nuevo proyecto
        	$('#btn_new_project').on('click', vista.showModalNew);
            $('.btn_edit').on('click', vista.showModalEdit);
            
        },

        //muestra modal
        showModalNew: function(){
        	$('#modal_project').modal('show');
        	$('#myModalLabel').html('<strong> Nuevo Proyecto </strong>');
        },

        showModalEdit: function(){
            alert('jajaja');
            $('#modal_project').modal('show');
            $('#myModalLabel').html('<strong> Editar Proyecto </strong>');
        },




        //llama los proyectos	
    	getListProjects: function(){
    		//metodo ajax (post)
    	    $.post( baseurl + 'Project/getListProject', 
    	    	{
    	    		//parametros
    	    		//param1: 'value1'//enviar parametros a la funcion de la ruta
    	    	},
    	    	// funcion que recibe los datos (callback)
    	    	function(data) {
    	    		// convertir el json a objeto de javascript
    	    		var obj = JSON.parse(data);
    	    		vista.printTable(obj); 
    	    	}
    	    );
    	},	
    	//pintar tabla
    	printTable: function(data){
    		// nombramos la variable para la tabla y llamamos la configuiracion
    	    vista.tablePorject = $('#table_project').DataTable(vista.configTable(data, [

                    {title: "Proyecto", data: "N_PROJECT_NAME"},
                    {title: "Descripción", data: "N_PROJECT_DESCRIPTION"},
                    {title: "Método de Calculo", data: "N_CALCULATEMETHOD_NAME"},
                    {title: "Estado", data: vista.getStatus},//llamo una funcion para pintar este campo
                    {title: "Opc", data: vista.getButtons},
                   
                ]));
        },
        // Datos de configuracion del datatable
        configTable: function (data, columns, onDraw) {
            return {
              data: data,
              columns: columns,
              //lenguaje del plugin
              /*"language": { 
                  "url": baseurl + "assets/plugins/datatables/lang/es.json"
              },*/
              columnDefs: [{
                      defaultContent: "",
                      targets: -1,
                      orderable: false,
                  }],
              order: [[0, 'asc']],
              drawCallback: onDraw
            }
        },
        // calcula el estado para pintar en la tabla 
        getStatus: function(obj){
            var response = "";
            if (obj.I_STATUS == 1) {
            	response = 'Activo';
            } else {
            	response = 'Inactivo';
            }
            return response;
        },
        //genera botones para ser pintados en la tabla de proyectos
        getButtons: function(obj){
            return '<div class="btn-group">'
                    + '<button class="btn btn-primary btn-xs btn_edit"  title="Editar"><span class="glyphicon glyphicon-edit"></span></button>'
                    + '<button class="btn btn-warning btn-xs disabler" title="Desactivar"><span class="glyphicon glyphicon-ban-circle"></span></button>'
              	 + '</div>';
        },
    	



    };
    vista.init();
});