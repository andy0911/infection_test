<?php

namespace Tests\Feature;

use Tests\TestCase;

class SampleLogicTest extends TestCase
{
    /**
     * A basic feature test example.
     *
     * @return void
     */
    public function testExample()
    {
        $response = $this->get('test');

        $response->assertStatus(200);
        $response->assertJson(['result' => true]);

        $response = $this->get('test', ["test" => true]);
        $response->assertJson(['result' => true]);
    }
}
