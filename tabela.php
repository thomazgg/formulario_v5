<?php 
	session_start();
?>

<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge,chrome=1" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0">

    <link rel="sortcut icon" href="assets/tabela.png" />

    <title>Tabela dos Formulários</title>
    
    <!-- Styles -->
    <link rel="stylesheet" type="text/css" href="style3.css">
</head>

<body>

    <?php
    include 'recebe.php'
    ?>

    <h1>Tabela dos Formulários</h1>
    <table class="content-table">
        <thead>
            <tr>
                <th>ID</th>
                <th>Nome</th>
                <th>Email</th>
                <th>CPF</th>
                <th>Celular</th>
                <th>Endereço</th>
                <th>Bairro</th>
                <th>CEP</th>
                <th>Cidade</th>
                <th>Estado</th>
                <th>Tipo</th>
                <th>Qtd.</th>
                <th>Total dos produtos</th>
                <th>Frete</th>
                <th>Valor Total</th>
            </tr>
        </thead>
        <tbody>
            <tr id="1" onclick=location.href='calcula.php'>
                <td>1</td>
                <td>Robson</td>
                <td>robson@gmail.com</td>
                <td>123.456.789-10</td>
                <td>99876-5432</td>
                <td>Rua da minha casa</td>
                <td>Bairro 1</td>
                <td>12345-001</td>
                <td>Uma cidade qualquer</td>
                <td>Um estado qualquer</td>
                <td>Produto tipo 1 R$100</td>
                <td>1</td>
                <td>R$100</td>
                <td>Expresso – 10% de Taxa R$10</td>
                <td>R$110</td>
            </tr>
            <tr id="2" onclick=location.href='calcula.php'>
                <td>2</td>
                <td>Roberto</td>
                <td>roberto@gmail.com</td>
                <td>123.456.789-11</td>
                <td>99876-5433</td>
                <td>Rua da minha casa</td>
                <td>Bairro 2</td>
                <td>12345-002</td>
                <td>Uma cidade qualquer</td>
                <td>Um estado qualquer</td>
                <td>Produto tipo 2 R$200</td>
                <td>2</td>
                <td>R$400</td>
                <td>Sedex 10 - R$30</td>
                <td>R$430</td>
            </tr>
            <tr id="3" onclick=location.href='calcula.php'>
                <td>3</td>
                <td>Pedro</td>
                <td>pedro@gmail.com</td>
                <td>123.456.789-12</td>
                <td>99876-5434</td>
                <td>Rua da minha casa</td>
                <td>Bairro 3</td>
                <td>12345-003</td>
                <td>Uma cidade qualquer</td>
                <td>Um estado qualquer</td>
                <td>Produto tipo 3 R$300</td>
                <td>3</td>
                <td>R$900</td>
                <td>Correio R$0</td>
                <td>R$900</td>
            </tr>
            <tr id="4" onclick=location.href='calcula.php'>
                <td>4</td>
                <?php
                echo "<td>$nome</td>";
                echo "<td>$email</td>";
                echo "<td>$cpf</td>";
                echo "<td>$cel</td>";
                echo "<td>$ender</td>";
                echo "<td>$bairro</td>";
                echo "<td>$cep</td>";
                echo "<td>$cidade</td>";
                echo "<td>$estado</td>";
                echo "<td>$prod R$$preco</td>";
                echo "<td>$qtd</td>";
                echo "<td>R$$valpr </td>";
                echo "<td>$fretetipo R$$valorfrete</td>";
                echo "<td>R$$total</td>";
                ?>
            </tr>
        </tbody>
    </table>
    
    <input type="button" onclick="history.back();" value="Voltar">

</body>
</html>