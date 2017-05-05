
<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <!-- The above 3 meta tags *must* come first in the head; any other head content must come *after* these tags -->
    <meta name="description" content="">
    <meta name="author" content="">
    <link rel="icon" href="../../favicon.ico">

    <title>Signin Template for Bootstrap</title>

    <!-- Bootstrap core CSS -->
    <link href="libs/css/bootstrap.min.css" rel="stylesheet">

    <link href="libs/font-awesome/css/font-awesome.min.css" rel="stylesheet" type="text/css">



    <!-- Custom styles for this template -->
    <link href="signin.css" rel="stylesheet">


  </head>

  <body>

    <div class="container">

        <div class="fundo-login">
          <?php
            if (isset($_GET['erro']) &&  $_GET['erro'] != 0) {
          ?>
          <div class="alert-index">
            <button type="button" class="close" data-dismiss="alert" aria-hidden="true">×</button>
            <i class="fa fa-times-circle sign "></i><span style="margin-left: 1rem;"><strong>Acesso negado!</strong></span>
          </div>
          <?php
            }
          ?>

            <form class="form-signin form-style" method="post" action="modulos/login/controller/authentication_usuario.php">
              <h2 class="form-signin-heading" style="color: #fff;font-size: 18px;">Acesso Restrito</h2>
              <div class="input-group">
      					<span class="input-group-addon"><i class="fa fa-user"></i></span>
      					<input type="text" placeholder="Email" id="usuario" name="usuario" class="form-control" style="background: rgba(0, 6, 22, 0.08);">
      				</div>
              <div class="input-group">
      					<span class="input-group-addon"><i class="fa fa-lock"></i></span>
      					<input type="password" placeholder="Senha" id="senha" name="senha" class="form-control" style="background: rgba(0, 6, 22, 0.08);">
      				</div>


            <button class="btn pull-right" type="submit">Acessar</button>
            <!-- <button class="btn btn-lg btn-primary btn-block" type="submit">Sign in</button> -->
          </form>
        </div>
    </div> <!-- /container -->



  </body>
</html>

<style type="text/css">
     body{
       background-image: url("img/login/fundo2.jpg");
       /*background-size: 100% 100%;*/
     }
     .form-style{
       width: 39rem;
position: absolute;
top: 26%;
left: 37%;
     }
     .fundo-login{
       background: rgba(8, 8, 8, 0.46);
     height: 27rem;
     width: 53rem;
     margin-left: 32rem;
     margin-top: 12rem;
     }
     .input-group {
          margin-bottom: 15px;
      }

    .input-group {
        position: relative;
        display: table;
        border-collapse: separate;
    }
    .alert-index {
      /* background: red; */
    /* width: 100%; */
    height: 51px;
    padding: 15px;
    /* margin-bottom: 20px; */
    border: 1px solid rgb(193, 189, 189);
    border-radius: 4px;
    background: rgba(233, 30, 30, 0.6);
    color: #fff;
}

</style>
<script src="libs/js/jquery.js"></script>
<script type="text/javascript">
  $('.close').click(function(){
    $('.alert-index').css('display','none');
  });





  </script>
