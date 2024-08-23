<?php

class Escola {
    private $Nome_escola;
    private $endereço;
    private $diretor;
    private $alunos = array();
    private $profs = array();
    private $turmas = array();

    public function __construct($n, $e, $d) {
        $this->n = $n;
        $this->e = $e;
        $this->d = $d;
    }

    public function addA($x) {
        $this->a[] = $x;
    }

    public function delA($x) {
        if (($k = array_search($x, $this->a)) !== false) {
            unset($this->a[$k]);
        }
    }

    public function showA() {
        foreach($this->a as $x) {
            echo $x . "\n";
        }
    }

    public function addP($x) {
        $this->p[] = $x;
    }

    public function delP($x) {
        if (($k = array_search($x, $this->p)) !== false) 
        {
            unset($this->p[$k]);
        }
    }

    public function showP() {
        foreach($this->p as $x) {
            echo $x . "\n";
        }
    }

    public function addT($tN) {
        $this->t[$tN] = array();
    }

    public function addAT($tN, $x) {
        $this->t[$tN][] = $x;
    }

    public function MostrarT() {
        foreach ($this->t as $tN => $xs) {
            echo "Turma: " . $tN . "\n";
            foreach ($xs as $x) 
            {
                echo " - " . $x . "\n";
            }
        }
    }

    public function transA($x, $tO, $tD) {
        if (($k = array_search($x, $this->t[$tO])) !== false) {
            unset($this->t[$tO][$k]);
            $this->t[$tD][] = $x;
        }
    }

    public function avgG($ns) {
        return array_sum($ns) / count($ns);
    }

    public function showE() {
        echo "Nome: " . $this->n . "\nEndereço: " . $this->e . "\nDiretor: " . $this->d . "\nAlunos: " . count($this->a) . "\nProfessores: " . count($this->p) . "\n";
    }

    public function updE($e) {
        $this->e = $e;
    }

    public function getN() {
        return $this->n;
    }

    public function getD() {
        return $this->d;
    }

    public function setD($d) {
        $this->d = $d;
    }

    public function countA() {
        return count($this->a);
    }

    public function countP() {
        return count($this->p);
    }

    public function countT() {
        return count($this->t);
    }

    public function avgT($tN, $ns) {
        return array_sum($ns) / count($ns);
    }
}
