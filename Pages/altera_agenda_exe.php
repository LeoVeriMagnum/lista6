<?php
include('conexao.php');
$id_agenda = $_POST['id_agenda'];
$apelido = $_POST['apelido'];
$email = $_POST['email'];
$telefone = $_POST['telefone'];
$celular = $_POST['celular'];
$estado = $_POST['estado'];
$cidade = $_POST['cidade'];
$bairro = $_POST['bairro'];
$endereco = $_POST['endereco'];


echo "<h1>Alteração de dados</h1>";
echo "<p>Pessoa: $apelido</p>";
$sql = "update agenda set 
    apelido = '$apelido',
    email = '$email',
    telefone = '$telefone',
    celular = '$celular',
    estado = '$estado',
    cidade = '$cidade',
    bairro = '$bairro',
    endereco = '$endereco'
    where id_agenda = $id_agenda";


$result = mysqli_query($con, $sql);
if ($result)
    echo "Dados alterados com sucesso!<br>";
else
    echo "Erro ao alterar dados: " . $mysqli_error($con) . "!";
?>

<a href="../index.php">Voltar</a>