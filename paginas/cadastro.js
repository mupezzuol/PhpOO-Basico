$(document).ready(function() {

   $("#btngravar").click(function() {

        //aqui será feito a chamada ajax para nossa controladora
        $.ajax({
            url: '/controler/cliente_CTRL.php', //lugar onde a controladora está
            type: 'POST',
            data: {
                oper: "2",
                endereco: $("#cmpendereco").val(),
                telefone: $("#cmptelefone").val(),
                nome: $("#cmpnome").val()
                
            },
            complete: function(e, xhr, result) {
                if (e.readyState == 4 && e.status == 200) {
                    try { //Converte a resposta HTTP JSON em um objeto JavaScript
                        var Obj = eval("(" + e.responseText + ")"); //Combo OS

                    }
                    catch (err) { //
                        // Mostra Aviso
                        alert("Ops! Algo de errado aconteceu!");

                    }
                    if (Obj != null) {

                            alert("Registro Cadastrado com Sucesso!");
                     
                    }
                }

            }
        });

    });

});




