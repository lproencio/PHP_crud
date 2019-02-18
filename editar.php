<?php
	$id=$_GET['id'];
	include_once("conexao.php");
	$sql = "SELECT * FROM dados WHERE id='$id'";
	if ($result = $db -> query ($sql))
	{
		while($dado = $result -> fetch_array()) { ?>

<form class="formulario" action="atualizar.php" method="POST">
    <h3>Dados para Entrega</h3>
    <input class="cad" type="hidden" name="id" value="<?php echo $dado['id'];?>"><br />

	Nome<br/>
    <input class="cad" type="text" name="nome" value="<?php echo $dado['nome'];?>"><br />
    Endereco <br/>
    <input class="cad" type="text" name="endereco" value="<?php echo $dado['endereco'];?>"><br />
    Bairro <br/>
    <input class="cad" type="text" name="bairro" value="<?php echo $dado['bairro'];?>"><br />
    CEP <br/>
    <input class="cad" type="text" name="cep" value="<?php echo $dado['cep'];?>"><br />
    Cidade <br/>
    <input class="cad" type="text" name="cidade" value="<?php echo $dado['cidade'];?>"><br />
    UF <br/>
    <input class="cad" type="text" name="uf" value="<?php echo $dado['uf'];?>"><br />
    Email <br/>
    <input class="cad" type="text" name="email" value="<?php echo $dado['email'];?>"><br />
    Telefone <br/> 
    <input class="cad" type="text" name="telefone" value="<?php echo $dado['telefone'];?>"><br />
    <br />
    <h2>Dados para Produção</h2>
    <br />

    Tipo: <br/>
    <input class="radio" type="radio" name="tipo" id="convite" value="convite"/> Convite
	<input class="radio" type="radio" name="tipo" id="lembranca" value="lembranca"/> Lembrança
	<input class="radio" type="radio" name="tipo" id="convite_lembranca" value="convite_lembranca"/> Convite-Lembrança <br />

    <br />
    Quantidade <br/>
    <input class="cad" type="text" name="quantidade" value="<?php echo $dado['quantidade'];?>"><br /><br />
    Atrações do evento:<br /> 
    <textarea class="atracao" name="atracao" placeholder="" style="margin:1%; height:150px; width:360px" ><?php echo $dado['atracao'];?></textarea><br /><br/>
	<input class="radio" type="checkbox" name="sugestao" id="sugestao" value="sim"/> Aceita sugestões de texto para a capa<br /><br />    
    imagens: 
    <input class="file" type="file" name="imagens">
    <br/>
	<br />
    <input class="salvar" type="submit" value="Atualizar">
    <br/>
</form>

<?php } $result->free();}
?>