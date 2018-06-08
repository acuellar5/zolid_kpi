
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
            $('#button_cancel').on('click', persona.clearModal);
            $('#close').on('click', persona.clearModal);
            $('#button_add_person').on('click', persona.ocultar_button_new);
        	$('#button_mod_person').on('click', persona.ocultar_button_edit);
        },

        //aplica datatables a la tabla persona
        showDataTables: function(){
            persona.tablePerson =  $('#table_information').DataTable();
        },

        //aparece modal
        showModal: function(event){

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
        	$('#modal_person').modal('show');
        	$('#modal_title_person').html(lenguage[1]);
        	$('#person_title_modals').html(lenguage[3]);
        },
        //limpia el modal cada vez que se cierra
        clearModal: function(){
             // $(this).find("input,textarea,select").val('').end();
             $('#formModal')[0].reset();
             $("label.error").remove();
        },
        //oculta los botones de agregar persona
        ocultar_button_new: function(){
            $('#button_eliminate').hide();
            $('#button_update').hide();
            $('#button_insert').show();
            $('#group_cm').hide();
            $('#group_cm_1').hide();
        },
        //oculta los botones de editar persona
        ocultar_button_edit: function(){
            $('#button_insert').hide(); 
            $('#button_eliminate').show();
            $('#button_update').show();
            $('#group_cm').show();
            $('#group_cm_1').show();
        },

    };
    persona.init();
});
    
 