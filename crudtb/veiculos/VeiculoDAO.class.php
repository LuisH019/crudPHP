<?php

require_once "veiculo.class.php";
require_once "../dao/GenericDAO.class.php";


class VeiculoDAO extends GenericDAO
{

    

    public function salvar($veiculo)
    {
        $sql = "insert into tb_veiculos
            (nome, marca, preco, modelo)
            values (:nome, :marca, :preco, :modelo)";
        $stmt = $this->conn->prepare($sql);

        $stmt->bindParam(
            ":nome",
            $veiculo->getNome()
        );
        $stmt->bindParam(
            ":marca",
            $veiculo->getMarca()
        );
        $stmt->bindParam(
            ":preco",
            $veiculo->getPreco()
        );
        $stmt->bindParam(
            ":modelo",
            $veiculo->getModelo()
        );

        $retorno = $stmt->execute();
        return $retorno;
    }

    public function update($veiculo)
    {
        $sql = "update tb_veiculos set nome=:nome, marca=:marca, preco=:preco, modelo=:modelo where id = :id";
        $stmt = $this->conn->prepare($sql);
        $stmt->bindParam(":id", $veiculo->getId());
        $stmt->bindParam(":nome", $veiculo->getNome());
        $stmt->bindParam(":marca", $veiculo->getMarca());
        $stmt->bindParam(":preco", $veiculo->getPreco());
        $stmt->bindParam(":modelo", $veiculo->getModelo());



        $stmt->execute();
    }

    public function listar()
    {
        $veiculos = array();
        $sql = "select * from tb_veiculos";
        $stmt = $this->conn->prepare($sql);
        $stmt->execute();

        while ($rs = $stmt->fetch(PDO::FETCH_ASSOC)) {
            $veiculo = new Veiculo();
            $veiculo->setId($rs["id"]);
            $veiculo->setNome($rs["nome"]);
            $veiculo->setMarca($rs["marca"]);
            $veiculo->setPreco($rs["preco"]);
            $veiculo->setModelo($rs["modelo"]);

            array_push($veiculos, $veiculo);
        }
        return $veiculos;
    }

    public function remover($id)
    {
        $sql = "delete from tb_veiculos where id = :id";
        $stmt = $this->conn->prepare($sql);

        $stmt->bindParam(":id", $id);

        $stmt->execute();
    }

    public function getById($id)
    {
        $sql = "select * from tb_veiculos where id = :id";
        $stmt = $this->conn->prepare($sql);

        $stmt->bindParam(":id", $id);

        $stmt->execute();

        $rs = $stmt->fetch(PDO::FETCH_ASSOC);
        $veiculo = new Veiculo();
        $veiculo->setId($rs["id"]);
        $veiculo->setNome($rs["nome"]);
        $veiculo->setMarca($rs["marca"]);
        $veiculo->setPreco($rs["preco"]);
        $veiculo->setModelo($rs["modelo"]);


        return $veiculo;
    }
}
