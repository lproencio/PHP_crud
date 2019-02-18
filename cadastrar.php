<form class="formulario" action="cadastro.php" method="POST">
    <h3>Dados para Entrega</h3>
    <br />

	Nome<br/>
    <input class="cad" type="text" name="nome" required placeholder="digite o nome"><br />
    Endereco <br/>
    <input class="cad" type="text" name="endereco" required placeholder="digite o endereço"><br />
    Bairro <br/>
    <input class="cad" type="text" name="bairro" required placeholder="Bairro"><br />
    CEP <br/>
    <input class="cad" type="text" name="cep" onKeyPress="MascaraCep(cep);" onBlur="ValidaCEP(cep);" required placeholder="000.000-000"><br />
    Cidade <br/>
    <input class="cad" type="text" name="cidade" required placeholder="Cidade"><br />
    UF <br/>
    <input class="cad" type="text" name="uf" required placeholder="UF"><br />
    Email <br/>
    <input class="cad" type="text" name="email" onblur="validacaoEmail(email);" required placeholder="asd@email.com"><br />
    Telefone <br/> 
    <input class="cad" type="text" name="telefone" onkeypress="MascaraTelefone(telefone);" onBlur="MascaraTelefone(telefone);" required placeholder="41 93333-3333"><br />
    <br />
    <h2>Dados para Produção</h2>
    <br />

    Tipo: <br/>
    <input class="radio" type="radio" name="tipo" id="convite" value="convite"/> Convite
	<input class="radio" type="radio" name="tipo" id="lembranca" value="lembranca"/> Lembrança
	<input class="radio" type="radio" name="tipo" id="convite_lembranca" value="convite_lembranca"/> Convite-Lembrança <br />

    <br />
    Quantidade <br/>
    <input class="cad" type="text" name="quantidade"><br /><br />
    Atrações do evento:<br /> 
    <textarea class="atracao" name="atracao" placeholder="" style="margin:1%; height:150px; width:360px"></textarea><br /><br/>
	<input class="radio" type="checkbox" name="sugestao" id="sugestao" value="sim"/> Aceita sugestões de texto para a capa<br /><br />    
    imagens: 
    <input class="file" type="file" name="imagens">
    <br/>
	<br />
    <input class="salvar" type="submit" value="Salvar">
    <br/>
</form>