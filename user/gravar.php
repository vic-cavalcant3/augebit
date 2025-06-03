<?php
session_start(); // se estiver usando sessão
include_once 'conexao.php';

$id = $_SESSION['id']; // ou $_GET['id'] se estiver recebendo via URL

$sql = "SELECT * FROM funcionarios WHERE id = $id";
$resultado = mysqli_query($conn, $sql);
$linha = mysqli_fetch_assoc($resultado);
?>


<?php
    $nome = $_POST['nome'];
    $email = $_POST['email'];
    $telefone = $_POST['telefone'];
    $senha = $_POST['senha'];
    $cpf = $_POST['cpf'];
    $setor = $_POST['setor'];
    $nascimento = $_POST['nascimento'];
    $biografia = $_POST['biografia'];
    $email_secundario = $_POST['email_secundario'];
    $celular = $_POST['celular'];
    $cep = $_POST['cep'];
    $logadouro = $_POST['logadouro'];
    $numero = $_POST['numero'];
    $complemento = $_POST['complemento'];
    $bairro = $_POST['bairro'];
    $cidade = $_POST['cidade'];
    $estado = $_POST['estado'];
    $linkedin = $_POST['linkedin'];
    $github = $_POST['github'];
    $instagram = $_POST['instagram'];

    $query = "INSERT INTO $tabela VALUES ('NULL',
    '$nome',
    '$email',
    '$telefone',
    '$senha',
    '$setor',
    '$nascimento',
    '$biografia', 
    '$email_secundario', 
    '$celular', 
    '$cep', 
    '$logadouro', 
    '$numero',
    '$complemento', 
    '$bairro', 
    '$cidade',
    '$estado', 
    '$linkedin', 
    '$github', 
    '$instagram')";

    $mysqli = new mysqli($host, $login, $password, $bd);

    if ($mysqli->connect_error) {
  die("Erro na conexão com o banco de dados: " . $mysqli->connect_error);
}

$resultado = $mysqli->query($query);

// if ($resultado) {
//     echo "<script>alert('Perfil atualizado com sucesso!!') </script>";
//   } else {
//     echo "<script>alert('Erro ao conectar com o banco de dados " . $mysqli->error . "');</script>";
//   }
 
$mysqli->close();