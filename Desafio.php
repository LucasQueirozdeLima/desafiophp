<?php

class Escola {
    private $nome_escola;
    private $endereco;
    private $diretor;
    private $alunos = array();
    private $profs = array();
    private $turmas = array();

    public function __construct($nome_escola, $endereco, $diretor) {
        $this->nome_escola = $nome_escola;
        $this->endereco = $endereco;
        $this->diretor = $diretor;
    }

    public function addAluno($aluno_id) {
        $this->alunos[] = $aluno_id;
    }

    public function deletarAluno($aluno_id) {
        if (($key = array_search($aluno_id, $this->alunos)) !== false) {
            unset($this->alunos[$key]);
        }
    }

    public function showAlunos() {
        foreach($this->alunos as $aluno_id) {
            echo $aluno_id . "\n";
        }
    }

    public function addProfessor($professor_id) {
        $this->profs[] = $professor_id;
    }

    public function deletarProfessor($professor_id) {
        if (($key = array_search($professor_id, $this->profs)) !== false) 
        {
            unset($this->profs[$key]);
        }
    }

    public function showProfessor($professor_id) {
        foreach($this->profs as $professor_id) {
            echo $professor_id . "\n";
        }
    }

    public function addTurma($turma_nova) {
        $this->turmas[$turma_nova] = array();
    }

    public function addAalunoTurma($turma_nova, $aluno_id) {
        $this->turmas[$turma_nova][] = $aluno_id;
    }

    public function MostrarTurma() {
        foreach ($this->turmas as $turma_nova => $turma_id) {
            echo "Turma: " . $turma_nova . "\n";
            foreach ($turma_id as $alunos) 
            {
                echo " - " . $alunos . "\n";
            }
        }
    }

    public function transferirAluno($aluno_id, $turma_antiga, $turma_nova) {
        if (($key = array_search($aluno_id, $this->turmas[$turma_antiga])) !== false) {
            unset($this->t[$turma_antiga][$key]);
            $this->turmas[$turma_nova][] = $aluno_id;
        }
    }

    public function mediaGeral($nota_somada) {
        return array_sum($nota_somada) / count($nota_somada);
    }

    public function showEscola() {
        echo "Nome: " . $this->nome_escola . "\nendereco: " . $this->endereco . "\nDiretor: " . $this->diretor . "\nAlunos: " . count($this->alunos) . "\nProfessores: " . count($this->profs) . "\n";
    }

    public function updEndereco($endereco) {
        $this->endereco = $endereco;
    }

    public function getNomeEscola() {
        return $this->nome_escola;
    }

    public function getDiretor() {
        return $this->diretor;
    }

    public function setDiretor($diretor) {
        $this->diretor = $diretor;
    }

    public function countAalunos() {
        return count($this->alunos);
    }

    public function countProfessores() {
        return count($this->profs);
    }

    public function countTurmas() {
        return count($this->turmas);
    }

    public function avgT($turma_nova, $nota_somada) {
        return array_sum($nota_somada) / count($nota_somada);
    }
}