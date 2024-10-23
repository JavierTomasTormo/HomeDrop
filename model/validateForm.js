//#########################################//
function ValidateID_ReferenceJS(texto){
    if (texto.length > 0){
        var reg=/^[A-Z0-9]{5}$/;

        return reg.test(texto);
        
    }
    return false;
}
//#########################################//
function ValidateSuperficieJS(nodeList) {
    var check = false;

    for (var i = 0, l = nodeList.length; i < l; i++) {
        if (nodeList[i].checked) {
            check = true;
            break;  // Si encuentras al menos uno checked, Codigo cambiado (el de yolanda estaba "MAL")
        }
    }

    return check;
}
//#########################################//
function ValidateExtrasJS(nodeList) {
    var check = false;

    for (var i = 0, l = nodeList.length; i < l; i++) {
        if (nodeList[i].checked) {
            check = true;
            break;  // Si encuentras al menos uno checked, Codigo cambiado (el de yolanda estaba "MAL")
        }
    }

    return check;
}
//#########################################//
function ValidateDatePickerJS(texto){
    if (texto.length > 0){
        return true;
    }
    return false;
}
//#########################################//
function ValidateHabitacionesJS(selectElement) {
    var selectedOptions = selectElement.selectedOptions;

    if (selectedOptions.length > 0) {
        return true;
    } else {    // Si encuentras al menos uno checked, Codigo cambiado (el de yolanda estaba "MAL")
        return false;
    }
}
//#########################################//
function ValidatePrecioJS(texto){
    if (texto.length > 0){
        var reg=/^\d+$/;
        return reg.test(texto);
    }
    return false;
}
//#########################################//
function ValidateEmailJS(texto){
    if (texto.length > 0){
        var reg=/^[a-z0-9._%+-]+@[a-z0-9.-]+\.[a-z]{2,}$/;
        return reg.test(texto);
    }
    return false;
}
//#########################################//
function ValidateDireccionJS(texto) {
    if (texto.length > 0) {
        var reg = /^[a-zA-Z0-9\s-]+$/
        return reg.test(texto);
    }
    return false;
}
//#########################################//
function ValidateBanosJS(nodeList) {
    var check = false;

    for (var i = 0, l = nodeList.length; i < l; i++) {
        if (nodeList[i].checked) {
            check = true;
            break;  // Si encuentras al menos uno checked, Codigo cambiado (el de yolanda estaba "MAL")
        }
    }

    return check;
}
//#########################################//
//#########################################//

