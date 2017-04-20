$(document).ready(function(){
  //chamar mascara de tempo
  $('.time').mask('00:00:00');

  //carrega todos os eventos
  carregaEventos();
});

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

//CARREGA TODOS OS EVENTOS E ADICIONA NA TABELA
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

function createElement(id,titulo,data,horario){

  var flagVisualizar = 1;
  var flagEditar = 2;
  var visualizar = '<span class="acoes-tabela"><a href="" data-toggle="modal" data-target="#visualizar-evento" onclick="retornaEvento('+id+','+flagVisualizar+')"><i class="fa fa-list-alt" aria-hidden="true"></i></a></span>';
  var editar     = '<span class="acoes-tabela"><a href="" data-toggle="modal" data-target="#editar-evento" onclick="retornaEvento('+id+','+flagEditar+')"><i class="fa fa-pencil-square-o" aria-hidden="true"></i></a></span>';
  var excluir    = '<span class="acoes-tabela"><a href="#"><i class="fa fa-times" aria-hidden="true"></i></a></span>';

  var newRow = $("<tr>");
  var cols = "";

  cols += '<td>'+titulo+'</td>';
  cols += '<td>'+data+'</td>';
  cols += '<td>'+horario+'</td>';
  cols += '<td>'+visualizar + editar + excluir+'</td>';

  return newRow.append(cols);

}

function retornaEvento(id,flag){
  $.ajax({
    type:"GET",
    url:"modulos/agenda/model/seleciona_evento.php?id="+id,
    dataType: 'json'
  }).done(function(data){
    switch (flag) {
      case 1:
      data.evento.forEach(function(evento){
        $('.titulo-evento').html(evento.titulo);
        $('.data-evento').html(evento.data);
        $('.horario-evento').html(evento.horario);
        $('.descricao-evento').html(evento.descricao);
      })
      break;
      case 2:
      data.evento.forEach(function(evento){
        $('.titulo-evento').val(evento.titulo);
        $('.data-evento').val(evento.data);
        $('.horario-evento').val(evento.horario);
        $('.descricao-evento').val(evento.descricao);
      })
      break;
    }
  });
}
