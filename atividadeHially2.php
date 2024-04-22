<?php
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
?>
