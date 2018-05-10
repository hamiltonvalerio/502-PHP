<?php 

// InitTest.php

use PHPUnit\Framework\TestCase;

class InitTest extends TestCase
{
	// Testa se é idêntico
	public function testIdentico()
	{
		$soma = 2 + 2;

		$this->assertSame(4, $soma);
	}

	// Testa se é verdadeiro(boolean)
	public function testVerdadeiro()
	{
		$verdadeiro = true;

		$this->assertTrue($verdadeiro);
	}

	// Testa se é falso(boolean)
	public function testFalso()
	{
		$falso = false;

		$this->assertFalse($falso);
	}

	// Testa se count é igual
	public function testContador()
	{
		$arr = ['a',1,true];

		$count = count($arr);

		$this->assertSame(3,$count);
		$this->assertCount(3,$arr);
	}

	// Testa se é vazio(empty)
	public function testVazio()
	{
		// 0,'',false,null,[]
		$vazio = 0;
		$this->assertEmpty($vazio);
		$vazio = '';
		$this->assertEmpty($vazio);
		$vazio = false;
		$this->assertEmpty($vazio);
		$vazio = null;
		$this->assertEmpty($vazio);
		$vazio = [];
		$this->assertEmpty($vazio);
	}

	// Testa se é nulo
	public function testNulo()
	{
		$nulo = null;

		$this->assertNull($nulo);
	}

	// Testa se é igual mas não idêntido
	public function testIgual()
	{
		$a = '1';//['1']
		$b = 1;

		$this->assetEquals($a,$b);
	}
}