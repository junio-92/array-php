<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
   
</head>
<body>

<h1>Cadastro de Medicos</h1>

<form action="id-medicos.php" method="post">

    <label>
        Nome: <input type="text" name="nome"/>
    </label>

    <label >
        Rua: <input type="text" name="rua"/>
    </label>

    <label >
        Numero: <input type="text" name="numero"/>
    </label>

    <label >
        Logadouro: <input type="text" name="logadouro"/>

    </label>

    <label >
        Complemento: <input type="text" name="complemento"/>

    </label>

    <label >
        Bairro <input type="text" name="bairro"/>
    </label>

    <label >
        CEP: <input type="text" name="cep"/>

    </label>

    <label >
        E-mail: <input type="text" name="email"/>
    </label>

    <label >
        Celular: <input type="number" name="celular"/>

    </label>

    <label >
        Telefone Fixo: <input type="number" name="fixo"/>
    </label>

    <label >
        Telefone Secundario: <input type="number" name="secundario"/>
    </label>

    <label>
        Data: <input type="date" name="data"/>
    </label>
    

    <input class="button" type="reset" value="Limpar"><br><br>
    <input type="submit">

</form>
    
</body>
</html>