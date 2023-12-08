
<!DOCTYPE html>
<html lang="pt-br">

<head>
    <meta charset="utf-8">
    <title> PHP</title>
</head>

<body>
    <a href="funcionario.html"> Cadastro </a> - <a href="listar.php"> Listar </a> - <a href="alterar.php">Alterar </a> - <a href="excluir.php"> Excluir </a> <br>
    <hr>
    <form name="listagem" method="post" action="#">
        Selecione um nome:
        <select name="lista" ><br /><br />
            <option value="" data-default disabled selected></option>
            <?php
                include('configfuncionario.php');

                $resultado = mysqli_query($conexao,"select * from funcionarios");
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
            $instrucao = "select * from funcionarios where nome like '".$_POST['lista']."'"; 
            $resultado = mysqli_query($conexao, $instrucao);

            while ($linha = mysqli_fetch_array ($resultado)) {   
            ?>
                <form action="bd_acoes.php" method="POST">
                    Nome:
                    <input type="text" name="nome" value="<?php echo $linha['nome']?>"> 
                    CPF:
                    <input type="number" name="endereco" value="<?php echo $linha['cpf'] ?>" >
                    Data de admissão:
                    <input type="date" name="data_admissao" value="<?php echo $linha['data_admissao'] ?>" >
                    Cargo:
                    <input type="text" name="cargo" value="<?php echo $linha['cargo'] ?>" >
                    Escala:
                    <input type="text" name="escala" value="<?php echo $linha['escala'] ?>" >
                    
                    <button type="submit" name="excluir_registro" > Excluir</button> <br><br>

                 </form>
            <?php
            }
        } 
        mysqli_close($conexao); 
    ?>
</body>
</html>