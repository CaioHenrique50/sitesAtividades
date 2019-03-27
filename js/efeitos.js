$(function(){
	var click = 0;
	$('.menu_resp').click(function(){
		//todos os meus ps vao aumentar o tamanho
		click++;
		if(click == 1 ){
			$('.aparece_menu').fadeIn().css({'display':'block'});
		}else{
			$('.aparece_menu').hide(1000);
			click-=2;
		}
	});
	
});

$(function(){
	var click = 0;
	$('.aparece_sub_menu_instituto').click(function(){
		//todos os meus ps vao aumentar o tamanho
		click++;
		if(click == 1 ){
			$('.sub_menu_instituto').fadeIn().css({'display':'block'});
		}else{
			$('.sub_menu_instituto').hide(1000);
			click-=2;
		}
	});
	
});
$(function(){
	var click = 0;
	$('.aparece_sub_menu_documentos').click(function(){
		//todos os meus ps vao aumentar o tamanho
		click++;
		if(click == 1 ){
			$('.sub_menu_cursos_documentos').fadeIn().css({'display':'block'});
		}else{
			$('.sub_menu_cursos_documentos').hide(1000);
			click-=2;
		}
	});
	
});
$(function(){
	var click = 0;
	$('.aparece_sub_menu_alunos').click(function(){
		//todos os meus ps vao aumentar o tamanho
		click++;
		if(click == 1 ){
			$('.sub_menu_cursos_alunos').fadeIn().css({'display':'block'});
		}else{
			$('.sub_menu_cursos_alunos').hide(1000);
			click-=2;
		}
	});
	
});
$(function(){
	var click = 0;
	$('aparece_sub_menu_contatos').click(function(){
		//todos os meus ps vao aumentar o tamanho
		click++;
		if(click == 1 ){
			$('sub_menu_contatos').fadeIn().css({'display':'block'});
		}else{
			$('sub_menu_contatos').hide(1000);
			click-=2;
		}
	});
	
});
$(function(){
	var click = 0;
	$('.aparece_sub_menu_cursos').click(function(){
		//todos os meus ps vao aumentar o tamanho
		click++;
		if(click == 1 ){
			$('.sub_menu_cursos').fadeIn().css({'display':'block'});
		}else{
			$('.sub_menu_cursos').hide(1000);
			click-=2;
		}
	});
	
});

$(function(){
	var tela = $( window ).width();
	if(tela > 1081){
		var click = 0;
		$('.aparece_sub_menu_cursos').hover(function(){
			//todos os meus ps vao aumentar o tamanho
			click++;
			if(click == 1 ){
				$('.sub_menu_cursos').fadeIn().css({'display':'block'});
			}else{
				$('.sub_menu_cursos').hide(0);
				click-=2;
			}
		});
		$('.aparece_sub_menu_alunos').hover(function(){
			//todos os meus ps vao aumentar o tamanho
			click++;
			if(click == 1 ){
				$('.sub_menu_cursos_alunos').fadeIn().css({'display':'block'});
			}else{
				$('.sub_menu_cursos_alunos').hide(0);
				click-=2;
			}
		});
		$('.aparece_sub_menu_instituto').hover(function(){
			//todos os meus ps vao aumentar o tamanho
			click++;
			if(click == 1 ){
				$('.sub_menu_instituto').fadeIn().css({'display':'block'});
			}else{
				$('.sub_menu_instituto').hide(0);
				click-=2;
			}
		});
		$('.aparece_sub_menu_documentos').hover(function(){
		//todos os meus ps vao aumentar o tamanho
		click++;
		if(click == 1 ){
			$('.sub_menu_cursos_documentos').fadeIn().css({'display':'block'});
		}else{
			$('.sub_menu_cursos_documentos').hide(0);
			click-=2;
		}
	});

	}
	
});

