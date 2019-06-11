<?php 

include_once "conexao.php";

$nome = $_POST['inputEmail4'];



$sql = $conn->query("SELECT * FROM user WHERE nome_user='$nome'");
			
		if(mysqli_num_rows($sql) > 0){
			echo '2';	
			//echo "<script>alert('Este curso já está cadastrado');</script>";
				//echo"<script language='javascript' type='text/javascript'>window.location.href='/protocolos/addcurso.php?o=Este curso já está cadastrado';</script>";		
		} else {
			 if(!$conn->query("INSERT INTO user(nome_user) VALUES ('$nome')")) die ('Os dados não foram inseridos');
			 	echo '1'; 
			 header('Location:inicio.php');
		}
 ?>


?>