$(document).ready(function() { 
    $('#table_information').DataTable( { 
        // "scrollX": true 
        "autoWidth": true,


    }); 
});

$(function () {
    persona = {
        init: function () {
            persona.events();
            persona.showDataTables();
            
        },

        //Eventos de la ventana.
        events: function () {
        	$('.button_des_person').on('click', persona.showModal);
            $('#button_add_person').on('click', persona.showModalNew);
            $('.close_mod_pers').on('click', persona.clearModal);
            $('#button_update').on('click', persona.updatePerson);
            $('#button_eliminate').on('click', persona.updateEstatePerson);
        },

        //aplica datatables a la tabla persona
        showDataTables: function(){
            persona.tablePerson =  $('#table_information').DataTable();
        },

        //aparece modal
        showModal: function(event){

            $('#button_insert').hide(); 
            $('#button_eliminate').show();
            $('#button_update').show();
            $('#group_cm').show();
            $('#group_cm_1').show();
            //$('.proyct_person').hide();
            // $(".gorups_person").attr('disabled','disabled'); 
            $( "#I_TIME_WORKED" ).prop( "disabled", true );
            $( "#K_ID_DOCUMENT" ).prop( "disabled", true );
            

        	var button = $(this);
        	var trParent = button.parents('tr');
            $('#modal_person').modal('show');
            $('#modal_title_person').html(lenguage[0]);
            $('#person_title_modals').html(lenguage[2]);
            var record = persona.tablePerson.row(trParent).data();
        	$('#K_ID_DOCUMENT').val(record[0]);
        	$('#N_NAME').val(record[1]);
        	$('#N_LAST_NAME').val(record[2]);
            $('#D_START_DAY').val(record[3]);
        	$('#D_END_DAY').val(record[4]);
        	$('#I_TIME_WORKED').val(record[5]);
        	$('#D_TRIAL_PERIOD').val(record[6]);
            $('#K_ID_POSITION').val(record[7]);
            $('#N_PROJECT_NAME').val(record[8]);
            $('#N_CALCULATEMETHOD_NAME').val(record[9]);
            $('#N_NAME_ROLE').val(record[10]);
            $('#I_STATUS').val(record[11]);


             var status = $('#I_STATUS').val();
             //alert(status);
            //var datos = (status == 'Inactivo') ? console.log('hola') : ;
            if (status == 'Inactivo') {
                $('#button_eliminate').attr('class', 'btn btn-success');
                
                $('#button_eliminate').html('<i class="glyphicon glyphicon-check"></i> Activar');
                
            } else {
               $('#button_eliminate').attr('class', 'btn btn-warning');
                
                $('#button_eliminate').html('<i class="glyphicon glyphicon-remove"></i> Desactivar');
            }
        },
        showModalNew: function(){
            $('#button_eliminate').hide();
            $('#button_update').hide();
            $('#button_insert').show();
            $('#group_cm').hide();
            $('#group_cm_1').hide();

        	$('#modal_person').modal('show');
        	$('#modal_title_person').html(lenguage[1]);
        	$('#person_title_modals').html(lenguage[3]);
            $( "#I_TIME_WORKED" ).prop( "disabled", false );
            $( "#K_ID_DOCUMENT" ).prop( "disabled", false );
        },
        //limpia el modal cada vez que se cierra
        clearModal: function(){   
             $('#formModal')[0].reset();
             $("label.error").remove();
        },
        //
        updatePerson: function(){



            var id = $('#K_ID_DOCUMENT').val();
            var nombre = $('#N_NAME').val();
            var apellido = $('#N_LAST_NAME').val() ;
            var dia_inicio = $('#D_START_DAY').val() ;
            var tiempo_trabajado= $('#D_TRIAL_PERIOD').val();
            var cargo = $('#K_ID_POSITION').val();
            var nombre_proyecto= $('#K_ID_PROJECT').val();
            var role = $('#N_NAME_ROLE').val();
            //var estado = $('#I_STATUS').val();
            var fecha_fin = $('#D_END_DAY').val();

            $.post( baseurl +"User/update_user",
            {
                K_ID_DOCUMENT: id,
                N_NAME: nombre,
                N_LAST_NAME: apellido,
                D_START_DAY: dia_inicio,
                D_TRIAL_PERIOD: tiempo_trabajado,
                K_ID_POSITION: cargo,
                K_ID_PROJECT: nombre_proyecto,
                N_NAME_ROLE: role,
                //I_STATUS: estado,
                D_END_DAY: fecha_fin
            },
            function(data){
                 //console.log(data);
                 var res = JSON.parse(data);
                 console.log(res);
                 if (res == 1) {
                     swal("Se actualizo correctamente!", "", "success");
                     setTimeout('document.location.reload()',1500);
                 }else {
                   swal("No actualizo correctamente!", "", "error");
                 }

            });
         },


     // Actualizar estado
        updateEstatePerson: function(){
          var status = $('#I_STATUS').val();
          // alert(status);
          var datos = (status == 'Activo') ? 'desactivar' : 'activar';

          swal({
             title: "¿Está seguro?",
             text: "Esta apunto de "+datos+" esta persona!",
             icon: "warning",
             buttons: true,
             dangerMode: true,
            })
           .then((willDelete) => {
             if (willDelete) {


                  swal({
                        title: "¿Seguro que está seguro?",
                        text: "Está apunto de "+datos+" ésta persona!",
                        icon: "warning",
                        buttons: true,
                        dangerMode: true,
                       }) .then((willDelete) => {
             if (willDelete) { 


                        persona.showModalDate();








    








                   var documento = $('#K_ID_DOCUMENT').val();
                   var estado = $('#I_STATUS').val();
                    $.post( baseurl +"User/c_update_estate_person",
                   {              
                       K_ID_DOCUMENT: documento,    
                       I_STATUS: estado    
                   },
                   function(data){
                       console.log(data);
                       var res = JSON.parse(data);
                       console.log(res);
                       if (res == 1) {
                           //swal("Se actualizo correctamente!", "", "success");
                           //setTimeout('document.location.reload()',1500);
                       }else {
                         swal("No actualizo correctamente!", "", "error");
                       }

                   });
                       } else {
                         swal('No se realizó el cambio','', 'error');
                       }
                                                    });  
                       } else {
                         swal('No se realizó el cambio','', 'error');
                       }
                                  });                                                    
                    
          },

           //
           showModalDate: function(){
            $('#smallModal').modal('show');
            
           },

                                     
        };
        persona.init();
    });
        
