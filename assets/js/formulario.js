document.addEventListener('DOMContentLoaded', function () {
    if (document.querySelector("#formulario")) {
        let formLogin = document.querySelector("#formulario");

        formLogin.onsubmit = function (e) {
            e.preventDefault();

            let nombre = document.querySelector('#name').value;
            let email = document.querySelector('#email').value;
            let mensaje = document.querySelector('#message').value;

            if (nombre == "" || email == "" || mensaje == "") {
                Swal.fire("Aviso", "Campo vacio", "warning");
                return false;
            } else {
                var request = (window.XMLHttpRequest) ? new XMLHttpRequest() : new ActiveXObject('Microsoft.XMLHTTP');
                var ajaxUrl = base_url + 'mail/enviar.php';
                var formData = new FormData(formLogin);
                request.open("POST", ajaxUrl, true);
                request.send(formData);
                request.onreadystatechange = function () {
                    if (request.readyState != 4) return;
                    if (request.status == 200) {
                        var objData = JSON.parse(request.responseText);
                        if (objData.status) {
                            Swal.fire({
                                title: "Aviso",
                                text: objData.msg,
                                icon: "success",
                                confirmButtonText: "Aceptar",
                                closeOnConfirm: false,
                            })
                            .then((result) => {
                                if (result.isConfirmed) { 
                                    window.location.href=url_est;
                                }
                            });
                        } else {
                            Swal.fire({
                                title: "Aviso",
                                text: objData.msg,
                                icon: "error",
                                confirmButtonText: "Aceptar",
                                closeOnConfirm: false,
                            })
                            .then((result) => {
                                if (result.isConfirmed) { 
                                    window.location.reload();
                                }
                            });

                        }
                    } else {
                        Swal.fire({
                            title: "Aviso",
                            text: objData.msg,
                            icon: "error",
                            confirmButtonText: "Aceptar",
                            closeOnConfirm: false,
                        })
                        .then((result) => {
                            if (result.isConfirmed) { 
                                window.location.reload();
                            }
                        });
                    }
                    return false;
                }
            }
        }
    }
}, false);