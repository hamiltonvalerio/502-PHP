<?php 

require 'Estoque.php';

use PHPUnit\Framework\TestCase;

class EstoqueTest extends TestCase
{
	private $estoque;

	public function setUp()
	{
		$this->estoque = new Estoque();
	}

	public function testAddItem()
	{
		$item = 'blusa azul';
		$qtd  = 10;

		$this->estoque->add($item,$qtd);

		$this->assertSame(10,$this->estoque->get($item));
	}

	public function testSomaQuantidade()
	{
		$item = 'blusa preta';

		$this->estoque->add($item,4);
		$this->estoque->add($item,2);
		$this->estoque->add($item,10);

		$this->assertSame(16,$this->estoque->get($item));
	}

	/**
	  * @expectedException InvalidArgumentException
	  * @expectedExceptionMessage Item não existe no estoque	
	  */
	public function testItemInvalido()
	{
		$this->estoque->get("blusa vermelha");
	}

	public function testRemoveQuantidade()
	{
		$this->estoque->add('blusa X', 4);	
		$this->estoque->add('blusa X', 4);
		
		$this->estoque->remove('blusa X', 3);

		$this->assertSame(5,$this->estoque->get('blusa X'));	
	}
}