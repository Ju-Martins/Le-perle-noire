<?php
require 'config.php';

//caso seja recebido o nome do botão INSERIR
if(isset($_POST['inserir_registro']))
{
	$nome = $_POST['nome'];
	$cpf = $_POST['cpf'];
    $email = $_POST['email'];
    $senha = $_POST['senha'];
    

    $instrucao = "INSERT INTO tabela (nome, cpf, email, senha) VALUES ('".$nome."',".$cpf.",'".$email."', '".$senha."')";
	//echo $instrucao;
    echo "<br>";
    $resultado = mysqli_query($conexao, $instrucao);
    if($resultado)
    {
        echo "Registro cadastrado com sucesso!";  
    }
    else
    {
        echo "Registro não cadastrado";
    }
    echo "<br><br> <a href='criarconta.html'> Voltar </a>";
}

//caso seja recebido o nome do botão ALTERAR
if(isset($_POST['alterar_registro']))
{
	$nome = $_POST['nome'];
	$cpf = $_POST['cpf'];
    $email = $_POST['email'];
    $senha = $_POST['senha'];

    $instrucao = "UPDATE cliente SET nome='".$nome."', endereco=".$cpf.", idade='".$email."', senha='".$senha."' WHERE nome like '".$nome."'";
    //echo $instrucao;
    $resultado = mysqli_query($conexao, $instrucao);

    if($resultado)
    {
        echo "Registro alterado com sucesso";
    }
    else
    {
        echo "Registro não alterado";
    }
    echo "<br><br> <a href='alterar.php'> Voltar </a>";
}


//caso seja recebido o nome do botão EXCLUIR
if(isset($_POST['excluir_registro']))
{
    $nome = $_POST['nome'];

    $instrucao = "DELETE FROM cliente WHERE nome like '".$nome."' ";
    //echo $instrucao;
    $resultado = mysqli_query($conexao, $instrucao);

    if($resultado)
    {
        echo "Regitro excluído com sucesso";
    }
    else
    {
        echo "Não foi possivel excluir o registro";
    }
    echo "<br><br> <a href='excluir.php'> Voltar </a>";

}



?>