function ValidateHomeDrop(op){

    var check=true;
    //#########################################//
                   //GET DATA//
    //#########################################//  
    var v_ID_Reference=document.getElementById('AutoIDHolder').value;

    var v_Superficie=document.getElementsByName('Superficie[]');

    var v_fecha_pub=document.getElementById('fecha_pub').value;

    var v_Habitaciones=document.getElementById('Habitaciones');
    //console.log(v_Habitaciones);
    var v_amountInput=document.getElementById('amountInput').value;

    var v_email=document.getElementById('email').value;

    var v_Direccion=document.getElementById('Direccion').value;

    var v_RadioB=document.getElementsByName('RadioB');

    var v_Extras=document.getElementsByName('Extras[]');

    //#########################################//
                 //Validate Data//
    //#########################################//

    var r_ID_Reference=ValidateID_ReferenceJS(v_ID_Reference);

    var r_Superficie=ValidateSuperficieJS(v_Superficie);

    var r_fecha_pub=ValidateDatePickerJS(v_fecha_pub);

    var r_Habitaciones=ValidateHabitacionesJS(v_Habitaciones);

    var r_amountInput=ValidatePrecioJS(v_amountInput);

    var r_email=ValidateEmailJS(v_email);

    var r_Direccion=ValidateDireccionJS(v_Direccion);

    var r_RadioB=ValidateBanosJS(v_RadioB);

    var r_Extras=ValidateExtrasJS(v_RadioB);
    
    //console.log(r_ID_Reference);
    //console.log(r_Superficie);
    //console.log(r_fecha_pub);
    //console.log(r_Habitaciones);
    //console.log(r_amountInput);
    //console.log(r_email);
    //console.log(r_Direccion);
    //console.log(r_RadioB);
    //console.log(r_Extras);
    //return false;
    
    
    //#########################################//
                 //Error Data//
    //#########################################//


    if(!r_ID_Reference){
        document.getElementById('error_id_reference').innerHTML = " <br/> * El ID de Referencia Catastral introducido no es válido";
        check=false;
    }else{
        document.getElementById('error_id_reference').innerHTML = "";
    }
    //#########################################//
    if(!r_Superficie){
        document.getElementById('error_Superficie').innerHTML = " <br/>  * No has seleccionado ninguna Superficie";
        check=false;
    }else{
        document.getElementById('error_Superficie').innerHTML = "";
    }
    //#########################################//
    if(!r_fecha_pub){
        document.getElementById('error_DatePicker').innerHTML = " <br/> * La Fecha introducida no es válida";
        check=false;
    }else{
        document.getElementById('error_DatePicker').innerHTML = "";
    }
    //#########################################//
    if(!r_Habitaciones){
        document.getElementById('error_Habitaciones').innerHTML = " <br/> * No has seleccionado ninguna Habitación";
        check=false;
    }else{
        document.getElementById('error_Habitaciones').innerHTML = "";
    }
    //#########################################//
    if(!r_amountInput){
        document.getElementById('error_Precio').innerHTML = " <br/> * No has seleccionado ningún Precio";
        check=false;
    }else{
        document.getElementById('error_Precio').innerHTML = "";
    }
    //#########################################//
    if(!r_email){
        document.getElementById('error_email').innerHTML = " <br/> * El Email introducido no es válido";
        check=false;
    }else{
        document.getElementById('error_email').innerHTML = "";
    }
    //#########################################//
    if(!r_Direccion){
        document.getElementById('error_Direccion').innerHTML = " <br/>  * La Dirección introducida no es valida (Solamente Debe contener Caracteres espacios números y guiones)";
        check=false;
    }else{
        document.getElementById('error_Direccion').innerHTML = "";
    }
    //#########################################//
    if(!r_RadioB){
        document.getElementById('error_banos').innerHTML = " <br/>  * No has seleccionado ningun Baño";
        check=false;
    }else{
        document.getElementById('error_banos').innerHTML = "";
    }
    //#########################################//
    if(!r_Extras){
        document.getElementById('error_Extras').innerHTML = " <br/>  * No has seleccionado ningun Extra (Si no tienes, Marca NULL)";
        check=false;
    }else{
        document.getElementById('error_Extras').innerHTML = "";
    }
    //#########################################//
    
    if(check){
        if(op == 'Crear'){
            //console.log('Hola llego a Create sin submit');
            //return false;
            var formulario = document.getElementById("CrearRegistro");
            
            formulario.action = "/HomeDropTemplate/HomeDrop/index.php?m=guardar";
            formulario.submit();
        }

        if(op == 'Update'){
            //console.log('Hola llego a Update sin submit');
            //return false;
            var formulario = document.getElementById("ActualizarRegistro");

            formulario.action = "/HomeDropTemplate/HomeDrop/index.php?m=actualizar";
            formulario.submit();
        }
    }
}
//#########################################//
//#########################################//

//#########################################//
$(document).ready(function() {

    loadContentModal();
});

//#########################################//
function loadContentModal() {

    $('.HomeDropModal').click(function () {
        var id = this.getAttribute('id');
    
        ajaxPromises('index.php?m=index_Modal&id=' + id, 'GET', 'JSON')

        //$.get('index.php?m=index_Modal&id=' + id, 'GET', 'JSON')
        .then(function(data) {

            //console.log(data[0].ID);

            //var data = JSON.parse(data);

            //console.log(data);              
                   
        $('<div></div>').attr('id', 'Details_HomeDrop', 'hidden').appendTo('#HomeDropModalSection');
        $('<div></div>').attr('id', 'container').appendTo('#Details_HomeDrop');
        $('#container').empty();
        $('<div></div>').attr('id', 'detalles').appendTo('#container');

        $('#detalles').html(function() {    
            var content = "";
               
            for (row in data[0]) {

                //console.log(data);

                content += '<br/> <span>' + row + ': <span id=' + row + '>' + data[0][row] + '</span></span>';

                //console.log(row);
                //console.log(content);

            }
            return content;
            });

            showModal(data.id, data.ID_Reference);
        
        })
        .catch(function() {
           // console.log('error fail');
            //return false;

            window.location.href = 'view/img/503.png';
        });
    });
}

//#########################################//

function showModal(id, ID_Reference) {
    $("#Details_HomeDrop").show();
    $("#HomeDropModalSection").dialog({
        title: ID_Reference,
        width : 600,
        height: 300,
        resizable: "true",
        modal: "true",
        hide: "fold",
        show: "fold",
       /* buttons : {
            Update: function() {
                        window.location.href = 'http://localhost/HomeDrop/index.php?m=editar&id=' +id;
                    },
            Delete: function() {
                        window.location.href = 'http://localhost/HomeDrop/index.php?m=eliminar&id=' +id;
                    }
        }*/
    });
}
//#########################################//
//#########################################//

//#########################################//

