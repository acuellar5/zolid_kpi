// *******************************************TABLAS QUE MUESTRA LA LISTA DE LAS PERSONAS ***************************
$(function(){
allperson = {
    init: function () {
        allperson.events();
        allperson.getListAllPerson();

    },
    
    events: function () {
      // al darle clic al boton nueva persona
      $('#new_person_btn').on('click', allperson.showModalNew);
    },
    getListAllPerson: function () {
        //metodo ajax (post)
        $.post(baseurl +  'User/c_getListOtsAllPerson',
                {
                    //parametros

                },
                // funcion que recibe los datos
                        function (data) {
                            // convertir el json a objeto de javascript
                            var obj = JSON.parse(data);
                            allperson.printTable(obj);
                        }
                );
            },

    //muestra modal para crear una nueva persona
    showModalNew: function(){
      
      $('#modal_new_person').modal('show');
      $('#myModalLabel').html('<strong> Agregar persona </strong>');
    },

    printTable: function (data) {
        // nombramos la variable para la tabla y llamamos la configuiracion
        allperson.listPersonTable = $('#listPersonTable').DataTable(allperson.configTable(data, [

            {title: "ID", data: "K_ID_DOCUMENT"},
            {title: "Nombre completo", data: "persona"},
            {title: "Cargo", data: "N_NAME_ROLE"},
            {title: "Fecha de Inicio", data: "D_START_DAY"},
            {title: "Estado", data: allperson.getStatus},
            {title: "Opción", data: allperson.getButonsperson},
        ]));
    },
    // Datos de configuracion del datatable
    configTable: function (data, columns, onDraw) {
        return {
            initComplete: function () {
                $('#listPersonTable tfoot th').each(function () {
                    $(this).html('<input type="text" placeholder="Buscar" />');
                });
                var r = $('#listPersonTable tfoot tr');
                r.find('th').each(function () {
                    $(this).css('padding', 8);
                });
                $('#listPersonTable thead').append(r);
                $('#search_0').css('text-align', 'center');

                // DataTable
                var table = $('#listPersonTable').DataTable();

                // Apply the search
                table.columns().every(function () {
                    var that = this;

                    $('input', this.footer()).on('keyup change', function () {
                        if (that.search() !== this.value) {
                            that.search(this.value).draw();
                        }
                    });
                });
            },
            data: data,
            columns: columns,
            "language": {
                "url": baseurl + "/assets/plugins/datatables/lang/es.json"
            },
            dom: 'Blfrtip',
            buttons: [
                {
                    text: 'Excel <span class="fa fa-file-excel-o"></span>',
                    className: 'btn-cami_cool',
                    extend: 'excel',
                    title: 'BestandVet EXCEL',
                },
                {
                    text: 'Imprimir <span class="fa fa-print"></span>',
                    className: 'btn-cami_cool',
                    extend: 'print',
                    title: 'Reporte Bestand',
                }
            ],
            select: true,
            "lengthMenu": [[10, 25, 50, -1], [10, 25, 50, "All"]],
            ordering: true,
            columnDefs: [{
                    // targets: -1,
                    // visible: false,
                    defaultContent: "",
                    // targets: -1,
                    orderable: false,
                }],
            order: [[1, 'desc']],
            drawCallback: onDraw
        }
    },

    getButonsperson: function (obj) {
            // return "<a class='ver-mail btn_datatable_cami'><span class='glyphicon glyphicon-print'></span></a>";
            var button = '<div class="btn-group" style="display: inline-flex;">';

            button += '<a href="" target="_blank" class="btn btn-default btn-xs btn_datatable_cami" title="Editar"><span class="glyphicon glyphicon-edit"></span></a>';
            button += '<a class="btn btn-default btn-xs btn_datatable_cami btn_file" title="Desactivar"><span class="glyphicon glyphicon-ban-circle"></span></a>';
            button +='</div>';

            return button;

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
};
allperson.init();
});
