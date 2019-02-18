<?php
    include_once("conexao.php");
    
    $nome=$_POST['nome'];
    $endereco=$_POST['endereco'];
    $bairro=$_POST['bairro'];
    $cep=$_POST['cep'];
    $cidade=$_POST['cidade'];
    $uf=$_POST['uf'];
    $email=$_POST['email'];
    $telefone=$_POST['telefone'];
    $tipo=$_POST['tipo'];
    $quantidade=$_POST['quantidade'];
    $atracao=$_POST['atracao'];
    $sugestao=$_POST['sugestao'];
    $imagens=$_POST['imagens'];

    $sql="insert into dados(
        nome, endereco, bairro, cep, cidade, uf, email, telefone, tipo, quantidade, atracao, sugestao, imagens) values(
        '$nome', '$endereco', '$bairro', '$cep', '$cidade', '$uf', '$email', '$telefone', '$tipo', '$quantidade', '$atracao', '$sugestao', '$imagens');";
    
    if ($db->query($sql))
	{
		?>
			<script type="text/javascript">
				alert("Cadastrado com sucesso");
				window.location="index.php?link=3";
			</script>
		<?php
    }
	//$db->close();
?>
