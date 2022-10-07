<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    
    <h1>
        Pessoa
    </h1>

    <form action = "pessoa-save.php" method = "POST">

    <div>
        <label>nome</label>
        <input type="text" name = "nome">
    </div>

    <div>
        <label">E-mail</label>
        <input type="email" name = "email">
    </div>

    <div>

    <label>Telefone</label>
    <input type="tel" name = "telefone">
    </div>
    
    <div>
        <label>Login</label>
        <input type="text" name = "login">
    </div>

    <div>
        <label>Senha</label>
        <input type="password" name = "senha">
    </div>

    <div>
        <button type = "submit"> Salvar </button>
    </div>

</form>


</body>
</html>