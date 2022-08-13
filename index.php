<?php
   $gasolina = 6.08;
   $alcool = 4.93;
   $percentual = $alcool / $gasolina;

   if ($percentual < 0.7){
      echo "Olá Juliana! <hr>Levando em consideração o valor do Álcool e da Gasolina hoje a recomendação é que você abasteça ÁLCOOL, a porcentagem está abaixo de 0,7, para abastecer 50 litros você gastará R$".$alcool * 50; echo " reais.";
   } else {
      echo "Olá Juliana! <hr>Levando em consideração o valor do Álcool e da Gasolina hoje não COMPENSA abastecer no álcool, a porcentagem está acima de 0,7 a recomendação é que abasteça GASOLINA, para abastecer 50 litros  você gastará R$".$gasolina * 50; echo " reais.";
   }

?>   