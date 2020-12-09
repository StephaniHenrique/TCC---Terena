$(function(){
	$("#searchStudent").keyup(function(){
		//Recuperar o valor do campo
		var searchStudent = $(this).val();
		
		//Verificar se há algo digitado
		if(searchStudent != ''){
			var dados = {
				palavra : pesquisa
			}
			$.post('pesq_estudante.php', dados, function(retorna){
				//Mostra dentro da ul os resultados obtidos 
				$(".resultado").html(retorna);
			});
		}
	});
});