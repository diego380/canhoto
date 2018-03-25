$(document).ready(function(){
	$(".button-collapse").sideNav();
	$('.dropdown-button').dropdown();
	$('select').material_select();
	$('.tooltipped').tooltip({delay: 50});
	$('.modal').modal();
});

function buscaNotaFiscal() {
    document.getElementById("buscaNotaFiscal").submit();
}