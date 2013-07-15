// JavaScript Document
function aviso(objeto){
	var campo = document.getElementById(objeto);
	if ( campo.style.display != "none" )
	{
		campo.style.display = 'none';
	}
	else
	{
		campo.style.display = '';
	}
}
