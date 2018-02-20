<?php

include 'DMCube/Cube.php';

/**
 * Undocumented class
 */
class Boilerplate
{
	/**
	 * Undocumented function
	 *
	 * @return void
	 */
	public function __construct()
	{
		$this->compute();
	}

	private function compute()
	{
 		$cube = Cube::buildCube();

		$res = Move::movesSeq($cube, ['U0','B2','F1','U0']);
		//komentarz
		var_dump($res);
	}
}

new Boilerplate();