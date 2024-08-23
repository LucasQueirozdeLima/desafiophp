<?php

class Escola 
{
    private $nomeEscola;
    private $endereco;
    private $diretor;
    private $alunos = array();
    private $profs = array();
    private $turmas = array();

    public function __construct($nomeEscola, $endereco, $diretor)
    {
        $this->nomeEscola = $nomeEscola;
        $this->endereco = $endereco;
        $this->diretor = $diretor;
    }

    public function adicionarAluno($aluno) 
    {
        $this->alunos[] = $aluno;
    }

    public function deletarAluno($aluno) 
    {
        if (($chave = array_search($aluno, $this->alunos)) !== false) {
            unset($this->alunos[$chave]);
        }
    }

    public function mostrarAlunos() 
    {
        foreach($this->alunos as $aluno) {
            echo $aluno . "\n";
        }
    }

    public function adicionarProfessor($professor) 
    {
        $this->profs[] = $professor;
    }

    public function deletarProfessor($professor) 
    {
        if (($chave = array_search($professor, $this->profs)) !== false) {
            unset($this->profs[$chave]);
        }
    }

    public function mostrarProfessor() 
    {
        foreach($this->profs as $professor) {
            echo $professor . "\n";
        }
    }

    public function adicionarTurma($turmaNova) 
    {
        $this->turmas[$turmaNova] = array();
    }

    public function adicionarAlunoTurma($turmaNova, $aluno) 
    {
        $this->turmas[$turmaNova][] = $aluno;
    }

    public function mostrarTurmas() 
    {
        foreach ($this->turmas as $chave => $alunos) {
            echo "Turma: " . $chave . "\n";
            foreach ($alunos as $aluno) {
                echo " - " . $aluno . "\n";
            }
        }
    }

    public function transferirAluno($aluno, $turmaOriginal, $turmaDestino) 
    {
        if (($chave = array_search($aluno, $this->turmas[$turmaOriginal])) !== false) {
            unset($this->turmas[$turmaOriginal][$chave]);
            $this->turmas[$turmaDestino][] = $aluno;
        }
    }

    public function mediaGeral($notas) 
    {
        return array_sum($notas) / count($notas);
    }

    public function mostrarEscola() 
    {
        echo "Nome: " . $this->nomeEscola . 
        "\nEndereço: " . $this->endereco . 
        "\nDiretor: " . $this->diretor . 
        "\nAlunos: " . count($this->alunos) . 
        "\nProfessores: " . count($this->profs) . "\n";
    }

    public function atualizarEndereco($endereco) 
    {
        $this->endereco = $endereco;
    }

    public function buscarNomeEscola() 
    {
        return $this->nomeEscola;
    }

    public function buscarDiretor() 
    {
        return $this->diretor;
    }

    public function setDiretor($diretor) 
    {
        $this->diretor = $diretor;
    }

    public function contarAlunos() 
    {
        return count($this->alunos);
    }

    public function contarProfessores() 
    {
        return count($this->profs);
    }

    public function contarTurmas() 
    {
        return count($this->turmas);
    }
}
