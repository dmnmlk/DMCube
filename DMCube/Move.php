<?php

/**
 * Class for mapping every possible move of Rubik's Cubes
 */
class Move
{

	/**
	 * Method that gives ability to make array list of $moves in given $cube array
	 *
	 * @param array $cube
	 * @param array $moves
	 * @return array
	 */
	public function movesSeq(array $cube, array $moves)
	{
		foreach($moves as $move)
		{
			$cube = Move::$move($cube);
		}

		return $cube;
	}

	/**
	 * Move U0 - Upper side counterclockwise 90 degree rotation
	 *
	 * @param array $cube
	 * @return array
	 */
    static public function U0(array $cube)
	{
		$result = $cube;

		$result[0] = $cube[2];
		$result[1] = $cube[5];
		$result[2] = $cube[8];
		$result[3] = $cube[1];
		$result[5] = $cube[7];
		$result[6] = $cube[0];
		$result[7] = $cube[3];
		$result[8] = $cube[6];
		$result[9] = $cube[36];
		$result[10] = $cube[37];
		$result[11] = $cube[38];
		$result[18] = $cube[9];
		$result[19] = $cube[10];
		$result[20] = $cube[11];
		$result[27] = $cube[18];
		$result[28] = $cube[19];
		$result[29] = $cube[20];
		$result[36] = $cube[27];
		$result[37] = $cube[28];
		$result[38] = $cube[29];
		
		return $result;
	}

	/**
	 * Move U1 - Upper side clockwise 90 degree rotation
	 *
	 * @param array $cube
	 * @return array
	 */
    static public function U1(array $cube)
	{
		$result = $cube;

		$result[0] = $cube[6];
		$result[1] = $cube[3];
		$result[2] = $cube[0];
		$result[3] = $cube[7];
		$result[5] = $cube[1];
		$result[6] = $cube[8];
		$result[7] = $cube[5];
		$result[8] = $cube[2];
		$result[9] = $cube[18];
		$result[10] = $cube[19];
		$result[11] = $cube[20];
		$result[18] = $cube[27];
		$result[19] = $cube[28];
		$result[20] = $cube[29];
		$result[27] = $cube[36];
		$result[28] = $cube[37];
		$result[29] = $cube[38];
		$result[36] = $cube[9];
		$result[37] = $cube[10];
		$result[38] = $cube[11];
		
		return $result;
	}

	/**
	 * Move U2 - Upper side 180 degree rotation
	 *
	 * @param array $cube
	 * @return array
	 */
    static public function U2(array $cube)
	{
		$result = $cube;

		$result[0] = $cube[8];
		$result[1] = $cube[7];
		$result[2] = $cube[6];
		$result[3] = $cube[5];
		$result[5] = $cube[3];
		$result[6] = $cube[2];
		$result[7] = $cube[1];
		$result[8] = $cube[0];
		$result[9] = $cube[27];
		$result[10] = $cube[28];
		$result[11] = $cube[29];
		$result[18] = $cube[36];
		$result[19] = $cube[37];
		$result[20] = $cube[38];
		$result[27] = $cube[9];
		$result[28] = $cube[10];
		$result[29] = $cube[11];
		$result[36] = $cube[18];
		$result[37] = $cube[19];
		$result[38] = $cube[20];

		return $result;
	}

	/**
	 * Move L0 - Left side counterclockwise 90 degree rotation
	 *
	 * @param array $cube
	 * @return array
	 */
    static public function L0(array $cube)
	{
		$result = $cube;

		$result[0] = $cube[18];
		$result[3] = $cube[21];
		$result[6] = $cube[24];
		$result[9] = $cube[11];
		$result[10] = $cube[14];
		$result[11] = $cube[17];
		$result[12] = $cube[10];
		$result[14] = $cube[16];
		$result[15] = $cube[9];
		$result[16] = $cube[12];
		$result[17] = $cube[15];
		$result[18] = $cube[45];
		$result[21] = $cube[48];
		$result[24] = $cube[51];
		$result[38] = $cube[6];
		$result[41] = $cube[3];
		$result[44] = $cube[0];
		$result[45] = $cube[44];
		$result[48] = $cube[41];
		$result[51] = $cube[38];

		return $result;
	}

