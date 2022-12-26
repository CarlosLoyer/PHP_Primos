<?php

use PHPUnit\Framework\TestCase;
//use Funciones;


class FuncionesTest extends TestCase
{
    private $http;

    public function setUp(): void
    {
        $this->http = new GuzzleHttp\Client(['base_uri' => 'http://localhost/php_test_ci3/index.php/primos']);
    }

    public function testResultWithOneDigitNum()
    {
        $response = $this->http->request('POST', 'http://localhost/php_test_ci3/index.php/primos', [
            'multipart' => [
                [
                    'name'     => 'nroIngresado',
                    'contents' => '7'
                ]
            ]
        ]);

        $res = [7, 5, 3, 2];
        $body = json_decode($response->getBody());

        $this->assertEquals(200, $response->getStatusCode());
        $this->assertEquals($res, $body);
    }

    public function testResultWithTwoDigitNum()
    {
        $response = $this->http->request('POST', 'http://localhost/php_test_ci3/index.php/primos', [
            'multipart' => [
                [
                    'name'     => 'nroIngresado',
                    'contents' => '15'
                ]
            ]
        ]);

        $res = [13, 11, 7, 5, 3, 2];
        $body = json_decode($response->getBody());

        $this->assertEquals(200, $response->getStatusCode());
        $this->assertEquals($res, $body);
    }
}
