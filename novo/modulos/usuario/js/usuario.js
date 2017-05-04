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
  var visualizar = '<span class="acoes-tabela"><a href="" data-toggle="modal" data-target="#visualizar-usuario" onclick="retornaEvento('+id+','+flagVisualizar+')"><i class="fa fa-list-alt" aria-hidden="true"></i></a></span>';
  var editar     = '<span class="acoes-tabela"><a href="" data-toggle="modal" data-target="#editar-usuario" onclick="retornaEvento('+id+','+flagEditar+')"><i class="fa fa-pencil-square-o" aria-hidden="true"></i></a></span>';
  var excluir    = '<span class="acoes-tabela"><a href="" data-toggle="modal" data-target="#excluir-usuario" onclick="retornaEvento('+id+','+flagExcluir+')"<i class="fa fa-times" aria-hidden="true"></i></a></span>';

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
    url:"modulos/usuario/model/seleciona_usuario.php?id="+id,
    dataType: 'json'
  }).done(function(data){
    switch (flag) {
      case 1:
      data.usuario.forEach(function(usuario){
        $('.nome-usuario').html(usuario.nome);
        $('.cpf-usuario').html(usuario.cpf);
        $('.sexo-usuario').html(usuario.sexo);
        $('.telefone-usuario').html(usuario.telefone);
        $('.celular-usuario').html(usuario.celular);
        $('.cep-usuario').html(usuario.cep);
        $('.endereco-usuario').html(usuario.endereco);
        $('.bairro-usuario').html(usuario.bairro);
        $('.cidade-usuario').html(usuario.cidade);
        $('.estado-usuario').html(usuario.estado);
        $('.email-usuario').html(usuario.email);
        $('.tipo-usuario').html(usuario.tipo_usuario_id);
      })
      break;
      case 2:
      data.usuario.forEach(function(usuario){
        $('.id-usuario').val(id);
        $('.nome-usuario').val(usuario.nome);
        $('.cpf-usuario').val(usuario.cpf);
        $('.sexo-usuario').val(usuario.sexo);
        $('.telefone-usuario').val(usuario.telefone);
        $('.celular-usuario').val(usuario.celular);
        $('.cep-usuario').val(usuario.cep);
        $('.endereco-usuario').val(usuario.endereco);
        $('.bairro-usuario').val(usuario.bairro);
        $('.cidade-usuario').val(usuario.cidade);
        $('.estado-usuario').val(usuario.estado);
        $('.email-usuario').val(usuario.email);
        $('.tipo-usuario').val(usuario.tipo_usuario_id);
      })
      break;
      case 3:
      data.usuario.forEach(function(usuario){
        $('.id-usuario').val(id);
      })
      break;
    }
  });
}
