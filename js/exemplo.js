$(function(){
	
	var atual = -1;
	var maximo = $('.reload').length - 1;
	var timer;
	var animacaoDelay = 1.5;

	executarAnimacao();
	function executarAnimacao(){
		$('.reload').hide();
		timer = setInterval(logicaAnimacao,animacaoDelay*1000);

		function logicaAnimacao(){
			atual++;
			if(atual > maximo){

				clearInterval(timer);
				return false;
			}

			//alert('chamando intervalo');

			$('.reload').eq(atual).fadeIn();

		}

	}

})