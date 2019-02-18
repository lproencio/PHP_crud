<?php 

 $host = "localhost";
 $username = "root";
 $password = "1234";


 $db = new mysqli($host, $username, $password);

 if ($db->connect_error) // Verifica a conexão
  {
  die('Erro('.$db->connect_error.')'
  .$db->connect_error);
 }
 else
 {
  $db -> select_db("teste_estagio");

  //$db -> close();
}



?>