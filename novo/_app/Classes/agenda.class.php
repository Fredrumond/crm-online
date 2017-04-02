<?php

/**
 * Classe Agenda
 */
class Agenda {
  private $id;
  private $titulo;
  private $horario;
  private $data;
  private $descricao;
  private $data_cadastro;
  private $data_atualizacao;

  function __construct($titulo = null, $horario = null, $data = null, $descricao= null,$data_cadastro = null) {
      $this->titulo = $titulo;
      $this->horario = $horario;
      $this->data = $data;
      $this->descricao = $descricao;
      $this->data_cadastro = $data_cadastro;
  }
  public function adicionarEvento(Agenda $e) {
      $create = new Create();
      $ArrEvento = [
          'titulo' => $this->titulo,
          'horario' => $this->horario,
          'data' => $this->data,
          'descricao' => $this->descricao,
          'data_cadastro' => $this->data_cadastro
      ];
      $create->ExeCreate('agenda', $ArrEvento);
  }

  public function editarEvento($id,$ArrUpdate){
        $update = new Update();
        $update->ExeUpdate('agenda', $ArrUpdate, "WHERE id = :id", 'id=' . $id);
    }
}