$(function(){
	var click = 0;
	$('.aparecer').click(function(){
		//todos os meus ps vao aumentar o tamanho
		$('.popup').fadeIn().css({'display':'block'});
	
	});
});
$(function(){
	var click = 0;
	$('.fechar').click(function(){
		//todos os meus ps vao aumentar o tamanho
		$('.popup').fadeIn().css({'display':'none'});
		window.location.reload();

	});
});
$(function(){
	var click = 0;
	
	$('.contraste').click(function(){
		click++;
		if(click == 1 ){
			$('body').fadeIn().css({'background-color':'#000'});
			$('nav').fadeIn().css({'background-color':'#000'});
			$('.menu_principal').fadeIn().css({'background-color':'#000'});
			$('.aparece_sub_menu_acess').fadeIn().css({'background-color':'#000'});
			$('.aparece_menu').fadeIn().css({'background-color':'#000'});
			$('footer').css({'background-color':'#000'});
			$('p').fadeIn().css({'color':'#fff'});
			$('h2').fadeIn().css({'color':'#fff'});
			$('.sub_menu_aparece_cursos li').css({'color':'#fff'});
			$('.documantos_tudo span').css({'color':'#fff'});
			$('.sub_menu_instituto').css({'background-color':'#000'});
			$('.sub_menu_cursos').css({'background-color':'#000'});
			$('.sub_menu_cursos_alunos').css({'background-color':'#000'});
			$('.box_texto').css({'background-color':'#000'});
			$('.box_texto .titulo').css({'color':'#fff'});
			$('.box_texto h1').css({'color':'#fff'});
			$('#secretaria li').css({'color':'#fff'});
			
		}else{
			$('body').fadeIn().css({'background-color':'#ab0a02'});
			$('nav').fadeIn().css({'background-color':'#ab0a02'});
			$('.menu_principal').fadeIn().css({'background-color':'#ab0a02'});
			$('.aparece_sub_menu_acess').fadeIn().css({'background-color':'#ab0a02'});
			$('.aparece_menu').fadeIn().css({'background-color':'#ab0a02'});
			$('body').fadeIn().css({'background-color':'#fff'});
			$('p').fadeIn().css({'color':'#000'});

			$('.flex-caption p').fadeIn().css({'color':'#fff'});
			$('h2').fadeIn().css({'color':'#fff'});
			$('.teste').fadeIn().css({'color':'#000'});
			$('.div_novidades h2').fadeIn().css({'color':'#ff5a18'});
			$('footer').css({'background-color':'#004e5a'});
			$('footer p').css({'color':'#fff'});
			$('.banner_curso h2').fadeIn().css({'color':'#ff5a18'});
			$('.aparece_menu p').fadeIn().css({'color':'#ab0a02'});
			$('.sub_menu_aparece_cursos li').css({'color':'#000'});
			$('.documantos_tudo span').css({'color':'#ff5a18'});
			$('.sub_menu_instituto').css({'background-color':'#ab0a02'});
			$('.sub_menu_cursos').css({'background-color':'#ab0a02'});
			$('.sub_menu_cursos_alunos').css({'background-color':'#ab0a02'});
			$('.box_texto').css({'background-color':'#fff'});
			$('.box_texto .titulo').css({'color':'#ff5a18'});
			$('.box_texto h1').css({'color':'#ff5a18'});
			$('.box_texto h2').css({'color':'#ff5a18'});
			$('#secretaria li').css({'color':'#000'});
			click-=2;
		}
		
		
	});
});

$(function(){
	var click =0;
	$('.aparecer_menu_cursos').click(function(){
		click++;
		if(click ==1){
			$('.cursos li').css({'display':'block'});
			$('.aparecer_menu_secretaria').css({'margin-top':'740px'});
		}else{
			$('.cursos li').css({'display':'none'});
			$('.aparecer_menu_secretaria').css({'margin-top':'0px'});
			click-=2;
		}
		
	});
});
$(function(){
	var click =0;
	$('.aparece_comercio').click(function(){
		click++;
		if(click ==1){
			$('#comercio').css({'display':'block'});
		}else{
			$('#comercio').css({'display':'none'});
			click-=2;
		}
		
	});
});
$(function(){
	var click =0;
	$('.aparece_gestao').click(function(){
		click++;
		if(click ==1){
			$('#gestao').css({'display':'block'});
		}else{
			$('#gestao').css({'display':'none'});
			click-=2;
		}
		
	});
});
$(function(){
	var click =0;
	$('.aparece_ti').click(function(){
		click++;
		if(click ==1){
			$('#ti').css({'display':'block'});
		}else{
			$('#ti').css({'display':'none'});
			click-=2;
		}
		
	});
});
$(function(){
	var click =0;
	$('.aparece_logistica').click(function(){
		click++;
		if(click ==1){
			$('#logistica').css({'display':'block'});
		}else{
			$('#logistica').css({'display':'none'});
			click-=2;
		}
		
	});
});
$(function(){
	var click =0;
	$('.aparece_trasporte').click(function(){
		click++;
		if(click ==1){
			$('#trasporte').css({'display':'block'});
		}else{
			$('#trasporte').css({'display':'none'});
			click-=2;
		}
		
	});
});
$(function(){
	var click =0;
	$('.aparece_eventos').click(function(){
		click++;
		if(click ==1){
			$('#eventos').css({'display':'block'});
		}else{
			$('#eventos').css({'display':'none'});
			click-=2;
		}
		
	});
});

$(function(){
	var click =0;
	$('.aparecer_menu_secretaria').click(function(){
		click++;
		if(click ==1){
			$('#secretaria').css({'display':'block'});
		}else{
			$('#secretaria').css({'display':'none'});
			click-=2;
		}
		
	});
});


