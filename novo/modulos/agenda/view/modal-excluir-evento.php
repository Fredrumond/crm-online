<div class="modal fade" id="excluir-evento" tabindex="-1" role="dialog" aria-labelledby="myModalLabel">
  <div class="modal-dialog" role="document">
    <div class="modal-content">
      <div class="modal-header">
        <button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">&times;</span></button>
        <h4 class="modal-title" id="myModalLabel">Exclusão de Evento</h4>
      </div>
      <div class="modal-body">
        <form class="" action="modulos/agenda/controller/excluir-evento.php" method="post">
          <input type="hidden" name="id-evento" class="id-evento">
          <center><h3>Deseja realmente excluir esse evento?</h3></center>

          <div class="modal-footer">
            <button type="button" class="btn btn-default" data-dismiss="modal">Não</button>
            <button type="submit" class="btn btn-danger">Sim</button>
          </div>
        </form>

      </div>

    </div>
  </div>
</div>
