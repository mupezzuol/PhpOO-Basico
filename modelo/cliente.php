<?php

//classe de dados
class cliente {

    // declaração de membro
    private $id;
    private $nome;
    private $telefone;
    private $endereco;

    public function setId($id) {

        $this->id = $id;
    }

    // declaração de método
    public function getId() {
        return $this->id;
    }

    public function setNome($nome) {

        $this->nome = $nome;
    }

    // declaração de método
    public function getNome() {
        return $this->nome;
    }

    //----------
    public function setEndereco($endereco) {

        $this->endereco = $endereco;
    }

    // declaração de método
    public function getEndereco() {
        return $this->endereco;
    }

    //---

    public function setTelefone($telefone) { 

        $this->telefone = $telefone;
    }

    // declaração de método
    public function getTelefone() {
        return $this->telefone;
    }

    public function toarray() {

        $arr = array(); //Declara array
        //Atribuicao dos valores na posicao correspondente no array
        $arr['id'] = $this->id;
        $arr['nome'] = utf8_encode($this->nome);
        $arr['telefone'] = $this->telefone;
        $arr['endereco'] = $this->endereco;
        
        return $arr;
    }

}

?>
