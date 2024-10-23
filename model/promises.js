function ajaxPromises(sUrl, sType, sTData, sData = undefined) {

    console.log(sUrl); 
    console.log(sType); 
    console.log(sTData); 
    console.log(sData); 

    //return false;

    return new Promise((resolve, reject) => {
        $.ajax({
            url: sUrl,
            type: sType,
            dataType: sTData,
            data: sData,
            
        }).done((data) => {
            // procesamiento con los datos
            console.log(data);
            //return false;
            resolve(data);

        }).fail((jqXHR, textStatus, errorThrow) => {

            console.log('fail');
           // return false;

            reject(errorThrow);
        }); 
    });

}
