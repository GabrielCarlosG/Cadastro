<?php
require_once 'db_connect.php';

if(isset($_POST['btn-cadastrar'])):
    $nomefantasia = mysqli_escape_string($connect, $_POST['nomefantasia']);
    $razaosocial = mysqli_escape_string($connect, $_POST['razaosocial']);
    $cnpj = mysqli_escape_string($connect, $_POST['cnpj']);
    $pais = mysqli_escape_string($connect, $_POST['pais']);
    $uf = mysqli_escape_string($connect, $_POST['uf']);
    $cep = mysqli_escape_string($connect, $_POST['cep']);
    $cidade = mysqli_escape_string($connect, $_POST['cidade']);
    $rua = mysqli_escape_string($connect, $_POST['rua']);
    $numero = mysqli_escape_string($connect, $_POST['numero']);

    $sql = "INSERT INTO clientesjuridicos (nomefantasia, razaosocial, cnpj, pais, uf, cidade, rua,  numero, cep) VALUES ($nomefantasia,
    $razaosocial, $cnpj, $pais, $uf, $cidade, $rua, $numero, $cep)";

    if(mysqli_query($connect, $sql)):
        header('location: ../index.php?sucesso');
    else:
        header('location: ../index.php?error');
    endif;
endif;

?>