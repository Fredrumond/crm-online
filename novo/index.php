
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
 top: 20%;
 left: 37%
     }
     .fundo-login{
       background: rgba(8, 8, 8, 0.46);
height: 23rem;
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

</style>
