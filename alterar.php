
<!DOCTYPE html>
<html lang="pt-br">

    <head>

        <meta charset="utf-8">
        <title> PHP</title>

    </head>

    <body>

        <a href="criarconta.html"> Cadastro </a> - <a href="listar.php"> Listar </a> - <a href="alterar.php">Alterar 1 </a> - <a
            href="alterar2.php"> Alterar 2</a> - <a href="excluir.php"> Excluir </a> <br>
        <hr>

        <form action="alterar_registro.php" method="get">

            <?php

                include('config.php');

                $resultado = mysqli_query($conexao,"select * from cliente");

                //Enquanto existir resultado (linhas com registros), serão carregados os campos do formulário, de forma
                //que em cada linha serão os dados em cada campo, com seu respectivo valor através da propriedade value 
                while ($linha = mysqli_fetch_array ($resultado)) {  
                     
                ?>    
                    Nome:
                    <input type="text" name="nome" value="<?php echo $linha['nome']?>"> 
                    CPF:
                    <input type="number" name="cfp" value="<?php echo $linha['cpf'] ?>" >
                    Email:
                    <input type="text" name="email" value="<?php echo $linha['email'] ?>" >
                    Senha:
                    <input type="password" name="senha" value="<?php echo $linha['senha']?>"> 
                        
                    <button type="submit" name="botao" value="<?php echo $linha['nome'] ?>" >Alterar</button> 
                    <br><br>
                    
                <?php

                } 
                mysqli_close($conexao); 
            ?>

        </form>

    </body>

</html>