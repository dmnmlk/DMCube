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
		$cubeObj = new Cube();
		$cube = $cubeObj->buildMixedCube(2);

		$solver = new Solver();
		$solver->setSolvingMethod(1);
		$result = $solver->solveCube($cube);
		$maybeSolved = $solver->isCubeSolved($result);

		var_dump($result);
		var_dump('Solved? ' . (($maybeSolved)? 'YES' : 'NO'));
	}
}

new Boilerplate();