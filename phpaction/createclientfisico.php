<?php
require_once 'db_connect.php';

if(isset($_POST['btn-cadastrar'])):
    $nome = mysqli_escape_string($connect, $_POST['nome']);
    $sobrenome = mysqli_escape_string($connect, $_POST['sobrenome']);
    $cpf = mysqli_escape_string($connect, $_POST['cpf']);
    $pais = mysqli_escape_string($connect, $_POST['pais']);
    $uf = mysqli_escape_string($connect, $_POST['uf']);
    $cep = mysqli_escape_string($connect, $_POST['cep']);
    $cidade = mysqli_escape_string($connect, $_POST['cidade']);
    $rua = mysqli_escape_string($connect, $_POST['rua']);
    $numero = mysqli_escape_string($connect, $_POST['numero']);

    $sql = "INSERT INTO clientefisico(nome, sobrenome, cpf, pais, uf, cep, cidade,
    rua, numero) 
    VALUES ('$nomefantasia', '$sobrenome', '$cpf', '$pais', '$uf', '$cep', '$cidade',
    '$rua', '$numero')";
    
    if(mysqli_query($connect, $sql)):
        header('location: ../index.php?sucesso');
    else:
        header('location: ../index.php?error');
    endif;
endif;

?>