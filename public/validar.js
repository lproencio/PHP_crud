function MascaraCep(cep)
{
	if(mascaraInteiro(cep)==false)
	{
		event.returnValue = false;
	}
	return formataCampo(cep, '00.000-000', event);
}

function MascaraTelefone(tel)
{
	if(mascaraInteiro(tel)==false)
	{
		event.returnValue = false;
	}
	return formataCampo(tel, '(00) 0000-0000', event);
}

function ValidaTelefone(tel)
{
	exp = /\(\d{2}\)\ \d{4}\-\d{4}/;

	if(!exp.test(tel.value))
	alert('Numero de Telefone Invalido!');
}

function ValidaCep(cep)
{
	exp = /\d{2}\.\d{3}\-\d{3}/;

	if(!exp.test(cep.value))
	alert('Cep Invalido!');
}

function formataCampo(campo, Mascara, evento)
{
	var boleanoMascara;

	var Digitato = evento.keyCode;
	exp = /\-|\.|\/|\(|\)| /g;
	campoSoNumeros = campo.value.toString().replace( exp, '' );

	var posicaoCampo = 0;
	var NovoValorCampo='';
	var TamanhoMascara = campoSoNumeros.length;

	if (Digitato != 8 )
	{ // backspace
		for(i=0; i<= TamanhoMascara; i++)
		{
			boleanoMascara  = ((Mascara.charAt(i) == '-') || (Mascara.charAt(i) == '.')
			|| (Mascara.charAt(i) == '/'))
			boleanoMascara  = boleanoMascara || ((Mascara.charAt(i) == '(')
			|| (Mascara.charAt(i) == ')') || (Mascara.charAt(i) == ' '))
			if (boleanoMascara)
			{
				NovoValorCampo += Mascara.charAt(i);
				TamanhoMascara++;
			}
			else
			{
			   NovoValorCampo += campoSoNumeros.charAt(posicaoCampo);
			   posicaoCampo++;
			}
		}
		campo.value = NovoValorCampo;
		return true;
	}
	else
	{
		return true;
	}
}


function formataCampo(campo, Mascara, evento)
{
	var boleanoMascara;

	var Digitato = evento.keyCode;
	exp = /\-|\.|\/|\(|\)| /g;
	campoSoNumeros = campo.value.toString().replace( exp, '' );

	var posicaoCampo = 0;
	var NovoValorCampo='';
	var TamanhoMascara = campoSoNumeros.length;

	if (Digitato != 8 )
	{ // backspace
		for(i=0; i<= TamanhoMascara; i++)
		{
			boleanoMascara  = ((Mascara.charAt(i) == '-') || (Mascara.charAt(i) == '.')
			|| (Mascara.charAt(i) == '/'))
			boleanoMascara  = boleanoMascara || ((Mascara.charAt(i) == '(')
			|| (Mascara.charAt(i) == ')') || (Mascara.charAt(i) == ' '))
			if (boleanoMascara)
			{
				NovoValorCampo += Mascara.charAt(i);
				TamanhoMascara++;
			}
			else
			{
			   NovoValorCampo += campoSoNumeros.charAt(posicaoCampo);
			   posicaoCampo++;
			}
		}
		campo.value = NovoValorCampo;
		return true;
	}
	else
	{
		return true;
	}
}

function validacaoEmail(field)
{
	usuario = field.value.substring(0, field.value.indexOf("@"));
	dominio = field.value.substring(field.value.indexOf("@")+ 1, field.value.length);

	if ((usuario.length >=1) &&
		(dominio.length >=3) &&
		(usuario.search("@")==-1) &&
		(dominio.search("@")==-1) &&
		(usuario.search(" ")==-1) &&
		(dominio.search(" ")==-1) &&
		(dominio.search(".")!=-1) &&
		(dominio.indexOf(".") >=1)&&
		(dominio.lastIndexOf(".") < dominio.length - 1))
	{
		document.innerHTML="E-mail válido";
		alert("E-mail valido");
	}
	else
	{
		document.innerHTML="<font color='red'>E-mail inválido </font>";
		alert("E-mail invalido");
	}
}
