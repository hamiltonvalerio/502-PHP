<?php 

require 'Calculadora.php';

use PHPUnit\Framework\TestCase;

class CalculadoraTest extends TestCase
{
	// Teste pra soma
	// Teste pra subtração
	// Teste pra divisão
	// Teste pra multiplicação

	private $calc;

	public function setUp()
	{
		$this->calc = new Calculadora();
	}

	public function testSoma()
	{
		$result = $this->calc->somar(3,5);
		$this->assertSame(8,$result);
	}

	public function testSubtrair()
	{
		$result = $this->calc->subtrair(5,2);
		$this->assertSame(3,$result);
	}

	public function testDivisao()
	{
		$result = $this->calc->dividir(4,2);
		$this->assertSame(2,$result);	
	}

	public function testMultiplicacao()
	{
		$result = $this->calc->multiplicar(4,2);
		$this->assertSame(8,$result);	
	}
}