<!DOCTYPE html>
<html lang="pt-BR">
  <head>
  
	<!-- Titulo no navegador -->
    <title>easyCRM</title>
    
	<!--Para aceitar acentuação-->
	<meta http-equiv="Content-Type" content="text/html;charset=utf-8" />
	
	<!-- Bootstrap -->
    <link href="libs/css/bootstrap.min.css" rel="stylesheet" media="screen">
	
	<!-- Meu Layout-->
	<link rel="stylesheet" type="text/css" href="libs/mycss/style.css"/>

	<script type="text/javascript" src="http://ajax.googleapis.com/ajax/libs/jquery/1.3.1/jquery.min.js">

	</script> 
		<script type="text/javascript">
			$(document).ready(function(){
				$("a[rel=modal]").click( function(ev){
					ev.preventDefault();

					var id = $(this).attr("href");

					var alturaTela = $(document).height();
					var larguraTela = $(window).width();
	
					//colocando o fundo preto
					$('#mascara').css({'width':larguraTela,'height':alturaTela});
					$('#mascara').fadeIn(1000);	
					$('#mascara').fadeTo("slow",0.8);

					var left = ($(window).width() /2) - ( $(id).width() / 2 );
					var top = ($(window).height() / 2) - ( $(id).height() / 2 );
					
					$(id).css({'top':top,'left':left});
					$(id).show();	
 				});

 				$("#mascara").click( function(){
 					$(this).hide();
 					$(".window").hide();
 				});

 				$('.fechar').click(function(ev){
 					ev.preventDefault();
 					$("#mascara").hide();
 					$(".window").hide();
 				});
			});
		</script>
	
	<style type="text/css">

		.window{
			display:none;
			width:500px;
			height:300px;
			position:absolute;
			left:0;
			top:0;
			background:#FFF;
			z-index:9900;
			padding:10px;
			border-radius:10px;
		}

		#mascara{
			position:absolute;
  			left:0;
  			top:0;
  			z-index:9000;
  			background-color:#000;
  			display:none;
		}

		.fechar{display:block; text-align:right;}

	</style>

  </head>
  <body>
	<div id="logo_login"><img src="imagens/logo2.png"></div>
  	<div id="box_login">
		<form class="form-horizontal" method="POST" action="includes/login.php" >
			  <div class="control-group">			    
			    <div class="controls">
			      <input class="input-xlarge" type="text" name="email" id="email" placeholder="Email">
			    </div>
			  </div>
			  <div class="control-group">
			    
			  <div class="controls">
			  	<input class="input-xlarge" type="password" name="senha" id="senha" placeholder="Senha">
			  	<input type="checkbox"> Manter-se conectado
			  </div>
				
			  </div>
			  <div class="control-group">
			    <div class="controls">			      
			      <button type="submit" class="btn btn-primary">Login</button>
			      <button type="submit" class="btn btn-primary">Cadastrar</button>			      
			      <div id="forgotpass">				  		
					<!-- Button to trigger modal -->
						<a href="#myModal"  data-toggle="modal">Esqueci minha senha</a>
						 
						<!-- Modal -->
						<div id="myModal" class="modal hide fade" tabindex="-1" role="dialog" aria-labelledby="myModalLabel" aria-hidden="true">
						  <div class="modal-header">
						    <button type="button" class="close" data-dismiss="modal" aria-hidden="true">×</button>
						    <h3 id="myModalLabel">Redefinir senha</h3>
						  </div>
						  <div class="modal-body">
						    <form class="form-inline">					
								E-mail
								<input class="input-xlarge" type="text" placeholder="">*	
							</form>
						  </div>
						  <div class="modal-footer">
						    <button class="btn" data-dismiss="modal" aria-hidden="true">Fechar</button>
						    <button class="btn btn-primary">Redefinir senha</button>
						  </div>
						</div>
				  </div>	
			    </div>
			  </div>
		</form>
  	</div>
		
		
	<script src="http://code.jquery.com/jquery-latest.js"></script>
	<script src="js/bootstrap.min.js"></script>	
  </body>
</html> 