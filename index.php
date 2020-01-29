<?php
  if($_POST){
    if(count($_POST) > 2){
      include('config.php');
      $telefone = $_POST  ['telefone'];
      $email = $_POST['email'];
      $nome = $_POST['nome'];

      $sql = "INSERT INTO contatos(nome, email, celular) VALUES('".$nome."','".$email."','".$telefone."')";

      $res = $conn->query($sql);

      if($res==true){
        echo '<script>window.alert("Cadastro realizado com sucesso")</script>';
      }else{
        echo '<script>window.alert("Não foi possível realizar o cadastro, tente novamente mais tarde")</script>';
      }
    }
  }
?>
<html lang="pt-BR">

<head>

  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
  <meta name="description" content="">
  <meta name="author" content="">

  <title>One Page Wonder - Start Bootstrap Template</title>

  <!-- Bootstrap core CSS -->
  <link href="vendor/bootstrap/css/bootstrap.min.css" rel="stylesheet">

  <!-- Custom fonts for this template -->
  <link href="https://fonts.googleapis.com/css?family=Catamaran:100,200,300,400,500,600,700,800,900" rel="stylesheet">
  <link href="https://fonts.googleapis.com/css?family=Lato:100,100i,300,300i,400,400i,700,700i,900,900i" rel="stylesheet">

  <!-- Custom styles for this template -->
  <link href="css/one-page-wonder.css" rel="stylesheet">

</head>

<body>
  <!--MODAL EDIT-->
  <div class="modal fade" id="exampleModal" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
    <div class="modal-dialog" role="document">
      <div class="modal-content">
        <div class="modal-header">
          <h5 class="modal-title" id="exampleModalLabel">Fique por dentro</h5>
          <button type="button" class="close" data-dismiss="modal" aria-label="Close">
            <span aria-hidden="true">&times;</span>
          </button>
        </div>
        <div class="modal-body">
          <form action="index.php" method="POST">
            <input type="hidden" name="acao" value="cadastrar">
            <div class="form-group">
              <label>Digite seu nome:</label>
              <input type="text" name="nome" class="form-control" placeholder="Digite seu nome aqui">
              <label>Digite seu e-mail</label>
              <input type="text" name="email" class="form-control" placeholder="exemplo@exemplo.com"> 
              <label>Telefone para contato</label>
              <input type="tel" name="telefone" class="form-control" placeholder="9999-9999">
            </div>
            <div class="form-group">
              <button type="submit" class="btn btn-success">Cadastrar</button>
            </div>
          </form>
          <button type="button" class="btn btn-danger" data-dismiss="modal">Fechar</button>
          
        </div>
      </div>
    </div>
  </div>
  <!--MODAL EDIT-->

  <!-- Navigation -->
  <nav class="navbar navbar-expand-lg navbar-dark navbar-custom fixed-top">
    <div class="container">
      <a class="navbar-brand" href="#">Participe</a>
      <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarResponsive" aria-controls="navbarResponsive" aria-expanded="false" aria-label="Toggle navigation">
        <span class="navbar-toggler-icon"></span>
      </button>
      <div class="collapse navbar-collapse" id="navbarResponsive">
        <ul class="navbar-nav ml-auto">
          <li class="nav-item">
            <a class="nav-link" data-toggle="modal" data-target="#exampleModal" href="#">Cadastre-se</a>
          </li>
        </ul>
      </div>
    </div>
  </nav>

  <header class="masthead text-center text-white">
    <div class="masthead-content">
      <div class="container">
        <h1 class="masthead-heading mb-0" style='color:#FB3640'>Conquiste já</h1>
        <h2 class="masthead-subheading mb-0" style='color:#FB3640'>a sua independência finaceira</h2>
        <a data-toggle="modal" data-target="#exampleModal" style='curso:pointer;' class="btn btn-primary btn-xl rounded-pill mt-5">Participe</a>
      </div>
    </div>
  </header>

  <section>
    <div class="container">
      <div class="row align-items-center">
        <div class="col-lg-6 order-lg-2">
          <div class="p-5">
            <img class="img-fluid rounded-circle" src="img/financas1.jpg">
          </div>
        </div>
        <div class="col-lg-6 order-lg-1">
          <div class="p-5">
            <h2 class="display-4">Conheça os melhores métodos para suas finanças</h2>
            <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Quod aliquid, mollitia odio veniam sit iste esse assumenda amet aperiam exercitationem, ea animi blanditiis recusandae! Ratione voluptatum molestiae adipisci, beatae obcaecati.</p>
          </div>
        </div>
      </div>
    </div>
  </section>

  <section>
    <div class="container">
      <div class="row align-items-center">
        <div class="col-lg-6">
          <div class="p-5">
            <img class="img-fluid rounded-circle" src="img/financas2.png">
          </div>
        </div>
        <div class="col-lg-6">
          <div class="p-5">
            <h2 class="display-4">Planejamento financeiro</h2>
            <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Quod aliquid, mollitia odio veniam sit iste esse assumenda amet aperiam exercitationem, ea animi blanditiis recusandae! Ratione voluptatum molestiae adipisci, beatae obcaecati.</p>
          </div>
        </div>
      </div>
    </div>
  </section>

  <section>
    <div class="container">
      <div class="row align-items-center">
        <div class="col-lg-6 order-lg-2">
          <div class="p-5">
            <img class="img-fluid rounded-circle" src="img/financas3.jpg" alt="">
          </div>
        </div>
        <div class="col-lg-6 order-lg-1">
          <div class="p-5">
            <h2 class="display-4" style="aling-content:center">Investimentos inteligentes</h2>
            <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Quod aliquid, mollitia odio veniam sit iste esse assumenda amet aperiam exercitationem, ea animi blanditiis recusandae! Ratione voluptatum molestiae adipisci, beatae obcaecati.</p>
          </div>
        </div>
      </div>
    </div>
  </section>
  <section id='palestra'>
    <div id="titulo"><h1>A palestra</h1></div>
    <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Quod aliquid, mollitia odio veniam sit iste esse assumenda amet aperiam exercitationem, ea animi blanditiis recusandae! Ratione voluptatum molestiae adipisci, beatae obcaecati.</p>
    <img style="margin-bottom:4%;" src="img/download.jpg" alt=""><h4><b>A partir das 18h, Dia 22/01</b></h4>
    <br>
    <h3>Local: Espaço 365, Asa Norte, Quadra 705 Norte</h3>
    <iframe style="margin-bottom:2%;" src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3839.5785417154416!2d-47.89115448514533!3d-15.773419489064269!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x935a3a51b9bfd89d%3A0x5b76ac9d313074e3!2sEspa%C3%A7o%20365!5e0!3m2!1spt-BR!2sbr!4v1579737446373!5m2!1spt-BR!2sbr" width="600" height="300" frameborder="0" style="border:0;" allowfullscreen=""></iframe>
  </section>

  <!-- Footer -->
  <footer class="py-5 bg-black">
    <div class="container">
      <p class="m-0 text-center text-white small">Copyright &copy; Your Website 2019</p>
    </div>
    <!-- /.container -->
  </footer>

  <!-- Bootstrap core JavaScript -->
  <script src="vendor/jquery/jquery.min.js"></script>
  <script src="vendor/bootstrap/js/bootstrap.bundle.min.js"></script>

</body>


</html>
