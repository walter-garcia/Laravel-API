<?php

namespace Tests\Unit;

use Tests\TestCase;
use Illuminate\Foundation\Testing\WithFaker;
use Illuminate\Foundation\Testing\RefreshDatabase;

// class EndPointsTest extends TestCase
// {
//     /**
//      * Get/Post/Patch/Delete Tests
//      *
//      * @return void
//      */
//     public function testGetEndPoints()
//     {
//         echo  PHP_EOL;
//         echo  PHP_EOL;
//         echo 'BEGIN ROUTES TESTS';
//         echo  PHP_EOL; 
//         $appURL = env('APP_URL');

//         $urls = [
//             '/api/survivors',
//             '/api/survivors/1',
//             '/api/survivors/1/inventory',
//             '/api/survivors/1/infection'
//         ];

//         echo  PHP_EOL;

//         foreach ($urls as $url) {
//             $response = $this->get($url);
//             if((int)$response->status() !== 200){
//                 echo 'Get to ' . $appURL . $url . ' (failed) did not return a 200. ' . ' Return status is ' . $response->status();
//                 $this->assertTrue(true);
//             } else {
//                 echo $appURL . $url . ' (success)';
//                 $this->assertTrue(true);
//             }
//             echo  PHP_EOL;
//         }
//     }

    // public function testPostEndPoints()
    // {
    //     $appURL = env('APP_URL');

    //     $urls = [
    //     	'/api/survivors',
    //         '/api/survivors/items',
    //         '/api/report/infection'
    //     ];

    //     echo  PHP_EOL;

    //     foreach ($urls as $url) {
    //         $response = $this->post($url);
    //         if((int)$response->status() !== 200){
    //             echo  $appURL . $url . ' (failed) did not return a 200.';
    //             $this->assertTrue(true);
    //         } else {
    //             echo $appURL . $url . ' (success)';
    //             $this->assertTrue(true);
    //         }
    //         echo  PHP_EOL;
    //     }
    // }

    // public function testPatchEndPoint()
    // {
    //     $appURL = env('APP_URL');

    //     $urls = [
    //         '/api/survivors/1/location'
    //     ];

    //     echo  PHP_EOL;

    //     foreach ($urls as $url) {
    //         $response = $this->patch($url);
    //         if((int)$response->status() !== 200){
    //             echo  $appURL . $url . ' (failed) did not return a 200.';
    //             $this->assertTrue(true);
    //         } else {
    //             echo $appURL . $url . ' (success)';
    //             $this->assertTrue(true);
    //         }
    //         echo  PHP_EOL;
    //     }
    // }

    // public function testDeleteEndPoint()
    // {
    //     $appURL = env('APP_URL');

    //     $urls = [
    //         '/api/survivors/6'
    //     ];

    //     echo  PHP_EOL;

    //     foreach ($urls as $url) {
    //         $response = $this->delete($url);
    //         if((int)$response->status() !== 200){
    //             echo  $appURL . $url . ' (failed) did not return a 200.';
    //             $this->assertTrue(true);
    //         } else {
    //             echo $appURL . $url . ' (success)';
    //             $this->assertTrue(true);
    //         }
    //         echo  PHP_EOL;
    //         echo  PHP_EOL;
    //         echo 'END ROUTES TESTS';
    //     }
    // }
// }
