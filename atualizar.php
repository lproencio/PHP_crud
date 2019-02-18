<?php
    include_once("conexao.php");
   
    $id=$_POST['id'];
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

    $sql="UPDATE dados SET
        nome='$nome',
        endereco='$endereco',
        bairro='$bairro',
        cep='$cep',
        cidade='$cidade',
        uf='$uf',
        email='$email',
        telefone='$telefone',
        tipo='$tipo',
        quantidade='$quantidade',
        atracao='$atracao',
        sugestao='$sugestao',
        imagens='$imagens'
        WHERE id='$id'";


    if ($db->query($sql))
	{
		?>
            <script type="text/javascript">
				alert("concluido");
				window.location="index.php?link=3";
			</script>
		<?php
	}
	$db->close();
?>