<?php

class User {
    private $Nome;
    private $Email;
    private $Foto;

    public function __construct($Nome, $Email, $Foto) {
        $this->setNome($Nome);
        $this->setEmail($Email);
        $this->setFoto($Foto);
	}

    public function setNome($Nome) {
		$this->Nome = $Nome;
	}

	public function getNome() {
		return $this->Nome;
	}


    public function setEmail($Email) {
		$this->Email = $Email;
	}

	public function getEmail() {
		return $this->Email;
	}


    public function setFoto($Foto) {
		$this->Foto = $Foto;
	}

	public function getFoto() {
		return $this->Foto;
	}


	public function __toString() {
		return 
		"nome: "
		.$this->Nome." | descricao: "
		.$this->Email." | autor: "
		.$this->Foto."\n";
	}

    public function jsonData()
    {
        return [
            'p1' => $this->Nome,
            'p2' => $this->Email,
            'p3' => $this->Foto
        ];
    }

}

?>