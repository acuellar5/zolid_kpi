$(function () {
    vista = {
        init: function () {
        	vista.getListProjects();
            vista.getCalculateMethod();
            vista.events();
            
        },

        //Obtiene los metodos de calculo para pintarlos en select modal
        getCalculateMethod: function(){
            $.post(baseurl +  'MethodCalculate/c_getMethodCalculate', 
                {
                    // param1: 'value1'
                }, 
                function(data) {

                    var obj = JSON.parse(data);
                    $.each(obj, function(i, item){// i es la posicion del arreglo (key) y el item es valor del i
                        $('#mdl_metodo').append('<option value="'+item.K_ID_CALCULATE_METHOD+'">'+item.N_CALCULATEMETHOD_NAME+'</option>')//apareca la lista de los metodos de caulculo para que aparesca en el modal
                    });

                });
        },

        //Eventos de la ventana.
        events: function () {
        	// al darle clic al boton nuevo proyecto
        	$('#btn_new_project').on('click', vista.showModalNew);
            
        },

        //muestra modal para crear proyecto
        showModalNew: function(){
            // $('#formModal_project').reset();
            // resetea el formulario (lo deja vacio)
           document.getElementById("formModal_project").reset();
            // // resetea el select (le asigna el valor vacio)
            //$('#mdl_metodo').val('');//
            $('#mdl_metodo option').attr("selected", false);
        	$('#modal_project').modal('show');
        	$('#myModalLabel').html('<strong> Nuevo Proyecto </strong>');
        },
        //Muestra el modal para modificar el proyecto
        // showModalEdit: function(){
        //     alert('jajaja');
        //     $('#modal_project').modal('show');
        //     $('#myModalLabel').html('<strong> Editar Proyecto </strong>');
        // },




        //llama los proyectos en el controlador (solo la consulta)	
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
                    {title: "Opc", data: vista.getButtons},//llamo la funcion para pintar los botones (modificar y desactivar)
                   
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
          // console.log(obj);
            return '<div class="btn-group">'
                    + '<button onclick="showModalEdit(\''+obj.K_ID_PROJECT+'\',\''+obj.N_PROJECT_NAME+'\',\''+obj.N_PROJECT_DESCRIPTION+'\',\''+obj.I_STATUS+'\',\''+obj.N_CALCULATEMETHOD_NAME+'\',\''+obj.K_ID_CALCULATE_METHOD+'\')" class="btn btn-primary btn-xs" title="Editar"><span class="glyphicon glyphicon-edit"></span></button>'
                    + '<button class="btn btn-warning btn-xs" title="Desactivar"><span class="glyphicon glyphicon-ban-circle"></span></button>'
              	 + '</div>';
        },
    	



    };
    vista.init();
});

function showModalEdit(idProject, project, description, status, calculateMethod, idCM){
    document.getElementById("formModal_project").reset();
    $('#mdl_metodo option').attr("selected", false);
    $('#myModalLabel').html('<strong> Editar Proyecto </strong>');
    $('#mdl_nombre').val(project);
    //seleccionar la opccion por texto en vez de valor (pinta en el select el metodo correspondiente al proyecto)
   // $('#mdl_metodo').find('option:contains("' + calculateMethod + '")').attr('selected', true);
    $('#mdl_metodo option[value="'+idCM+'"]').attr("selected", true);
    $('#mdl_descripcion_proyecto').val(description);
    $('#modal_project').modal('show');

}