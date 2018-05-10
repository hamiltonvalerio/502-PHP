<?php 

class Calculadora
{
	public function somar(int $a,int $b)
	{
		return $a+$b;
	}

	public function subtrair(int $a, int $b)
	{
		return $a-$b;
	}

	public function dividir(int $a, int $b)
	{
		return $a/$b;
	}

	public function multiplicar(int $a, int $b)
	{
		return $a*$b;
	}
}