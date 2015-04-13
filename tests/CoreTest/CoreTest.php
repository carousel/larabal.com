<?php
use Mockery as m;

class CoreTest extends TestCase {

	/**
	 * @test
	 * @return void
	 */
	public function Application()
	{
        $app = m::mock("Illuminate\Foundation\Application");

	}

}
