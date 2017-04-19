$(document).ready(function(){
  //chamar mascara de tempo
  $('.time').mask('00:00:00');
  //carrega todos os eventos
  carregaEventos();
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

    //CARREGA TODOS OS EVENTOS
    function carregaEventos(){
    		$.ajax({
    			type:"GET",
    			url:"modulos/agenda/model/seleciona_todos_eventos.php",
    			dataType: 'json'
    		}).done(function(data){
    			console.log(data);
          data.eventos.forEach(function(evento){
            $(".container-teams").append(createElement(evento.id,evento.titulo,evento.data,evento.horario));
          })
    		});
    	}
  //ADICIONA ELEMENTOS NA TABELA
	function createElement(id,pontos,data,horario){
    var visualizar = '<span class="acoes-tabela"><a href="" data-toggle="modal" data-target="#visualizar-evento" onclick="setaDadosModal('+id+')"><i class="fa fa-list-alt" aria-hidden="true"></i></a></span>';
    var editar     = '<span class="acoes-tabela"><a href="#"><i class="fa fa-pencil-square-o" aria-hidden="true"></i></a></span>';
    var excluir    = '<span class="acoes-tabela"><a href="#"><i class="fa fa-times" aria-hidden="true"></i></a></span>';

      return '<tr><td>' + pontos + '</td>'+
                 '<td>'+ data +'</td>' +
                 '<td>'+ horario + '</td>'+
                 '<td>'+ visualizar + editar + excluir +'</td>'+
                 '</tr>';
	}

  function setaDadosModal(id) {
    $('#campo').val(id);
    retornaEvento(id);
  }
  function retornaEvento(id){
    $.ajax({
      type:"GET",
      url:"modulos/agenda/model/seleciona_evento.php?id="+id,
      dataType: 'json'
    }).done(function(data){
      console.log(data);
      data.evento.forEach(function(evento){
        $('.titulo-evento').html(evento.titulo);
        $('.data-evento').html(evento.data);
        $('.horario-evento').html(evento.horario);
        $('.descricao-evento').html(evento.descricao);

      })

    });
  }
