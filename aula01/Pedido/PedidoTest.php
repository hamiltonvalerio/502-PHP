<?php 

require 'Pedido.php';

use PHPUnit\Framework\TestCase;

class PedidoTest extends TestCase
{
	private $estoque;
	public function setUp()
	{
		$this->estoque = $this->getMockBuilder('Estoque')->getMock();

		// $this->estoque = new Estoque();
		// $this->estoque->add('blusa X',10);
	}

	public function testDeveFecharPedido()
	{
		$item = 'blusa X';
		$qtd = 3;

		$this->estoque->expects($this->once())
							->method('get')
							->with($this->equalTo($item))
							->will($this->returnValue($qtd));

		$this->estoque->expects($this->once())
							->method('remove')
							->with(
									$this->equalTo($item),
									$this->equalTo($qtd)
								);

		$pedido = new Pedido($item,$qtd);
		$pedido->fechar($this->estoque);
		$this->assertTrue($pedido->isFinalizado());

		// $pedido = new Pedido('blusa X', 3);
		// $pedido->fechar($this->estoque);

		// $this->assertTrue($pedido->isFinalizado());
		// $this->assertSame(7,$this->estoque->get('blusa X'));
	}

	public function testNaoDeveFecharPedido()
	{
		$item = 'blusa X';
		$qtd = 3;

		// Espera que ele execute pelo menos uma vez o método get e retorne 0
		// Espera que ele nunca execute o método remove

		$this->estoque->expects($this->once())
							->method('get')
							->with($this->equalTo($item))
							->will($this->returnValue(0));
							
		$this->estoque->expects($this->never())
							->method('remove');

		$pedido = new Pedido($item,$qtd);
		$pedido->fechar($this->estoque);
		$this->assertFalse($pedido->isFinalizado());
	}
}