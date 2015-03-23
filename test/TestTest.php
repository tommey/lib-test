<?php

namespace Tommey\LibTest\Test;

use Tommey\LibTest\Test;

class TestTest extends \PHPUnit_Framework_TestCase
{
	public function testJump()
	{
		$sut = new Test();
		
		$this->assertEquals('no', $sut->jump);
	}
}
