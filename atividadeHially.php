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

?>
