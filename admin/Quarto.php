<?php 

	class Quarto
	{
		
		private $img;
		private $num;
		private $tam;
		private $disp;
		private $diaria;

	
    public function getImg()
    {
        return $this->img;
    }

    public function setImg($img)
    {
        $this->img = $img;

        return $this;
    }

    public function getNum()
    {
        return $this->num;
    }

    public function setNum($num)
    {
        $this->num = $num;

        return $this;
    }

    public function getTam()
    {
        return $this->tam;
    }

    public function setTam($tam)
    {
        $this->tam = $tam;

        return $this;
    }

    public function getDisp()
    {
        return $this->disp;
    }

    public function setDisp($disp)
    {
        $this->disp = $disp;

        return $this;
    }

    public function getDiaria()
    {
        return $this->diaria;
    }

    public function setDiaria($diaria)
    {
        $this->diaria = $diaria;

        return $this;
    }
}

?>