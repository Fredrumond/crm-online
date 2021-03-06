<div class="modal fade" id="novo-evento" tabindex="-1" role="dialog" aria-labelledby="myModalLabel">
  <div class="modal-dialog" role="document">
    <div class="modal-content">
      <div class="modal-header">
        <button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">&times;</span></button>
        <h4 class="modal-title" id="myModalLabel">Adicionar Evento</h4>
      </div>
      <div class="modal-body">
        <form class="" action="modulos/agenda/controller/adicionar-evento.php" method="post">
          <div class="form-group">
            <label for="">Titulo</label>
            <input type="text" class="form-control" id="titulo" name="titulo" >
          </div>
          <div class="form-group">
            <label for="">Data</label>
            <input type="text" class="form-control datepicker" name="data" >
          </div>
          <div class="form-group">
            <label for="">Horario</label>
            <input type="text" class="form-control time" id="horario" name="horario" >
          </div>
          <div class="form-group">
            <label for="">Local</label>
            <input type="text" class="form-control" id="local" name="local" >
          </div>
          <div class="form-group">
            <label for="">Descrição</label>
            <textarea class="form-control" rows="5" id="descricao" name="descricao"></textarea>
            Caracteres restantes:
            <span class="contagem">140</span>
          </div>
          <div class="form-group">
            <label for="">Lista de Convidados</label><br>
            <select id="lista-convidados" name="lista-convidados[]" multiple="multiple">
              <option value="1">Jose</option>
              <option value="2">Maria</option>
              <option value="3">Fernando</option>
              <option value="4">Marcos</option>
              <option value="5">Renata</option>
              <option value="6">Camila</option>
          </select>
          </div>
          <div class="modal-footer">
            <button type="button" class="btn btn-default" data-dismiss="modal">Fechar</button>
            <button type="submit" class="btn btn-success">Salvar</button>
          </div>
        </form>

      </div>

    </div>
  </div>
</div>
