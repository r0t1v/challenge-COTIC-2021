<?php
session_start();
require "../classes/connectmysql.php";
	$flagnome=false;
	$flaginterprete=false;
	$text="";
    /*Captura dos dados*/
    $nome= $_POST["nome"];
    $idade= $_POST["idade"];
    $codinome= $_POST["codinome"];
    $interprete= $_POST["pessoa"];
    $alinhamento= $_POST["radio"];
    $biografia= $_POST["biografia"];
    /*Captura dos dados*/
	/*Valida nome*/
	if(strpbrk($nome,"0123456789")){
		$text.="O nome do personagem não pode conter números, ";
		$flagnome=false;
	}
	elseif(strpbrk($nome,"!@#$%¨&*()")) {
		$text.="O nome do personagem não pode conter caracteres especiais, ";
		$flagnome=false;
	}
	elseif($nome=="" || $nome==" ") {
		$text.="O nome do personagem não pode ser nulo, ";
		$flagnome=false;
	}
	else{
		$flagnome=true;
	}
	/*Valida nome*/
	/*Valida interprete*/
	if(strpbrk($interprete,"0123456789")){
		$text.="O nome do interprete não pode conter números, ";
		$flaginterprete=false;
	}
	elseif(strpbrk($interprete,"!@#$%¨&*()")) {
		$text.="O nome do interprete não pode conter caracteres especiais, ";
		$flaginterprete=false;
	}
	elseif($interprete=="" || $interprete==" ") {
		$text.="O nome do interprete não pode ser nulo, ";
		$flaginterprete=false;
	}
	else{
		$flaginterprete=true;
	}
	/*Valida interprete*/
    if($flagnome==true and $flaginterprete==true){
	$insertdado = "INSERT INTO personagens (nome,idade,codinome,interprete,alinhamento,biografia) VALUES ('$nome','$idade','$codinome','$interprete','$alinhamento','$biografia')";
    	$resultinsert = mysqli_query($conn, $insertdado);
    	mysqli_close($conn);
    	$_SESSION['msg'] = "<div class='alert alert-success' role='alert'>Eba!Personagem Cadastrado.</div>";
    	header("Location: ../../pages/formulario.php");
    	echo $_SESSION['msg'];
    }
    else{
    	$_SESSION['msg'] = "<div class='alert alert-danger' role='alert'>".$text." Ops! O personagem não pôde ser cadastrado</div>";
    	header("Location: ../../pages/formulario.php");
    	echo $_SESSION['msg'];
    }
?>