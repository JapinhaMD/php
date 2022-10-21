<?php
    require_once('conexao.php');
    require_once('model/pessoa.dao.php');

    // Instaniciar um objeto DAO de pessoas
    $pessoaDAO =new PessoaDAO($pdo);


// Recebe a açao desejada do cliente
$action = @$_REQUEST['action'];
$view = 'view/list.php';

// Decidir qual açao será tomada
if($action == 'novo'){
    
    $view = 'view/form.php';
}
else if($action == 'editar') {
    
    $view = 'view/form.php';
    /*
    if(@$_REQUEST['id']) {
        require_once('conexao.php');

        $sql = "SELECT * FROM tb_pessoa 
            WHERE id = " . $_REQUEST['id'];
        
        $result = $_conn->query($sql);

        $pessoa;
        if(mysqli_num_rows($result) > 0)
            $pessoa = mysqli_fetch_array($result);
            */
    }  
else if($action == 'deletar') {
    
} 
else if($action =='salvar'){

    if(!$pessoaDAO -> insert($_POST)){
        $view = 'view/form.php';

        echo "Erro ao salvar pessoa";
    }
  
}
else { // Ação default
}
  

require_once($view); // Abrindo uma view