<?php
$host = "localhost";
$user = "root";
$password = "";
$database = "augebit";

$conn = new mysqli($host, $user, $password, $database);

if($conn->connect_error) {
    die("Falha na conexão: " . $conn->connect_error);
}

// //valores para as variaveis do sistema
// $email_sistema = 'victorrocha0223@gmail.com';
// $senha_sistema = '251207vi';

//     if($email == $email_sistema and $senha == $senha_sistema){
// // 	$_SESSION['nome'] = $nome_sistema;
// // 	echo '<script>window.location="../user.php"</script>';
// // }else{
// // 	echo '<script>alert("Dados Incorretos")</script>';
// // }

?>