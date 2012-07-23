<?php

require_once 'Matrix.php';

class MatrixTest extends PHPUnit_Framework_TestCase
{
	/**
	 * @test
	 * @covers Matrix::__construct 
	 */
	function canConstruct()
	{
		$fullMatrix = new Matrix(array(
			'jack' => new Human('jack', true),
			'jill' => new Human('jill', true),
			'someone else' => new Human('someone else', true)
		));
		$emptyMatrix = new Matrix();
		
		$this->assertTrue(is_object($fullMatrix));
		$this->assertTrue(is_object($emptyMatrix));
	}
	
	/**
	 * @test
	 * @convert Matrix::isJackedIn 
	 */
	function checkJackedIn()
	{
		$matrix = new Matrix(array(
			'jack' => new Human('jack', true),
			'jill' => new Human('jill', true),
			'someone else' => new Human('someone else', true)
		));
		
		$this->assertTrue($matrix->isJackedIn('jack'));
		$this->assertTrue($matrix->isJackedIn('jill'));
		$this->assertTrue($matrix->isJackedIn('someone else'));
		$this->assertFalse($matrix->isJackedIn('neo'));
	}
	
	/**
	 * @test
	 * @covers Matrix::jackIn
	 */
	function canJackIn()
	{
		$matrix = new Matrix();
		$matrix->jackIn('robin');
		$this->assertTrue($matrix->isJackedIn('robin'));
	}
	
	/**
	 * @test
	 * @covers Matrix::jackOut
	 */
	function canJackOut()
	{
		$matrix = new Matrix();
		$matrix->jackIn('robin');
		$this->assertTrue($matrix->isJackedIn('robin'));
		$matrix->jackOut('robin');
		$this->assertFalse($matrix->isJackedIn('robin'));
	}
	
	/**
	 * @test
	 * @covers Matrix::count
	 */
	function canCount()
	{
		$matrix = new Matrix(array(
			'jack' => new Human('jack', true),
			'jill' => new Human('jill', true),
			'someone else' => new Human('someone else', true)
		));
		$this->assertEquals(3, $matrix->count());
	}
}