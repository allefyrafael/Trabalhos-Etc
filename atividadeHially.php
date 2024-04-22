<?php
class Fatura {
    private $numero;
    private $descricao;
    private $quantidade;
    private $precoItem;

    public function getNumero() {
        return $this->numero;
    }

    public function setNumero($numero) {
        $this->numero = $numero;
    }

    public function getDescricao() {
        return $this->descricao;
    }

    public function setDescricao($descricao) {
        $this->descricao = $descricao;
    }

    public function getQuantidade() {
        return $this->quantidade;
    }

    public function setQuantidade($quantidade) {
        if ($quantidade > 0) {
            $this->quantidade = $quantidade;
        } else {
            $this->quantidade = 0;
        }
    }

    public function getPrecoItem() {
        return $this->precoItem;
    }

    public function setPrecoItem($precoItem) {
        if ($precoItem > 0) {
            $this->precoItem = $precoItem;
        } else {
            $this->precoItem = 0.0;
        }
    }

    public function getTotalFatura() {
        $total = $this->quantidade * $this->precoItem;
        return $total > 0 ? $total : 0;
    }
}

class Empregado {
    private $nome;
    private $sobrenome;
    private $salarioMensal;

    public function getNome() {
        return $this->nome;
    }

    public function setNome($nome) {
        $this->nome = $nome;
    }

    public function getSobrenome() {
        return $this->sobrenome;
    }

    public function setSobrenome($sobrenome) {
        $this->sobrenome = $sobrenome;
    }

    public function getSalarioMensal() {
        return $this->salarioMensal;
    }

    public function setSalarioMensal($salarioMensal) {
        $this->salarioMensal = $salarioMensal;
    }

    public function getSalarioAnual() {
        return $this->salarioMensal * 12;
    }

    public function aplicarAumento($percentual) {
        $this->salarioMensal *= (1 + ($percentual / 100));
    }
}

// Demonstrações da classe Fatura
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
