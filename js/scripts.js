$(function(){
	//aqui vai todo nosso código de javascript

	$('nav.mobile').click(function(){
		//o que vai acontecer quando cliclarmos na nav mobile
		
		var listaMenu = $('nav.mobile ul');
		//abrir menu atraves do fadein

		/*if (listaMenu.is(':hidden') == true){
			listaMenu.fadeIn();
		}else{
			listaMenu.fadeOut();
		}*/

		//comando p/ abrir ou fechar o menu
		// listaMenu.slideToggle();

		if (listaMenu.is(':hidden') == true){

			//var icone = ('.botao-menu-mobile i'); e o msm qe o de baixo
			var icone = $('.botao-menu-mobile').find('i');
			icone.removeClass('fa fa-bars');
			icone.addClass('fa fa-times');
			listaMenu.slideToggle();
		}else{
			var icone = $('.botao-menu-mobile').find('i');
			icone.removeClass('fa fa-times');
			icone.addClass('fa fa-bars');
			listaMenu.slideToggle();
		}

		//fa fa-bars
		//fa fa-times
			
	})
})