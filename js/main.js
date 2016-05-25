
$('label#ouiL').click(function(){
	$('.upload-photo').removeClass("hidden");
});

$('label#nonL').click(function(){
	$('.upload-photo').addClass("hidden");
});

$('.choix-fond-origin').click(function(){
	$('#fond_bleu').trigger("click");
});

$('.choix-fond-perso').click(function(){
	$('#fondP').trigger("click");
});


/* faire verif formulaire */


$( window ).load(function() {
  $('label#nonL').trigger("click");
  $('#fond_bleu').trigger("click");
});