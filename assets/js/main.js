//PHP - Calcular números Primos
$("#formNum").submit(function (event) {

    event.preventDefault()
    let nroIngresado = $("#numeroIngresado").val()

    /* A través de llamada Ajax a API Rest enrutada por router de CI, se obtiene el arreglo de números primos */
    $.ajax({
        url: window.BASE_URL + 'index.php/primos',
        method: 'POST',
        dataType: 'json',
        data: {
            nroIngresado: nroIngresado
        },
        success: function (data) {
            $("#bodyCard").text(data);
        },
        error: function (e) {
            alert("No se ha podido ejecutar el procedimiento.\nError: " + e)
        }
    })


});

//Función para limpiar campos
$("#btnLimpiar").click(function (event) {

    $("#numeroIngresado").val('')
    $("#bodyCard").text('')

});


//Función que impide el ingreso de caracteres al Input que no sean numéricos.
jQuery.fn.ForceNumericOnly =
    function () {
        return this.each(function () {
            $(this).keydown(function (e) {
                var key = e.charCode || e.keyCode || 0;
                // allow backspace, tab, delete, enter, arrows, numbers and keypad numbers ONLY
                // home, end, period, and numpad decimal
                return (
                    key == 8 ||
                    key == 9 ||
                    key == 13 ||
                    key == 46 ||
                    key == 110 ||
                    (key >= 35 && key <= 40) ||
                    (key >= 48 && key <= 57));
            });
        });
    };

$("#numeroIngresado").ForceNumericOnly();


(() => {
    'use strict'

    // Fetch all the forms we want to apply custom Bootstrap validation styles to
    const forms = document.querySelectorAll('.needs-validation')

    // Loop over them and prevent submission
    Array.from(forms).forEach(form => {
        form.addEventListener('submit', event => {
            if (!form.checkValidity()) {
                event.preventDefault()
                event.stopPropagation()
            }

            form.classList.add('was-validated')
        }, false)
    })
})()