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
  private $local;
  private $data_cadastro;
  private $data_atualizacao;

  function __construct($titulo = null, $horario = null, $data = null, $descricao= null, $local = null, $data_cadastro = null) {
      $this->titulo = $titulo;
      $this->horario = $horario;
      $this->data = $data;
      $this->descricao = $descricao;
      $this->local = $local;
      $this->data_cadastro = $data_cadastro;
  }
  public function adicionarEvento(Agenda $e) {
      $create = new Create();
      $ArrEvento = [
          'titulo' => $this->titulo,
          'horario' => $this->horario,
          'data' => $this->data,
          'descricao' => $this->descricao,
          'local' => $this->local,
          'data_cadastro' => $this->data_cadastro
      ];
      $create->ExeCreate('agenda', $ArrEvento);
      $this->id = $create->getresult();

  }

  public function adicionaConvidados($convidados,$id_evento){
    $create = new Create();
    $selecionaConvidados = $convidados;
      foreach($selecionaConvidados as $key=>$convidado)
      {
        $ArrEvento = [
            'id_usuario' => $convidado,
            'id_evento' => $id_evento
        ];
        $create->ExeCreate('agenda_convidados', $ArrEvento);
      }
  }

  public function getResult(){
    return $this->id;
  }
  
  public function editarEvento($id,$ArrUpdate){
        $update = new Update();
        $update->ExeUpdate('agenda', $ArrUpdate, "WHERE id = :id", 'id=' . $id);
    }


}
