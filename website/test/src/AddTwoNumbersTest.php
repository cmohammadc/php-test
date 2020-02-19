<?php

use drmonkeyninja\Average;
use PHPUnit\Framework\TestCase;
use GuzzleHttp\Client;

class AddTwoNumbersTest extends TestCase
{
    protected $client;

    protected function setUp(): void {
        $this->client = new Client([
            'base_uri' => 'http://localhost:85'
        ]);
    }

    public function testThePlusFunction() {
        $tests = [[1,1,2],
                 [100,459,559],
                 [23,92,115],
                 [1,13,14],
                 [5,45,50],
                 [21,12,33],
                 [2236,23094,25330],
                 [136343,7296,143639],
                 [5,1,6],
                 [99,10000,10099]];

        foreach ($tests as $test) {
            $response = $this->client->request('POST', '/add_two_numbers.php', [
                'form_params' => [
                    'first_num' => $test[0],
                    'second_num' => $test[1]
                ]
            ]);
    
            $data = json_decode($response->getBody(), true);
            $this->assertEquals($test[2], $data["result"]);
        }
    }
}
