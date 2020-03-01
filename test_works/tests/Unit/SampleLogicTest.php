<?php

namespace Tests\Unit;

use App\Logics\SampleLogic;
use PHPUnit\Framework\TestCase;

class SampleLogicTest extends TestCase
{
    /**
     * A basic unit test example.
     *
     * @return void
     */
    public function testExample()
    {
        // ロジック
        $logic = app(SampleLogic::class);
        $result = $logic->doSomthing([]);
        $this->assertTrue($result);
        $result = $logic->doSomthing(['test' => false]);
        $this->assertFalse($result);

    }
}

