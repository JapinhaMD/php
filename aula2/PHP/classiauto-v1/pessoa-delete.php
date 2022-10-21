<?php

require_once('conexao.php');

// obter o parametro id passado na requiziçao

$id = @$_REQUEST['id'];

if($id){
    // Deletar a pessoa no DB
    $sql = "DELETE FROM tb_pessoa where id = $id";

     $_conn->query($sql);

   




}
else{
    echo "ID nao informado!";
}