<?php

namespace Tests\Unit;

use Tests\TestCase;
use Illuminate\Foundation\Testing\WithFaker;
use Illuminate\Foundation\Testing\RefreshDatabase;

class DatabaseTest extends TestCase
{
    /**
     * Databases test.
     *
     * @return void
     */
    public function testSurvivorsDatabase()
    {

        echo 'BEGIN DATABASES TESTS';
        echo  PHP_EOL;
        echo  PHP_EOL;

        $response = $this->assertDatabaseHas('survivors', ['gender' => 'male']);
        if($response == true) {
            echo  'Successful access in survivors database (success)';
            $this->assertTrue(true);
        }
        echo  PHP_EOL;
    }

    public function testitemsDatabase($value='')
    {
        echo  PHP_EOL;
        $response = $this->assertDatabaseHas('items', ['item' => 'water']);
        if($response == true) {
            echo  'Successful access in items database (success)';
            $this->assertTrue(true);
        }
        echo  PHP_EOL;
    }

    public function testInfectionsDatabase($value='')
    {
        echo  PHP_EOL;
        $response = $this->assertDatabaseHas('infections', ['infected' => 'true']);
        if($response == true) {
            echo  'Successful access in infections database (success)';
            $this->assertTrue(true);
        }
        echo  PHP_EOL;
        echo  PHP_EOL;
        echo 'END DATABASES TESTS';
        echo  PHP_EOL;
    }
}
