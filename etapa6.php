<?php
	session_start();
    setlocale (LC_ALL, 'pt_BR');

	if (isset($_POST["botao"])) {
		$_SESSION["frete"]        =   $_POST["frete"];
        $_SESSION["data"]         =   date('d/m/Y');
        Header("location: tabela.php");
    }
?>

<?php
include 'header.php'
?>

<body>
    <main class="container">

        <!-- Tela 6 – Frete -->

        <h2>Frete e/ou taxa de entrega</h2>
        <form method="POST" action="etapa6.php">

            <div class="campo">

            <label><strong>Frete</strong></label>
            <select name="frete" required>
                <option selected disabled value="">Selecione</option>
                <option value="1" >Expresso – 10% de Taxa</option>
                <option value="2" >Sedex 10 – R$30,00 de Taxa</option>
                <option value="3" >Correio – qualquer lugar do brasil - Sem Taxa</option>
                <option value="4" >Estado SP – independente do frete escolhido - Sem Taxa</option>
            </select>
            </div></br></br></br></br></br></br>

            <input type="submit" value="Continuar"  name="botao">
            <input type="button" onclick="history.back();" value="Voltar" value="Back">
        </form>

    </main>
</body>
</html>