<div class="modal fade" id="visualizar-evento" tabindex="-1" role="dialog" aria-labelledby="myModalLabel">
  <div class="modal-dialog" role="document">
    <div class="modal-content">
      <div class="modal-header">
        <button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">&times;</span></button>
        <h4 class="modal-title" id="myModalLabel">Informações sobre o evento</h4>
      </div>
      <div class="modal-body">
        <form class="" action="modulos/agenda/controller/adicionar-evento.php" method="post">
          <div class="form-group">
            <label for="">Titulo</label><br>
            <span class="titulo-evento"></span>
          </div>
          <div class="form-group">
            <label for="">Data</label><br>
            <span class="data-evento"></span>
          </div>
          <div class="form-group">
            <label for="">Horario</label><br>
            <span class="horario-evento"></span>
          </div>
          <div class="form-group">
            <label for="">Local</label><br>
            <span class="local-evento"></span>
          </div>
          <div class="form-group">
            <label for="">Descrição</label><br>
            <span class="descricao-evento"></span>
          </div>
          <div class="modal-footer">
            <button type="button" class="btn btn-default" data-dismiss="modal">Fechar</button>
            <!-- <button type="submit" class="btn btn-success">Salvar</button> -->
          </div>
        </form>

      </div>

    </div>
  </div>
</div>