	/**
	 * Move L1 - Left side clockwise 90 degree rotation
	 *
	 * @param array $cube
	 * @return array
	 */
    static public function L1(array $cube)
	{
		$result = $cube;

		$result[0] = $cube[44];
		$result[3] = $cube[41];
		$result[6] = $cube[38];
		$result[9] = $cube[15];
		$result[10] = $cube[12];
		$result[11] = $cube[9];
		$result[12] = $cube[16];
		$result[14] = $cube[10];
		$result[15] = $cube[17];
		$result[16] = $cube[14];
		$result[17] = $cube[11];
		$result[18] = $cube[0];
		$result[21] = $cube[3];
		$result[24] = $cube[6];
		$result[38] = $cube[51];
		$result[41] = $cube[48];
		$result[44] = $cube[45];
		$result[45] = $cube[18];
		$result[48] = $cube[21];
		$result[51] = $cube[24];

		return $result;
	}

	/**
	 * Move L2 - Left side 180 degree rotation
	 *
	 * @param array $cube
	 * @return array
	 */
    static public function L2(array $cube)
	{
		$result = $cube;

		$result[0] = $cube[45];
		$result[3] = $cube[48];
		$result[6] = $cube[51];
		$result[9] = $cube[17];
		$result[10] = $cube[16];
		$result[11] = $cube[15];
		$result[12] = $cube[14];
		$result[14] = $cube[12];
		$result[15] = $cube[11];
		$result[16] = $cube[10];
		$result[17] = $cube[9];
		$result[18] = $cube[44];
		$result[21] = $cube[41];
		$result[24] = $cube[38];
		$result[38] = $cube[24];
		$result[41] = $cube[21];
		$result[44] = $cube[18];
		$result[45] = $cube[0];
		$result[48] = $cube[3];
		$result[51] = $cube[6];

		return $result;
	}

	/**
	 * Move F0 - Front side counterclockwise 90 degree rotation
	 *
	 * @param array $cube
	 * @return array
	 */
    static public function F0(array $cube)
	{
		$result = $cube;

		$result[6] = $cube[27];
		$result[7] = $cube[30];
		$result[8] = $cube[33];
		$result[11] = $cube[8];
		$result[14] = $cube[7];
		$result[17] = $cube[6];
		$result[18] = $cube[20];
		$result[19] = $cube[23];
		$result[20] = $cube[26];
		$result[21] = $cube[19];
		$result[23] = $cube[25];
		$result[24] = $cube[18];
		$result[25] = $cube[21];
		$result[26] = $cube[24];
		$result[27] = $cube[47];
		$result[30] = $cube[46];
		$result[33] = $cube[45];
		$result[45] = $cube[11];
		$result[46] = $cube[14];
		$result[47] = $cube[17];

		return $result;
	}

	/**
	 * Move F1 - Front side clockwise 90 degree rotation
	 *
	 * @param array $cube
	 * @return array
	 */
    static public function F1(array $cube)
	{
		$result = $cube;

		$result[6] = $cube[17];
		$result[7] = $cube[14];
		$result[8] = $cube[11];
		$result[11] = $cube[45];
		$result[14] = $cube[46];
		$result[17] = $cube[47];
		$result[18] = $cube[24];
		$result[19] = $cube[21];
		$result[20] = $cube[18];
		$result[21] = $cube[25];
		$result[23] = $cube[19];
		$result[24] = $cube[26];
		$result[25] = $cube[23];
		$result[26] = $cube[20];
		$result[27] = $cube[6];
		$result[30] = $cube[7];
		$result[33] = $cube[8];
		$result[45] = $cube[33];
		$result[46] = $cube[30];
		$result[47] = $cube[27];

		return $result;
	}

	/**
	 * Move F2 - Front side 180 degree rotation
	 *
	 * @param array $cube
	 * @return array
	 */
    static public function F2(array $cube)
	{
		$result = $cube;

		$result[6] = $cube[47];
		$result[7] = $cube[46];
		$result[8] = $cube[45];
		$result[11] = $cube[33];
		$result[14] = $cube[30];
		$result[17] = $cube[27];
		$result[18] = $cube[26];
		$result[19] = $cube[25];
		$result[20] = $cube[24];
		$result[21] = $cube[23];
		$result[23] = $cube[21];
		$result[24] = $cube[20];
		$result[25] = $cube[19];
		$result[26] = $cube[18];
		$result[27] = $cube[17];
		$result[30] = $cube[14];
		$result[33] = $cube[11];
		$result[45] = $cube[8];
		$result[46] = $cube[7];
		$result[47] = $cube[6];

		return $result;
	}

