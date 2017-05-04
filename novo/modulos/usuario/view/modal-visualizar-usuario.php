<div class="modal fade" id="visualizar-usuario" tabindex="-1" role="dialog" aria-labelledby="myModalLabel">
  <div class="modal-dialog" role="document">
    <div class="modal-content" style="width: 130rem;margin-left: -35rem; height: 33rem;">
      <div class="modal-header">
        <button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">&times;</span></button>
        <h4 class="modal-title" id="myModalLabel">Informações sobre o usuario</h4>
      </div>
      <div class="modal-body">
        <form class="" action="modulos/agenda/controller/adicionar-evento.php" method="post">
          <div class="row">
            <div class="form-group col-md-4">
              <label for="">Nome</label><br>
              <span class="nome-usuario"></span>
            </div>
            <div class="form-group col-md-2">
              <label for="">CPF</label><br>
              <span class="cpf-usuario"></span>
            </div>
            <div class="form-group col-md-2">
              <label for="">Sexo</label><br>
              <span class="sexo-usuario"></span>
            </div>
            <div class="form-group col-md-2">
              <label for="">Telefone</label><br>
              <span class="telefone-usuario"></span>
            </div>
            <div class="form-group col-md-2">
              <label for="">Celular</label><br>
              <span class="celular-usuario"></span>
            </div>
            <div class="form-group col-md-4">
              <label for="">Endereco</label><br>
              <span class="endereco-usuario"></span>
            </div>
            <div class="form-group col-md-2">
              <label for="">CEP</label><br>
              <span class="cep-usuario"></span>
            </div>
            <div class="form-group col-md-2">
              <label for="">Bairro</label><br>
              <span class="bairro-usuario"></span>
            </div>
            <div class="form-group col-md-2">
              <label for="">Cidade</label><br>
              <span class="cidade-usuario"></span>
            </div>
            <div class="form-group col-md-2">
              <label for="">Estado</label><br>
              <span class="estado-usuario"></span>
            </div>
            <div class="form-group col-md-4">
              <label for="">E-mail</label><br>
              <span class="email-usuario"></span>
            </div>
            <div class="form-group col-md-4">
              <label for="">Tipo Usuario</label><br>
              <span class="tipo-usuario"></span>
            </div>
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
