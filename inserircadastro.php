<html>

    <head>

        <meta charset="utf-8">
        <title> PHP </title>

    </head>

    <body>

        <?php

            //Através do método get, conseguimos capturar os dados dos campos do formulário e armazenar em variáveis locais
            //que serão usadas para compôr a instrução SQL e assim os dados serão armazenados no banco de dados.
            $nome = $_GET["nome"];
            $cpf = $_GET["cpf"];
            $email = $_GET["email"];
            $senha = $_GET ["senha"];

            //Aqui armazenamos em uma variável, uma string que representa a instrução para inserir os dados no banco de dados.
            $instrucao = "insert into cliente (nome, cpf, email, senha) values ('" . $nome . "', " . $cpf . " , '" . $email ."', '" . $senha . "')";
            
            //Nesta linha teremos apenas uma exibição da tela, se como ficou montada a string.
            echo $instrucao;

            //a variável conexão é responsável pela conexão com o banco de dados. Através da função mysqli_connect, é criado um objeto de conexão,
            //onde devemos informar 4 parâmetros: servidor, usuário, senha e database.
            $conexao = mysqli_connect('localhost', 'root', '', 'le_perle_noire');

            //para executar a instrução SQL, a função mysqli_query deve ser chamada, passando como parâmetro a variável de conexão e a instrução SQL,
            mysqli_query($conexao, $instrucao);

            //Após realizada a instrução, podemos fechar a conexao com o banco de dados, por meio da função msqli_close
            mysqli_close($conexao);
        ?>
        
        <br><br>
        <a href="listarcadastro.php"> LISTAR </a>

    </body>

</html>