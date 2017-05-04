<div class="modal fade" id="editar-usuario" tabindex="-1" role="dialog" aria-labelledby="myModalLabel">
  <div class="modal-dialog" role="document">
    <div class="modal-content" style="width: 130rem;margin-left: -35rem; height: 53rem;">
      <div class="modal-header">
        <button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">&times;</span></button>
        <h4 class="modal-title" id="myModalLabel">Editar Usuario</h4>
      </div>
      <div class="modal-body">
        <form class="" action="modulos/usuario/controller/editar-usuario.php" method="post">
            <input type="hidden" name="id-usuario" value="id-usuario" class="id-usuario">
          <div class="row">
            <div class="form-group">
              <div class="form-group col-md-4">
                <label for="">Nome</label>
                <input type="text" class="form-control nome-usuario" id="nome" name="nome" >
              </div>
            </div>
            <div class="form-group col-md-2">
              <label for="">CPF</label>
              <input type="text" class="form-control cpf-usuario" id="cpf" name="cpf" >
            </div>
            <div class="form-group col-md-2">
              <label for="">Sexo</label>
              <select class="form-control sexo-usuario" id="sexo" name="sexo">
                <option value='0' >Masculino</option>
                <option value='1' >Feminino</option>
              </select>
            </div>
            <div class="form-group col-md-2">
              <label for="">Telefone</label>
              <input type="text" class="form-control telefone-usuario" id="telefone" name="telefone" >
            </div>
            <div class="form-group col-md-2">
              <label for="">Celular</label>
              <input type="text" class="form-control celular-usuario" id="celular" name="celular" >
            </div>
            <div class="form-group col-md-2">
              <label for="">CEP</label>
              <input type="text" class="form-control cep-usuario" id="cep" name="cep" >
            </div>
            <div class="form-group col-md-4">
              <label for="">Endereco</label>
              <input type="text" class="form-control endereco-usuario" id="endereco" name="endereco" >
            </div>
            <div class="form-group col-md-2">
              <label for="">Bairro</label>
              <input type="text" class="form-control bairro-usuario" id="bairro" name="bairro" >
            </div>
            <div class="form-group col-md-2">
              <label for="">Cidade</label>
              <input type="text" class="form-control cidade-usuario" id="cidade" name="cidade" >
            </div>
            <div class="form-group col-md-2">
              <label for="">Estado</label>
              <input type="text" class="form-control estado-usuario" id="estado" name="estado" >
            </div>
            <div class="form-group col-md-4">
              <label for="">E-mail</label>
              <input type="text" class="form-control email-usuario" id="email" name="email" >
            </div>
            <div class="form-group col-md-4">
              <label for="">Senha</label>
              <input type="text" class="form-control senha-usuario" id="senha" name="senha" >
            </div>
            <div class="form-group col-md-4">
              <label for="">Tipo Usuario</label>
              <input type="text" class="form-control tipo-usuario" id="tipo_usuario_id" name="tipo_usuario_id" >
            </div>
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
