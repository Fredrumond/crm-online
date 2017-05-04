<?php

/**
 * Classe Agenda
 */
class Usuario {
  private $id;
  private $nome;
  private $cpf;
  private $sexo;
  private $email;
  private $telefone;
  private $celular;
  private $endereco;
  private $bairro;
  private $cidade;
  private $estado;
  private $cep;
  private $senha;
  private $tipo_usuario_id;
  private $data_cadastro;
  private $data_atualizacao;

  function __construct($nome = null, $cpf = null, $sexo = null, $email= null, $telefone = null,$celular = null, $endereco = null, $bairro = null,
  $cidade = null, $estado = null, $cep = null, $senha = null, $tipo_usuario_id = null, $data_cadastro = null) {
      $this->nome = $nome;
      $this->cpf = $cpf;
      $this->sexo = $sexo;
      $this->email = $email;
      $this->telefone = $telefone;
      $this->celular = $celular;
      $this->endereco = $endereco;
      $this->bairro = $bairro;
      $this->cidade = $cidade;
      $this->estado = $estado;
      $this->cep = $cep;
      $this->senha = $senha;
      $this->tipo_usuario_id = $tipo_usuario_id;
      $this->data_cadastro = $data_cadastro;
  }
  public function adicionarUsuario(Usuario $e) {
      $create = new Create();
      $ArrDadosUsuario = [
          'nome' => $this->nome,
          'cpf' => $this->cpf,
          'sexo' => $this->sexo,
          'email' => $this->email,
          'telefone' => $this->telefone,
          'celular' => $this->celular,
          'endereco' => $this->endereco,
          'bairro' => $this->bairro,
          'cidade' => $this->cidade,
          'estado' => $this->estado,
          'cep' => $this->cep,
          'senha' => $this->senha,
          'tipo_usuario_id' => $this->tipo_usuario_id,
          'data_cadastro' => $this->data_cadastro
      ];
      $create->ExeCreate('usuario', $ArrDadosUsuario);
  }
  public function editarUsuario($id,$ArrUpdate){
        $update = new Update();
        $update->ExeUpdate('usuario', $ArrUpdate, "WHERE id = :id", 'id=' . $id);
    }


}
