<?php
class DAOJogador
{
    public function inclui(Jogador $jogador)
    {
        $sql = 'insert 
                into jogador (nome)
                values (?)';

        $pst = Conexao::getPreparedStatement($sql);
        $pst->bindValue(1, $jogador->getNome());

        if ($pst->execute()) {
            return true;
        } else {
            return false;
        }
    }

    public function lista()
    {
        $lista = [];
        $pst = Conexao::getPreparedStatement('select * from jogador;');
        $pst->execute();
        $lista = $pst->fetchAll(PDO::FETCH_ASSOC);
        return $lista;
    }
}