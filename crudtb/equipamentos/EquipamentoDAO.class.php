<?php
require_once "equipamento.class.php";
require_once "../dao/GenericDAO.class.php";

class EquipamentoDAO extends GenericDAO
{
    public function salvar($equipamento)
    {
        $sql = "insert into tb_equipamentos
            (nome, marca, preco)
            values (:nome, :marca, :preco)";
        $stmt = $this->conn->prepare($sql);

        $stmt->bindParam(
            ":nome",
            $equipamento->getNome()
        );
        $stmt->bindParam(
            ":marca",
            $equipamento->getMarca()
        );
        $stmt->bindParam(
            ":preco",
            $equipamento->getPreco()
        );

        $retorno = $stmt->execute();
        return $retorno;
    }

    public function update($equipamento)
    {
        $sql = "update tb_equipamentos set nome=:nome, marca=:marca, preco=:preco where id = :id";
        $stmt = $this->conn->prepare($sql);
        $stmt->bindParam(":id", $equipamento->getId());
        $stmt->bindParam(":nome", $equipamento->getNome());
        $stmt->bindParam(":marca", $equipamento->getMarca());
        $stmt->bindParam(":preco", $equipamento->getPreco());


        $stmt->execute();
    }

    public function listar()
    {
        $equipamentos = array();
        $sql = "select * from tb_equipamentos";
        $stmt = $this->conn->prepare($sql);
        $stmt->execute();

        while ($rs = $stmt->fetch(PDO::FETCH_ASSOC)) {
            $equipamento = new Equipamento();
            $equipamento->setId($rs["id"]);
            $equipamento->setNome($rs["nome"]);
            $equipamento->setMarca($rs["marca"]);
            $equipamento->setPreco($rs["preco"]);
            array_push($equipamentos, $equipamento);
        }
        return $equipamentos;
    }

    public function remover($id)
    {
        $sql = "delete from tb_equipamentos where id = :id";
        $stmt = $this->conn->prepare($sql);

        $stmt->bindParam(":id", $id);

        $stmt->execute();
    }

    public function getById($id)
    {
        $sql = "select * from tb_equipamentos where id = :id";
        $stmt = $this->conn->prepare($sql);

        $stmt->bindParam(":id", $id);

        $stmt->execute();

        $rs = $stmt->fetch(PDO::FETCH_ASSOC);
        $equipamento = new Equipamento();
        $equipamento->setId($rs["id"]);
        $equipamento->setNome($rs["nome"]);
        $equipamento->setMarca($rs["marca"]);
        $equipamento->setPreco($rs["preco"]);

        return $equipamento;
    }
}
