$(document).ready(function(){
  //chamar mascara de tempo
  $('.time').mask('00:00:00');
  loadTeams();
});


//Calendario com dados em portugues
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

    //CARREGA O HISTORICO COM TODOS OS TIMES
function loadTeams(){
		$.ajax({
			type:"GET",
			url:"modulos/agenda/model/seleciona_todos_eventos.php",
			dataType: 'json'
		}).done(function(data){
			console.log(data);
      data.eventos.forEach(function(evento){
        $(".container-teams").append(createElement(evento.titulo,evento.data,evento.horario));
      })
		});
	}

	function createElement(pontos,data,horario){
	    // return '<div class="team">'+ '<h1>'+ pontos + '</h1>'
      //
			// 														+'</div>';
      return '<tr><td>' + pontos + '</td>'+
                 '<td>'+ data +'</td>' +
                 '<td>'+ horario + '</td>'+
                 '<td><a href="#">Visualizar</a><a href="#">Editar</a><a href="#">Remover</a></td>'+
                 '</tr>';
	}
