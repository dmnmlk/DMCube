<?php

include 'Move.php';

/**
 * Undocumented class
 */
class Solver
{

	/**
	 * 
	 */
	private $sequenceOfMoves = [];

	/**
	 * 
	 */
	private $isSolved = false;

	/**
	 * 
	 */
	private $solvingMethod;

	/**
	 * Undocumented function
	 *
	 * @return void
	 */
	public function solveCube(array $cube)
	{
		switch($this->solvingMethod)
		{
			case 1:
				$result = $this->solveByBacktracking($cube);
		}
		return $result;
	}

	/**
	 * Undocumented function
	 *
	 * @return void
	 */
	public function isCubeSolved(array $cube)
	{
		foreach($cube as $k => $v)
		{
			if($k != $v) return false;
		}

		return true;
	}

	/**
	 * Function which sets what method of solving will be used
	 * Possibilities:
	 * 1 - backtracking
	 *
	 * @param integer $methodNumber
	 * @return void
	 */
	public function setSolvingMethod(int $methodNumber)
	{
		$this->solvingMethod = $methodNumber;
	}

	/**
	 * Undocumented function
	 *
	 * @return void
	 */
	private function solveByBacktracking(array $cube)
	{
		foreach((Move::possibleMoves()) as $move)
		{
			$moved = Move::makeMove($cube, $move);

			if($this->isCubeSolved($moved))
			{
				$this->isSolved = true;
				array_push($this->sequenceOfMoves, $move);
				return $this->sequenceOfMoves;
			}
		}
	}	
}