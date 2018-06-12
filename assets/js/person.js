
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
            $('#button_update').on('click', persona.updatePerson)
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
            console.log(record);
        	$('#K_ID_DOCUMENT').val(record[0]);
        	$('#N_NAME').val(record[1]);
        	$('#N_LAST_NAME').val(record[2]);
        	$('#D_START_DAY').val(record[3]);
        	$('#I_TIME_WORKED').val(record[4]);
        	$('#D_TRIAL_PERIOD').val(record[5]);
            $('#K_ID_POSITION').val(record[6]);
            $('#N_PROJECT_NAME').val(record[7]);
            $('#N_CALCULATEMETHOD_NAME').val(record[8]);
            $('#N_NAME_ROLE').val(record[9]);
            $('#I_STATUS').val(record[10]);
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
          //var cargo = $('#K_ID_POSITION').val();
          //var nombre_proyecto= $('#N_PROJECT_NAME').val();
            var role = $('#N_NAME_ROLE').val();
            var estado = $('#I_STATUS').val();
            var fecha_fin = $('#D_END_DAY').val();

            $.post( baseurl +"User/update_user",
            {
                K_ID_DOCUMENT: id,
                N_NAME: nombre,
                N_LAST_NAME: apellido,
                D_START_DAY: dia_inicio,
                D_TRIAL_PERIOD: tiempo_trabajado,
               // K_ID_POSITION: cargo,
               // N_PROJECT_NAME: nombre_proyecto,
                N_NAME_ROLE: role,
                I_STATUS: estado,
                D_END_DAY: fecha_fin
            },
            function(data){
                            console.log(data);
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

    };
    persona.init();
});
    
 