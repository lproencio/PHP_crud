<table class="tabela">
	<thead>
		<tr>
		  <th>ID</th>
	 	  <th>Nome</th>
		  <th>Telefone</th>
		  <th>Opções</th>
		</tr>
	</thead>
<?php
include_once("conexao.php");

	$sql = "SELECT * FROM dados";
		if ($result = $db -> query ($sql)){
			while($dados = $result -> fetch_array()) {?>
				
	<tbody>
		<tr>
		<td><?php echo $dados["id"]; ?></td>
		<td><?php echo $dados["nome"]; ?></td>
		<td><?php echo $dados["telefone"]; ?></td>
		<td>
		 <a 
		  href="index.php?link=4&id=<?= $dados["id"];?>">
		  <button class="botao1"><i class="fa fa-pencil-alt"></i></button>
		 </a>
		 <a 
 		  href="deletar.php?id=<?= $dados["id"];?>">
		  <button class="botao2"><i class="fa fa-trash-alt"></i></button>
		 </a>
		 <a 
		  href="index.php?link=5&id=<?= $dados["id"];?>">
		  <button class="botao3"><i class="fa fa-eye"></i></button>
		 </a>
		</td>
		</tr>
	</tbody>
<?php } $result->free();}?>
</table>



