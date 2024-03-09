<?php

require_once "usuario.class.php";
require_once "C:/xampp/htdocs/crudtb/dao/GenericDAO.class.php";

class UsuarioDAO extends GenericDAO {
    public function findByLogin($username){
        $sql = "select * from tb_usuarios
        where login = :login";

        $stmt = $this->conn->prepare($sql);

        $stmt->bindParam(":login", $username);

        $stmt->execute();

        $rs = $stmt->fetch(PDO::FETCH_ASSOC);

        if($rs)
        {
            $usuario = new Usuario();
            $usuario->setId($rs["id"]);
            $usuario->setNome($rs["nome"]);
            $usuario->setLogin($rs["login"]);
            $usuario->setSenha($rs["senha"]);

            return $usuario;
        }
        else
        {
            return null;
        }
    }

    public function salvar($usuario)
    {
        $sql = "insert into tb_usuarios
            (nome, login, senha)
            values (:nome, :login, :senha)";
        $stmt = $this->conn->prepare($sql);
        
        $stmt->bindParam(":nome",
            $usuario->getNome());
        $stmt->bindParam(":login",
            $usuario->getLogin());
        $stmt->bindParam(":senha",
            $usuario->getSenha());
        
        $retorno = $stmt->execute();
        return $retorno;
    }
    
    public function update($usuario)
    {
        $sql = "update tb_usuarios set nome=:nome, login=:login, senha=:senha where id = :id";
        $stmt = $this->conn->prepare($sql);
        
        $stmt->bindParam(":nome", $usuario->getNome());
        $stmt->bindParam(":login", $usuario->getLogin());
        $stmt->bindParam(":senha", $usuario->getSenha());
        $stmt->bindParam(":id", $usuario->getId());
        
        $stmt->execute();
    }
    
    public function listar(){
        $usuarios = array();
        $sql = "select * from tb_usuarios";
        $stmt = $this->conn->prepare($sql);
        $stmt->execute();
        
        while ( $rs = $stmt->fetch(PDO::FETCH_ASSOC))
        {
            $user = new Usuario();
            $user->setId($rs["id"]);
            $user->setNome($rs["nome"]);
            $user->setLogin($rs["login"]);
            $user->setSenha($rs["senha"]);
            array_push($usuarios, $user);
        }
        return $usuarios;
    }
    
    public function remover($id)
    {
        $sql = "delete from tb_usuarios where id = :id";
        $stmt = $this->conn->prepare($sql);
        
        $stmt->bindParam(":id", $id);
        
        $stmt->execute();
    }
    
    public function getById($id)
    {
        $sql = "select * from tb_usuarios where id = :id";
        $stmt = $this->conn->prepare($sql);
        
        $stmt->bindParam(":id", $id);
        
        $stmt->execute();
        
        $rs = $stmt->fetch(PDO::FETCH_ASSOC);
        $usuario = new Usuario();
        $usuario->setId($rs["id"]);
        $usuario->setNome($rs["nome"]);
        $usuario->setLogin($rs["login"]);
        $usuario->setSenha($rs["senha"]);
        
        return $usuario;
    }
    
}


?>