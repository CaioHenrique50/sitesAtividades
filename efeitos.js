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
	$('.aparece_sub_menu_acess').click(function(){
		//todos os meus ps vao aumentar o tamanho
		click++;
		if(click == 1 ){
			$('.sub_menu_acess').fadeIn().css({'display':'block'});
		}else{
			$('.sub_menu_acess').hide(1000);
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
	var click = 0;
	$('.teste').click(function(){
		//todos os meus ps vao aumentar o tamanho
		click++;
		if(click == 1 ){
			$('.teste').fadeIn().css({'font-size':'100px'});
		}else{
			$('.aparece_menu').hide(1000);
			click-=2;
		}
	});
});

