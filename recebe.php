<?php

        //dados etapa 1
        
        $nome           =   $_SESSION["nome"]; 
        $email          =   $_SESSION["email"];
        $senha          =   $_SESSION["senha"];
        $cpf            =   $_SESSION["cpf"];
        $cel            =   $_SESSION["cel"];

        //dados etapa 2

        $ender          =   $_SESSION["ender"];
        $bairro         =   $_SESSION["bairro"];
        $cep            =   $_SESSION["cep"];
        $cidade         =   $_SESSION["cidade"];
        $estado         =   $_SESSION["estado"];
        $ref            =   $_SESSION["ref"];

        //dados etapa 3

                // Tipo \\

            $tipopro        =   $_SESSION["tipo"];
            if ($tipopro==1){
                $prod       = " Produto tipo 1 ";
                $preco      = 100.00;
            }
            elseif ($tipopro==2){
                $prod       = " Produto tipo 2 ";
                $preco      = 200.00;
            }
            else {
                $prod       = " Produto tipo 3 ";
                $preco      = 300.00;
            }

                // Cor \\

            $tipocor        =   $_SESSION["cor"];
            if ($tipocor==1){
                $tipodacor  = " Azul ";
            }
            elseif ($tipocor==2){
                $tipodacor  = " Vermelho ";
            }
            elseif ($tipocor==3){
                $tipodacor  = " Preto ";
            }
            else {
                $tipodacor  = " Branco ";
            }

            $qtd            =   $_SESSION["qtd"];

            $acc1           =   $_SESSION["receber1"];
            if ($acc1==1){
                $ac1        = " Acessório A – R$20,00 ";
                $acc1       = 20.00;
            }else {
                $ac1        = "";
                $acc1       = 0;
            }
            $acc2           =   $_SESSION["receber2"];
            if ($acc2==1){
                $ac2        = " + Acessório B – R$40,00 ";
                $acc2       = 40.00;
            }else {
                $ac2        = "";
                $acc2       = 0;
            }
            $acc3           =   $_SESSION["receber3"];
            if ($acc3==1){
                $ac3        = " + Acessório C – R$60,00 ";
                $acc3       = 60.00;
            }else {
                $ac3        = "";
                $acc3       = 0;
            }

            if ($acc1==0){
                $ac2        = "Acessório B – R$40,00 ";
            }

            if ($acc2==0){
                $ac2        = "";
            }

            if ($acc1==0 && $acc2==0){
                $ac3        = "Acessório C – R$60,00 ";
            }

        //dados etapa 4

        $cartao         =   $_SESSION["cartao"];
        $num            =   $_SESSION["num"];
        $val            =   $_SESSION["val"];
        $cod            =   $_SESSION["cod"];

                // Tipo Bandeira \\

            $tipoband           =   $_SESSION["band"];
            if ($tipoband==1){
                $bandeira   = " Mastercard ";
            }
            elseif ($tipoband==2){
                $bandeira   = " Visa ";
            }
            else {
                $bandeira   = " Elo ";
            }

        //dados etapa 5

                // Forma de Pagamento \\
            $acc            = $acc1 + $acc2 + $acc3;
            $valapr         = $preco * $qtd;
            $valpr          = $valapr + $acc;
            $desconto       = 0;    

            $tipopag        = $_SESSION["pag"];
            if ($tipopag==1){
                $formapag   = " Boleto Bancário ";
                $formapag2  = " Em 1 x de";
                $formapag3  = "";
                $formpag    = $valpr;
                $pagamento  = $formpag;
            }
            elseif ($tipopag==2){
                $formapag   = " A vista – 10% desconto ";
                $formapag2  = " Em 1 x de";
                $formapag3  = " com 10% desconto";
                $formpag    = $valpr * 0.9;
                $desconto   = -($valpr * 0.1);
                $pagamento  = $formpag;
            }
            elseif ($tipopag==3){
                $formapag   = " Em 3 x – Sem Juros ";
                $formapag2  = " Em 3 x de";
                $formapag3  = " Sem Juros ";
                $formpag    = $valpr;
                $pagamento  = $formpag / 3;
            }
            elseif ($tipopag==4){
                $formapag   = " Em 6 x – Sem Juros ";
                $formapag2  = " Em 6 x de";
                $formapag3  = " Sem Juros ";
                $formpag    = $valpr  ;
                $pagamento  = $formpag / 6  ;
            }
            else {
                $formapag   = " Em 10 x – 15% de Juros ";
                $formapag2  = " Em 10 x de";
                $formapag3  = " com 15% de Juros ";
                $formpag    = $valpr * 1.15 ;
                $desconto   = $valpr * 0.15;
                $pagamento  = $formpag / 10  ;
            }

        //dados etapa 6

                // Frete \\

            $tipofrete      = $_SESSION["frete"];
            if ($tipofrete==1){
                $fretetipo  = " Expresso – 10% de Taxa ";
                $valorfrete = ( $formpag * 1.1 ) - $formpag;
                $totalfrete = $formpag * 1.1;
            }
            elseif ($tipofrete==2){
                $fretetipo  = " Sedex 10 – R$30,00 de Taxa ";
                $valorfrete = ( $formpag + 30 ) - $formpag;
                $totalfrete = $formpag + 30;
            }
            elseif ($tipofrete==3){
                $fretetipo  = " Correio – qualquer lugar do brasil - Sem Taxa ";
                $valorfrete = ( $formpag ) - $formpag;
                $totalfrete = $formpag ;
            }
            else {
                $fretetipo  = " Estado SP – independente do frete escolhido - Sem Taxa ";
                $valorfrete = ( $formpag ) - $formpag;
                $totalfrete = $formpag;
            }

            $data           = $_SESSION["data"];

        //total

        $total = $totalfrete;

        ?>