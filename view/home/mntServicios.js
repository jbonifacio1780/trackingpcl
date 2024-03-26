var tabla;

function init() {
    ruc=$('#usu_RucEmprx').val();
    if(ruc=="20546867731") {
        document.getElementById("txtCliente").style.visibility = "visible";
        cargarCombo();
    } else {
        document.getElementById("txtCliente").style.visibility = "hidden";
        this.cargarListado(ruc);
    }
    
};

function cargarCombo() {
    $.post("../../controller/servicios.php?op=listarClientes", {}, function(data) {
        $("#txtCliente").html(data);
    });
}

$("#txtCliente").change(function() {
    $("#txtCliente option:selected").each(function() {
       ruc =  $(this).val();
       console.log(ruc);
       cargarListado(ruc);
    });
});

function CambiarClave() {   
    var usuario = $('#usuario').val();
    var Clave = $('#pass').val();
    if (Clave.length <= 0)
    {
        swal("Error!", "No debe de dejar en blanco el password", "error", {
            closeOnClickOutside: false,
            buttons: {
                aceptar: {
                    text: "Aceptar"
                }
            },
        });
        return;
    }
    $.ajax({
        url: "../../controller/usuario.php?op=cambiarClave",
        type: "post",
        data: { usuario: usuario, pass : Clave },
        dataType: "json",
        success: function (datos) {
            //console.log(datos[0].Id);
            $('#pass').val("");
            $("#passwModal").modal('hide');
            if (datos[0].Id==1) {
                swal("Correcto!", datos[0].Mensaje, "success", {
                    closeOnClickOutside: false,
                    buttons: {
                        aceptar: {
                            text: "Aceptar"
                        }
                    },
                });
            } else {
                swal("Error!", datos[0].Mensaje, "error", {
                    closeOnClickOutside: false,
                    buttons: {
                        aceptar: {
                            text: "Aceptar"
                        }
                    },
                });

            }

        }
    });

}

