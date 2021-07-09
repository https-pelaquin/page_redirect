<!doctype html>
<html lang="pt_BR">
  <head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <!-- Bootstrap CSS -->
    <link href="../css/bootstrap.min.css" rel="stylesheet">

    <title>Cadastrando</title>
  </head>
  <body>
    <div class="container">
        <div class="row">
            <div class="col">
              <?php
                function mover_imagem($vetor_imagem){
                  if (!$vetor_imagem['error']){
                      $nome_imagem = date('Ymdhms') .".png";
                      move_uploaded_file($vetor_imagem['tmp_name'], "img/".$nome_imagem);
                      return $nome_imagem;               
                  }
                }

                include "../conexao/conexao.php";
                $nome_loja = addslashes($_POST['nome_loja']);
                $cep = addslashes($_POST['end_cep']);
                $rua = addslashes($_POST['end_rua']);
                $numero = addslashes($_POST['end_num']);
                $bairro = addslashes($_POST['end_bai']);
                $cidade = addslashes($_POST['end_cid']);
                $num_tel = addslashes($_POST['num_tel']);
                $link_loja = addslashes($_POST['link_loja']);
                $link_maps = addslashes($_POST['link_maps']);


                $imagem = $_FILES['imagem'];
                if ($imagem !== "") {
                  $nome_imagem = mover_imagem($imagem);
                } else {
                  $nome_imagem = 'sem_img.png';
                }
              
                $sql = "INSERT INTO `cadastro_loja`(`nome_loja`, `end_cep`, `end_rua`, `end_num`, `end_bai`, `end_cid`, `num_tel`, `link_loja`, `link_maps`, `nome_imagem`) VALUES ('$nome_loja','$cep','$rua','$numero','$bairro','$cidade','$num_tel','$link_loja', '$link_maps', '$nome_imagem')";

                if (mysqli_query($conexao, $sql)){
                    echo "<div class='alert alert-success' role='alert'>$nome_loja foi cadastrado com sucesso!</div>";
                } else {
                    echo "<div class='alert alert-danger' role='alert'>$sql Ocorreu um erro ao salvar o cadastro.</div>";
                }

                printf($sql);
              ?>
              <br>
              <a href="cadastro.php" class="btn btn-primary">Voltar</a>
            </div>
        </div>
    </div>

    <!-- Optional JavaScript; choose one of the two! -->

    <!-- Option 1: Bootstrap Bundle with Popper -->
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.1/dist/js/bootstrap.bundle.min.js" integrity="sha384-gtEjrD/SeCtmISkJkNUaaKMoLD0//ElJ19smozuHV6z3Iehds+3Ulb9Bn9Plx0x4" crossorigin="anonymous"></script>

    <!-- Option 2: Separate Popper and Bootstrap JS -->
    <!--
    <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.9.2/dist/umd/popper.min.js" integrity="sha384-IQsoLXl5PILFhosVNubq5LC7Qb9DXgDA9i+tQ8Zj3iwWAwPtgFTxbJ8NT4GN1R8p" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.1/dist/js/bootstrap.min.js" integrity="sha384-Atwg2Pkwv9vp0ygtn1JAojH0nYbwNJLPhwyoVbhoPwBhjQPR5VtM2+xf0Uwh9KtT" crossorigin="anonymous"></script>
    -->
  </body>
</html>