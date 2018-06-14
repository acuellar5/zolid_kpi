$(function(){
	//Es un objeto que inicializa todo
	mc = {
		init: function(){
			mc.getAllmethodCalculates();
			mc.events();
		},
        
        events: function () {
        	// al darle clic al boton nuevo proyecto
        	$('#btn_new_methodCalculate').on('click', mc.showModalNew);
            
        },	
        showModalNew: function(){
        	$('#modal_calculateMethod').modal('show');
        	$('#title_mc').html('<strong> Métodos de cálculo </strong>');
        },
        
        //llama los metodos de calculo en el controlador (solo la consulta)	
    	getAllmethodCalculates: function(){
    		//metodo ajax (post)
    	    $.post( baseurl + 'MethodCalculate/c_getAllmethodCalculate', 
    	    	{
    	    		//parametros
    	    		//param1: 'value1'//enviar parametros a la funcion de la ruta
    	    	},
    	    	// funcion que recibe los datos (callback)
    	    	function(data) {
    	    		// convertir el json a objeto de javascript
    	    		var obj = JSON.parse(data);
    	    		mc.printTable(obj); 
    	    	}
    	    );
    	},	
		//Pintar la tabla de Metodo de calculo
		printTable: function(data){
			mc.tableCalculateMethod = $('#table_methodCalculate'). DataTable(mc.configTable(data,[
				{title:"Métodos de cálculo", data: "N_CALCULATEMETHOD_NAME"},
				{title:"Porcentaje de KPI A", data: mc.geti_porcentagekpisa},
				{title:"Porcentaje de KPI B", data:"I_PORCENTAGEKPISB"},
				{title:"Porcentaje de KPI C", data:"I_PORCENTAGEKPISC"},
				{title:"Porcentaje de Bono A", data:"I_PORCENTAGEBONUSA"},
				{title:"Porcentaje de Bono B", data:"I_PORCENTAGEBONUSB"},
				{title:"Porcentaje de Bono C", data:"I_PORCENTAGEBONUSC"},
				{title:"Estado", data:mc.getStatus},	
				{title:" Opción", data:mc.getBotton},		

				]));
		},
		// Datas de configuracion del datatable
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
              order: [[7, 'asc']],
              drawCallback: onDraw
            }
        },
       	//Cambiar a estado
        getStatus: function(obj){
            var response = "";
            if (obj.I_STATUS == 1) {
            	response = 'Activo';
            } else {
            	response = 'Inactivo';
            }
            return response;
        },
        getBotton: function(obj){
          let title;
          let icon;
          let classButton;
          if (obj.I_STATUS == 1) {
            title = "Desactivar";
            icon = "glyphicon-ban-circle";
            classButton = "warning";
          } else {
            title = "Activar";
            icon = "glyphicon-ok-sign";
            classButton = "success";
          }
          const button = '<div class="btn-group">'
                       + '<button onclick="showModalEditMC(\''+obj.K_ID_CALCULATE_METHOD+'\',\''+obj.N_CALCULATEMETHOD_NAME+'\',\''+obj.I_PORCENTAGEKPISA+'\',\''+obj.I_STATUS+'\',\''+obj.I_PORCENTAGEKPISB+'\',\''+obj.I_PORCENTAGEKPISC+'\',\''+obj.I_PORCENTAGEBONUSA+'\',\''+obj.I_PORCENTAGEBONUSB+'\',\''+obj.I_PORCENTAGEBONUSC+'\')" class="btn btn-primary btn-xs" title="Editar"><span class="glyphicon glyphicon-edit"></span></button>'
                       + '<button onclick="showpopUpDesactivateMC(\''+obj.K_ID_CALCULATE_METHOD+'\',\''+obj.I_STATUS+'\')" class="btn btn-'+classButton+' btn-xs" title="'+title+'"><span class="glyphicon '+icon+'"></span></button>'
                       + '</div>';
              return button;     
        },
        //Mostrar modal para editar el metodo de calculo
        showModalEditMC: function(){
          document.getElementById("formModal_CalculateMethod").reset();
          $('#title_mc').html('<strong> Editar Método de Cálculo </strong>');
        },

        //Mostrar Pop-Up para desactivar el metodo de calculo 
        showpopUpDesactivateMC: function(){

        },


        //Colocar el porcentaje al  numero dentro de la tabla 
        geti_porcentagekpisa: function(obj){
          return obj.I_PORCENTAGEKPISA;
        },
    };
    mc.init();
});