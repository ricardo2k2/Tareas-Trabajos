jQuery("#calcular").click(function () { //se pone un numeral # antes para identificar que es un objeto es js
    
    var numero = jQuery("#numero").val();
    var params = {"numerofactorial": numero}; //creamos un arreglo, si tenemos mas de un arreglo podemos separarlo entre comas

    //ajax creacion
    $.ajax({ //en ajax es mejor usar parametros
        data : params,
        url : 'ajax/factorial.php',
        dataType : 'html', //tipo de data
        type: 'post', //Decimos que es html en formato post
        beforeSend: function () { //beforeSend significa antes de enviar
            jQuery("#resultado").hide(); //esto hace que mientras dure el proceso pedimos que este oculto
            jQuery("#cargando").show(); //show hace que en este caso muestre el cargando
        },
        success: function (response) { //significa que en el momento que sucesa
            jQuery("#resultado").show(); 
            jQuery("#cargando").hide();
            jQuery("#resultado").html(response);
        }
    });

});