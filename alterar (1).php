
<!DOCTYPE html>
<html lang="pt-br">

<head>
    <meta charset="utf-8">
    <title> PHP</title>
</head>

<body>
    <a href="index.html"> Cadastro </a> - <a href="listar.php"> Listar </a> - <a href="alterar.php">Alterar </a> - <a href="excluir.php"> Excluir </a> <br>
    <hr>
    <form name="listagem" method="post" action="#">
        Selecione um nome:
        <select name="lista" ><br /><br />
            <option value="" data-default disabled selected></option>
            <?php
                include('config.php');

                $resultado = mysqli_query($conexao,"select * from cliente");
                while ($linha = mysqli_fetch_array ($resultado)) {   
                    ?>
                        <option value="<?php echo $linha['nome'] ?>"> <?php echo $linha['nome'] ?></option>
                    <?php 
                } 
            ?>
        </select>
        <button type="submit">Buscar</button> <br><br>
     </form>

    <br><br>
    <hr>
    <?php
        //condição que verifica se houve alguma submissão do formulário
        if (!$_POST) {
            echo "Nenhum registro selecionado";
        }else{
            $instrucao = "select * from tabela where nome like '".$_POST['lista']."'"; 
            $resultado = mysqli_query($conexao, $instrucao);

            while ($linha = mysqli_fetch_array ($resultado)) {   
            ?>
                <form action="bd_acoes.php" method="POST">
                Nome:
                    <input type="text" name="nome" value="<?php echo $linha['nome']?>"> 
                    CPF:
                    <input type="number" name="cfp" value="<?php echo $linha['cpf'] ?>" >
                    Email:
                    <input type="text" name="email" value="<?php echo $linha['email'] ?>" >
                    Senha:
                    <input type="password" name="senha" value="<?php echo $linha['senha']?>"> 
                    
                    <button type="submit" name="alterar_registro" > Alterar</button> <br><br>

                 </form>
            <?php
            }
        } 
        mysqli_close($conexao); 
    ?>
</body>
</html>