<?php 

	class Reserva {
		
		private $nome;
		private $email;
		private $telefone;
		private $cpf;
		private $rg;
        private $numero_quarto;
        private $qnt_dias;
        private $data_reserva;
        private $data_final;
		private $preco;

    public function getNome()
    {
        return $this->nome;
    }

    public function setNome($nome)
    {
        $this->nome = $nome;

        return $this;
    }

    public function getEmail()
    {
        return $this->email;
    }

    public function setEmail($email)
    {
        $this->email = $email;

        return $this;
    }

    public function getTelefone()
    {
        return $this->telefone;
    }

    public function setTelefone($telefone)
    {
        $this->telefone = $telefone;

        return $this;
    }

    public function getCpf()
    {
        return $this->cpf;
    }

    public function setCpf($cpf)
    {
        $this->cpf = $cpf;

        return $this;
    }

    public function getRg()
    {
        return $this->rg;
    }

    public function setRg($rg)
    {
        $this->rg = $rg;

        return $this;
    }

    public function getNumeroQuarto()
    {
        return $this->numero_quarto;
    }

    public function setNumeroQuarto($numero_quarto)
    {
        $this->numero_quarto = $numero_quarto;

        return $this;
    }

    public function getQntDias()
    {
        return $this->qnt_dias;
    }

    public function setQntDias($qnt_dias)
    {
        $this->qnt_dias = $qnt_dias;

        return $this;
    }

    public function getDataReserva()
    {
        return $this->data_reserva;
    }

    public function setDataReserva($data_reserva)
    {
        $this->data_reserva = $data_reserva;

        return $this;
    }

    public function getDataFinal()
    {
        return $this->data_final;
    }

    public function setDataFinal($data_final)
    {
        $this->data_final = $data_final;

        return $this;
    }

    public function getPreco()
    {
        return $this->preco;
    }

    public function setPreco($preco)
    {  
        $this->preco = $preco;

        return $this;
    }
}


?>