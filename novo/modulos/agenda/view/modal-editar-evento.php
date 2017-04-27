<div class="modal fade" id="editar-evento" tabindex="-1" role="dialog" aria-labelledby="myModalLabel">
  <div class="modal-dialog" role="document">
    <div class="modal-content">
      <div class="modal-header">
        <button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">&times;</span></button>
        <h4 class="modal-title" id="myModalLabel">Adicionar Evento</h4>
      </div>
      <div class="modal-body">
        <form class="" action="modulos/agenda/controller/editar-evento.php" method="post">
          <input type="hidden" name="id-evento" value="id-evento" class="id-evento">
          <div class="form-group">
            <label for="">Titulo</label>
            <input type="text" class="form-control titulo-evento" id="titulo" name="titulo" >
          </div>
          <div class="form-group">
            <label for="">Data</label>
            <input type="text" class="form-control data-evento datepicker" name="data" >
          </div>
          <div class="form-group">
            <label for="">Horario</label>
            <input type="text" class="form-control time horario-evento" id="horario" name="horario" >
          </div>
          <div class="form-group">
            <label for="">Local</label>
            <input type="text" class="form-control time local-evento" id="local" name="local" >
          </div>
          <div class="form-group">
            <label for="">Descrição</label>
            <textarea class="form-control descricao-evento" rows="5" id="descricao" name="descricao"></textarea>
            Caracteres restantes:
            <span class="contagem">140</span>
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
