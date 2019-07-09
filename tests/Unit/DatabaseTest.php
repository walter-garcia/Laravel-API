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
            echo  'Successful access in survivors table (success)';
        } else {
            echo  'Failed to access survivors table (failed)';
        }
        echo  PHP_EOL;
    }

    public function testItemsDatabase()
    {
        echo  PHP_EOL;
        $response = $this->assertDatabaseHas('items', ['item' => 'water']);
        if($response == true) {
            echo  'Successful access in items table (success)';
        } else {
            echo  'Failed to access items table (failed)';
        }
        echo  PHP_EOL;
    }

    public function testInfectionsDatabase()
    {
        echo  PHP_EOL;
        $response = $this->assertDatabaseHas('infections', ['infected' => 1]);
        if($response == true) {
            echo  'Successful access in infections table (success)';
        } else {
            echo  'Failed to access infections table (failed)';
        }
        echo  PHP_EOL;
    }

    public function testInventoryDatabase()
    {
        echo  PHP_EOL;
        $response = $this->assertDatabaseHas('inventories', ['survivor_id' => 1]);
        if($response == true) {
            echo  'Successful access in inventories table (success)';
        } else {
            echo  'Failed to access inventories table (failed)';
        }
        echo  PHP_EOL;
        echo  PHP_EOL;
        echo 'END DATABASES TESTS';
        echo  PHP_EOL;
    }
}
