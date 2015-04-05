<?php

class ExampleTest extends TestCase {

	/**
	 * @test
	 * @return void
	 */
	public function HomePageRoute()
	{
		$response = $this->call('GET', '/');

		$this->assertEquals(200, $response->getStatusCode());
	}

}
