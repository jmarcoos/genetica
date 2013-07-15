function ajax_url( url , local_conteudo ) {
	function createXMLHttpRequest()
	{
		try{ return new ActiveXObject("Msxml2.XMLHTTP"); }catch(e){}
		try{ return new ActiveXObject("Microsoft.XMLHTTP"); }catch(e){}
		try{ return new XMLHttpRequest(); }catch(e){}
		alert("XMLHttpRequest not supported");
		return null;
	}
	var xhReq = createXMLHttpRequest();
	xhReq.open("post",url,true);
	xhReq.setRequestHeader('Content-Type','application/x-www-form-urlencoded');
	xhReq.onreadystatechange = function do_readyStateChange(to) {
		if (xhReq.readyState == 4)
		{
			document.getElementById(local_conteudo).innerHTML = xhReq.responseText;
		}
		else
		{
			document.getElementById(local_conteudo).innerHTML = '<img src="./imagens/Carregando.gif" width="auto" height="auto" border="none"/><b> carregando...</b>';
		}
	}
	xhReq.send("&ajaxr=true");
} 

