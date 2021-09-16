<?php
	session_start();

    // Variaveis de erro
    $erro_cartao    = "";
    $erro_num       = "";
    $erro_val       = "";
    $erro_cod       = "";
    $erro_validacao = 0;

	if (isset($_POST["botao"])) {
        // Recebendo variaveis
		$_SESSION["cartao"]     =   $_POST["cartao"];
		$_SESSION["num"]        =   $_POST["num"];
		$_SESSION["val"]        =   $_POST["val"];
        $_SESSION["cod"]        =   $_POST["cod"];
        $_SESSION["band"]       =   $_POST["band"];

        // Sanitizações
        $_SESSION["cartao"]     = filter_var($_SESSION["cartao"], FILTER_SANITIZE_SPECIAL_CHARS);
        $_SESSION["num"]        = filter_var($_SESSION["num"]   , FILTER_SANITIZE_NUMBER_INT);
        $_SESSION["val"]        = filter_var($_SESSION["val"]   , FILTER_SANITIZE_SPECIAL_CHARS);
        $_SESSION["cod"]        = filter_var($_SESSION["cod"]   , FILTER_SANITIZE_NUMBER_INT);

        // Validações
        if ($_SESSION["cartao"] == "") {
            $erro_cartao = "<br><p><b>Observação:</b> Preencha o nome do cartão corretamente</p>";
            $erro_validacao ++;
        }
        if ($_SESSION["num"] == "") {
            $erro_num = "<br><p><b>Observação:</b> Número do Cartão precisa ser inteiro</p>";
            $erro_validacao ++;
        }
        if ($_SESSION["val"] == "") {
            $erro_val = "<br><p><b>Observação:</b> Preencha a data de validade corretamente</p>";
            $erro_validacao ++;
        }
        if ($_SESSION["cod"] == "") {
            $erro_cod = "<br><p><b>Observação:</b> Código de Segurança precisa ser inteiro</p>";
            $erro_validacao ++;
        }

        // SEM ERRO DE VALIDAÇÃO => VAI PARA PROXIMA ETAPA
        if ($erro_validacao == 0) {
            Header("location: etapa5.php");
        }
    }
?>

<?php
include 'header.php'
?>

<body>
    <main class="container">

        <!-- Tela 4 – Cartão de Crédito -->

        <h2>Informações do Cartão</h2>
        <form method="POST" action="etapa4.php">
            
            <div class="input-field">
                <input type="text"          name="cartao"   maxlength="40"
                    value="<?php 
                            if (isset($_SESSION["cartao"])) 
                            echo $_SESSION["cartao"] 
                            ?>"
                    placeholder="Nome Cartão">
                <div class="underline"></div>
            </div>
            <div class="input-field">
                <input type="text"          name="num"       maxlength="40"
                    value="<?php 
                            if (isset($_SESSION["num"])) 
                            echo $_SESSION["num"] 
                            ?>"
                    placeholder="Número">
                <div class="underline"></div>
            </div><br>
            <div class="input-field">
                <input type="datetime"      name="val"      maxlength="09"
                    value="<?php 
                            if (isset($_SESSION["val"])) 
                            echo $_SESSION["val"] 
                            ?>"
                    placeholder="Data de validade">
                <div class="underline"></div>
            </div><br>
            <div class="input-field">
                <input type="text"          name="cod"      maxlength="03"
                    value="<?php 
                            if (isset($_SESSION["cod"])) 
                            echo $_SESSION["cod"] 
                            ?>"
                    placeholder="Código de Segurança">
                <div class="underline"></div>
            </div><br>
            <div class="campo">
                <input type="radio" name="band" value="1" required /> Mastercard </br>
		        <input type="radio" name="band" value="2" required /> Visa </br>
                <input type="radio" name="band" value="3" required /> Elo           
            </div>

            <input type="submit" value="Continuar"  name="botao">
            <input type="button" onclick="history.back();" value="Voltar">
            <?php echo $erro_cartao ?>
            <?php echo $erro_num ?>
            <?php echo $erro_val ?>
            <?php echo $erro_cod ?>

        </form>

    </main>
</body>
</html>