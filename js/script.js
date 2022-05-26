
$('.filter-btn').on('click', function() {

  let type = $(this).attr('id');
  let boxes = $('.project-box');

  $('.main-btn').removeClass('active');
  $(this).addClass('active');

  if(type == 'rou-btn') {
    eachBoxes('rou', boxes);
  } else if(type == 'cal-btn') {
    eachBoxes('cal', boxes);
  } else if(type == 'hig-btn') {
    eachBoxes('hig', boxes);
  } else if(type == 'brq-btn') {
      eachBoxes('brq', boxes);
  } else if(type == 'mov-btn') {
      eachBoxes('mov', boxes);
  } else if(type == 'ut-btn') {
      eachBoxes('ut', boxes);
  } else if(type == 'el-btn') {
      eachBoxes('el', boxes);
  } else if(type == 'inf-btn') {
      eachBoxes('inf', boxes);
  } else if(type == 'ali-btn') {
      eachBoxes('ali', boxes);
  } else if(type == 'mat-btn') {
      eachBoxes('mat', boxes);
  } else if(type == 'out-btn') {
      eachBoxes('out', boxes);
  } else {
      eachBoxes('all', boxes);
    }

});

function eachBoxes(type, boxes) {

  if(type == 'all') {
    $(boxes).fadeIn();
  } else {
    $(boxes).each(function() {
      if(!$(this).hasClass(type)) {
        $(this).fadeOut('slow');
      } else {
        $(this).fadeIn();
      }
    });
  }
}


function mostrarOcultarSenha(){
	var senha=document.getElementById("senha");
	if(senha.type=="password"){
		senha.type="text";
	}else{
		senha.type="password";
	}
}







