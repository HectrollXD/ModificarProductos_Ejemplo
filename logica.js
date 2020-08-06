$(document).ready(main);

function main(){
    $("#tabla").on("click", ".modificar", modificar);
    $("#guardar").click(guardar);
    traer();
    $("#campos").css("display","none");
}

function modificar(){
    var datos = {
        'codigo': $(this).attr("codigo"),
        'nombre': $(this).attr("nombre"),
        'cantidad': $(this).attr("cantidad"),
        'precio': $(this).attr("precio")
    };
    $("#tabla").css("display","none");
    $("#campos").css("display","block");
    datos_campos(datos['codigo'], datos['nombre'], datos['cantidad'], datos['precio'])
}

function datos_campos(codigo, nombre, cantidad, precio){
    $("#codigo").val(codigo);
    $("#nombre").val(nombre);
    $("#cantidad").val(cantidad);
    $("#precio").val(precio);
}

function traer(){
    $.ajax({
        type: "POST",
        url: "logica.php",
        dataType: "html"
    }).done(
        function(tablita_mamalona){
            $("#tabla").html(tablita_mamalona);
        }
    );
}

function guardar(){
    var campos = {
        'cod': $("#codigo").val(),
        'nom': $("#nombre").val(),
        'can': $("#cantidad").val(),
        'pre': $("#precio").val()
    };
    $.ajax({
        type: "POST",
        url: "update.php",
        data: campos,
        dataType: "json",
        encode: true
    }).done(
        function(estado){
            if(estado){
                alert("el producto se modificó exitosamente.");
                location.reload();
            }
            else{
                alert("no se pudo modificar el producto");
            }
        }
    );
}