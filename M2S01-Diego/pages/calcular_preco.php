<?php
      $codigo = $_POST["codigo"];
      $quantidade = $_POST["quantidade"];

      if ($codigo && $quantidade) {

        switch ($codigo) {
          case 100: 
            calcularPreco(1.20, $quantidade);
            break;
          case 101: 
            calcularPreco(1.30, $quantidade);
            break;
          
          case 102:
            calcularPreco(1.50, $quantidade);
            break;
          case 103: 
            calcularPreco(1.20, $quantidade);
            break;
          
          case 104: 
            calcularPreco(1.30, $quantidade);
            break;
          
          case 105: 
            calcularPreco(1.0, $quantidade);
            break;
          
          default:
            echo "Código inválido";        
      };
    };
      function calcularPreco($preco, $quantidade) {
        $valorTotal = $preco * $quantidade;
        echo "Valor a ser pago: R$ " . $valorTotal;
      }   
      ?>