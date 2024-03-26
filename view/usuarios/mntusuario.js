var tabla;

function init() {

    $("#usuarios_form").on("submit", function (e) {
        guardaryeditar(e);
    });

    this.cargarTabla();
};

function cargarTabla (){
    var ruc=$('#usu_RucEmprx').val();
    var rol=$('#usu_Rolx').val();

    tabla = $('#usuarios_data').dataTable({
        "aProcessing": true,
        "aServerSide": true,
        dom: 'Bfrtip',
        "searching": true,
        lengthChange: true,
        colReorder: true,
        buttons: [
        {
            extend: 'excelHtml5',
            // text: '<i class="fa fa-file-excel-o"></i>',
            titleAttr: 'Exportar Excel'
        }
        ],
        "ajax": {
            url: '../../controller/usuario.php?op=listar',
            type: "post",
            data: { usu_RucEmpr: ruc, usu_Rol: rol},
            dataType: "json",
            error: function (e) {
                console.log(e.responseText);
            }
        },
        "bDestroy": true,
        "responsive": true,
        "bInfo": true,
        "iDisplayLength": 10,
        "columnDefs": [
            { targets: 1, width: "2%" },
            { targets: 4, render: $.fn.dataTable.render.ellipsis( 20 ) },
            { targets: 5, render: $.fn.dataTable.render.ellipsis( 20 ) },
            { targets: 6, render: $.fn.dataTable.render.ellipsis( 20 ) }
        ],
        "autoWidth": false,
        responsive: {
            pagingType: "simple"
          },
          "language": {
            "sProcessing": "Procesando...",
            "sLengthMenu": "Mostrar _MENU_ registros",
            "sZeroRecords": "No se encontraron resultados",
            "sEmptyTable": "Ningún dato disponible en esta tabla",
            "sInfo": "Mostrando un total de _TOTAL_ registros",
            "sInfoEmpty": "Mostrando un total de 0 registros",
            "sInfoFiltered": "(filtrado de un total de _MAX_ registros)",
            "sInfoPostFix": "",
            "sSearch": "Buscar:",
            "sUrl": "",
            "sInfoThousands": ",",
            "sLoadingRecords": "Cargando...",
            "oPaginate": {
                "sFirst": "Primero",
                "sLast": "Último",
                "sNext": "Siguiente",
                "sPrevious": "Anterior"
            },
            "oAria": {
                "sSortAscending": ": Activar para ordenar la columna de manera ascendente",
                "sSortDescending": ": Activar para ordenar la columna de manera descendente"
            }
        }
    }).DataTable();
}
function Limpiar(){
        $('#usu_Id').val(0);
         $('#usu_NomApe').val('');
         $('#usu_correo').val('');
         $('#usu_RucEmpr').val('');
         $('#usu_Passw').val('');
         $('#usu_Rol').val(0);
         $('#usu_Estado').val('');
}

$(document).on("click", "#btnnuevo", function () {
    Limpiar();
    var usu_Estado="A";
    var modo="N";
    var usu_Id = 0;
if ( $('#usu_RucEmprx').val() == "20546867731"){
    $('#usu_RucEmpr').val('');
    document.getElementById("usu_RucEmpr").readOnly = false;
} else {
    var usuruc = $('#usu_RucEmprx').val()
    $('#usu_RucEmpr').val(usuruc);
    $('#usu_Rol').val("1");
    document.getElementById("usu_RucEmpr").readOnly = true;
    document.getElementById('usu_Rol').setAttribute('readonly', true);
    document.getElementById("usu_Rol").disabled = true;
}

    $('#usu_Id').val(usu_Id);
    $('#usu_Estado').val(usu_Estado);
    $('#modo').val(modo);
    $('#modaltitulo').html("Nuevo Registro");
    $("#modalmantenimiento").modal('show');
});

function guardaryeditar(e) {
    e.preventDefault();
     var formData = new FormData($("#usuarios_form")[0]);
     for (var pair of formData.entries()) {
        console.log(pair[0] + ' = ' + pair[1]);
    }
    $.ajax({
        url: "../../controller/usuario.php?op=guardaryeditar",
        type: "POST",
        data: formData,
        contentType: false,
        processData: false,
        success: function (datos) {

            cargarTabla();
            $("#modalmantenimiento").modal('hide');
            
            swal("Correcto!", "Guardado Correctamente!", "success", {
                closeOnClickOutside: false,
                buttons: {
                    aceptar: {
                        text: "Aceptar"
                    }
                },
            });
        }
    });
}

function editar(usu_Id){
    Limpiar();
    $.post("../../controller/usuario.php?op=usuarioxid", { usu_Id: usu_Id }, function(data, status) {
        data = JSON.parse(data);
         $('#modaltitulo').html("Editar Registro de usuario");
         var modo="M";

         if ( $('#usu_RucEmprx').val() == "20546867731"){
            $('#usu_RucEmpr').val(data.usu_RucEmpr);
            document.getElementById("usu_RucEmpr").readOnly = false;
           
        } else {
            $('#usu_RucEmpr').val(data.usu_RucEmpr);
            document.getElementById("usu_RucEmpr").readOnly = true;
            document.getElementById('usu_Rol').setAttribute('readonly', true);
            document.getElementById("usu_Rol").disabled = true;
        }

         $('#usu_Id').val(data.usu_Id);
         $('#usu_NomApe').val(data.usu_NomApe);
         $('#usu_correo').val(data.usu_correo);
         //$('#usu_RucEmpr').val(data.usu_RucEmpr);
         $('#usu_Passw').val(data.usu_Passw);
         $('#usu_Rol').val(data.usu_Rol);
         $('#usu_Estado').val(data.usu_Estado);
         $('#modo').val(modo);
    });
    $("#modalmantenimiento").modal('show');
}

init();
