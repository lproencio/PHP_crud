<?php
	$id=$_GET['id'];
	include_once("conexao.php");
	$sql = "SELECT * FROM dados WHERE id='$id'";
	if ($result = $db -> query ($sql))
	{
		while($dado = $result -> fetch_array()) { ?>
<form class="lista">
   <td><span class="infor">Nome: <?php echo $dado ['nome'];?></span></td><br/><br/>
   <td><span class="infor">Endereço: <?php echo $dado ['endereco'];?></span></td><br/><br/>
   <td><span class="infor">Bairro: <?php echo $dado ['bairro'];?></span></td><br/><br/>
   <td><span class="infor">CEP: <?php echo $dado ['cep'];?></span></td><br/><br/>
   <td><span class="infor">Cidade: <?php echo $dado ['cidade'];?></span></td><br/><br/>
   <td><span class="infor">UF: <?php echo $dado ['uf'];?></span></td><br/><br/>
   <td><span class="infor">Email: <?php echo $dado ['email'];?></span></td><br/><br/>
   <td><span class="infor">Telefone: <?php echo $dado ['telefone'];?></span></td><br/><br/>
   <td><span class="infor">Tipo: <?php echo $dado ['tipo'];?></span></td><br/><br/>
   <td><span class="infor">Quantidade: <?php echo $dado ['quantidade'];?></span></td><br/><br/>
   <td><span class="infor">Atração: <?php echo $dado ['atracao'];?></span></td><br/><br/>
   <td><span class="infor">Sugestão: <?php echo $dado ['sugestao'];?></span></td><br/><br/>
   <td><span class="infor">Imagem: <?php echo $dado ['imagens'];?></span></td>
</form>

<?php } $result->free();}
?>