<?php

namespace Tests\Unit;

use PHPUnit\Framework\TestCase;
use DatabaseMigrations;

class myelementtest extends TestCase
{
    /**
     * A basic unit test example.
     *
     * @return void
     */
    public function test_example()
    {
        $elements = factory(myelement::class,10)->make();
        $name=$elements[0]->name;        
        //$this->assertTrue(true);
        $this->assertNotNull($name);

        $elements[1]->name="test";
        $this->assertEquals($elements[1]->name,"test");
    }
}
