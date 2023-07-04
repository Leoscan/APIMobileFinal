<?php

class livro {
	private $id;
    private $Nome;
    private $Descricao;
    private $Autor;
    private $Caminho;

    public function __construct($id, $Nome, $Descricao, $Autor, $Caminho) {
		$this->setId($id);
        $this->setNome($Nome);
        $this->setDescricao($Descricao);
        $this->setAutor($Autor);
        $this->setCaminho($Caminho);
	}

	public function setId($id) {
		$this->id = $id;
	}

	public function getId() {
		return $this->id;
	}


    public function setNome($Nome) {
		$this->Nome = $Nome;
	}

	public function getNome() {
		return $this->Nome;
	}


    public function setDescricao($Descricao) {
		$this->Descricao = $Descricao;
	}

	public function getDescricao() {
		return $this->Descricao;
	}


    public function setAutor($Autor) {
		$this->Autor = $Autor;
	}

	public function getAutor() {
		return $this->Autor;
	}


    public function setCaminho($Caminho) {
		$this->Caminho = $Caminho;
	}

	public function getCaminho() {
		return $this->Caminho;
	}

	public function __toString() {
		return 
		"id: ".$this->id." | nome: "
		.$this->Nome." | descricao: "
		.$this->Descricao." | autor: "
		.$this->Autor."\n";
	}

}

?>