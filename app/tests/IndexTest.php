<?php 

require_once __DIR__ . '/../vendor/autoload.php'; 

use PHPUnit\Framework\TestCase;

final class IndexTest extends TestCase
{
    private $http;

    protected function setUp(): void
    {
        $this->http = new GuzzleHttp\Client(['base_uri' => 'http://localhost/']);
        var_dump($this->http);
    }

    public function testGet()
    {
        $response = $this->http->request('GET', 'tests/pages/get.php?data=get');

        var_dump($response);

        // $this->assertEquals(200, $response->getStatusCode());
    }

    public function testPost()
    {
        $response = $this->http->request('GET', 'tests/pages/post.php',[
            'data' => 'post'
        ]);
    
        var_dump($response);

        // $this->assertEquals(200, $response->getStatusCode());
    }

    protected function tearDown(): void {
        $this->http = null;
    }

}
