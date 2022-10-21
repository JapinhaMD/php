<?php

class PessoaDAO {
    private $pdo;

    function __construtpr($pdo){
        $this->pdo = $pdo;
    }

    function insert($pessoa){
        $sql = 'INSERT INTO tb_pessoa (
            nome, 
            email, 
            telefone,
            nascimento,
            login,
            senha)
         VALUE (:nome, :email, :telefone, :nascimento, :login, :senha);
         )';

         $stmt =$this ->pdo->prepare($sql);
         $stmt ->bindvalue(':nome', $pessoa['nome']);
         $stmt ->bindvalue(':email', $pessoa['email']);
         $stmt ->bindvalue(':telefone', $pessoa['telefone']);
         $stmt ->bindvalue(':nascimento', $pessoa['nascimento']);
         $stmt ->bindvalue(':login', $pessoa['login']);
         $stmt ->bindvalue(':senha', $pessoa['senha']);

         return $stmt->execute();   
        
    }
}