function cargarListado(ruc) {
    tabla = $('#servicios_data').dataTable({
        "aProcessing": true,
        "aServerSide": true,
        dom: 'Bfrtip',
        initComplete: function() {
            $('servicios_data input').attr('autocomplete', 'off')
          },
        "searching": true,
        lengthChange: true,
        colReorder: true,
        
        buttons: [{
            extend: 'copyHtml5',
            text: '<i style="color: #2874A6; font-size: 20px" class="fa fa-files-o"></i>',
            titleAttr: 'Copiar contenido de grilla'
        },
        {
            extend: 'excelHtml5',
            text: '<i style="color: #2874A6; font-size: 20px" class="fa fa-file-excel-o"></i>',
            titleAttr: 'Exportar Excel'
        },
        {
            extend: 'csvHtml5',
            text: '<i style="color: #2874A6; font-size: 20px" class="fa fa-file-text-o"></i>',
            titleAttr: 'Expostar CSV'
        },
        {
            extend: 'pdfHtml5',
            text: '<i style="color: #2874A6; font-size: 20px" class="fa fa-file-pdf-o" aria-hidden="true"></i>',
            titleAttr: 'Expostar PDF'
        }
        ],
        "ajax": {
            url: '../../controller/servicios.php?op=listar',
            type: "post",
            data: { ruc: ruc},
            dataType: "json",
            error: function (e) {
                console.log(e.responseText);
            }
        },
        "bDestroy": true,
        "responsive": true,
        "bInfo": true,
        "iDisplayLength": 10,
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

function editar(vch_Num_Ref,vch_Sec_Ref,chr_IoE_Ref,chr_Ori_Con){

    $('#modaltitulo').html("Vista de registro");
    $.post("../../controller/servicios.php?op=mostrar", { vch_Num_Ref: vch_Num_Ref,vch_Sec_Ref:vch_Sec_Ref,chr_IoE_Ref:chr_IoE_Ref, chr_Ori_Con: chr_Ori_Con }, function(data, status) {
        data = JSON.parse(data);
        console.log(data);
        if (data.chr_MoA_Ref =="M") 
        {
            document.getElementById("linea").innerHTML = "<strong>Línea Naviera</strong>";
            document.getElementById("mbl").innerHTML = "<strong>Número de MBL</strong>";
            document.getElementById("pol").innerHTML = "<strong>POL</strong>";
            document.getElementById("pod").innerHTML = "<strong>POD</strong>";
        } else {
            document.getElementById("linea").innerHTML = "<strong>Línea Aérea</strong>";
            document.getElementById("mbl").innerHTML = "<strong>Número de AWB</strong>";
            document.getElementById("pol").innerHTML = "<strong>AOL</strong>";
            document.getElementById("pod").innerHTML = "<strong>AOD</strong>";
        }
        
        $('#vch_Num_Ref').val(data.vch_Num_Ref);
        $('#vch_Sec_Ref').val(data.vch_Sec_Ref);
        $('#chr_IoE_Ref').val(data.chr_IoE_Ref);
        $('#chr_Ori_Con').val(data.chr_Ori_Con);
        $('#Shipper').val(data.Shipper);
        $('#Consignee').val(data.Consignee);
        $('#Notify').val(data.Notify);
        $('#Linea').val(data.Linea);
        $('#MBLAWB').val(data.MBLAWB);
        $('#BLHijo').val(data.BLHijo);
        $('#Bookin').val(data.Bookin);
        $('#Nave').val(data.Nave);
        $('#PODAOL').val(data.PODAOL);
        $('#PODAOD').val(data.PODAOD);
        $('#ETA').val(data.ETA);
        $('#ETD').val(data.ETD);
        $('#Peso').val(data.Peso);
        $('#Volumen').val(data.Volumen);
        $('#Bulto').val(data.Bulto);
        $('#Descripcion').val(data.Descripcion);
    });
    this.cargarContenedores(vch_Num_Ref,vch_Sec_Ref,chr_IoE_Ref,chr_Ori_Con);
    this.cargarServicios(vch_Num_Ref,vch_Sec_Ref,chr_IoE_Ref,chr_Ori_Con);
    $("#modalmantenimiento").modal('show');
}

function cargarContenedores( vch_Num_Ref,vch_Sec_Ref,chr_IoE_Ref,chr_Ori_Con){
    tabla = $('#contenedores_data').dataTable({
        "aProcessing": true,
        "aServerSide": true,
        dom: 'Bfrtip',
        "searching": true,
        lengthChange: true,
        colReorder: true,
        
        buttons: [{
            extend: 'copyHtml5',
            text: '<i style="color: #2874A6; font-size: 20px" class="fa fa-files-o"></i>',
            titleAttr: 'Copiar contenido de grilla'
        },
        {
            extend: 'excelHtml5',
            text: '<i style="color: #2874A6; font-size: 20px" class="fa fa-file-excel-o"></i>',
            titleAttr: 'Exportar Excel'
        },
        {
            extend: 'csvHtml5',
            text: '<i style="color: #2874A6; font-size: 20px" class="fa fa-file-text-o"></i>',
            titleAttr: 'Expostar CSV'
        },
        {
            extend: 'pdfHtml5',
            text: '<i style="color: #2874A6; font-size: 20px" class="fa fa-file-pdf-o" aria-hidden="true"></i>',
            titleAttr: 'Expostar PDF'
        }
        ],
        "ajax": {
            url: '../../controller/servicios.php?op=listarContenedores',
            type: "post",
            data: {vch_Num_Ref: vch_Num_Ref,vch_Sec_Ref:vch_Sec_Ref,chr_IoE_Ref:chr_IoE_Ref, chr_Ori_Con: chr_Ori_Con},
            dataType: "json",
            error: function (e) {
                console.log(e.responseText);
            }
        },
        "bDestroy": true,
        "responsive": true,
        "bInfo": true,
        "iDisplayLength": 10,
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

function cargarServicios(vch_Num_Ref,vch_Sec_Ref,chr_IoE_Ref,chr_Ori_Con){
    tabla = $('#serviciosDetalle_data').dataTable({
        "aProcessing": true,
        "aServerSide": true,
        dom: 'Bfrtip',
        initComplete: function () {
            setTimeout(function() {
                  this.api().search('').draw();
              }, 300);
          },
        "searching": true,
        lengthChange: true,
        colReorder: true,
        
        buttons: [{
            extend: 'copyHtml5',
            text: '<i style="color: #2874A6; font-size: 20px" class="fa fa-files-o"></i>',
            titleAttr: 'Copiar contenido de grilla'
        },
        {
            extend: 'excelHtml5',
            text: '<i style="color: #2874A6; font-size: 20px" class="fa fa-file-excel-o"></i>',
            titleAttr: 'Exportar Excel'
        },
        {
            extend: 'csvHtml5',
            text: '<i style="color: #2874A6; font-size: 20px" class="fa fa-file-text-o"></i>',
            titleAttr: 'Expostar CSV'
        },
        {
            extend: 'pdfHtml5',
            text: '<i style="color: #2874A6; font-size: 20px" class="fa fa-file-pdf-o" aria-hidden="true"></i>',
            titleAttr: 'Expostar PDF'
        }
        ],
        "ajax": {
            url: '../../controller/servicios.php?op=listarServicios',
            type: "post",
            data: {vch_Num_Ref: vch_Num_Ref,vch_Sec_Ref:vch_Sec_Ref,chr_IoE_Ref:chr_IoE_Ref, chr_Ori_Con: chr_Ori_Con},
            dataType: "json",
            error: function (e) {
                console.log(e.responseText);
            }
        },
        "bDestroy": true,
        "responsive": true,
        "bInfo": true,
        "iDisplayLength": 10,
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
// function habilitarCheck() {
//     if (!$("#cf_check").is(":checked")) {
//         //console.log('No Estoy chequeado');
//         // var fecha = new Date().toISOString().substr(0, 10);
//         // $('#cf_vigenciahasta').val(fecha);
//         // $('#cf_vigenciahasta').prop("disabled", false);
//         // $('#cf_vigenciadias').prop("disabled", true);
//         $('#SER_AfecDetraccion').val("0");
//     } else {
//         //console.log('Si estoy chequeado');
//         $('#cf_vigenciahasta').val('');
//         // $('#cf_vigenciahasta').prop("disabled", true);
//         // $('#cf_vigenciadias').prop("disabled", false);
//         $('#SER_AfecDetraccion').val("1");
//     }
// }

// function limpiar() {
//     // $('#serv_id').val('');
//     // $('#tip_id').val('').trigger('change');
//     // $('#cat_id').val('').trigger('change');
//     // $('#prov_id').val('').trigger('change');
//     // $('#ctn_id').val('').trigger('change');
//     // $('#serv_pro').val('').trigger('change');
//     // $('#serv_nom').val('');
//     // $('#serv_nom_comercial').val('');
//     // $('#serv_precio').val('');
//     // $('#serv_obs').val('');
//     // $('#serv_docu').val('');
// }


// $(document).on("click", "#btnnuevo", function () {
//     limpiar();
//     var SER_UsuCrea="jbonifacio";
//     var SER_Est="A";
//     var Tipo="N";
//     var id = 0;
//     $('#SER_IdServicio').val(id);
//     $('#SER_UsuCrea').val(SER_UsuCrea);
//     $('#SER_Est').val(SER_Est);
//     $('#Tipo').val(Tipo);
//     $('#SER_AfecDetraccion').val("0");
//     $('#modaltitulo').html("Nuevo Registro");
//     $("#modalmantenimiento").modal('show');
// });

// function guardaryeditar(e) {
//     console.log("Hola guardar..");
//     e.preventDefault();
//      var formData = new FormData($("#servicio_form")[0]);
//      for (var pair of formData.entries()) {
//         console.log(pair[0] + ' = ' + pair[1]);
//     }
//     $.ajax({
//         url: "../../controller/servicios.php?op=guardaryeditar",
//         type: "POST",
//         data: formData,
//         contentType: false,
//         processData: false,
//         success: function (datos) {
//             $("#modalmantenimiento").modal('hide');
//             limpiar();
//             $('#servicio_data').DataTable().ajax.reload();

//             swal("Correcto!", "Guardado Correctamente!", "success", {
//                 closeOnClickOutside: false,
//                 buttons: {
//                     aceptar: {
//                         text: "Aceptar"
//                     }
//                 },
//             });
//         }
//     });
// }

init();
