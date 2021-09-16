<?php 
	session_start();
    $ultimas = substr($_SESSION["num"], -4);
?>

<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge,chrome=1" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0">

    <link rel="sortcut icon" href="assets/cadeado.png" />

    <title>Dados do Formulário</title>
    
    <!-- Styles -->
    <link rel="stylesheet" type="text/css" href="style4.css">
</head>

<body>

    <?php
    include 'recebe.php'
    ?>

    <main class="container">

        <h2>Dados Cadastrais</h2>

        <div>
            <div class="field">
                <div class="campo">
                    <?php
                    echo "<h3>Dados do Cliente</h3>";
                    echo "Nome: $nome </br>";
                    echo "Email: $email </br>";
                    echo "Senha: $senha </br>";
                    echo "CPF: $cpf </br>";
                    echo "Celular: $cel </br>";
                    ?>
                    <div class="underline"></div>
                </div>
            </div><br>
            <div class="field">
                <div class="campo">
                    <?php
                    echo "<h3>Endereço de Entrega</h3>";
                    echo "Endereço: $ender </br>";
                    echo "Bairro: $bairro </br>";
                    echo "CEP: $cep </br>";
                    echo "Cidade: $cidade </br>";
                    echo "Estado: $estado </br>";
                    if ($ref!== ""): echo "Rêferencia: $ref </br>"; endif;
                    ?>
                    <div class="underline"></div>
                </div>
            </div><br>
            <div class="field">
                <div class="campo">
                    <?php
                    echo "<h3>Dados do Pedido</h3>";
                    echo "<b>$qtd</b> unidade(s) de: 
                    <i>$prod</i>(<i>$tipodacor</i>)";
                    echo "<p><b>R$ ";
                    echo number_format($preco, 2);
                    echo "</b></p>";
                    echo "</br>Acessórios opcionais: <i>$ac1 $ac2 $ac3</i></br>";
                    ?>
                    <div class="underline"></div>
                </div>
            </div><br>
            <div class="field">
                <div class="campo">
                    <?php
                    echo "<h3>Dados do Cartão</h3>";
                    echo "Nome Cartão: $cartao</br>";
                    echo "Número: $num</br>";
                    echo "Data de validade: $val</br>";
                    echo "Código de Segurança: $cod</br>";
                    ?>
                    <div class="underline"></div>
                </div>
            </div><br>
            
            <input type="button" onclick="history.back();" value="Voltar">
        </div>
    </main>
    ㅤㅤㅤㅤ
    <main class="container">

        <h2>Informações de pagamento</h2>

        <div>
            <div class="field">
                <div class="campo">
                    <?php
                    echo "<h3>Endereço de cobrança:</h3>";
                    echo "Endereço: $ender </br>";
                    echo "Bairro: $bairro </br>";
                    echo "CEP: $cep </br>";
                    echo "Cidade: $cidade </br>";
                    echo "Estado: $estado </br>";
                    if ($ref!== ""): echo "Rêferencia: $ref </br>"; endif;
                    ?>
                    <div class="underline"></div>
                </div>
            </div><br>
            <div class="field">
                <div class="campo">
                    <?php
                    echo "<h3>Método de pagamento:</h3>";
                    echo "$bandeira | Últimos dígitos: $ultimas  </br>";
                    echo "$formapag2 <b>R$ ";
                    echo number_format($pagamento, 2);
                    echo "</b> $formapag3 </br>";
                    ?>
                    <div class="underline"></div>
                </div>
            </div><br>
            <div class="field">
                <div class="campo">
                    <?php
                    echo "<h3>Frete e/ou Taxa de Entrega</h3>";
                    echo "Frete: $fretetipo</b></br>";
                    ?>
                    <div class="underline"></div>
                </div>
            </div><br>
            <div class="field">
                <div class="campo">
                    <?php
                    echo "<h3>Total</h3>";
                    echo "Subtotal do(s) item(ns):	<p><b>R$ ";
                    echo number_format($valapr, 2);
                    echo "</b></p> </br>";
                    echo "Subtotal do(s) acessórios: <p><b>R$ ";
                    echo number_format($acc, 2);
                    echo "</b></p> </br>";
                    echo "Frete e manuseio:	<p><b>R$ ";
                    echo number_format($valorfrete, 2);
                    echo "</b></p> </br>";
                    echo "Desconto ou Juros:	<p><b>R$ ";
                    echo number_format($desconto, 2);
                    echo "</b></p> </br>";
                    ?>
                    <div class="underline"></div>
                </div>
            </div>
            <div class="field">
                <div class="campo">
                    <?php
                    echo "</br>Total: <p><b>R$ ";
                    echo number_format($total, 2);
                    echo "</b></p>"; 
                    ?>
                </div>
            </div>
        </div>
    </main>
</body>
</html>