	/**
	 * Move R0 - Right side counterclockwise 90 degree rotation
	 *
	 * @param array $cube
	 * @return array
	 */
    static public function R0(array $cube)
	{
		$result = $cube;

		$result[2] = $cube[42];
		$result[5] = $cube[39];
		$result[8] = $cube[36];
		$result[20] = $cube[2];
		$result[23] = $cube[5];
		$result[26] = $cube[8];
		$result[27] = $cube[29];
		$result[28] = $cube[32];
		$result[29] = $cube[35];
		$result[30] = $cube[28];
		$result[32] = $cube[34];
		$result[33] = $cube[27];
		$result[34] = $cube[30];
		$result[35] = $cube[33];
		$result[36] = $cube[53];
		$result[39] = $cube[50];
		$result[42] = $cube[47];
		$result[47] = $cube[20];
		$result[50] = $cube[23];
		$result[53] = $cube[26];

		return $result;
	}

	/**
	 * Move R1 - Right side clockwise 90 degree rotation
	 *
	 * @param array $cube
	 * @return array
	 */
    static public function R1(array $cube)
	{
		$result = $cube;

		$result[2] = $cube[20];
		$result[5] = $cube[23];
		$result[8] = $cube[26];
		$result[20] = $cube[47];
		$result[23] = $cube[50];
		$result[26] = $cube[53];
		$result[27] = $cube[33];
		$result[28] = $cube[30];
		$result[29] = $cube[27];
		$result[30] = $cube[34];
		$result[32] = $cube[28];
		$result[33] = $cube[35];
		$result[34] = $cube[32];
		$result[35] = $cube[29];
		$result[36] = $cube[8];
		$result[39] = $cube[5];
		$result[42] = $cube[2];
		$result[47] = $cube[42];
		$result[50] = $cube[39];
		$result[53] = $cube[36];		

		return $result;
	}

	/**
	 * Move R2 - Right side 180 degree rotation
	 *
	 * @param array $cube
	 * @return array
	 */
    static public function R2(array $cube)
	{
		$result = $cube;

		$result[2] = $cube[47];
		$result[5] = $cube[50];
		$result[8] = $cube[53];
		$result[20] = $cube[42];
		$result[23] = $cube[39];
		$result[26] = $cube[36];
		$result[27] = $cube[35];
		$result[28] = $cube[34];
		$result[29] = $cube[33];
		$result[30] = $cube[32];
		$result[32] = $cube[30];
		$result[33] = $cube[29];
		$result[34] = $cube[28];
		$result[35] = $cube[27];
		$result[36] = $cube[26];
		$result[39] = $cube[23];
		$result[42] = $cube[20];
		$result[47] = $cube[2];
		$result[50] = $cube[5];
		$result[53] = $cube[8];				

		return $result;
	}

	/**
	 * Move B0 - Back side counterclockwise 90 degree rotation
	 *
	 * @param array $cube
	 * @return array
	 */
    static public function B0(array $cube)
	{
		$result = $cube;

		$result[0] = $cube[15];
		$result[1] = $cube[12];
		$result[2] = $cube[9];
		$result[9] = $cube[51];
		$result[12] = $cube[52];
		$result[15] = $cube[53];
		$result[29] = $cube[0];
		$result[32] = $cube[1];
		$result[35] = $cube[2];
		$result[36] = $cube[38];
		$result[37] = $cube[41];
		$result[38] = $cube[44];
		$result[39] = $cube[37];
		$result[41] = $cube[43];
		$result[42] = $cube[36];
		$result[43] = $cube[39];
		$result[44] = $cube[42];
		$result[51] = $cube[35];
		$result[52] = $cube[32];
		$result[53] = $cube[29];						

		return $result;
	}

