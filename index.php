<!doctype html>
<html lang="pt_BR">
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Página redirect</title>

    <link rel="canonical" href="https://getbootstrap.com/docs/5.0/examples/album/">

    <!-- Bootstrap core CSS -->
<link href="css/bootstrap.min.css" rel="stylesheet">

    <style>
      .bd-placeholder-img {
        font-size: 1.125rem;
        text-anchor: middle;
        -webkit-user-select: none;
        -moz-user-select: none;
        user-select: none;
      }

      @media (min-width: 768px) {
        .bd-placeholder-img-lg {
          font-size: 3.5rem;
        }
      }
    </style>

    
  </head>
<body>
    
<header>
  <div class="collapse bg-dark" id="navbarHeader">
    <div class="container">
      <div class="row">
        <div class="col-sm-8 col-md-7 py-4">
          <h4 class="text-white">Sobre a QueroBahia</h4>
          <p class="text-muted">Texto informativo sobre a marca</p>
        </div>
        <div class="col-sm-4 offset-md-1 py-4">
          <h4 class="text-white">Redes Sociais </h4>
          <ul class="list-unstyled">
            <li><a href="#" class="text-white">Follow on Twitter</a></li>
            <li><a href="#" class="text-white">Like on Facebook</a></li>
            <li><a href="#" class="text-white">Email me</a></li>
          </ul>
        </div>
      </div>
    </div>
  </div>
  <div class="navbar navbar-dark bg-dark shadow-sm">
    <div class="container">
      <a href="#" class="navbar-brand d-flex align-items-center">
        <svg xmlns="http://www.w3.org/2000/svg" width="20" height="20" fill="none" stroke="currentColor" stroke-linecap="round" stroke-linejoin="round" stroke-width="2" aria-hidden="true" class="me-2" viewBox="0 0 24 24"><path d="M23 19a2 2 0 0 1-2 2H3a2 2 0 0 1-2-2V8a2 2 0 0 1 2-2h4l2-3h6l2 3h4a2 2 0 0 1 2 2z"/><circle cx="12" cy="13" r="4"/></svg>
        <strong>Album</strong>
      </a>
      <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarHeader" aria-controls="navbarHeader" aria-expanded="false" aria-label="Toggle navigation">
        <span class="navbar-toggler-icon"></span>
      </button>
    </div>
  </div>
</header>

<main>

  <section class="py-5 text-center container">
    <div class="row py-lg-5">
      <div class="col-lg-6 col-md-8 mx-auto">
        <h1 class="fw-light"><strong>Quero Bahia</strong></h1>
        <p class="lead text-muted">Rede de lojas Quero Bahia, sempre uma perto de você. <br> Digite seu CEP abaixo e descubra uma loja próxima de você </p>
        <form action="index.php" method="POST">
          <div class="form-group" style="display: flex;">
            <input type="text"  class="form-control" name="user_cep" placeholder="Insira seu CEP" maxlength="9">
            <input type="submit"  class="btn btn-success" value="Procurar">
          </div>
        </form>
      </div>
    </div>
  </section>

  <div class="album py-5 bg-light">
    <div class="container">

      <div class="row row-cols-1 row-cols-sm-2 row-cols-md-3 g-3">
      <?php
        function mostrarLoja($consulta){
          while($linha = mysqli_fetch_assoc($consulta)){
            $nome_loja = $linha['nome_loja'];
            $end_cep = $linha['end_cep'];
            $end_rua = $linha['end_rua'];
            $end_num = $linha['end_num'];
            $end_bai = $linha['end_bai'];
            $end_cid = $linha['end_cid'];
            $num_tel = $linha['num_tel'];
            $link_loja = $linha['link_loja'];
            $link_maps = $linha['link_maps'];
            $nome_imagem = $linha['nome_imagem'];

            if ($nome_imagem == "" || $nome_imagem == "0" || $nome_imagem == "Array") {
              $nome_imagem = 'sem_img.png';
            }

            echo "<div class='col'>
            <div class='card shadow-sm'>
              <img src='cadastro/img/$nome_imagem' alt='Imagem produto' class='bd-placeholder-img card-img-top' width='100%' height='225' role='img'>
              <div class='card-body' style='padding-top: 0px;'>
                <hr>
                <h5 class='card-text'>$nome_loja</h5>
                <h6 class='card-text'>$end_rua, $end_num - $end_bai</h6>
                <h6 class='card-text'>$end_cid - $end_cep</h6>
                <h6 class='card-text'> Tel: $num_tel</h6>
                <div class='d-flex justify-content-between align-items-center'>
                  <div class='btn-group'>
                    <a href='$link_loja' class='btn btn-success btn-sm'>Visitar Site</a>
                    <a href='$link_maps' type='button' class='btn btn-sm btn btn-primary' style='padding-left: 10px; margin-left: 10px;' target='_blank'>Ver no Maps</a>
                  </div>
                </div>
              </div>
            </div>
            </div>";
          }
        }
          include "conexao/conexao.php";

          $user_cep = addslashes($_POST['user_cep']);
          $sql = "SELECT * FROM cadastro_loja WHERE end_cep like $user_cep";
          $resultado = mysqli_query($conexao, $sql);

          $sql = "SELECT * FROM cadastro_loja WHERE 1";
          $dados = mysqli_query($conexao, $sql);

          if ($resultado != "") {
            /*MOSTTRA AS LOJAS CORRESPONDENTES A PESQUISA*/
            mostrarLoja($resultado);
          } else {
            /*MOSTRA TODAS AS LOJAS CADASTRADAS NO BANCO*/
            mostrarLoja($dados);
          }
        ?>
      </div>
    </div>
  </div>
</main>
  <footer class="text-muted py-5">
    <div class="container">
        <a class="btn btn-primary" href="#">Voltar para o topo</a>
    </div>
  </footer>
    <script src="js/bootstrap.bundle.min.js"></script>
  </body>
</html>
