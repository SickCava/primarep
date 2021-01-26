<?php
	$nome = $_POST['nome'];
	$cognome = $_POST['cognome'];
	$mex = $_POST['mex'];
	$conn = mysqli_connect("localhost","root","","modal");
	$sqlins = "INSERT INTO modaltab (nome, cognome, messaggio) VALUES ('$nome','$cognome','$mex')";
	if($conn->query($sqlins)){
		echo "inserimento avvenuto";
	}else{
		echo "inserimento non avvenuto";
	}
?>