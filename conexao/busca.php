<?php
include "conexao.php";
    $user_cep = addslashes($_POST['user_cep']);

    if ($user_cep == ''){
        header("Location: ../index.php");
        exit;
    }

    $sql = "SELECT * FROM cadastro_loja WHERE end_cep like $user_cep";

    $resultado = mysqli_query($conexao, $sql);

    while ($linha = mysqli_fetch_assoc($resultado)){
        $nome_loja = $linha['nome_loja'];
        $end_cep = $linha['end_cep'];
        $end_rua = $linha['end_rua'];
        $end_num = $linha['end_num'];
        $end_bai = $linha['end_bai'];
        $end_cid = $linha['end_cid'];
        $num_tel = $linha['num_tel'];
        $link_loja = $linha['link_loja'];
        $nome_imagem = $linha['nome_imagem'];
    }
    printf($resultado);
?>
