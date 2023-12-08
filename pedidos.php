<html>

    <head>

        <meta charset="UTF-8">
        <title> Le perle noire </title>
        <link rel="stylesheet" href="style.css">
        <link rel="stylesheet" href="style-pedidos.css">

    </head>

    <body>
        
        <!--Menu-->
        <header class="header-main"> 

            <div class="div-logo">
                <a href="index.html"> <img src="logo-test.jpeg" class="logo"> </a>
                <nav class="div-nav">
                    <ul>
                        <li> <a href="index.html"> Home </a> </li>
                        <li> <a href="reserva.html"> Reservas de mesa </a> </li>
                        <li> <a href="cardapio.html"> Cardápio </a> </li>
                        <li> <a href="pedidos.php"> Pedidos </a> </li>
                    </ul>
                </nav>
            </div>

            <div class="div-icones">
                <a href="login.html"> <div class="cliente-icone"></div> </a>
                <a href="funcionario.html"> <div class="funcionario-icone"></div> </a> 
            </div>

        </header>
        <!--Menu-->

        <div class="div1">

            <p class="texto1"> Número do pedido: </p>

            <div class="linha"></div>

            <p class="reserva"> Número da reserva: </p>
            <p class="data"> Data: </p>
            <p class="horario"> Horário: </p>
            <p class="mesa"> Mesa: </p>
            <p class="quantidadepessoas"> Quantidade de pessoas: </p>
            <p class="pedidos"> Pedidos: </p>

            <?php
                $conexao = mysqli_connect('localhost', 'root', '', 'le_perle_noire');

                $resultado = mysqli_query($conexao,"select * from meus_pedidos");

                echo "\n";
                //Enquanto existir linhas resultantes da consulta realizada, serão exibidos os dados no navegador, acessando os
                //respectivos campos da tabela 
                while ($linha = mysqli_fetch_array ($resultado)) {
                        echo $linha["data"] . "<br>";
                        echo $linha["horario"] . "<br>"; 
                        echo $linha["quantidade_pessoas"] . "<br>";
                        echo $linha["numero_mesa"] . "<br>";
                        echo $linha["obs"] . "<br>";
                        echo "<hr>\n";
                }
                echo "\n";
                mysqli_close($conexao);
            ?>

        </div>
       
            

    </body>

</html>