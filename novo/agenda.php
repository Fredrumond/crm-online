<?php
	//include('lib/Config.php');
	ob_start();
  $titulo = 'Agenda';
  $subtitulo = '';
?>

<div class="row">
	<div class="col-lg-12">
			<h2>Eventos</h2>
			<div class="pull-right" style="margin-top: -4rem;">
				<button type="button" class="btn btn-success" data-toggle="modal" data-target="#novo-evento">Novo Evento</button>
				<?php include "view/agenda/modal-evento.php"; ?>
			</div>
			<div class="table-responsive">
					<table class="table table-bordered table-hover table-striped">
							<thead>
									<tr>
											<th>Evento</th>
											<th>Data</th>
											<th>Horario</th>
											<th>Ações</th>
									</tr>
							</thead>
							<tbody>
									<tr class="active">
											<td>Teste</td>
											<td>05/04/2017</td>
											<td>08:00</td>
											<td></td>
									</tr>
							</tbody>
					</table>
			</div>
</div>

<?php
	$obContent = ob_get_contents();
	ob_end_clean();
	include('base.php');
?>
<script type="text/javascript">
  $(document).ready(function(){
    $('.time').mask('00:00:00');
  });

  $(function(){
			 $.datepicker.regional['pt-BR'] = {
			  closeText: 'Fechar',
			  prevText: '&#x3c;Anterior',
			  nextText: 'Pr&oacute;ximo&#x3e;',
			  currentText: 'Hoje',
			  monthNames: ['Janeiro','Fevereiro','Mar&ccedil;o','Abril','Maio','Junho',
			  'Julho','Agosto','Setembro','Outubro','Novembro','Dezembro'],
			  monthNamesShort: ['Jan','Fev','Mar','Abr','Mai','Jun',
			  'Jul','Ago','Set','Out','Nov','Dez'],
			  dayNames: ['Domingo','Segunda-feira','Ter&ccedil;a-feira','Quarta-feira','Quinta-feira','Sexta-feira','Sabado'],
			  dayNamesShort: ['Dom','Seg','Ter','Qua','Qui','Sex','Sab'],
			  dayNamesMin: ['Dom','Seg','Ter','Qua','Qui','Sex','Sab'],
			  weekHeader: 'Sm',
			  dateFormat: 'dd/mm/yy',
			  firstDay: 0,
			  isRTL: false,
			  showMonthAfterYear: false,
			  yearSuffix: ''};
			 $.datepicker.setDefaults($.datepicker.regional['pt-BR']);
			});

      $( "#datepicker" ).datepicker( $.datepicker.regional[ "pt-BR" ]);

      //LIMITAR CARACTERES
      $("#descricao").bind("input keyup paste",function(){
        var maximo = 140;
        var disponivel = maximo - $(this).val().length;
        if(disponivel < 0 ){
          var texto = $(this).val().substr(0,maximo);
          $(this).val(texto);
          disponivel = 0;
        }
        $(".contagem").text(disponivel);
      });



</script>
