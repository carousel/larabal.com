<?php

class HomePageTest extends TestCase {

	/**
	 * @test
	 * @return void
	 */
	public function HomePage()
	{
		$response = $this->call('GET', '/');

		$this->assertEquals(200, $response->getStatusCode());
	}

}