	/**
	 * Move B1 - Back side clockwise 90 degree rotation
	 *
	 * @param array $cube
	 * @return array
	 */
    static public function B1(array $cube)
	{
		$result = $cube;

		$result[0] = $cube[29];
		$result[1] = $cube[32];
		$result[2] = $cube[35];
		$result[9] = $cube[2];
		$result[12] = $cube[1];
		$result[15] = $cube[0];
		$result[29] = $cube[53];
		$result[32] = $cube[52];
		$result[35] = $cube[51];
		$result[36] = $cube[42];
		$result[37] = $cube[39];
		$result[38] = $cube[36];
		$result[39] = $cube[43];
		$result[41] = $cube[37];
		$result[42] = $cube[44];
		$result[43] = $cube[41];
		$result[44] = $cube[38];
		$result[51] = $cube[9];
		$result[52] = $cube[12];
		$result[53] = $cube[15];
		
		return $result;
	}

	/**
	 * Move B2 - Back side 180 degree rotation
	 *
	 * @param array $cube
	 * @return array
	 */
    static public function B2(array $cube)
	{
		$result = $cube;

		$result[0] = $cube[53];
		$result[1] = $cube[52];
		$result[2] = $cube[51];
		$result[9] = $cube[35];
		$result[12] = $cube[32];
		$result[15] = $cube[29];
		$result[29] = $cube[15];
		$result[32] = $cube[12];
		$result[35] = $cube[9];
		$result[36] = $cube[44];
		$result[37] = $cube[43];
		$result[38] = $cube[42];
		$result[39] = $cube[41];
		$result[41] = $cube[39];
		$result[42] = $cube[38];
		$result[43] = $cube[37];
		$result[44] = $cube[36];
		$result[51] = $cube[2];
		$result[52] = $cube[1];
		$result[53] = $cube[0];
				
		return $result;
	}

	/**
	 * Move D0 - Down side counterclockwise 90 degree rotation
	 *
	 * @param array $cube
	 * @return array
	 */
    static public function D0(array $cube)
	{
		$result = $cube;

		$result[15] = $cube[24];
		$result[16] = $cube[25];
		$result[17] = $cube[26];
		$result[24] = $cube[33];
		$result[25] = $cube[34];
		$result[26] = $cube[35];
		$result[33] = $cube[42];
		$result[34] = $cube[43];
		$result[35] = $cube[44];
		$result[42] = $cube[15];
		$result[43] = $cube[16];
		$result[44] = $cube[17];
		$result[45] = $cube[47];
		$result[46] = $cube[50];
		$result[47] = $cube[53];
		$result[48] = $cube[46];
		$result[50] = $cube[52];
		$result[51] = $cube[45];
		$result[52] = $cube[48];
		$result[53] = $cube[51];
				
		return $result;
	}

	/**
	 * Move D1 - Down side clockwise 90 degree rotation
	 *
	 * @param array $cube
	 * @return array
	 */
    static public function D1(array $cube)
	{
		$result = $cube;

		$result[15] = $cube[42];
		$result[16] = $cube[43];
		$result[17] = $cube[44];
		$result[24] = $cube[15];
		$result[25] = $cube[16];
		$result[26] = $cube[17];
		$result[33] = $cube[24];
		$result[34] = $cube[25];
		$result[35] = $cube[26];
		$result[42] = $cube[33];
		$result[43] = $cube[34];
		$result[44] = $cube[35];
		$result[45] = $cube[51];
		$result[46] = $cube[48];
		$result[47] = $cube[45];
		$result[48] = $cube[52];
		$result[50] = $cube[46];
		$result[51] = $cube[53];
		$result[52] = $cube[50];
		$result[53] = $cube[47];
						
		return $result;
	}

	/**
	 * Move D2 - Down side 180 degree rotation
	 *
	 * @param array $cube
	 * @return array
	 */
    static public function D2(array $cube)
	{
		$result = $cube;

		$result[15] = $cube[33];
		$result[16] = $cube[34];
		$result[17] = $cube[35];
		$result[24] = $cube[42];
		$result[25] = $cube[43];
		$result[26] = $cube[44];
		$result[33] = $cube[15];
		$result[34] = $cube[16];
		$result[35] = $cube[17];
		$result[42] = $cube[24];
		$result[43] = $cube[25];
		$result[44] = $cube[26];
		$result[45] = $cube[53];
		$result[46] = $cube[52];
		$result[47] = $cube[51];
		$result[48] = $cube[50];
		$result[50] = $cube[48];
		$result[51] = $cube[47];
		$result[52] = $cube[46];
		$result[53] = $cube[45];
								
		return $result;
	}
}