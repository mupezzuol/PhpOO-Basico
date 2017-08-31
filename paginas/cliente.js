$(document).ready(function() {

    mostradados();
    
    function mostradados() {

        //aqui será feito a chamada ajax para nossa controladora
        $.ajax({
            url: '/controler/cliente_CTRL.php', //lugar onde a controladora está
            type: 'POST',
            data: {
                oper: "1"
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


                        for (var i = 0; i < Obj.length; i++) {

                            $("#tabeladados").find("tbody").append("<tr><td class='id'>" + Obj[i].id + "</td><td  class='nome'>" + Obj[i].nome + "</td><td class='telefone'>" + Obj[i].telefone + "</td><td class='endereco'>" + Obj[i].endereco + "</td><td><input type='button' class='btnexcluir' id='" + Obj[i].id +"' value='X'/><input type='button' class='btneditar' id='" + Obj[i].id +"' value='E'/></td></tr>");

                        }
						
						$(".btnexcluir").on("click",function() {
							
							excluir($(this).attr("id"));
							
						});
						
						$(".btneditar").on("click",function() {
							
							$(this).parents("tr").after("<tr><td colspan='4'><div class='bloco_campo'>" +
									"<label class='rotulo' for='cmpnome'>Nome</label><span class='campo'><input type='text' id='cmpnome' value='" + $(this).parents("tr").find(".nome").text() + "' /></span>" +
									"</div>" +
									"<div class='bloco_campo'>" +
									"<label class='rotulo' for='cmpendereco'>Endereço</label><span class='campo'><input type='text' id='cmpendereco' value='" + $(this).parents("tr").find(".endereco").text() + "'/></span>"+
									"</div>"+
									"<div class='bloco_campo'>"+
									"<label class='rotulo' for='cmptelefone'>Telefone</label><span class='campo'><input type='text' id='cmptelefone' value='" + $(this).parents("tr").find(".telefone").text() + "'/></span>"+
									"</div>"+
									"<div class='bloco_campo'>"+
									"<input type='button' class='btnalterar' id='" + $(this).attr("id") + "' value='Alterar' />" +
									"</div><td></tr>");
									
							$(".btnalterar").on("click",function() {
								
								editar($(this).attr("id"));
								
							});
							
							
							
						});

                    }
                }

            }
        });

    }

	function editar(valor) {
		
			

        //aqui será feito a chamada ajax para nossa controladora
        $.ajax({
            url: '/controler/cliente_CTRL.php', //lugar onde a controladora está
            type: 'POST',
            data: {
                oper: "3",
                endereco: $("#cmpendereco").val(),
                telefone: $("#cmptelefone").val(),
                nome: $("#cmpnome").val(),
				id:valor
				
                
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

                            alert("Registro Alterado com Sucesso!");
                     
                    }
                }

            }
        });

    }
	
	function excluir(valor){
		
		 //aqui será feito a chamada ajax para nossa controladora
        $.ajax({
            url: '/controler/cliente_CTRL.php', //lugar onde a controladora está
            type: 'POST',
            data: {
                oper: "2", id:valor
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

						if (Obj == 1) {
							
							alert("Registro excluído com sucesso!");
							
						}
                       
                    }
                }

            }
        });
		
	}
});


