<form class="" action="controller/agenda/adicionar-evento.php" method="post">
  <div class="form-group">
    <label for="">Titulo</label>
    <input type="text" class="form-control" id="titulo" name="titulo" >
  </div>
  <div class="form-group">
    <label for="">Data</label>
    <input type="text" class="form-control" id="data" name="data" >
  </div>
  <div class="form-group">
    <label for="">Horario</label>
    <input type="text" class="form-control" id="horario" name="horario">
  </div>
  <div class="form-group">
    <label for="">Descrição</label>
    <textarea class="form-control" rows="5" id="descricao" name="descricao"></textarea>
  </div>
<div class="pull-right">
  <button type="submit" class="btn btn-success">Salvar</button>
</div>
</form>
