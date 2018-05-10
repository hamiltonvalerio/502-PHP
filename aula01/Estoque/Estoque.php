<?php 

class Estoque
{
	private $itens = [];

	public function add(string $item, int $qtd)
	{	
		if (isset($this->itens[$item])) {
			$this->itens[$item] += $qtd;
		} else {
			$this->itens[$item] = $qtd;
		}
		
	}

	public function get(string $item)
	{
		if (isset($this->itens[$item])) {
			return $this->itens[$item];
		}

		throw new InvalidArgumentException('Item não existe no estoque');
		
	}

	public function remove(string $item, int $qtd)
	{
		if (isset($this->itens[$item])) {
			$this->itens[$item] -= $qtd;
		}
		
	}

}