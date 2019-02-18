<?php
	include_once("conexao.php");
	$id=$_GET['id'];
	$sql="DELETE FROM dados WHERE id=$id";
	if ($db->query($sql))
	{
		?>
			<script type="text/javascript">
				alert("Excluido");
				window.location="index.php?link=3";
			</script>
		<?php
	}
?>