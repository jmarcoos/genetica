//fun��o que restringe caracteres digitados. somente numeros
function numeros(ie, ff) {
    if (ie) {
        tecla = ie;
    } else {
        tecla = ff;
    }

    /**
    * 13 = [ENTER]
    * 8  = [BackSpace]
    * 9  = [TAB]
    * 46 = [Delete]
    * 48 a 57 = S�o os n�meros
    */

    if ((tecla >= 48 && tecla <= 57) || (tecla == 8) || (tecla == 13) || (tecla == 9) || (tecla == 46)) {
        return (true);
    }
    else {
		alert("Somente numeros!");
        return (false);
    }
	
}
    

//fun��o que restringe caracteres digitados. somente letras
function letras(ie, ff)
{

    if (ie) {
        tecla = ie;
    } else {
        tecla = ff;
    }

    /**
    * 13 = [ENTER]
    * 8  = [BackSpace]
    * 9  = [TAB]
    * 46 = [Delete]
    * 48 a 57 = S�o os n�meros
    */

    if ((tecla >= 33 && tecla <= 64)  || (tecla >= 91 && tecla <= 93)) {
 		alert("Somente Letras!");
        return (false);
    }
    else {
		return (true);
    }

}
