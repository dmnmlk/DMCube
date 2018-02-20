<?php

include 'Solver.php';

/**
 * Undocumented class
 */
class Cube
{
	/**
	 * Undocumented function
	 *
	 * @return void
	 */
	public function buildSolvedCube()
	{
		return range(0, 53);
	}

	/**
	 * Undocumented function
	 *
	 * @return void
	 */
	public function buildMixedCube(int $numberOfMoves = 5)
	{
		$solvedCube = $this->buildSolvedCube();
		return $this->mix($solvedCube, $numberOfMoves);
	}

	/**
	 * Undocumented function
	 *
	 * @return void
	 */
	public function mix(array $cube, int $numberOfMoves = 5)
	{
		$movesArray = [];

		for($i=1; $i<=$numberOfMoves; $i++)
		{
			array_push($movesArray, Move::mapNumberWithMove(rand(0,17)));
		}
		
		return Move::movesSeq($cube, $movesArray);
	}
}