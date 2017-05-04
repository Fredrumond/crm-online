<div class="modal fade" id="excluir-usuario" tabindex="-1" role="dialog" aria-labelledby="myModalLabel">
  <div class="modal-dialog" role="document">
    <div class="modal-content">
      <div class="modal-header">
        <button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">&times;</span></button>
        <h4 class="modal-title" id="myModalLabel">Exclusão de usuario</h4>
      </div>
      <div class="modal-body">
        <form class="" action="modulos/usuario/controller/excluir-usuario.php" method="post">
          <input type="hidden" name="id-usuario" class="id-usuario">
          <center><h3>Deseja realmente excluir esse usuario?</h3></center>

          <div class="modal-footer">
            <button type="button" class="btn btn-default" data-dismiss="modal">Não</button>
            <button type="submit" class="btn btn-danger">Sim</button>
          </div>
        </form>

      </div>

    </div>
  </div>
</div>
