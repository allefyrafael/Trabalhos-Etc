<?php
$fatura = new Fatura();
$fatura->setNumero("12345");
$fatura->setDescricao("Teclado mecânico");
$fatura->setQuantidade(2);
$fatura->setPrecoItem(50.0);

echo "Total da fatura: $" . $fatura->getTotalFatura() . "\n";

// Demonstrações da classe Empregado
$empregado1 = new Empregado();
$empregado1->setNome("João");
$empregado1->setSobrenome("Silva");
$empregado1->setSalarioMensal(3000.0);

$empregado2 = new Empregado();
$empregado2->setNome("Maria");
$empregado2->setSobrenome("Santos");
$empregado2->setSalarioMensal(4000.0);

echo "Salário anual de " . $empregado1->getNome() . " " . $empregado1->getSobrenome() . ": $" . $empregado1->getSalarioAnual() . "\n";
echo "Salário anual de " . $empregado2->getNome() . " " . $empregado2->getSobrenome() . ": $" . $empregado2->getSalarioAnual() . "\n";

$empregado1->aplicarAumento(10);
$empregado2->aplicarAumento(10);

echo "Salário anual de " . $empregado1->getNome() . " " . $empregado1->getSobrenome() . " após aumento: $" . $empregado1->getSalarioAnual() . "\n";
echo "Salário anual de " . $empregado2->getNome() . " " . $empregado2->getSobrenome() . " após aumento: $" . $empregado2->getSalarioAnual() . "\n";
?>
