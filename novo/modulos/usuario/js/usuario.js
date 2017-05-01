$(document).ready(function(){
  //carrega todos os usuarios
  carregaUsuarios();

});

//CARREGA TODOS OS USUARIOS E ADICIONA NA TABELA
function carregaUsuarios(){
	$.ajax({
		type:"GET",
		url:"modulos/usuario/model/seleciona_todos_usuarios.php",
		dataType: 'json'
	}).done(function(data){
		console.log(data);
    data.usuarios.forEach(function(usuario){
      $(".container-usuarios").append(createElement(usuario.id,usuario.nome,usuario.email,usuario.telefone));
    })
	});
}

function createElement(id,nome,email,telefone){

  var flagVisualizar = 1;
  var flagEditar = 2;
  var flagExcluir = 3;
  var visualizar = '<span class="acoes-tabela"><a href="usuario-visualizar.php?id='+id+'"><i class="fa fa-list-alt" aria-hidden="true"></i></a></span>';
  var editar     = '<span class="acoes-tabela"><a href="" data-toggle="modal" data-target="#editar-evento" onclick="retornaEvento('+id+','+flagEditar+')"><i class="fa fa-pencil-square-o" aria-hidden="true"></i></a></span>';
  var excluir    = '<span class="acoes-tabela"><a href="" data-toggle="modal" data-target="#excluir-evento" onclick="retornaEvento('+id+','+flagExcluir+')"<i class="fa fa-times" aria-hidden="true"></i></a></span>';

  var newRow = $("<tr>");
  var cols = "";

  cols += '<td>'+nome+'</td>';
  cols += '<td>'+email+'</td>';
  cols += '<td>'+telefone+'</td>';
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
        $('.local-evento').html(evento.local);
        $('.descricao-evento').html(evento.descricao);
      })
      break;
      case 2:
      data.evento.forEach(function(evento){
        $('.id-evento').val(id);
        $('.titulo-evento').val(evento.titulo);
        $('.data-evento').val(evento.data);
        $('.horario-evento').val(evento.horario);
        $('.local-evento').val(evento.local);
        $('.descricao-evento').val(evento.descricao);
      })
      break;
      case 3:
      data.evento.forEach(function(evento){
        $('.id-evento').val(id);
      })
      break;
    }
  });
}
