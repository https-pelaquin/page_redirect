<!doctype html>
<html lang="pt_BR">
  <head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <!-- Bootstrap CSS -->
    <link href="../css/bootstrap.min.css" rel="stylesheet" >

    <title>Projeto Crud</title>
  </head>
  <body>
    <div class="container">
        <div class="row">
            <div class="col">
                <h1>Tela de Cadastro</h1>    
                <form action="cadastro_script.php" method="POST" enctype="multipart/form-data">
                    <div class="form-group">
                        <label for="nome_loja">Nome da Loja</label>
                        <input type="text" class="form-control" name="nome_loja" required>
                    </div>
                    <h4>Endereço</h4>
                    <div class="form-group">
                        <label for="end_cep">CEP</label>
                        <input type="number"  class="form-control" name="end_cep" required>
                    </div>
                    <div class="form-group">
                        <label for="end_rua">Rua</label>
                        <input type="text"  class="form-control" name="end_rua" required>
                    </div>
                    <div class="form-group">
                        <label for="end_num">Número</label>
                        <input type="number"  class="form-control" name="end_num" required>
                    </div>
                    <div class="form-group">
                        <label for="end_bai">Bairro</label>
                        <input type="text"  class="form-control" name="end_bai" required>
                    </div>
                    <div class="form-group">
                        <label for="end_cid">Cidade</label>
                        <input type="text"  class="form-control" name="end_cid" required>
                    </div>
                    <div class="form-group">
                        <label for="num_tel">Número de Telefone</label>
                        <input type="number"  class="form-control" name="num_tel" required>
                    </div>
                    <div class="form-group">
                        <label for="link_loja">Link da Loja</label>
                        <input type="text"  class="form-control" name="link_loja" required>
                    </div>
                    <div class="form-group">
                        <label for="link_maps">Link da Maps</label>
                        <input type="text"  class="form-control" name="link_maps" required>
                    </div>
                    <div class="form-group">
                        <label for="imagem">Imagem da loja</label>
                        <input type="file"  class="form-control" name="imagem" accept=".jpg">
                    </div>
                    <div class="form-group">
                        <input type="submit"  class="btn btn-success">
                    </div>
                </form>
                <a href="../index.php" class="btn btn-primary">Voltar para a home</a>
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