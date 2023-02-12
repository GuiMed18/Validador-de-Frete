<?php

$possui_cartao_loja = true;
$valor_compra = 450;
$nome_cli = "Guilherme";

if($possui_cartao_loja && $valor_compra >= 500){
	$frete = 0;
}elseif($possui_cartao_loja && $valor_compra >= 400){
	$frete = 40;
}elseif($possui_cartao_loja && $valor_compra >= 300){
	$frete = 50;
}elseif($possui_cartao_loja && $valor_compra >= 200){
	$frete = 60;
}elseif($possui_cartao_loja && $valor_compra >= 100){
	$frete = 70;
}else{
	$frete = 100;
}

echo "<H1>Vivara</h1> \n
	  Seja Bem Vinda(o), $nome_cli! <br>
	  Valor da sua compra: R$ $valor_compra <br>
	  O frete dessa compra ficou em R$ $frete <br>";
	  ?>
	  <?= $possui_cartao_loja ? '' : "Faça já o seu cartão e aproveite os descontos!"; ?>
	 
	  
	  
