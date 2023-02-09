<?php
class Jogador 
{
    private $idJogador;
    private $nome;

    public function getIdJogador()
    {
        return $this->idJogador;
    }

    public function setIdJogador($idJogador)
    {
        $this->idJogador = $idJogador;

        return $this;
    }

    public function getNome()
    {
        return $this->nome;
    }

    public function setNome($nome)
    {
        $this->nome = $nome;

        return $this;
    }
}