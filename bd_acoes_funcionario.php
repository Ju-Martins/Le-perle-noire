<?php
require 'configfuncionario.php';

//caso seja recebido o nome do botão INSERIR
if(isset($_POST['inserir_registro']))
{
    $nome = $_POST["nome"];
    $cpf = $_POST["cpf"];
    $data_admissao = $_POST["data_admissao"];
    $cargo = $_POST["cargo"];
    $escala = $_POST["escala"];

    //Aqui armazenamos em uma variável, uma string que representa a instrução para inserir os dados no banco de dados.
    $instrucao = "insert into funcionarios (nome, cpf, data_admissao, cargo, escala) values ('" . $nome . "', " . $cpf . " , '" . $data_admissao ."', '" . $cargo . "', '" . $escala . "')";
    
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
    echo "<br><br>  <a href='funcionario.html'> Cadastro </a> - <a href='listar.php'> Listar </a> - <a href='alterar.php'>Alterar 1 </a> - <a
    href='alterar2.php'> Alterar 2</a> - <a href='excluir.php'> Excluir </a> <br>
<hr>";
}

//caso seja recebido o nome do botão ALTERAR
if(isset($_POST['alterar_registro']))
{
	$nome = $_POST['nome'];
	$cpf = $_POST['cpf'];
    $data_admissao = $_POST['data_admissao'];
    $cargo = $_POST['cargo'];
    $escala = $_POST['escala'];

    $instrucao = "UPDATE funcionarios SET nome='".$nome."', data_admissao='".$data_admissao."', cpf=".$cpf.", cargo='".$cargo."', escala='".$escala."' WHERE nome like '".$nome."'";
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

    $instrucao = "DELETE FROM funcionarios WHERE nome like '".$nome."' ";
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
